<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            // return redirect()->route('admin.login.index');
            abort(403);
        }
        // Check if user is not an admin
        if (Auth::user()->role !== 'admin') {
            Auth::logout(); // Logout non-admin users
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            toastr()->error('Access denied. Admin privileges required.');
            return redirect()->route('admin.login.index');
        }
        return $next($request);
    }
}
