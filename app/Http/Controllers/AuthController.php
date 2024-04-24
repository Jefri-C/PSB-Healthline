<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function view()
    {
        return view('login');

        if (Auth::check()) {
            return redirect('/dashboard'); 
        }
        
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:8',
        ]);

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }

        return back()->with('error', 'Wrong username or password. Please try again.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
