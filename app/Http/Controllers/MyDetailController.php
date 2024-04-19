<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyDetail;
use Intervention\Image\Facades\Image;
class MyDetailController extends Controller
{
    public function MyDetail(){
         $data = MyDetail::find(1);
         return view("admin.my-detail",compact('data'));
    }
    public function MyDetailPost(Request $request){

        $data = MyDetail::find(1);

  if($request->file('profile_picture')){

   $request->validate([
    'profile_picture' => 'image|mimes:jpg,jpeg,png,gif|max:2048'
   ]);

  //before uploading new image, remove previous one
   $unlink_image_path = public_path('uploads/images').'/'.$data->profile_picture;
   unlink($unlink_image_path);  //previous  image deleted successfullly


   $profile_picture = $request->file('profile_picture');
   $image_name = time().'.'. $profile_picture->getClientOriginalExtension();

   $data->profile_picture = $image_name;
   $profile_picture->move(public_path('uploads/images'), $image_name);
   $path = public_path('uploads/images').'/'.$image_name;
   Image::make($path)->resize(300,300)->save();

}



      $data->name = $request->name;
      $data->birth_date = $request->birth_date;
      $data->email = $request->email;
      $data->phone = $request->address;
      $data->nationality = $request->nationality;
      $data->current_jobtitle = $request->current_jobtitle;
      $data->big_desp = $request->big_desp;
      $data->intro_video = $request->intro_video;
      $data->save();

      toasterSuccess('Data saved successfully.');
      return redirect()->back();
     }
}
