@extends('layouts.master')
@section('title', 'gumilang snack | produk')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Produk</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Produk</li>
    </ol>
</div>

{{-- Menampilkan message --}}
@if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('produk.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="table-success">
                    <tr class="text-center text-dark">
                        <th>#ID</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Berat</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Foto</th>
                        <th>Expired</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @if ($produk->count() > 0)

                        @foreach ($produk as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->nama_produk }}</td>
                                <td>{{ $row->kategori }}</td>
                                <td>{{ $row->berat }}</td>
                                <td>{{ $row->stok }}</td>
                                <td>{{ $row->harga_produk }}</td>
                                <td>{{ $row->deskripsi_produk }}</td>
                                <td>
                                    @if ($row->foto_produk)
                                    <img style="max-width: 50px;max-height:50px" src="{{ url('img').'/'.$row->foto_produk }}">
                                    @endif
                                </td>
                                <td>{{ $row->expired }}</td>

                                <td class="align-middle">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('produk.show', $row->id) }}" type="button" class="btn btn-success"><i class="far fa-eye"></i></a>
                                        <a href="{{ route('produk.edit', $row->id) }}" type="button" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('produk.destroy', $row->id) }}" method="post" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Apakah Anda ingin menghapus produk?')">
                                            @csrf
                                            @method('Delete')
                                            <button class="btn btn-danger m-0"><i class="fa fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    @else
                    <tr>
                        <td class="text-center text-danger" colspan="10">Produk belum ada, klik tambah untuk menambahkan data produk baru.</td>
                    </tr>
                    @endif

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

