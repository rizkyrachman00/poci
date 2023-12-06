<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>{{$title}}</title>
</head>
<body>
    <div class="container">
        <h2>
            Invoice Pemesanan
        </h2>
                <div class="card m-3" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Order Id: {{$order->id}}</h5>
                        <p>Item Detail</p>
                        @foreach($orderDetails as $orderDetail)

                        <p>{{$orderDetail['name']}}</p>
                        <p>{{$orderDetail['quantity']}}x</p>
                        <p>{{$orderDetail['subtotal']}}</p>
                        @endforeach
                        <p>Total Pembayaran: {{$order->total}}</p>
                        <p>Status Pembayaran: {{$order->status}}</p>
                    </div>
                </div>
            <a href="{{route('home')}}" class="btn btn-primary">Home</a>
        </form>
    </div>
</body>
</html>