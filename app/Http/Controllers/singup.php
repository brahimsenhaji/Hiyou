<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class singup extends Controller
{
    public function index()
    {
        return view('signup');
    }

    public function create(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|email',
            'username' => 'required',
            'password' => 'required|min:6',
        ]);

        // Check if email is unique
        $existingEmail = User::where('email', $request->email)->exists();
        if ($existingEmail) {
            return back()->withErrors(['email' => 'This email is already taken.'])->withInput();
        }

        // Check if username is unique
        $existingUsername = User::where('name', $request->username)->exists();
        if ($existingUsername) {
            return back()->withErrors(['username' => 'This username is already taken.'])->withInput();
        }

        // If email and username are unique, create the user
        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Redirect the user after successful registration
        return redirect()->route('login_page')->with('success', 'Registration successful!');
    }
}


