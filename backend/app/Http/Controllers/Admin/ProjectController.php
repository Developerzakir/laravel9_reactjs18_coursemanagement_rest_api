<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{

    //api route methods start
    public function projectThree()
    {
        $result = Project::limit(3)->get();
        return $result;

    } //end method

    public function projectAll()
    {
        $result = Project::all();
        return $result;

    } //end method

    public function projectDetails($projectId)
    {
        $id = $projectId;
        $result = Project::where('id', $id)->get();

        return $result;

    } //end method

    //api route methods end


    //web route methods start
    public function allProjects()
    {
        $allProject = Project::all();
        return view('backend.project.all_project', compact('allProject'));

    } //end method

    public function addProjects()
    {
        return view('backend.project.add_project');

    } //end method

    public function storeProjects(Request $request)
    {
        $request->validate([
            'project_name' => 'required',
            'project_desc' => 'required',
            'img_one' => 'required',
        ],[
            'project_name.required' => 'Input Project Name',
            'project_desc.required' => 'Input Project Description',

        ]);

        //img one
        $image_one = $request->file('img_one'); 
        $name_gen = hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
        Image::make($image_one)->resize(626,417)->save('upload/project/'.$name_gen);
        $save_url_one = 'http://127.0.0.1:8000/upload/project/'.$name_gen;

        //img two
        $image_two = $request->file('img_two'); 
        $name_gen = hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
        Image::make($image_two)->resize(540,607)->save('upload/project/'.$name_gen);
        $save_url_two = 'http://127.0.0.1:8000/upload/project/'.$name_gen;

        Project::insert([
            'project_name' => $request->project_name,
            'project_desc' => $request->project_desc,
            'project_feature' => $request->project_feature,
            'live_preview' => $request->live_preview,
            'img_one' => $save_url_one,
            'img_two' => $save_url_two,
        ]);

         $notification = array(
            'message' => 'Project Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.projects')->with($notification);

    } //end method

    public function editProjects($id)
    {
        $project = Project::findOrFail($id);
        return view('backend.project.edit_project',compact('project'));

    } //end method

    public function updateProjects(Request $request)
    {

        $project_id = $request->id;

        if ($request->file('img_one')) {

        $image_one = $request->file('img_one'); 
        $name_gen = hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
        Image::make($image_one)->resize(626,417)->save('upload/project/'.$name_gen);
        $save_url_one = 'http://127.0.0.1:8000/upload/project/'.$name_gen;


        $image_two = $request->file('img_two'); 
        $name_gen = hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
        Image::make($image_two)->resize(540,607)->save('upload/project/'.$name_gen);
        $save_url_two = 'http://127.0.0.1:8000/upload/project/'.$name_gen;

        Project::findOrFail($project_id)->update([
            'project_name' => $request->project_name,
            'project_desc' => $request->project_desc,
            'project_feature' => $request->project_feature,
            'live_preview' => $request->live_preview,
            'img_one' => $save_url_one,
            'img_two' => $save_url_two,
        ]);

         $notification = array(
            'message' => 'Project Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.projects')->with($notification);

        }else{

            Project::findOrFail($project_id)->update([
            'project_name' => $request->project_name,
            'project_desc' => $request->project_desc,
            'project_feature' => $request->project_feature,
            'live_preview' => $request->live_preview,

        ]);

         $notification = array(
            'message' => 'Project Updated Without Image Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('all.projects')->with($notification);

        }

    } //end method

    public function destroyProjects($id){

       $project = Project::findOrFail($id);

       // Extract the image paths from the URLs
        $img_one_path = parse_url($project->img_one, PHP_URL_PATH);
        $img_two_path = parse_url($project->img_two, PHP_URL_PATH);

        // Convert the relative paths to absolute paths
        $img_one_path = public_path($img_one_path);
        $img_two_path = public_path($img_two_path);

        // Delete the images from the file system
        if (File::exists($img_one_path)) {
            File::delete($img_one_path);
        }

        if (File::exists($img_two_path)) {
            File::delete($img_two_path);
        }

    // Delete the project record from the database
    $project->delete();

     
        $notification = array(
            'message' => 'Project Delected!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end mehtod 
}
