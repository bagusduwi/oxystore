<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        // return $request;

        if (!Auth::attempt($request->only('username', 'password'))) {
            return redirect('/login')->with(['status' => 'error', 'msg' => 'wrong username or password!']);
        }

        return redirect('/')->with(['status' => 'success', 'mgs' => 'login successfully']);
    }
}
