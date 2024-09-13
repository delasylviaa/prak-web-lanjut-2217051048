<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Fungsi profile yang menerima 3 parameter dari URL
    public function profile($nama = "", $kelas = "", $npm = "")
    {
        // Membuat variabel $data yang berisi informasi nama, kelas, dan npm
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm
        ];
        
        // Mengirimkan data ke view profile
        return view('profile', $data);
    }
}