<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm(Request $request)
    {
        return view("auth.login");
    }
    public function loginHandler(Request $request)
    {
        $rememberMe = $request->boolean('remember-me');
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:20',
            'remember-me' => 'nullable'
        ]);

        $email = $request->email;
        $password = $request->password;
        $rememberMe = $request->has('remember-me');
        $user = User::where('email_address', $email)->first();
        if (Auth::attempt(['email_address' => $email, 'password' => $password], $rememberMe)) {

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
    public function showRegisterForm(Request $request)
    {
        return view("auth.register");
    }
    public function registerHandler(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|max:20',
            'no_telp' => 'required|min:8|max:14',
        ]);

        $username = $request->username;
        $email = $request->email;
        $password = $request->password;
        $no_telp = $request->no_telp;
        DB::insert('INSERT INTO users (username, email_address, password, no_telp, created_at, updated_at) VALUES (?, ?, ?, ?, NOW(), NOW())', [
            $username,
            $email,
            Hash::make($password),
            $no_telp
        ]);
        return redirect()->route('login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
