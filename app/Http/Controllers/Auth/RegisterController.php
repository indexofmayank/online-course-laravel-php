<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Import your User model
use Illuminate\Support\Facades\Hash; // For password hashing

class RegisterController extends Controller
{
    public function showRegisterForm() 
    {
        return view('auth.register');
    }

    public function registerUser(Request $request) 
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed', 
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), 
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }
}
