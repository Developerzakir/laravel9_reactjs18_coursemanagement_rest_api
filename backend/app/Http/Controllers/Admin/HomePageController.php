<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomePage;
use Illuminate\Http\Request;

class HomePageController extends Controller
{

    //api route methods start
    public function slectVideo()
    {
        $result = HomePage::select('video_desc','video_url')->get();
        return $result;

    } //end method

    public function totalStuCourse()
    {
        $result = HomePage::select('total_student','total_course','total_review')->get();
        return $result;

    }//end method

    public function totalTech()
    {
        $result = HomePage::select('tech_desc')->get();
        return $result;

    } //end method

    public function homeTitleSubTile()
    {
        $result = HomePage::select('home_title','home_subtitle')->get();
        return $result;

    } //end method

    //api route methods end/////////////


    //web route methods start
    public function allHomeContent()
    {
        $homecontent = HomePage::all();
        return view('backend.homecontent.all_homecontent',compact('homecontent'));

    } //end method

    public function addHomeContent()
    {
        return view('backend.homecontent.add_homecontent');

    } //end method

    public function storeHomeContent(Request $request)
    {
        $request->validate([
            'home_title' => 'required',
            'home_subtitle' => 'required',

        ],[
            'home_title.required' => 'Input Home Title Name',
            'home_subtitle.required' => 'Input Home Sub Title',

        ]);



        HomePage::insert([
            'home_title' => $request->home_title,
            'home_subtitle' => $request->home_subtitle,
            'tech_desc' => $request->tech_desc,
            'total_student' => $request->total_student,
            'total_course' => $request->total_course,
            'total_review' => $request->total_review,
            'video_desc' => $request->video_desc,
            'video_url' => $request->video_url,            

        ]);

         $notification = array(
            'message' => 'Home Content Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.homecontent')->with($notification);

    } //end method

    public function editHomeContent($id){

        $homecontent = HomePage::findOrFail($id);
        return view('backend.homecontent.edit_homecontent',compact('homecontent'));

    } // end method 

    public function updateHomeContent(Request $request)
    {
        $home_id = $request->id;

        HomePage::findOrFail($home_id)->update([
            'home_title' => $request->home_title,
            'home_subtitle' => $request->home_subtitle,
            'tech_desc' => $request->tech_desc,
            'total_student' => $request->total_student,
            'total_course' => $request->total_course,
            'total_review' => $request->total_review,
            'video_desc' => $request->video_desc,
            'video_url' => $request->video_url,            

        ]);

         $notification = array(
            'message' => 'Home Content Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.homecontent')->with($notification);

    } // end method 

    public function destroyHomeContent($id){

        HomePage::findOrFail($id)->delete();

       $notification = array(
           'message' => 'Home Content Delected Successfully',
           'alert-type' => 'success'
       );

       return redirect()->back()->with($notification);

   }// end method 
}
