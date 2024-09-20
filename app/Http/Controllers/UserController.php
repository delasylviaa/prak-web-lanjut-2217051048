<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Menampilkan form create_user
    public function create()
    {
        return view('create_user');
    }

    // Menyimpan data dari form ke database
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'npm' => 'required|string|max:10',
            'kelas' => 'required|string|max:10',
        ]);

        // Menyimpan data ke database (kamu harus punya model User atau model lain yang relevan)
        // User::create($validated);

        // Redirect setelah berhasil menyimpan
        return redirect()->route('user.create')->with('success', 'User berhasil ditambahkan!');
    }
}