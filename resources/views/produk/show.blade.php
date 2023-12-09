@extends('layouts.master')
@section('title', 'gumilang snack | show produk')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail Produk</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('produk') }}">Produk</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detail Produk</li>
    </ol>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Nama Produk</label>
        <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $produk->nama_produk }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Kategori</label>
        <input type="text" name="kategori" class="form-control" placeholder="kategori" value="{{ $produk->kategori }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Berat</label>
        <input type="text" name="berat" class="form-control" placeholder="Berat" value="{{ $produk->berat }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Stok</label>
        <input class="form-control" name="stok" placeholder="Stok" value="{{ $produk->stok }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Harga Produk</label>
        <input type="text" name="harga" class="form-control" placeholder="Harga" value="{{ $produk->harga_produk }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Deskripsi Produk</label>
        <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" readonly>{{ $produk->deskripsi_produk }}</textarea>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Foto Produk</label>
        <img src="image/{{ $produk->foto_produk }}" alt="" width="60px" height="60px">
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Expired</label>
        <input type="text" name="expired" class="form-control" placeholder="Expired" value="{{ $produk->expired }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Dibuat Pada</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $produk->created_at }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Diperbarui Pada</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $produk->updated_at }}" readonly>
    </div>
</div>

@endsection