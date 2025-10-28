<?php

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
