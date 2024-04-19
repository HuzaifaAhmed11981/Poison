<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MyDetail;

class MyDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MyDetail::create([
           'name' => 'demo',
           'birth_date' => '2024-12-02',
           'email'=>'demo@gmail.com',
           'phone' => 'XXX999999',
           'address'=>'lorem ipsum',
           'nationality' => 'any-country',
           'current_jobtitle' => '...developer',
           'profile_picture' => 'demo.jpg',
           'intro_video' =>'http://youtube.come/XXXX',
           'big_desp' => '....lorem10'
        ]);

    }
}
