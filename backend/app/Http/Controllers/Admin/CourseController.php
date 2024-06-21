<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class CourseController extends Controller
{

    //api route method start
    public function courseFour()
    {
        $result = Course::limit(4)->get();
        return $result;

    } //end method

    public function courseAll()
    {
        $result = Course::all();
        return $result;

    } //end method

    public function courseDetails($courseId)
    {
        $id = $courseId;
        $result = Course::where('id', $id)->get();

        return $result;

    } //end method

    ////////////////////api route method end//////////////////

    //web route method start
    public function allCourse()
    {
        $courses = Course::all();
        return view('backend.courses.all_courses', compact('courses'));

    } //end method

    public function addCourse()
    {
        return view('backend.courses.add_courses');
    } //end method

    public function storeCourse(Request $request)
    {
        $request->validate([
            'short_title' => 'required',
            'short_desc' => 'required',
            'small_img' => 'required',
        ],[
            'short_title.required' => 'Input Short Title Name',
            'short_desc.required' => 'Input Short Description',

        ]);

        $image = $request->file('small_img'); 
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(626,417)->save('upload/courses/'.$name_gen);
        $save_url = 'http://127.0.0.1:8000/upload/courses/'.$name_gen;

        Course::insert([
            'short_title' => $request->short_title,
            'short_desc' => $request->short_desc,
            'long_title' => $request->long_title,
            'long_desc' => $request->long_desc,
            'total_duration' => $request->total_duration,
            'total_lecture' => $request->total_lecture,
            'total_student' => $request->total_student,
            'skill_all' => $request->skill_all,
            'video_url' => $request->video_url,
            'small_img' => $save_url,
        ]);

         $notification = array(
            'message' => 'Courses Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.courses')->with($notification);

    } //end method

    public function editCourse($id){

        $editCourses = Course::findOrFail($id);
        return view('backend.courses.edit_courses',compact('editCourses'));

    } // end method 

    public function updateCourse(Request $request)
    {
        $course_id = $request->id;

        if ($request->file('small_img')) {

        $image = $request->file('small_img'); 
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(626,417)->save('upload/courses/'.$name_gen);
        $save_url = 'http://127.0.0.1:8000/upload/courses/'.$name_gen;

        Course::findOrFail($course_id)->update([

            'short_title' => $request->short_title,
            'short_desc' => $request->short_desc,
            'long_title' => $request->long_title,
            'long_desc' => $request->long_desc,
            'total_duration' => $request->total_duration,
            'total_lecture' => $request->total_lecture,
            'total_student' => $request->total_student,
            'skill_all' => $request->skill_all,
            'video_url' => $request->video_url,
            'small_img' => $save_url,
        ]);

         $notification = array(
            'message' => 'Course Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.courses')->with($notification);


        }else{

            Course::findOrFail($course_id)->update([

            'short_title' => $request->short_title,
            'short_desc' => $request->short_desc,
            'long_title' => $request->long_title,
            'long_desc' => $request->long_desc,
            'total_duration' => $request->total_duration,
            'total_lecture' => $request->total_lecture,
            'total_student' => $request->total_student,
            'skill_all' => $request->skill_all,
            'video_url' => $request->video_url,

        ]);

         $notification = array(
            'message' => 'Course Updated Without Image Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.courses')->with($notification);
        }

    } // end method

    public function destroyCourse($id)
    {
        $course = Course::findOrFail($id);

        // Extract the image paths from the URLs
         $smal_img = parse_url($course->small_img, PHP_URL_PATH);
 
         // Convert the relative paths to absolute paths
         $smal_img = public_path($smal_img);
       
 
         // Delete the images from the file system
         if (File::exists($smal_img)) {
             File::delete($smal_img);
         }
 
        
 
     // Delete the project record from the database
     $course->delete();

        $notification = array(
            'message' => 'Courses Delected Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end method


}
