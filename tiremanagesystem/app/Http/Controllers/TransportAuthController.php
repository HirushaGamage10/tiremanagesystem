<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransportAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login.transportlogin');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            if (Auth::user()->role === 'transport_officer' || Auth::user()->role === 'transport_manager') {
                return redirect()->intended(route('transport.viewtransport'));
            }
            Auth::logout();
            return redirect()->route('transport.login')->withErrors(['username' => 'Access denied.']);
        }
        return back()->withErrors(['username' => 'Invalid credentials.'])->withInput();
    }
}