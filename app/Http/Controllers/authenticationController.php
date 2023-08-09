<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authenticationController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $validation = $request->validate([
            'email' => 'required',
            'password' => 'required|string',
        ]);

        // |min:8|not_regex:/OR/i
        if (Auth::attempt($validation)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return redirect('/');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
