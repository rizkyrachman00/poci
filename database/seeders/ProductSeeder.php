<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "name" => "Jasmine  Iced Tea",
                "price" => 2000.00,
                "quantity" => 100,
                "description" => "Iced Tea",
                "image" => "melati.png",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Vanilla Iced Tea",
                "price" => 3000.00,
                "quantity" => 100,
                "description" => "Iced Tea",
                "image" => "vanilla.png",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Thai Iced Tea",
                "price" => 3000.00,
                "quantity" => 100,
                "description" => "Iced Tea",
                "image" => "thai.png",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Lemon Honey Iced Tea",
                "price" => 3000.00,
                "quantity" => 100,
                "description" => "Iced Tea",
                "image" => "lemon.png",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Guava Iced Tea",
                "price" => 3000.00,
                "quantity" => 100,
                "description" => "Iced Tea",
                "image" => "guava.png",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Blackcurratn Iced Tea",
                "price" => 3000.00,
                "quantity" => 100,
                "description" => "Iced Tea",
                "image" => "blackcurrant.png",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Lychee Iced Tea",
                "price" => 3000.00,
                "quantity" => 100,
                "description" => "Iced Tea",
                "image" => "leci.png",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Mango Tea",
                "price" => 5000.00,
                "quantity" => 100,
                "description" => "Iced Tea",
                "image" => "mango.png",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Apple Iced Tea",
                "price" => 3000.00,
                "quantity" => 100,
                "description" => "Iced Tea",
                "image" => "apel.png",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Cappucino Iced Tea",
                "price" => 3000.00,
                "quantity" => 100,
                "description" => "Iced Tea",
                "image" => "capucino.png",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Chocolate Iced Tea",
                "price" => 3000.00,
                "quantity" => 100,
                "description" => "Iced Tea",
                "image" => "cokelat.png",
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ];
        DB::table("products")->insert($data);
    }
}
