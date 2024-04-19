<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteSetting;

class SiteSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteSetting::create([
         'logo' => 'demo.jpg',
         'cv' => 'cv.pdf',
         'facebook_url' => 'url',
         'twitter_url' => 'url',
         'instagram_url' => 'url',
         'youtube_url' => 'url',
         'about_title' => 'title',
         'about_subtitle' => 'title',
         'resume_title' => 'title',
         'portfolio_title' => 'title',
         'service_title' => 'title',
         'testimonial_title' => 'title',
         'blog_title' => 'title',
         'contact_title' => 'title',
        ]);

    }
}
