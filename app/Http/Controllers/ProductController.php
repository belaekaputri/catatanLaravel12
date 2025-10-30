<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index()
    {
        $toko = [
            'nama_toko' => 'Makmur Jaya Abadi',
            'alamat' => 'Sungai Limau',
            'type' => 'Ruko'
        ];
        $produk = produk::get(); //ambil semua data yang ada di tabel produk
        //dd($data); debug data
        // $queryBuilder = DB::table('tb_produk')->get(); //query untuk mengambil semua data di tabel
        //dd($queryBuilder);
        return view('pages.produk.show', [
            'data_toko' => $toko,
            'data_produk' => $produk,
        ]);
    }




    /* public function getProduk()
    {
        $data_toko = [
            'nama' => 'Makmur Jaya Abadi',
            'alamat' => 'sumatra barat',
            'type' => 'ruko'
        ];
        return view('pages.product', $data_toko);
    }*/

    public function tambahProduk()
    {
        return view('pages.addProduct');
    }
}
