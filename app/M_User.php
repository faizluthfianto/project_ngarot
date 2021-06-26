<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_User extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $fillable = ['nama','level','email','password','nohp','gambar'];

}
