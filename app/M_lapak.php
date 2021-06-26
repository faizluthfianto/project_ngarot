<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_lapak extends Model
{
    protected $table = 'lapak';
    protected $primaryKey = 'id_lapak';
    protected $fillable = ['deskripsi','harga','gambar'];
}
