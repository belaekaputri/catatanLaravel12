@extends('layouts.master')
@section('konten')
<div class="card">
    <div class="card-header">Tambah Data Produk</div>
    <div class="card-body">
        <form action="/product" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" name="nama_produk" value="{{old('nama_produk')}}">
                        @error('nama_produk')
                        <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>


                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">Harga Produk</label>
                        <input type="text" class="form-control" name="harga" value="{{old('harga')}}">
                        @error('harga')
                        <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-floating">
                        <textarea name="deskripsi_produk" id="" class="form-control">{{old('deskripsi_produk')}}</textarea>
                        <label for="floatingTextarea2">Deskripsi Produk</label>
                        @error('deskripsi_produk')
                        <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection