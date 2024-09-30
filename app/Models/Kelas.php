<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function users()
    {
        return $this->hasMany(UserModel::class, 'kelas_id');
    }

// Remove the create() method from here

    public function create(){
        return view('create_user', ['kelas' => Kelas::all(),
    ]);
    }
}