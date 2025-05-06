<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    //
    public function staff()
    {
        return view('staff');
    }

    public function store()
    {
        $this->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required',
            'alamat' => 'required',
            'tgl_jaga' => 'required',
        ]);
    }
}
