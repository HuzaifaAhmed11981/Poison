<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SettingsController extends Controller
{
    // title setting start
  public function TitleSetting()
  {
    $data = SiteSetting::find(1);;
    return view('admin.setting.title-setting', compact('data'));
  }
  public function TitleSettingPost(Request $request)
  {


    $data = SiteSetting::find(1);

      $data->about_title = $request->about_title;
      $data->about_subtitle = $request->about_subtitle;
      $data->resume_title = $request->resume_title;
      $data->portfolio_title = $request->portfolio_title;
      $data->service_title = $request->service_title;
      $data->testimonial_title = $request->testimonial_title;
      $data->blog_title = $request->blog_title;
      $data->contact_title = $request->contact_title;
      $data->update();



    toasterSuccess("Data Saved Successfully");
    return redirect()->back();
  }

  //title setting end

  //site setting start
  public function SiteSetting()
  {
    $data = SiteSetting::find(1);;
    return view('admin.setting.site-setting', compact('data'));
  }
  public function SiteSettingPost(Request $request){

  $data = SiteSetting::find(1);

   //if logo choosen upload with the existing one
if($request->file('logo')){
    $request->validate([
        'logo' => 'image|mimes:png,jpg,jpeg,gif|max:2048'
    ]);
    $image = $request->file('logo');
    $image_name = time().'.'.$image->getClientOriginalExtension();
    $data->logo = $image_name;
    $image->move(public_path('uploads/images'), $image_name);

    $image_path = public_path('uploads/images').'/'.$image_name;
    Image::make($image_path)->resize(300, 200)->save();
  }
 //if pdf choosen then update with the previous one
  if($request->file('cv')){

    $cv = $request->file('cv');
    $cv->move(public_path('uploads/pdf'), 'cv.pdf');

}

  $data->facebook_url = $request->facebook_url;
  $data->twitter_url = $request->twitter_url;
  $data->instagram_url = $request->instagram_url;
  $data->youtube_url = $request->youtube_url;
  $data->save();

  toasterSuccess("Data Saved Successfully");
  return redirect()->back();

}
//site setting end



}
