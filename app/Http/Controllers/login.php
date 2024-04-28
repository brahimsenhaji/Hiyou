<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 


class login extends Controller
{
    function index(){
        return view('welcome');
    }

    public function login(Request $request)
    {
        // Validate the request data
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt(['name' => $request->username, 'password' => $request->password])) {
            // Authentication successful, redirect to home
            return redirect()->route('home_page')->with('success', 'Login successful!');
        }

        // Authentication failed, display error message
        return back()->withErrors(['username' => 'Invalid username or password.'])->withInput();
    }

    public function logout(){
        Auth::logout();
        return view('logout');
    }
}
