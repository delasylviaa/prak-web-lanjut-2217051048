<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfile()
    {
        // Kamu bisa mengganti data ini dengan mengambil dari database nanti
        $profile = [
            'nama' => 'Dela Sylviayani',
            'kelas' => 'D',
            'npm'   => '2217051048'
        ];

        // Mengirimkan data ke view profile
        return view('profile', compact('profile'));
    }
}