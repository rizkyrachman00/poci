<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class Konsumen extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'user_id' => '1',
                'first_name' => 'Rizky',
                'last_name' => 'Fauzan',
                'address' => 'Jl. Raya Cipadung No. 9',
                'phone' => '081234567890',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'user_id' => '2',
                'first_name' => 'Alif',
                'last_name' => 'Ridho',
                'address' => 'Jl. Raya Ciputat No. 10',
                'phone' => '081234567891',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'user_id' => '3',
                'first_name' => 'Pio',
                'last_name' => 'Kaizen',
                'address' => 'Jl. Raya Cipadung No. 11',
                'phone' => '081234567892',
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'user_id' => '4',
                'first_name' => 'Khaliq',
                'last_name' => 'Ell',
                'address' => 'Jl. Raya Cipadung No. 12',
                'phone' => '081234567893',
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ];

        DB::table('konsumens')->insert($user);
    }
}
