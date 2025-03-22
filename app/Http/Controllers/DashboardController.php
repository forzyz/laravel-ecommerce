<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller {
    public function index() {
        $user = Auth::user();
        $products = Product::where('user_id', $user->id)->get();
        $orders = Order::where('user_id', $user->id)->get();

        return view('dashboard', compact('products', 'orders'));
    }
}
