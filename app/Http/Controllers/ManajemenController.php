<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\manajemenProduct;
use App\Models\ShowProduct;


class ManajemenController extends Controller
{
    public function index()
    {
        $data = manajemenProduct::all();
        return view('Admin.partials.layouts.manajemen', compact('data'));
    }

    public function viewProduct()
    {
        return view('Admin.partials.layouts.addProduk');
    }

    public function addProduct(Request $request)
    {

        $request->validate([
            'namaProduk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        $data = new manajemenProduct;

        $data->nama_produk = $request->namaProduk;
        $data->harga = $request->harga;
        $data->stok = $request->stok;

        $data->save();

        return redirect()->back()->with('message', 'Produk behasil ditambahkan');
    }

    public function delete_product($id)
    {
        $data = manajemenProduct::find($id);
        $data->delete();

        return redirect()->back()->with('message', 'Produk berhasil dihapus !');
    }

    public function getProductInfo($id)
    {
        $product = manajemenProduct::find($id);

        return response()->json([
            'stok' => $product->stok,
            'harga' => $product->harga,
        ]);
    }
}
