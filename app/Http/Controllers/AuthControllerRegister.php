<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Pastikan model User digunakan
use Illuminate\Support\Facades\Hash;

class AuthControllerRegister extends Controller
{
    public function showRegisterForm()
    {
        return view('register'); // Menampilkan form register
    }

    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        // Simpan data ke database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Enkripsi password
        ]);

        // Redirect ke halaman login setelah berhasil register
        return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.');
    }
}
