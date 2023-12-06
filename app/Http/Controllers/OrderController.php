<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderDetail;

use App\Models\manajemenProduct;
use App\Models\ShowProduct;

class OrderController extends Controller
{
    public function index()
    {
        $products = ShowProduct::all();
        return view("layouts.order", compact("products"));
    }

    public function orderDetails(Request $request)
    {

        $products = ShowProduct::all();
        $user = User::find(2);
        $orderDetails = [];
        $totalQuantity = 0;
        $totalAmmount = 0;
        $orderId = rand();

        Order::create([
            "id" => $orderId,
            "user_id" => $user->id,
            "date" => now(),
            "status" => "unpaid",
            "payment_method" => "-",
            "total_quantity" => $totalQuantity,
            "total_ammount" => $totalAmmount,
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        foreach ($products as $product) {
            $quantity = $request->input('quantity' . $product->id);
            $subTotal = $product->price * $quantity;
            if ($quantity) {
                $orderDetails[] = [
                    'name' => $product->manajemenProduct->nama_produk,
                    'price' => $product->price,
                    'id' => $product->id,
                    'quantity' => $quantity,
                    'subtotal' => $subTotal,
                ];

                $totalQuantity += $quantity;
                $totalAmmount += $subTotal;

                OrderDetail::create([
                    "order_id" => $orderId,
                    "product_id" => $product->id,
                    "name" => $product->manajemenProduct->nama_produk,
                    "price" => $product->price,
                    "quantity" => $quantity,
                    "subtotal" => $subTotal,
                    "created_at" => now(),
                    "updated_at" => now(),
                ]);
            }
        }

        Order::find($orderId)->update([
            "total_quantity" => $totalQuantity,
            "total_ammount" => $totalAmmount,
            "updated_at" => now(),
        ]);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server--n_-sMtvxjLQEtjNrAmUaXE5';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;


        $params = array(
            'transaction_details' => array(
                'order_id' => $orderId,
                'gross_amount' => $totalAmmount,
            ),
            'item_details' => $orderDetails,
            'customer_details' => array(
                'first_name' => $user->name,
                'last_name' => '',
                'email' => $user->email,
                'phone' => $user->konsumen->phone,
                'billing_address' => [
                    'first_name' => $user->name,
                    'last_name' => '',
                    'email' => $user->email,
                    'phone' => $user->konsumen->phone,
                    'address' => $user->konsumen->address,
                ],
            ),
        );


        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // dd($orderDetails, $totalAmmount, $orderId, $params, $totalQuantity, $snapToken);

        return view("layouts.orderDetails", [
            "title" => "Payment a Project",
            "totalAmmount" => $totalAmmount,
            "snap_token" => $snapToken,
            "orderDetails" => $orderDetails,
            "orderId" => $orderId,
        ]);
    }

    public function payment(Request $request)
    {

        $totalAmmount = $request->totalAmmount;
        $orderDetails = $request->orderDetails;
        $id = 4;
        $user = User::find($id);
        $itemDetails = [];

        foreach ($orderDetails as $orderDetail) {
            $itemDetails[] = [
                'id' => $orderDetail['id'],
                'name' => $orderDetail['name'],
                'quantity' => $orderDetail['quantity'],
                'price' => $orderDetail['price'],
                'subtotal' => $orderDetail['subtotal'],
            ];
        }



        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server--n_-sMtvxjLQEtjNrAmUaXE5';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $totalAmmount,
            ),
            'item_details' => $itemDetails,
            'customer_details' => array(
                'first_name' => $user->name,
                'last_name' => '',
                'email' => $user->email,
                'phone' => $user->konsumen->phone,
                'billing_address' => [
                    'first_name' => $user->name,
                    'last_name' => '',
                    'email' => $user->email,
                    'phone' => $user->konsumen->phone,
                    'address' => $user->konsumen->address,
                ],
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('layouts.payment', [
            "title" => "Payment a Project",
            "totalAmmount" => $totalAmmount,
            "snap_token" => $snapToken
        ]);
    }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . $serverKey);
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'settlement' || $request->transaction_status == 'capture' || $request->transaction_status == 'success') {
                $order = Order::find($request->order_id);
                $order->update([
                    'status' => 'Paid',
                    'payment_method' => $request->payment_type,
                    'updated_at' => now(),
                ]);

                $orderDetails = OrderDetail::where('order_id', $request->order_id)->get();
                foreach ($orderDetails as $orderDetail) {
                    $product = ShowProduct::find($orderDetail->product_id); // Ganti Product dengan ShowProduct
                    if ($product) {
                        // Pastikan bahwa kuantitas yang dikurangkan tidak melebihi 0
                        $newQuantity = max(0, $product->quantity - $orderDetail->quantity);

                        $product->update([
                            'quantity' => $newQuantity,
                            'updated_at' => now(),
                        ]);
                    } else {
                        throw new \Exception('Order not found');
                    }
                }
            }
        }
    }

    public function invoice($id)
    {
        $order = Order::find($id);
        $orderDetails = OrderDetail::where('order_id', $id)->get();
        return view('layouts.invoice', [
            "title" => "Invoice",
            "order" => $order,
            "orderDetails" => $orderDetails,
        ]);
    }
}