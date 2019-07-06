<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Cart;

class FAQsController extends Controller
{
    public function index()
    {
        $count = [];
        if (Auth::check()){
            $count = Cart::where('user_id', Auth::user()->id)->count();
        }
        return view('faqs.index')->with('count', $count);
    }
}
