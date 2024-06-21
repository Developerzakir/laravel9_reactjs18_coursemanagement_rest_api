<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    //api route method start
    public function contactSend(Request $request)
    {

        $contactArr = json_decode($request->getContent(),true);
        $name = $contactArr['name'];
        $email = $contactArr['email'];
        $message = $contactArr['message'];


        $result = Contact::insert([
            'name' =>  $name,
            'email' => $email,
            'message' => $message,
        ]);

        if($result  == true){
            return 1;
        }else{
            return 0;
        }
    } //end method

    //api route method end


    //web route method start
    public function AllContactMessage()
    {
        $contact = Contact::all();
        return view('backend.contact.all_contact',compact('contact'));

    } //end method

    public function DeleteContactMessage($id){

        Contact::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Contact Message Delected Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end mehtod

   
}
