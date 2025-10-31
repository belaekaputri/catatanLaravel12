<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{   //inisiasi tabel produk
    protected $table = 'tb_produk';

    //inisiasi primary key dalam tabel
    protected $primaryKey = 'id_produk';


    //data apa yan bisa kita isiikan ke tabel inisiasasi data yang dapat kita isi
    protected $fillable = [
        'nama_produk',
        'harga',
        'stok',
        'deskripsi_produk',
        'kategori_id'
    ];



    //insiasi data yang tida boleh kita isi
    protected $guarded = ['id_produk'];
}
