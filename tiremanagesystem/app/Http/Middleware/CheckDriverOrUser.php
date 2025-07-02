<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckDriverOrUser
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $role = Auth::user()->role ?? null;
            if ($role === 'driver' || $role === 'user') {
                return $next($request);
            }
            else {
                Auth::logout();
                return redirect()->route('user.login')->with('error', 'You do not have access to this resource.');
            }
        }else{
            Auth::logout();
            return redirect()->route('user.login')->with('error', 'You do not have access to this resource.');
        }


    }

   
}