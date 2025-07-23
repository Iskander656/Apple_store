<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Category;
use App\Models\Location;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function showOrderForm($productId)
    {
        $locations = Location::all();
        $categories = Category::all();

        return view('order.form', compact('productId', 'locations', 'categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:15',
            'phone' => 'required|string|max:8',
            'location_id' => 'required|exists:locations,id',
            'product_id' => 'required|exists:products,id',
        ]);

        $existingOrder = Order::where('customer_name', $validated['name'])
            ->where('phone', $validated['phone'])
            ->where('product_id', $validated['product_id'])
            ->where('status', 'Processing')
            ->first();

        if ($existingOrder) {
            return redirect()->back()->with('error', '⚠️ You have already placed this order.');
        }

        Order::create([
            'customer_name' => $validated['name'],
            'phone' => $validated['phone'],
            'location_id' => $validated['location_id'],
            'product_id' => $validated['product_id'],
            'status' => 'Processing',
        ]);

        return redirect()->back()->with('success', '✅ Your order has been accepted!');
    }
}
