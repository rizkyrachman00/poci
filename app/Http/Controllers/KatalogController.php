<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\manajemenProduct;
use App\Models\Product;
use App\Models\ShowProduct;

class KatalogController extends Controller
{
    public function index()
    {
        $data = manajemenProduct::all();
        $product = ShowProduct::all();
        $product = ShowProduct::with('manajemenProduct')->get();

        return view('Admin.partials.layouts.katalog', compact('data', 'product'));
    }


    public function add_katalog(Request $request)
    {
        $katalog = new ShowProduct;
        $katalog->title = $request->title;
        $katalog->description = $request->description;
        $katalog->quantity = $request->quantity;
        $katalog->price = $request->price;
        $katalog->discount_price = $request->dis_price;

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('katalog', $imagename);

        $katalog->image = $imagename;


        $katalog->save();



        return redirect()->back()->with('message', 'Produk berhasil ditambah');
    }

    public function delete_product($id)
    {
        $product = ShowProduct::find($id);
        // Get the image file name
        $imageName = $product->image;

        $product->delete();

        // Delete the image file from the directory
        if ($imageName) {
            $imagePath = public_path('katalog/' . $imageName);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        return redirect()->back()->with('deleted_produk', 'Produk berhasil dihapus !');
    }

    public function update_product($id)
    {

        $product = ShowProduct::find($id);

        return view('Admin.partials.layouts.updateProduk', compact('product'));
    }
}
