<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login.userlogin');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        //role is driver and user 
        $credentials['role'] = ['driver', 'user'];

        if (Auth::attempt($credentials)) {
            return redirect()->intended('tirerequest')
                             ->with('success', 'Welcome to the Tire Request System!');
        }

        return back()->withErrors(['login' => 'Invalid credentials or not a driver/user.']);
    }
}