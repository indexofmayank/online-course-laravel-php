<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use App\Models\Category;
use App\Models\Courses;


class LoginController extends Controller
{


    public function check() {
        return view('app');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request) 
    {
        $request->validate([
            'email' => 'required|email', 
            'password' => 'required',
        ]);
    
        $user = User::where('email', $request->email)->first();
    
        if (!$user) {
            return back()->withErrors([
                'email' => 'No user found with this email address.',
            ]);
        }
    
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home.index');
        }
    
        return back()->withErrors([
            'email' => 'The provided password is incorrect.',
        ]);
    }

}
