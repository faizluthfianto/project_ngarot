<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_sejarah extends Model
{
    protected $table = 'sejarah';
    protected $primaryKey = 'id_sejarah';
    protected $fillable = ['judul','deskripsi','gambar'];
}
