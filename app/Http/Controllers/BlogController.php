<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Intervention\Image\Facades\Image;
class BlogController extends Controller
{
    public function Blog()
    {
        $data = Blog::paginate(4);
        return view('admin.blog.index', compact('data'));
    }
    public function BlogPost(Request $request)
    {
        $request->validate([
            'blog_title' => 'required',
            'blog_desp' => 'required',
            'blog_img' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'blog_category_name' => 'required',
        ]);

        $blog_image = $request->file('blog_img');
        $image_name = time() . '.' . $blog_image->getClientOriginalExtension();


        $blog_image->move(public_path('uploads/images'), $image_name);
        $path = public_path('uploads/images') . '/' . $image_name;
        Image::make($path)->resize(150, 150)->save();



        Blog::insert([
            'blog_title' => $request->blog_title,
            'blog_desp' => $request->blog_desp,
            'blog_img' => $image_name,
            'blog_category_name' => $request->blog_category_name,
        ]);



        toasterSuccess('Data added successfully');
        return redirect()->back();
    }
    public function BlogDelete($delete_id)
    {
        $unlink_path = public_path('uploads/images') . '/' . Blog::find($delete_id)->blog_img;
        unlink($unlink_path);
        Blog::find($delete_id)->delete();


        toasterSuccess('Data Deleted Successfully');
        return redirect()->back();
    }
    public function BlogView($view_id)
    {
        $data = Blog::find($view_id);
        return view('admin.blog.edit', compact('data'));
    }
    public function BlogUpdate(Request $request)
    {
        $data = Blog::find($request->blog_id);
        if ($request->file('blog_img')) {

            //unlink previous image before uploading new
            $unlink_path = public_path('uploads/images').'/'.Blog::find($request->blog_id)->blog_img;
            unlink($unlink_path);

            $blog_image = $request->file('blog_img');
            $image_name = time() . '.' . $blog_image->getClientOriginalExtension();
            //update image name in Database
            $data->blog_img = $image_name;

            $blog_image->move(public_path('uploads/images'), $image_name);
            $path = public_path('uploads/images') . '/' . $image_name;
            Image::make($path)->resize(500, 500)->save();
        }
        $data->blog_title = $request->blog_title;
        $data->blog_desp = $request->blog_desp;
        $data->blog_category_name = $request->blog_category_name;
        $data->update();

        toasterSuccess('Data updated successfully');
        return redirect()->back();
    }
}
