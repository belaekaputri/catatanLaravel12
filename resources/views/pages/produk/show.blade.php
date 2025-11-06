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
    <div class="card-header d-flex justify-content-between align-items-center">Daftar Produk Kami

        <div class="d-flex gap-2">
            @if ( Request()->keyword != '')
            <a href="/product" class="btn btn-info">
                Reset
            </a>
            @endif
            <form class="input-group" style="width:350px">
                <input type="text" class="form-control" placeholder="Cari Data Produk" aria-label="Recipient’s username" aria-describedby="button-addon2" name="keyword" value="{{Request()->keyword}}">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Button</button>
            </form>
        </div>
    </div>

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

                @forelse ($data_produk as $item)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th><!--no otomTIS -->
                    <td>{{$item->nama_produk}}</td>
                    <td>{{$item->harga}}</td>
                    <td>{{$item->deskripsi_produk}}</td>
                    <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus{{$item->id_produk}}">
                            Hapus
                        </button>
                        <a href="/product/{{$item->id_produk}}/edit" class="btn btn-warning">Edit</a>
                        <a href="/product/{{$item->id_produk}}" class="btn btn-info">Detail</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Data yang anda cari tidak ada !</td>
                </tr>
                @endforelse







            </tbody>
        </table>
    </div>
</div>

@foreach ($data_produk as $item)
<div class="modal fade" id="hapus{{$item->id_produk}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="/product/{{$item->id_produk}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin ingin menghapus Produk: {{$item->nama_produk}}?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus Data</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endforeach


@endsection