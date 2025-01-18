<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function login() {
        return view('auth.login');
    }
    
    public function register() {
        return view('auth.register');
    }

    public function registerpost(Request $request) {
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);
        $credentials['password'] = bcrypt($credentials['password']);

        $user = User::create($credentials);
        return redirect()->route('user.login')->with('message', 'User account created successfully');
    }

    public function loginpost(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('listing.form')->with('message', 'You are now logged in');
        }
        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }

    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'You have been logged out!');
    }
}
