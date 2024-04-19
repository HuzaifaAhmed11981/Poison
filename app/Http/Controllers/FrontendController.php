<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Blog;
use App\Models\Education;
use App\Models\Experience;
use App\Models\MyDetail;
use App\Models\Testimonial;
use App\Models\Portfolio;
use App\Models\PortfolioDetail;
use App\Models\PersonalSkill;
use App\Models\SoftwareSkill;
use App\Models\Service;
use App\Models\SiteSetting;


class FrontendController extends Controller
{

    public function index(){
        $blogs = Blog::all();
        $experiences = Experience::all();
        $educations = Education::all();
        $mydetails = MyDetail::find(1);
        $testimonials = Testimonial::all();
        $portfolios = Portfolio::all();
        $portfoliodetails = PortfolioDetail::find(1);
        $personalskills = PersonalSkill::all();
        $softwareskills = SoftwareSkill::all();
        $services = Service::all();
        $sitesettings = SiteSetting::find(1);
        return view('frontend.home',
        compact('blogs','experiences','educations',
        'mydetails','testimonials','portfolios','portfoliodetails',
        'personalskills','softwareskills','services','sitesettings'));
    }



//add a message

    public function message(Request $request){
  $request->validate([
  'name'=>'required',
  'email' =>'required',
  'phone' =>'required',
  'subject'=>'required',
  'message'=>'required'
]);

 Message::insert([
    'user_name' => $request->name,
    'user_email' => $request->email,
    'user_phone' => $request->phone,
    'user_subject' => $request->subject,
    'user_message' => $request->message,
 ]);
 toasterSuccess("Message Added Successfullly");
 return redirect()->back();
    }
}
