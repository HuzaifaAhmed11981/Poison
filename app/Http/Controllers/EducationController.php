<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
class EducationController extends Controller
{
     public function Education(){
  $data = Education::paginate(4);
        return view('admin.education.index',compact('data'));

     }
     public function EducationPost(Request $request){
 $request->validate([
  'course_outline' => 'required',
  'course_desp' => 'required',
  'university_name' => 'required',
  'time_period' => 'required',
 ]);
 Education::insert([
  'course_outline' => $request->course_outline,
  'course_desp' => $request->course_desp,
  'university_name' => $request->university_name,
  'time_period' => $request->time_period,
 ]);

 toasterSuccess('Data added successfully');
  return redirect()->back();

}
     public function EducationDelete($delete_id){
        Education::find($delete_id)->delete();


        toasterSuccess('Data Deleted Successfully');
        return redirect()->back();
     }
      public function EducationView($view_id){
         $data = Education::find($view_id);
         return view('admin.education.edit',compact('data'));
     }
     public function EducationUpdate(Request $request){
       Education::find($request->education_id)->update([
         'course_outline' => $request->course_outline,
         'course_desp' => $request->course_desp,
         'university_name' => $request->university_name,
         'time_period' => $request->time_period,
       ]);
       toasterSuccess('Data updated successfully');
       return redirect()->back();
     }
}
