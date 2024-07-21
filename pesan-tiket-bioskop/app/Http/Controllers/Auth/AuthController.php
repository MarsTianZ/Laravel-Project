<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm(Request $request)
    {
        return view("auth.login");
    }
    public function loginHandler(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:20',
            'remember-me' => 'boolean'
        ]);

        $email = $request->email;
        $password = $request->password;
        $rememberMe = $request->has('remember-me');
        if (auth()->attempt(['email' => $email, 'password' => $password], $rememberMe)) {

            return redirect()->route('authenticating');
        }
        return redirect()->back()->withErrors([
            'email' => 'Invalid credentials provided.',
        ]);
    }
    public function showAuthenticatingPage()
    {
        return view("auth.authenticating");
    }
}
