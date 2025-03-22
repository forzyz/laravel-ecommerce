<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
</head>
<body>
    <h2>Your Orders</h2>
    <table border="1">
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Order Date</th>
        </tr>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->product->name }}</td>
                <td>{{ $order->quantity }}</td>
                <td>${{ $order->total_price }}</td>
                <td>{{ $order->created_at->format('Y-m-d') }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
