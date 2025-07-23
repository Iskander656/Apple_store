<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Category;

class OrderTrackingController extends Controller
{
    public function showForm()
    {
        $categories = Category::all();
        return view('status.status-form', compact('categories'));
    }

    public function check(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);

        $categories = Category::all();

        $order = Order::with(['product', 'location'])
            ->where('customer_name', $request->customer_name)
            ->where('phone', $request->phone)
            ->latest()
            ->first();

        if (!$order) {
            return back()->with('error', 'Order not found!');
        }

        return view('status.status-result', compact('order', 'categories'));
    }
}
