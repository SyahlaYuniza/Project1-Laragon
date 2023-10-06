<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//mahasiswa
Route::get('/mahasiswa', function () {

    $array_nama = ["Risa", "Rudi", "Bambang"];
    return view('universitas.mahasiswa')->with('mahasiswa', $array_nama);
});

Route::get('/hello', function () {
    return 'Hello world';
});

// route admin
Route::get('/admin', function () {
    return view ('dashboard');
});