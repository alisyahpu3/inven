<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function masuk()
    {
        // Mengirim data ke view jika diperlukan
        return view('masuk.index');
    }

    public function keluar()
    {
        // Mengirim data ke view jika diperlukan
        return view('keluar.index');
    }
}
