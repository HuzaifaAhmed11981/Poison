<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LoginCredential;
class LoginCredentialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LoginCredential::create([
           'email' => 'admin@gmail.com',
           'password' => '$2a$12$EF/ioWzpJWLd4PYwEfMJQ.q5kuG/OIuHVUACoF2QdQ/SV0hQRo0Gy'
        ]);
    }
}
