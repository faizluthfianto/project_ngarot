<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

use App\M_user;

class PesertaController extends Controller
{
    public function index (){
        if(!Session::get('loginpeserta')){
            return redirect('/login');
        } else {
            $id = Session::get('id_user');
            $data = M_user::where('id_user', $id)->first();
            return view('peserta.index', compact('data'));
        }
    }

    public function edit_peserta(Request $request){
        $id = Session::get('id_user');
        $data = M_user::find($id);
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->ttl = $request->ttl;
        $data->jenis_kelamin = $request->jk;
        $data->nohp = $request->nohp;
        $data->alamat = $request->alamat;
        $data->update();
        return redirect('/peserta');
    }
}
