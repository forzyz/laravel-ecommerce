<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller {
    // Display list of orders
    public function index() {
        $orders = Order::where('user_id', Auth::id())->get();
        return view('orders.index', compact('orders'));
    }

    // Store a new order
    public function store(Request $request) {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        Order::create([
            'user_id' => auth()->id,
            'product_id' => $validated['product_id'],
            'quantity' => $validated['quantity'],
            'total_price' => $validated['quantity'] * Product::find($validated['product_id'])->price,
        ]);

        return redirect('/orders')->with('success', 'Order placed successfully');
    }
}
