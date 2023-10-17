<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChasierController;
use Illuminate\Support\Facades\Route;


Route::get('/category', [CategoryController::class, 'index'])->name('category-index'); 
Route::get('/category/create', [CategoryController::class, 'tambah'])->name('category-create');
Route::post('/category/store', [CategoryController::class, 'simpan'])->name('category-store');

Route::get('/chasier', [ChasierController::class, 'index'])->name('chasier-index'); 
Route::get('/chasier/create', [ChasierController::class, 'tambah'])->name('chasier-create');
Route::post('/chasier/store', [ChasierController::class, 'simpan'])->name('chasier-store');


//mahasiswa
Route::get('/mahasiswa', function () {

    $array_nama = ["Risa", "Rudi", "Bambang"];
    return view('universitas.mahasiswa')->with('mahasiswa', $array_nama);
});

Route::get('/hello', function () {
    return 'Hello world';
});

// route admin
Route::get('/dashboard', function () {
    return view ('dashboard');
})->name('dashboard');

