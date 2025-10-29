<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //ini harus di import

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //query untuk  menambah data
        DB::table('tb_produk')->insert([
            'nama_produk' => 'Hp',
            'harga' => 150000,
            'deskripsi_produk' => 'ini contoh deskripsi',
            'kategori_id' => '2',
            'created_at' => now(),
            'updated_at' => now()

        ]);
    }
}
