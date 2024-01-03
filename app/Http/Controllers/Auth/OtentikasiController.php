<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;

class OtentikasiController extends Controller
{
    /**
     * Display the login view.
     */
    public function index()
    {

        if(!Auth::check())
        {
            return Inertia::render('Auth/Login');
        }

        $user = Auth::user();
        
        $redirectMap = [
            'super_admin' => 'super-admin/dashboard',
            'admin_sekolah' => 'admin-sekolah/dashboard'
        ];

        if (isset($redirectMap[$user->role])) {
            return redirect($redirectMap[$user->role]);
        }
    }

    /**
     * Handle an incoming authentication request.
     */
    public function login(Request $request)
    {
        $validate = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($validate))
        {
            $user = Auth::user();
            Session::regenerateToken();
            $redirectMap = [
                'super_admin' => 'super-admin/dashboard',
                'admin_sekolah' => 'admin-sekolah/dashboard'
            ];
    
            if (isset($redirectMap[$user->role])) {
                return redirect($redirectMap[$user->role]);
            }
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function logout()
    {
        Auth::logout();
        Session::regenerateToken();
        return redirect('/');
    }
}
