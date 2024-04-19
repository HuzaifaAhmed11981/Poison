<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Intervention\Image\Facades\Image;
class ServiceController extends Controller
{
    public function Service()
    {
        $data = Service::paginate(4);
        return view('admin.service.index', compact('data'));
    }
    public function ServicePost(Request $request)
    {

        $request->validate([
            'service_title' => 'required',
            'service_subtitle' => 'required',
            'service_icon' => 'required|file|mimes:svg|max:2048',
            'service_img' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'service_desp' => 'required',
        ]);
        //upload service image
        $service_image = $request->file('service_img');
        $serviceimage_name = time() . '.' . $service_image->getClientOriginalExtension();
        $service_image->move(public_path('uploads/images'), $serviceimage_name);
        $path = public_path('uploads/images') . '/' . $serviceimage_name;
        Image::make($path)->resize(800, 600)->save();
        //upload service icon

        //Intervention package does not work svg format
        $service_icon = $request->file('service_icon');
        $serviceicon_name = time() . '.' . $service_icon->getClientOriginalExtension();
        $service_icon->move(public_path('uploads/images'), $serviceicon_name);



        Service::insert([
            'service_title' => $request->service_title,
            'service_subtitle' => $request->service_subtitle,
            'service_img' => $serviceimage_name,
            'service_icon' => $serviceicon_name,
            'service_desp' => $request->service_desp,
        ]);



        toasterSuccess('Data added successfully');
        return redirect()->back();
    }
    public function ServiceDelete($delete_id)
    {
        //delete service image
        $unlink_path = public_path('uploads/images').'/'.Service::find($delete_id)->service_img;
        unlink($unlink_path);
        //delete service icon
        $unlink_path = public_path('uploads/images').'/'.Service::find($delete_id)->service_icon;
        unlink($unlink_path);


        Service::find($delete_id)->delete();


        toasterSuccess('Data Deleted Successfully');
        return redirect()->back();
    }
    public function ServiceView($view_id)
    {
        $data = Service::find($view_id);
        return view('admin.service.edit', compact('data'));
    }
    public function ServiceUpdate(Request $request)
    {
        $data = Service::find($request->service_id);
        //uplaod service image
        if ($request->file('service_img')) {

            //unlink previous image before uploading new
            $unlink_path = public_path('uploads/images').'/'.Service::find($request->service_id)->service_img;
            unlink($unlink_path);

            $service_image = $request->file('service_img');
            $serviceimage_name = time() . '.' . $service_image->getClientOriginalExtension();
            //update image name in Database
            $data->service_img = $serviceimage_name;

            $service_image->move(public_path('uploads/images'), $serviceimage_name);
            $path = public_path('uploads/images') . '/' . $serviceimage_name;
            Image::make($path)->resize(800, 800)->save();
        }
        //upload Service icon
        if ($request->file('service_icon')) {

            //unlink previous image before uploading new
            $unlink_path = public_path('uploads/images').'/'.Service::find($request->service_id)->service_icon;
            unlink($unlink_path);

            $service_icon = $request->file('service_icon');
            $serviceicon_name = time() . '.' . $service_icon->getClientOriginalExtension();
            //update image name in Database
            $data->service_icon = $serviceicon_name;

            $service_icon->move(public_path('uploads/images'), $serviceicon_name);


        }
        $data->service_title = $request->service_title;
        $data->service_subtitle = $request->service_subtitle;
        $data->service_desp = $request->service_desp;
        $data->update();

        toasterSuccess('Data updated successfully');
        return redirect()->back();
    }
}
