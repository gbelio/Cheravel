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
        return view('profile.edit')
            ->with('user', $user)
            ->with('count', $count);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
            'surname' => 'required',
        ];

        $messages = [
            'required' => 'el campo :attribute es obligatorio'
        ];
        
        $this->validate($request, $rules, $messages);
        $user = User::find($id);
        $user->name = $request->input('name') !== $user->name ? $request->input('name') : $user->name;
        $user->surname = $request->input('surname') !== $user->surname ? $request->input('surname') : $user->surname;
        $user->avatar = $request->hasFile('avatar') ? $request->file('avatar')->store('avatar', 'public') : $user->avatar;
        $user->save();

        return redirect('/profile/edit/' . $user->id);
    }
}
