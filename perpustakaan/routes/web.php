<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriBukuController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');



// Route Buku
Route::get('/buku',[BukuController::class,'buku'])->name('buku');



// Route Staff
Route::get('.staff',[StaffController::class,'staff'])->name('staff');



// Route member
Route::get('/member',[MemberController::class,'member'])->name('member');


// Route Kategori Buku
Route::get('/kategori',[KategoriBukuController::class,'kategori'])->name('kategori');