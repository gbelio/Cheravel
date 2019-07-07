<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Cart;
use Auth;

class AboutUsController extends Controller
{
    public function index()
    {
        $count = Cart::where('user_id', Auth::user()->id)->count();
        return view('aboutUs.index')->with('count', $count);
    }
}
