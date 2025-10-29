<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProduk()
    {
        $data_toko = [
            'nama' => 'Makmur Jaya Abadi',
            'alamat' => 'sumatra barat',
            'type' => 'ruko'
        ];
        return view('pages.product', $data_toko);
    }

    public function tambahProduk()
    {
        return view('pages.addProduct');
    }
}
