<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                "name" => "Admin",
                "email" => "admin@gmail.com",
                "email_verified_at" => now(),
                "password" => bcrypt('admin123'),
                "role" => "0",
                "gambar" => "",
                "verify_key" => "",
                "remember_token" => "",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "User",
                "email" => "user@gmail.com",
                "email_verified_at" => now(),
                "password" => bcrypt('user123'),
                "role" => "1",
                "gambar" => "",
                "verify_key" => "",
                "remember_token" => "",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "User2",
                "email" => "user2@gmail.com",
                "email_verified_at" => now(),
                "password" => bcrypt('user123'),
                "role" => "1",
                "gambar" => "",
                "verify_key" => "",
                "remember_token" => "",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'name' => 'Khaliq',
                'email' => 'gebrelhaliq0507@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('Pokemon123'),
                "role" => "1",
                "gambar" => "",
                "verify_key" => "",
                "remember_token" => "",
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ];
        DB::table("users")->insert($user);

    }
}