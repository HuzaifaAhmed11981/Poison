<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioDetail;

class PortfolioDetailController extends Controller
{
    public function PortfolioDetail()
    {
        $data = PortfolioDetail::find(1);
        return view('admin.portfolio-detail.index', compact('data'));
    }
    public function PortfolioDetailUpdate(Request $request)
    {

        $data = PortfolioDetail::find(1);
        $data->title = $request->title;
        $data->desp = $request->desp;
        $data->client_name = $request->client_name;
        $data->date = $request->date;
        if ($request->file('detail_img1')) {
            //delete previous image
            $previous_path = public_path('uploads/images').'/'. $data->detail_img1;
            unlink($previous_path);

            $detail_image = $request->file('detail_img1');
            $image_name = time() . '.' . $detail_image->getClientOriginalExtension();
            $data->detail_img1 = $image_name;
            $detail_image->move(public_path('uploads/images'), $image_name);
        }
        if ($request->file('detail_img2')) {
            //delete previous image
            $previous_path = public_path('uploads/images').'/'. $data->detail_img2;
            unlink($previous_path);

            $detail_image = $request->file('detail_img2');
            $image_name = time() . '.' . $detail_image->getClientOriginalExtension();
            $data->detail_img2 = $image_name;
            $detail_image->move(public_path('uploads/images'), $image_name);
        }
        if ($request->file('detail_img3')) {
            //delete previous image
            $previous_path = public_path('uploads/images').'/'. $data->detail_img3;
            unlink($previous_path);

            $detail_image = $request->file('detail_img3');
            $image_name = time() . '.' . $detail_image->getClientOriginalExtension();
            $data->detail_img3 = $image_name;
            $detail_image->move(public_path('uploads/images'), $image_name);
        }
        if ($request->file('detail_img4')) {
            //delete previous image
            $previous_path = public_path('uploads/images').'/'. $data->detail_img4;
            unlink($previous_path);

            $detail_image = $request->file('detail_img4');
            $image_name = time() . '.' . $detail_image->getClientOriginalExtension();
            $data->detail_img4 = $image_name;
            $detail_image->move(public_path('uploads/images'), $image_name);
        }


        $data->update();
        return redirect()->back();
    }
}
