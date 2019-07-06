<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FAQsController extends Controller
{
    public function index()
    {
        $count = Cart::where('user_id', Auth::user()->id)->count();
        return view('faqs.index')->with('count', $count);
    }
}
