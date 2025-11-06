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


    public function create()
    {
        return view('pages.produk.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|min:8|max:12',
            'harga' => 'required',
            'deskripsi_produk' => 'required'
        ], [
            'nama_produk.min' => 'nama produk minimal 8 karakter',
            'nama_produk.max' => 'nama produk maksimal 12 karakter',
            'nama_produk.required' => 'inputan nama produk wajib diisi',
            'harga.required' => 'inputan harga wajib diisi',
            'deskripsi_produk.required' => 'inputan deskripsi produk wajib diisi'
        ]);
        //untuk menambahkan ke table  tb_produk
        //DB::table('tb_produk')->create([]); query bulilderr
        produk::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'deskripsi_produk' => $request->deskripsi_produk,
            'kategori_id' => '1'

        ]);
        return redirect('/product')->with(
            'pesan',
            'berhasil menambahkan data'
        );
    }
    /* public function tambahProduk()
    {
        return view('pages.addProduct');
    }*/

    public function show($id)
    {
        //equilent
        $data = produk::findOrFail($id);

        //query builder
        //DB::table('tb_produk')->where('id_produk', $id)->firstOrFail();
        return view('pages.produk.detail', [
            'produk' => $data
        ]);
    }
    public function edit($id)
    {
        //mengambil satu data spesifik dari id yang dikirimkan parameter
        $data = produk::findOrFail($id);
        //dd($data);
        return view(
            'pages.produk.edit',
            [
                'data' => $data
            ]
        );
    }




    public function update($id, Request $request)
    {

        $request->validate([
            'nama_produk' => 'required|min:8|max:12',
            'harga' => 'required',
            'deskripsi_produk' => 'required'
        ], [
            'nama_produk.min' => 'nama produk minimal 8 karakter',
            'nama_produk.max' => 'nama produk maksimal 12 karakter',
            'nama_produk.required' => 'inputan nama produk wajib diisi',
            'harga.required' => 'inputan harga wajib diisi',
            'deskripsi_produk.required' => 'inputan deskripsi produk wajib diisi'
        ]);
        produk::where('id_produk', $id)->update([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'deskripsi_produk' => $request->deskripsi_produk
        ]);
        return redirect('/product')->with('pesan', 'data berhasil di edit');
    }
    public function destroy($id)
    {
        //query untuk menghapus data
        produk::findOrFail($id)->delete();
        return redirect('/product')->with('pesan', 'data berhasil di hapus');
    }
}
