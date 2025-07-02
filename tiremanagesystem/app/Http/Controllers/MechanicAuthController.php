<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MechanicAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login.mechaniclogin');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            if (Auth::user()->role === 'mechanic') {
                return redirect()->intended(route('transport.evaluation'));
            }
            Auth::logout();
            return redirect()->route('mechanic.login')->withErrors(['username' => 'Access denied.']);
        }
        return back()->withErrors(['username' => 'Invalid credentials.'])->withInput();
    }
}