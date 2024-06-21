<?php

namespace App\Http\Controllers\Admin;

use App\Models\ClientReview;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ClientReviewController extends Controller
{
    //api route method start
    public function onAllSelect()
    {
        $result = ClientReview::all();
        return $result;

    } //end method

    //api route method end//////


    //web route methods start 

    public function allReview()
    {
        $review = ClientReview::all();
    	return view('backend.review.all_review',compact('review'));

    } //end method

    public function addReview()
    {
        return view('backend.review.add_review');

    } //end method

    public function storeReview(Request $request)
    {
        $request->validate([
    		'client_name' => 'required',
    		'client_desc' => 'required',
    		'client_img' => 'required',
    	],[
			'client_title.required' => 'Input Client Name',
			'client_desc.required' => 'Input Client Description',

    	]);

    	$image = $request->file('client_img'); 
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(626,417)->save('upload/review/'.$name_gen);
    	$save_url = 'http://127.0.0.1:8000/upload/review/'.$name_gen;

    	ClientReview::insert([
    		'client_name' => $request->client_name,
    		'client_desc' => $request->client_desc,
    		'client_img' => $save_url,
    	]);

    	 $notification = array(
    		'message' => 'Review Inserted Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('all.review')->with($notification);

    } //end method

    public function editReview($id){

    	$review = ClientReview::findOrFail($id);
    	return view('backend.review.edit_review',compact('review'));

    } // end method 

    public function updateReview(Request $request)
    {

        $review_id = $request->id;

    	if ($request->file('client_img')) {

    	$image = $request->file('client_img'); 
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(626,417)->save('upload/review/'.$name_gen);
    	$save_url = 'http://127.0.0.1:8000/upload/review/'.$name_gen;

    	ClientReview::findOrFail($review_id)->update([

    		'client_name' => $request->client_name,
    		'client_desc' => $request->client_desc,
    		'client_img' => $save_url,
    	]);

    	 $notification = array(
    		'message' => 'Review Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('all.review')->with($notification);


    	}else{

    		ClientReview::findOrFail($review_id)->update([

    		'client_name' => $request->client_name,
    		'client_desc' => $request->client_desc,

    	]);

    	 $notification = array(
    		'message' => 'Review Updated Without Image Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('all.review')->with($notification);
    	}

    } // end method 

    public function destroyReview($id)
    {

        $reviewDestroy = ClientReview::findOrFail($id);

        // Extract the image paths from the URLs
         $smal_img = parse_url($reviewDestroy->client_img, PHP_URL_PATH);
 
         // Convert the relative paths to absolute paths
         $smal_img = public_path($smal_img);
       
 
         // Delete the images from the file system
         if (File::exists($smal_img)) {
             File::delete($smal_img);
         }
 
        
 
     // Delete the project record from the database
     $reviewDestroy->delete();

     $notification = array(
        'message' => 'Client Review  Delected!',
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);

    } // end method
}
