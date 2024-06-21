<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function adminLogout()
    {
        Auth::logout();
        return redirect()->route('login');

    } //end method

    public function userProfile()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('backend.user.user_profile', compact('user'));

    } //end method

    public function userProfileEdit()
    {
        $id = Auth::user()->id;
        $userEdit = User::find($id);
        return view('backend.user.user_profile_edit', compact('userEdit'));

    } //end method

    public function userProfileStore(Request $request)
    {
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;

        if($request->file('profile_photo_path')){
                // Delete old product thumbnail if exists

            if ($data->profile_photo_path) {

                $imagePath = public_path('upload/user_images/' . $data->profile_photo_path);
                if (file_exists($imagePath)) {
                    unlink($imagePath); // Delete the file from the filesystem
                }
            }

            //upload new image
            $file = $request->file('profile_photo_path');
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $fileName);
            $data['profile_photo_path'] = $fileName;
        }
        $data->save();

        $notification = array(
    		'message' => 'User Profile Updated Successfully',
    		'alert-type' => 'success'
    	);

        return redirect()->route('user.profile')->with($notification);
    } //end method

    public function userChangePassowrd()
    {
        $id = Auth::user()->id;
        $userChangePass = User::find($id);

        return view('backend.user.user_change_password', compact('userChangePass'));

    } //end method

    public function userChangePassowrdUpdate(Request $request)
    {
        $validateData = $request->validate([
    		'old_password' => 'required',
    		'password' => 'required|confirmed'

    	]);

    	$hashedPassword = Auth::user()->password;
    	if (Hash::check($request->old_password,$hashedPassword)) {
    		$user = User::find(Auth::id());
    		$user->password = Hash::make($request->password);
    		$user->save();
    		Auth::logout();
    		return redirect()->route('admin.logout');
    	}else{
    		return redirect()->back();
    	}

    } //end method
}
