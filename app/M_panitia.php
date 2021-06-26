<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_panitia extends Model
{
    protected $table = 'panitia';
    protected $primaryKey = 'id_panitia';
    protected $fillable = ['nama','jabatan','deskripsi','foto'];
}
