<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    //api route methods start
    public function allFooterData()
    {
        $result = Footer::all();
        return $result;
         
    } //end method

    //api route method end///////


    //web route methods start

    public function allFooterContent()
    {
        $footerall = Footer::all();
        return view('backend.footer.all_footer', compact('footerall'));

    } //end method

    public function editFooter($id){
    	$footer = Footer::findOrFail($id);
    	return view('backend.footer.edit_footer',compact('footer'));
    } // end mehtod 

    public function updateFooter(Request $request)
    {

        $footer_id = $request->id;

    	Footer::findOrFail($footer_id)->update([

    		'address' => $request->address,
    		'email' => $request->email,
    		'phone' => $request->phone,
    		'facebook' => $request->facebook,
    		'youtube' => $request->youtube,
    		'twitter' => $request->twitter,
    		'footer_credit' => $request->footer_credit,

    	]);

    	 $notification = array(
    		'message' => 'Footer Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('all.footer.content')->with($notification);

    } // end mehtod


}
