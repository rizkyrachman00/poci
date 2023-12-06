<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class OrderDetails extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'order_id' => 1, // order_id 1
                'product_id' => 1,
                'name' => 'Teh Melati',
                'price' => 2000,
                'quantity' => 1,
                'subtotal' => 2000,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'order_id' => 2,
                'product_id' => 1,
                'name' => 'Teh Melati',
                'price' => 2000,
                'quantity' => 1,
                'subtotal' => 2000,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'order_id' => 2,
                'product_id' => 2,
                'name' => 'Teh Susu',
                'price' => 3000,
                'quantity' => 2,
                'subtotal' => 6000,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'order_id' => 3,
                'product_id' => 3,
                'name' => 'Teh Tarik',
                'price' => 5000,
                'quantity' => 3,
                'subtotal' => 15000,
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ];

        DB::table('order_details')->insert($data);
    }
}
