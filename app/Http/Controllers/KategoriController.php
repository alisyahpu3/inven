<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function kategori()
    {
        // Mengirim data ke view jika diperlukan
        return view('kategori.index');
    }
}
