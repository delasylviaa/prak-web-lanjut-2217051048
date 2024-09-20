<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        return view('profile'); // Arahkan ke view 'profile.blade.php'
    }

    public function create() {
        return view('create_user');
    }
    
}