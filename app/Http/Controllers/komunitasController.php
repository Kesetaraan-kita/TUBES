<?php

namespace App\Http\Controllers;

use App\Models\Komunitas;  // Pastikan model Komunitas diimport
use Illuminate\Http\Request;

class KomunitasController extends Controller
{
    public function showKomunitas()
    {
        // Mengambil semua data komunitas dari model Komunitas
        $komunitas = Komunitas::all();

        // Kirim data komunitas ke view 'komunitas'
        return view('komunitas', compact('komunitas'));  // Pastikan 'komunitas' adalah variabel yang dikirim ke view
    }
}
