<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use Intervention\Image\Facades\Image;

class PortfolioController extends Controller
{
    public function Portfolio()
    {
        $data = Portfolio::paginate(4);
        return view('admin.portfolio.index', compact('data'));
    }
    public function PortfolioPost(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'online_url' => 'required',
            'online_platform' => 'required',
            'portfolio_img' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',

        ]);

        $portfolio_image = $request->file('portfolio_img');
        $image_name = time() . '.' . $portfolio_image->getClientOriginalExtension();


        $portfolio_image->move(public_path('uploads/images'), $image_name);
        $path = public_path('uploads/images') . '/' . $image_name;



        Portfolio::insert([
            'title' => $request->title,
            'online_url' => $request->online_url,
            'online_platform' => $request->online_platform,
            'portfolio_img' => $image_name,

        ]);



        toasterSuccess('Data added successfully');
        return redirect()->back();
    }
    public function PortfolioDelete($delete_id)
    {
        $unlink_path = public_path('uploads/images') . '/' . Portfolio::find($delete_id)->portfolio_img;
        unlink($unlink_path);
        Portfolio::find($delete_id)->delete();


        toasterSuccess('Data Deleted Successfully');
        return redirect()->back();
    }
    public function PortfolioView($view_id)
    {
        $data = Portfolio::find($view_id);
        return view('admin.portfolio.edit', compact('data'));
    }
    public function PortfolioUpdate(Request $request)
    {
        $data = Portfolio::find($request->portfolio_id);
        if ($request->file('portfolio_img')) {

            //unlink previous image before uploading new
            $unlink_path = public_path('uploads/images').'/'.Portfolio::find($request->portfolio_id)->portfolio_img;
            unlink($unlink_path);

            $portfolio_image = $request->file('portfolio_img');
            $image_name = time() . '.' . $portfolio_image->getClientOriginalExtension();
            //update image name in Database
            $data->portfolio_img = $image_name;

            $portfolio_image->move(public_path('uploads/images'), $image_name);
            $path = public_path('uploads/images') . '/' . $image_name;
            Image::make($path)->resize(500, 500)->save();
        }
        $data->title = $request->title;
        $data->online_url = $request->online_url;
        $data->online_platform = $request->online_platform;
        $data->update();

        toasterSuccess('Data updated successfully');
        return redirect()->back();
    }
}
