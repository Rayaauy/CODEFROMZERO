<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function getBeranda() {
        return view('pages.beranda', [
            "nama" => "Hisyam",
            "posisi" => "Pelajar",
        ]);
    }
}
