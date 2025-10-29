@extends('layouts.master')

@section('konten')
<h1>Daftar Produk Kami</h1>
<hr>
<a href="/product/tambah" type="button" class="btn btn-primary mb-3">Tambah Data</a>
<div class="alert alert-primary">
    <b>Nama Toko:</b>{{$nama}}<br>
    <b>Alamat Toko:{{$alamat}}</b><br>
    <b>Tipe Toko:{{$type}}</b>



</div>
<div class="card">
    <div class="card-header">Daftar Produk Kami</div>

    <div class="card-body">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">N0</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Laptop ROG</td>
                    <td>25</td>
                    <td>150000000</td>
                    <td><button type="button" class="btn btn-danger">Hapus</button><button type="button" class="btn btn-warning">Edit</button></td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
@endsection