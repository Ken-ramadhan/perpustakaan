<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function store(Request $request)
{
    // logika simpan atau proses data
    return back()->with('success', 'Data berhasil disimpan.');
}

}
