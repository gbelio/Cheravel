<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $count = Cart::where('user_id', Auth::user()->id)->count();
        return view('admin.index')->with('count', $count);
    }
    
}
