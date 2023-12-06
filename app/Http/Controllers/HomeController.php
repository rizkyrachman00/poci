<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ShowProduct;
use App\Models\manajemenProduct;


class HomeController extends Controller
{
    public function index()
    {
        // $products = Product::all();

        $data = manajemenProduct::all();
        $product = ShowProduct::all();
        $product = ShowProduct::with('manajemenProduct')->get();
        return view("main", compact('data', 'product'));
    }
}
