<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfficerAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login.officerlogin');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $role = Auth::user()->role ?? null;
            if ($role === 'supervisor' || $role === 'manager') {
                return redirect()->intended(route('tirerequest.approval'));
            }
            Auth::logout();
            return redirect()->route('officer.login')->withErrors(['username' => 'Access denied.']);
        }

        return back()->withErrors(['username' => 'Invalid credentials.'])->withInput();
    }
}