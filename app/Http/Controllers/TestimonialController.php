<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{
    public function Testimonial()
    {
        $data = Testimonial::paginate(4);
        return view('admin.testimonial.index', compact('data'));
    }
    public function TestimonialPost(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'customer_profession' => 'required',
            'customer_img' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'customer_message' => 'required',
        ]);






        $customer_image = $request->file('customer_img');
        $image_name = time() . '.' . $customer_image->getClientOriginalExtension();


        $customer_image->move(public_path('uploads/images'), $image_name);
        $path = public_path('uploads/images') . '/' . $image_name;
        Image::make($path)->resize(150, 150)->save();



        Testimonial::insert([
            'customer_name' => $request->customer_name,
            'customer_profession' => $request->customer_profession,
            'customer_img' => $image_name,
            'customer_message' => $request->customer_message,
        ]);



        toasterSuccess('Data added successfully');
        return redirect()->back();
    }
    public function TestimonialDelete($delete_id)
    {
        $unlink_path = public_path('uploads/images') . '/' . Testimonial::find($delete_id)->customer_img;
        unlink($unlink_path);
        Testimonial::find($delete_id)->delete();


        toasterSuccess('Data Deleted Successfully');
        return redirect()->back();
    }
    public function TestimonialView($view_id)
    {
        $data = Testimonial::find($view_id);
        return view('admin.testimonial.edit', compact('data'));
    }
    public function TestimonialUpdate(Request $request)
    {
        $data = Testimonial::find($request->testimonial_id);
        if ($request->file('customer_img')) {

            //unlink previous image before uploading new
            $unlink_path = public_path('uploads/images') . '/' . Testimonial::find($request->testimonial_id)->customer_img;
            unlink($unlink_path);

            $customer_image = $request->file('customer_img');
            $image_name = time() . '.' . $customer_image->getClientOriginalExtension();
            //update image name in Database
            $data->customer_img = $image_name;

            $customer_image->move(public_path('uploads/images'), $image_name);
            $path = public_path('uploads/images') . '/' . $image_name;
            Image::make($path)->resize(150, 150)->save();
        }
        $data->customer_name = $request->customer_name;
        $data->customer_profession = $request->customer_profession;
        $data->customer_message = $request->customer_message;
        $data->update();

        toasterSuccess('Data updated successfully');
        return redirect()->back();
    }
}
