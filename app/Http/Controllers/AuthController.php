<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        $categories = Category::all();

        return view('auth.login', compact('categories'));
    }
}
