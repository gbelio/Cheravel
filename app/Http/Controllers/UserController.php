<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cart;
use Auth;


class UserController extends Controller
{
    protected $guard = [];

    public function edit($id)
    {
        $user = User::find($id);
        $count = [];
        if (Auth::check()){
            $count = Cart::where('user_id', Auth::user()->id)->count();
        }
        return view('user.edit')
            ->with('user', $user)
            ->with('count', $count);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'amount' => 'required',
            'photopath' => '',
            'ranking' => 'required',
            'category_id' => 'required'
        ];

        $messages = [
            'required' => 'el campo :attribute es obligatorio'
        ];
        
        $this->validate($request, $rules, $messages);
        $product = Product::find($id);
        $product->name = $request->input('name') !== $product->name ? $request->input('name') : $product->name;
        $product->description = $request->input('description') !== $product->description ? $request->input('description') : $product->description;
        $product->amount = $request->input('amount') !== $product->amount ? $request->input('amount') : $product->amount;
        
        $product->photopath = $request->hasFile('photopath') ? $request->file('photopath')->store('posters', 'public') : $product->photopath;
        
        $product->ranking = $request->input('ranking') !== $product->ranking ? $request->input('ranking') : $product->ranking;
        $product->category_id = $request->input('category_id') !== $product->category_id ? $request->input('category_id') : $product->category_id;
        $product->save();

        return redirect('/products/edit/' . $product->id);
    }
}
