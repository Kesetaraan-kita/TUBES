<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('login'); // Menampilkan form login
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Coba login dengan kredensial yang diberikan
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // Jika berhasil, arahkan ke dashboard
            return redirect()->intended('dashboard');
        }

        // Jika gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'The provided credentials are incorrect.',
        ]);
    }

    // Logout user
    public function logout()
    {
        Auth::logout();
        return redirect('/login'); // Arahkan kembali ke halaman login setelah logout
    }
}
