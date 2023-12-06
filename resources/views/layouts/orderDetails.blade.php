<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-IaiXkywEVH1Ck1kk"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    <title>OrderDetails</title>
</head>
<body>
    <div class="container">
        <h1>Order Details</h1>
                {{-- <form method="POST">
                @csrf --}}
                @foreach($orderDetails as $orderDetail)
                <div class="card -m3">
                    <div class="card-body">
                        <p>{{$orderDetail['name']}}</p>
                        <p>{{$orderDetail['price']}}
                        <span>
                           Quantity {{$orderDetail['quantity']}}
                        </span>
                        </p>
                        <p>
                            Total Price {{$orderDetail['subtotal']}}
                        </p>
                        {{-- <input type="hidden" name="orderDetails[{{ $orderDetail['product_id'] }}][id]" value="{{ $orderDetail['product_id'] }}">
                        <input type="hidden" name="orderDetails[{{ $orderDetail['product_id'] }}][name]" value="{{ $orderDetail['name'] }}">
                        <input type="hidden" name="orderDetails[{{ $orderDetail['product_id'] }}][price]" value="{{ $orderDetail['price'] }}">
                        <input type="hidden" name="orderDetails[{{ $orderDetail['product_id'] }}][quantity]" value="{{ $orderDetail['quantity'] }}">
                        <input type="hidden" name="orderDetails[{{ $orderDetail['product_id'] }}][subtotal]" value="{{ $orderDetail['subtotal'] }}"> --}}
                    </div>
                </div>
                @endforeach
                <h5>
                    Total Pembayaran {{$totalAmmount}}
                </h5>
                {{-- <input type="hidden" name="totalAmmount" value="{{ $totalAmmount }}"> --}}
                <button type="submit" id="pay-button" class="btn btn-primary">Pay</button>
            <script type="text/javascript">
                // For example trigger on button clicked, or any time you need
                var payButton = document.getElementById('pay-button');
                payButton.addEventListener('click', function () {
                  // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
                  window.snap.pay('{{ $snap_token }}', {
                    onSuccess: function(result){
                      /* You may add your own implementation here */
                      window.location = '/order/invoice/{{ $orderId }}';
                      alert("payment success!"); console.log(result);
                    },
                    onPending: function(result){
                      /* You may add your own implementation here */
                      alert("wating your payment!"); console.log(result);
                    },
                    onError: function(result){
                      /* You may add your own implementation here */
                      alert("payment failed!"); console.log(result);
                    },
                    onClose: function(){
                      /* You may add your own implementation here */
                      alert('you closed the popup without finishing the payment');
                    }
                  })
                });
              </script>
    </div>
</body>
</html>