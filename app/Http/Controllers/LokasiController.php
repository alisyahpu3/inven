<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LokasiController extends Controller
{
    public function lokasi()
    {
        // Mengirim data ke view jika diperlukan
        return view('lokasi.index');
    }
}
