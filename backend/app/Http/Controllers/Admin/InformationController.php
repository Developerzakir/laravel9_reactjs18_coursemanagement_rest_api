<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    //method for api route
    public function allInformationData()
    {
        $result = Information::all();
        return $result;
    } //end method


    //methods for web route

    public function allInformation()
    {
        $result = Information::all();
        return view('backend.information.all_information', compact('result'));
    } //end method

    public function addInformation()
    {
        return view('backend.information.add_information');

    } //end method

    public function storeInformation(Request $request)
    {
        Information::insert([
            'about'=>$request->about,
            'refund'=>$request->refund,
            'terms'=>$request->terms,
            'privacy'=>$request->privacy,
        ]);

        $notification = array(
    		'message' => 'Information added Successfully',
    		'alert-type' => 'success'
    	);

        return redirect()->route('all.information')->with($notification);

    } //end method

    public function editInformation($id)
    {
        $eidtInformation = Information::findOrFail($id);
        return view('backend.information.edit_information', compact('eidtInformation'));

    } //end method

    public function updateInformation(Request $request, $id)
    {

        Information::findOrFail($id)->update([
            'about'=>$request->about,
            'refund'=>$request->refund,
            'terms'=>$request->terms,
            'privacy'=>$request->privacy,
        ]);

        $notification = array(
    		'message' => 'Information Updated Successfully',
    		'alert-type' => 'success'
    	);

        return redirect()->route('all.information')->with($notification);

    } //end method

    public function destroyInformation($id)
    {

        Information::findOrFail($id)->delete();

        $notification = array(
    		'message' => 'Information Deleted',
    		'alert-type' => 'success'
    	);

        return redirect()->back()->with($notification);

    } //end method
}
