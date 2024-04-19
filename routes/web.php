<?php

use App\Http\Controllers\EducationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyDetailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SoftwareSkillController;
use App\Http\Controllers\PersonalSkillController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PortfolioDetailController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[FrontendController::class, 'index'])->name('Home');

Route::get('/dashboard',function(){
 return view('admin.dashboard');
})->name('Dashboard')->middleware('CustomAuth');


//Login System
Route::get('/login',[LoginController::class,'LoginForm'])->name('Login')->middleware('validating_login_page');
Route::post('/login',[LoginController::class,'LoginPost'])->name('LoginPost');
Route::get('/logout',[LoginController::class,'logout'])->name('Logout');

//Frontend
Route::post('/message',[FrontendController::class,'message'])->name('message');

//admin
//change Profile
Route::group(['middleware' => 'CustomAuth', 'prefix' => 'admin'], function(){
Route::get('/profile', [ProfileController::class,'Profile'])->name('Profile');
Route::post('/change-email', [ProfileController::class,'ChangeEmail'])->name('ChangeEmail');
Route::post('/change-password', [ProfileController::class,'ChangePassword'])->name('ChangePassword');
});

//title settings
Route::group(['middleware' => 'CustomAuth','prefix' => 'admin'],function(){
Route::get('/title-settings',[SettingsController::class,'TitleSetting'])->name('TitleSettingPage');
Route::post('/title-settings',[SettingsController::class,'TitleSettingPost'])->name('TitleSetting');
});

//site settings
Route::group(['middleware' => 'CustomAuth','prefix' => 'admin'],function(){
Route::get('/site-settings',[SettingsController::class,'SiteSetting'])->name('SiteSettingPage');
Route::post('/site-settings',[SettingsController::class,'SiteSettingPost'])->name('SiteSetting');
});
//my details
Route::group(['middleware' => 'CustomAuth','prefix' => 'admin'],function(){
Route::get('/my-details',[MyDetailController::class,'MyDetail'])->name('MyDetail');
Route::post('/my-details',[MyDetailController::class,'MyDetailPost'])->name('MyDetailPost');
});

//educations
Route::group(['middleware' => 'CustomAuth','prefix' => 'admin'],function(){
Route::get('/education',[EducationController::class,'Education'])->name('Education');
Route::post('/education',[EducationController::class,'EducationPost'])->name('EducationPost');
Route::get('/education/delete/{id}',[EducationController::class,'EducationDelete'])->name('EducationDelete');
Route::get('/education/view/{id}',[EducationController::class,'EducationView'])->name('EducationView');
Route::post('/education/update',[EducationController::class,'EducationUpdate'])->name('EducationUpdate');
});

//experiences
Route::group(['middleware' => 'CustomAuth','prefix' => 'admin'],function(){
Route::get('/experience',[ExperienceController::class,'Experience'])->name('Experience');
Route::post('/experience',[ExperienceController::class,'ExperiencePost'])->name('ExperiencePost');
Route::get('/experience/delete/{id}',[ExperienceController::class,'ExperienceDelete'])->name('ExperienceDelete');
Route::get('/experience/view/{id}',[ExperienceController::class,'ExperienceView'])->name('ExperienceView');
Route::post('/experience/update',[ExperienceController::class,'ExperienceUpdate'])->name('ExperienceUpdate');
});

