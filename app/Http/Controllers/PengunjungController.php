<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PengunjungController extends Controller
{
    public function index()
    {
        return Inertia::render('Main');
    }
}     
