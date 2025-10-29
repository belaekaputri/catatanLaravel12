<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        //sintaks dibawah untuk membuat tabel produk
        Schema::create('tb_produk', function (Blueprint $table) {
            $table->id('id_produk'); //defaultnya id
            $table->string('nama_produk', 150); //default length dari laravel 255
            $table->integer('harga');
            $table->string('deskripsi_produk');
            $table->integer('kategori_id');
            $table->timestamps(); //created_at & updated_at
        });
    }
    //sudah dibuat ini langsung buat php artisan migrate:fresh mengahpus semua tabel dan menjalankan ulang tabel yang awal
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
