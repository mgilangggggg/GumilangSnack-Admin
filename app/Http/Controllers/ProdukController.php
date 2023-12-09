<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::orderBy('created_at', 'desc')->get();
  
        return view('produk.index', compact('produk'));
    }

    // CREATE
    public function create()
    {
        return view('produk.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'kategori' => 'required',
            'berat' => 'required',
            'stok' => 'required|numeric',
            'harga_produk' => 'required|numeric',
            'deskripsi_produk' => 'required',
            'foto_produk' => 'required|mimes:png,jpg,jpeg|max:5048',
            'expired' => 'required'

        ]);

        Produk::create([
            'nama_produk' => $request->nama_produk,
            'kategori' => $request->kategori,
            'berat' => $request->berat,
            'stok' => $request->stok,
            'harga_produk' => $request->harga_produk,
            'deskripsi_produk' => $request->deskripsi_produk,
            'foto_produk' => $request->foto_produk,
            'expired' => $request->expired
        ]);

        $foto_file = $request->file('foto_produk');
        $foto_exstensi = $foto_file->extension();
        $foto_nama = date('ymdhis').".".$foto_exstensi;
        $foto_file->move(public_path('img'), $foto_nama);

        return redirect()->route('produk')->with('message', 'Data produk berhasil ditambahkan');
    }

    // READ
    public function show($id)
    {
        $produk = Produk::findOrFail($id);
  
        return view('produk.show', compact('produk'));
    }

    // UPDATE
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
  
        return view('produk.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
  
        $produk->update($request->all());

        return redirect()->route('produk')->with('message', 'Produk berhasil diperbarui');
    }

    // DELETE
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
  
        $produk->delete();
  
        return redirect()->route('produk')->with('message', 'Produk berhasil dihapus');
    }
}
