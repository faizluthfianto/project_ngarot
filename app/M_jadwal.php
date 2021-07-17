<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_jadwal extends Model
{
    public $timestamps = false;
    protected $table = 'jadwal';
    protected $primaryKey = 'id_jadwal';
    protected $fillable = ['tgl_mulai','tgl_berakhir','tgl_daftar','tgl_selesai'];
}
