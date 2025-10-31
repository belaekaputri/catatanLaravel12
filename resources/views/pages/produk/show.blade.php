@extends('layouts.master')

@section('konten')
<h1>Daftar Produk Kami</h1>
<hr>
<a href="/product/create" type="button" class="btn btn-primary mb-3">Tambah Data</a>
<div class="alert alert-primary">
    <b>Nama Toko:</b>{{$data_toko['nama_toko']}}<br>
    <b>Alamat Toko:{{$data_toko['alamat']}}</b><br>
    <b>Tipe Toko:{{$data_toko['type']}}</b>
</div>
@if (session('pesan'))
<div class="alert alert-primary">{{session('pesan')}}</div>
@endif
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
                @foreach ($data_produk as $item)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th><!--no otomTIS -->
                    <td>{{$item->nama_produk}}</td>
                    <td>{{$item->harga}}</td>
                    <td>{{$item->deskripsi_produk}}</td>
                    <td><button type="button" class="btn btn-danger">Hapus</button>
                        <button type="button" class="btn btn-warning">Edit</button>
                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</div>
@endsection