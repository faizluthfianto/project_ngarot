<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_produk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    protected $fillable = ['nama_produk','deskripsi','harga','pembuat','gambar'];
}
