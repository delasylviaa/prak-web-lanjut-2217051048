<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfile()
    {
        // Data profil yang akan ditampilkan
        $nama = "Nama Lengkap"; 
        $kelas = "Kelas A";     
        $npm = "123456789";

        // Mengirimkan data ke view
        return view('profile', compact('nama', 'kelas', 'npm'));
    }
}
