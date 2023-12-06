<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "user_id" => 1,
                "date" => now(),
                "status" => "done",
                "payment_method" => "cash",
                "total_quantity" => 1,
                "total_ammount" => 2000.00,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "user_id" => 1,
                "date" => now(),
                "status" => "done",
                "payment_method" => "cash",
                "total_quantity" => 3,
                "total_ammount" => 8000.00,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "user_id" => 2,
                "date" => now(),
                "status" => "done",
                "payment_method" => "ovo",
                "total_quantity" => 3,
                "total_ammount" => 15000.00,
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ];
        DB::table("orders")->insert($data);
    }
}
