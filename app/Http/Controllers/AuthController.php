<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('myauth.login');
    }

    public function handlelogin(Request $request)
    {
        $data = $request->only('email', 'password');
        if(\Auth::attempt($data)){
            return 'helloo';
            //return view('subscribers.index');
        }

        return back()->withInput();
    }
}
