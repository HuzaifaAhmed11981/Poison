<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
class ExperienceController extends Controller
{
    public function Experience(){
        $data = Experience::paginate(4);
              return view('admin.experience.index',compact('data'));

           }
           public function ExperiencePost(Request $request){
       $request->validate([
        'job_role' => 'required',
        'job_place' => 'required',
        'time_period' => 'required',
        'exp_desp' => 'required',
       ]);
       Experience::insert([
        'job_role' => $request->job_role,
        'job_place' => $request->job_place,
        'time_period' => $request->time_period,
        'exp_desp' => $request->exp_desp,
       ]);

       toasterSuccess('Data added successfully');
        return redirect()->back();

      }
           public function ExperienceDelete($delete_id){
              Experience::find($delete_id)->delete();


              toasterSuccess('Data Deleted Successfully');
              return redirect()->back();
           }
            public function ExperienceView($view_id){
               $data = Experience::find($view_id);
               return view('admin.experience.edit',compact('data'));
           }
           public function ExperienceUpdate(Request $request){
             Experience::find($request->experience_id)->update([
               'job_role' => $request->job_role,
               'job_place' => $request->job_place,
               'time_period' => $request->time_period,
               'exp_desp' => $request->exp_desp,
             ]);
             toasterSuccess('Data updated successfully');
             return redirect()->back();
           }
}
