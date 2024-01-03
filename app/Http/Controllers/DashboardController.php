<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function super_admin()
    {
        return Inertia::render('Auth/DashboardSuperAdmin');
    }

    public function admin_sekolah()
    {
        return Inertia::render('Auth/DashboardAdminSekolah');
    }
}
