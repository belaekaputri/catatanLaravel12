<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});


Route::get('/about', function () {
    $data = [
        'nama' => 'Bela Eka Putri',
        'umur' => 28,
        'alamat' => 'Indonesia'
    ];
    return view('pages.about', $data); //About.blade.php di views
    //atau
    /*
    return view('pages.about',  [
        'nama' => 'Bela Eka Putri',
        'umur' => 28,
        'alamat' => 'Indonesia'
    ];)
    */
});


Route::get('/about/{id}/detail', function ($id) {
    return view('pages.detail', [
        'nama' => 'Bela Eka Putri',
        'umur' => 28,
        'alamat' => 'Indonesia',
        'nomor' => $id
    ]);
});

Route::view('/contact', 'pages.contact');
//jika ada yang akses /contact,arahkan ke views>folder Pages> contact.blade.php
Route::view('/product', 'pages.product');

//controller
//Route::get('/product', [ProductController::class, 'getProduk']);
Route::get('/product', [ProductController::class, 'index']);
//routing /produk mengarah ke Controller:ProductController method getProduk
Route::get('/product/tambah', [ProductController::class, 'tambahProduk']);

Route::get('/product/create', [ProductController::class, 'create']); ///meanmpilkan halaman form data
Route::post('/product', [ProductController::class, 'store']); //untuk mengelola halaman yang dikirim dari form data
Route::get('/product/{id}', [ProductController::class, 'show']); //untuk menampilkan halaman detail data
Route::get('/product/{id}/edit', [ProductController::class, 'edit']);
Route::put('product/{id}', [ProductController::class, 'update']);

Route::delete('/product/{id}', [ProductController::class, 'destroy']);
