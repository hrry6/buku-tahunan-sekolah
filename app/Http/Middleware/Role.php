<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $allowedRole): Response
    {
        $user = Auth::user();

        if($user && $user->role == $allowedRole)
        {
            return $next($request);
        }if($user && $user->role == "super_admin" && $allowedRole != "super_admin")
        {
            return redirect()->route('super_admin');
        }else
        {
            return abort(403);
        }
    }
}
