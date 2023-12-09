@extends('layouts.master')
@section('title', 'gumilang snack | tambah produk')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Produk</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('produk') }}">Produk</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Produk</li>
    </ol>
</div>

<div class="row">
    <div class="col-10 mx-auto">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form Tambah Produk</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" name="nama_produk" class="form-control">
                        @error('nama_produk')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <input type="text" name="kategori" class="form-control">
                        @error('kategori')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Berat</label>
                        <input type="text" name="berat" class="form-control">
                        @error('berat')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="number" name="stok" class="form-control">
                        @error('stok')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Harga Produk</label>
                        <input type="text" name="harga_produk" class="form-control">
                        @error('harga_produk')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Produk</label>
                        <textarea type="text" name="deskripsi_produk" class="form-control"></textarea>
                        @error('deskripsi_produk')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="foto_produk">Foto Produk</label>
                        <input type="file" name="foto_produk" class="form-control" id="foto_produk">
                        @error('foto_produk')
                        {{ $message }}
                    @enderror
                    </div>
                    <div class="form-group">
                        <label>Expired</label>
                        <input type="date" name="expired" class="form-control col-5">
                        @error('expired')
                        {{ $message }}
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection