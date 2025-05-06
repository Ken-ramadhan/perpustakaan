<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    protected $table = 'staff';
    protected $fillable = [
        'nama',
        'email',
        'no_telp',
        'alamat',
        'tgl_jaga',
    ];
}