//software skills
Route::group(['middleware' => 'CustomAuth','prefix' => 'admin'],function(){
Route::get('/software-skill',[SoftwareSkillController::class,'SoftwareSkill'])->name('SoftwareSkill');
Route::post('/software-skill',[SoftwareSkillController::class,'SoftwareSkillPost'])->name('SoftwareSkillPost');
Route::get('/software-skill/delete/{id}',[SoftwareSkillController::class,'SoftwareSkillDelete'])->name('SoftwareSkillDelete');
Route::get('/software-skill/view/{id}',[SoftwareSkillController::class,'SoftwareSkillView'])->name('SoftwareSkillView');
Route::post('/software-skill/update',[SoftwareSkillController::class,'SoftwareSkillUpdate'])->name('SoftwareSkillUpdate');
});
//Personal skills
Route::group(['middleware' => 'CustomAuth','prefix' => 'admin'],function(){
Route::get('/personal-skill',[PersonalSkillController::class,'Personalskill'])->name('PersonalSkill');
Route::post('/personal-skill',[PersonalSkillController::class,'PersonalSkillPost'])->name('PersonalSkillPost');
Route::get('/personal-skill/delete/{id}',[PersonalSkillController::class,'PersonalSkillDelete'])->name('PersonalSkillDelete');
Route::get('/personal-skill/view/{id}',[PersonalSkillController::class,'PersonalSkillView'])->name('PersonalSkillView');
Route::post('/personal-skill/update',[PersonalSkillController::class,'PersonalSkillUpdate'])->name('PersonalSkillUpdate');
});
//Testimonial
Route::group(['middleware' => 'CustomAuth','prefix' => 'admin'],function(){
Route::get('/testimonial',[TestimonialController::class,'Testimonial'])->name('Testimonial');
Route::post('/testimonial',[TestimonialController::class,'TestimonialPost'])->name('TestimonialPost');
Route::get('/testimonial/delete/{id}',[TestimonialController::class,'TestimonialDelete'])->name('TestimonialDelete');
Route::get('/testimonial/view/{id}',[TestimonialController::class,'TestimonialView'])->name('TestimonialView');
Route::post('/testimonial/update',[TestimonialController::class,'TestimonialUpdate'])->name('TestimonialUpdate');
});



//Blog
Route::group(['middleware' => 'CustomAuth','prefix' => 'admin'],function(){
Route::get('/blog',[BlogController::class,'Blog'])->name('Blog');
Route::post('/blog',[BlogController::class,'BlogPost'])->name('BlogPost');
Route::get('/blog/delete/{id}',[BlogController::class,'BlogDelete'])->name('BlogDelete');
Route::get('/blog/view/{id}',[BlogController::class,'BlogView'])->name('BlogView');
Route::post('/blog/update',[BlogController::class,'BlogUpdate'])->name('BlogUpdate');
});

//Services
Route::group(['middleware' => 'CustomAuth','prefix' => 'admin'],function(){
Route::get('/service',[ServiceController::class,'Service'])->name('Service');
Route::post('/service',[ServiceController::class,'ServicePost'])->name('ServicePost');
Route::get('/service/delete/{id}',[ServiceController::class,'ServiceDelete'])->name('ServiceDelete');
Route::get('/service/view/{id}',[ServiceController::class,'ServiceView'])->name('ServiceView');
Route::post('/service/update',[ServiceController::class,'ServiceUpdate'])->name('ServiceUpdate');
});

//Messages
Route::group(['middleware' => 'CustomAuth','prefix' => 'admin'],function(){
Route::get('/message',[MessageController::class,'Message'])->name('Message');
Route::get('/message/delete/{id}',[MessageController::class,'MessageDelete'])->name('MessageDelete');
});

//Portfolio
Route::group(['middleware' => 'CustomAuth','prefix' => 'admin'],function(){
    Route::get('/portfolio',[PortfolioController::class,'Portfolio'])->name('Portfolio');
    Route::post('/portfolio',[PortfolioController::class,'PortfolioPost'])->name('PortfolioPost');
    Route::get('/portfolio/delete/{id}',[PortfolioController::class,'PortfolioDelete'])->name('PortfolioDelete');
    Route::get('/portfolio/view/{id}',[PortfolioController::class,'PortfolioView'])->name('PortfolioView');
    Route::post('/portfolio/update',[PortfolioController::class,'PortfolioUpdate'])->name('PortfolioUpdate');
});



//Portfolio Detail
Route::group(['middleware' => 'CustomAuth','prefix' => 'admin'],function(){
Route::get('/portfolio-detail',[PortfolioDetailController::class,'PortfolioDetail'])->name('PortfolioDetail');
Route::post('/portfolio-detail/Update',[PortfolioDetailController::class,'PortfolioDetailUpdate'])->name('PortfolioDetailUpdate');
});
