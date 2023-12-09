@extends('layouts.master')
  
@section('title', 'gumilang snack | edit produk')
  
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Produk</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('produk') }}">Produk</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Produk</li>
    </ol>
</div>

<form action="{{ route('produk.update', $produk->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Produk</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $produk->nama_produk }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" name="kategori" class="form-control" placeholder="Kategori" value="{{ $produk->kategori }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Berat</label>
            <input type="text" name="berat" class="form-control" placeholder="Berat" value="{{ $produk->berat }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Stok</label>
            <input type="number" name="stok" class="form-control" placeholder="Stok" value="{{ $produk->stok }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Harga Produk</label>
            <input type="text" name="harga" class="form-control" placeholder="Harga" value="{{ $produk->harga_produk }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" >{{ $produk->deskripsi_produk }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Foto Produk</label>
            <img src="image/{{ $produk->foto_produk }}" alt="" width="60px" height="60px">
            <input type="file" name="foto" class="form-control" placeholder="Foto" value="{{ $produk->foto_produk }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Expired</label>
            <input type="date" name="expired" class="form-control" placeholder="Expired" value="{{ $produk->expired }}">
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
</form>

@endsection