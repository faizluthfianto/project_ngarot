<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_jadwal extends Model
{
    protected $table = 'jadwal';
    protected $primaryKey = 'id_jadwal';
    protected $fillable = ['tanggal_mulai','tanggal_selesai','waktu'];
}
