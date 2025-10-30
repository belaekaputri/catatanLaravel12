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
