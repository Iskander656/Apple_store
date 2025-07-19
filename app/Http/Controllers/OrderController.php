<?php

namespace App\Http\Controllers;

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
}
