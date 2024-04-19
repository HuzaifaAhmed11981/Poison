<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PortfolioDetail;

class PortfolioDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PortfolioDetail::create([
          'title' => 'my title',
          'desp' => 'decription.......',
          'client_name' => 'Jon Doe',
          'date' => '2024-03-15',
          'detail_img1' => 'demo.jpg',
          'detail_img2' => 'demo.jpg',
          'detail_img3' => 'demo.jpg',
          'detail_img4' => 'demo.jpg'

        ]);
    }
}
