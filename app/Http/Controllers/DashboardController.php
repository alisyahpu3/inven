<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengirim data ke view jika diperlukan
        return view('dashboard');
    }
}
