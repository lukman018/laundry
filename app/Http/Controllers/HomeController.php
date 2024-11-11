<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{

    public function welcome(){
        return view('/welcome');
    }

    public function index()
    {
        return view('/login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        // Mencoba login
        if (Auth::attempt($infologin)) {
            $role = Auth::user()->role;

            // Redirect berdasarkan role
            switch ($role) {
                case 'Admin':
                    return redirect()->route('produk.index');
                case 'Petugas':
                    return redirect()->route('petugas.index');
                case 'Pimpinan':
                    return redirect()->route('pimpinan.index');
                default:
                    Auth::logout();
                    return redirect('/login')->withErrors(['role' => 'Role tidak valid']);
            }
        } else {
            // Jika login gagal
            return redirect('/login')->withErrors(['login' => 'Username dan password tidak sesuai'])->withInput();
        }
    }

    // Untuk logout
    public function logout()
    {
        Auth::logout(); // Mengeluarkan pengguna dari sesi
        return redirect()->route('login'); // Redirect ke halaman utama setelah logout
    }
}
