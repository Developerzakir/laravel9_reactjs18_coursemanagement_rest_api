<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{

    //Api route start
    public function allService()
    {
        $result = Service::all();
        return $result;
    } //end method

    ///Web route start
    public function allServices()
    {
        $allService = Service::all();
        return view('backend.services.all_services', compact('allService'));

    } //end method

    public function addServices()
    {
        return view('backend.services.add_services');

    } //end method

    public function storeService(Request $request)
    {
        $request->validate([
            'service_name' => 'required',
            'service_logo' => 'required',
            'service_text' => 'required',
        ]);

        $image = $request->file('service_logo');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(512,512)->save('upload/service/'.$name_gen);
        $save_url = 'http://127.0.0.1:8000/upload/service/'.$name_gen;

        Service::insert([
            'service_name' => $request->service_name,
            'service_text' => $request->service_text,
            'service_logo' => $save_url
        ]);

        $notification = array(
    		'message' => 'Services Added Successfully',
    		'alert-type' => 'success'
    	);

        return redirect()->route('all.services')->with($notification);
    } //end method

    public function editService($id)
    {
        $eidtService = Service::findOrFail($id);
        return view('backend.services.edit_services', compact('eidtService'));
    } //end method

    public function updateServices(Request $request)
    {
        $services_id = $request->id;

        if($request->file('service_logo')){


                $image = $request->file('service_logo');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(512,512)->save('upload/service/'.$name_gen);
                $save_url = 'http://127.0.0.1:8000/upload/service/'.$name_gen;

                Service::findOrFail($services_id)->update([
                    'service_name' => $request->service_name,
                    'service_text' => $request->service_text,
                    'service_logo' => $save_url
                ]);

                $notification = array(
                    'message' => 'Services Updated Successfully',
                    'alert-type' => 'success'
                );

                return redirect()->route('all.services')->with($notification);

        }else{
            Service::findOrFail($services_id)->update([
                'service_name' => $request->service_name,
                'service_text' => $request->service_text,
            ]);

            $notification = array(
                'message' => 'Services Updated Successfully Without Image',
                'alert-type' => 'success'
            );

            return redirect()->route('all.services')->with($notification);

        }

    } //end method

    public function destroyServices($id)
    {
        $servicesDestroy = Service::findOrFail($id);

        if ($servicesDestroy->service_logo) {
            $imagePath = 'upload/service/' . $servicesDestroy->service_logo;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        
        $servicesDestroy->delete();

        $notification = array(
            'message' => 'Services Deleted',
            'alert-type' => 'success'
        );

        return redirect()->route('all.services')->with($notification);
    } //end method
}
