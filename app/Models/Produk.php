<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produks';

    protected $fillable = ['nama_produk', 'kategori', 'berat', 'stok', 'harga_produk', 'deskripsi_produk', 'foto_produk', 'expired'];
}
