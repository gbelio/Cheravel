<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use Auth;

class ContactController extends Controller
{
    public function index()
    {
        $count = Cart::where('user_id', Auth::user()->id)->count();
        return view('contact.index')->with('count', $count);
    }
}
