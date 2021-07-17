<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

use App\M_user;
use App\M_jadwal;

class PesertaController extends Controller
{
    public function index (){
        if(!Session::get('loginuser')){
            return redirect('/login');
        } else {
           
            return view('peserta.index');
        }
    }

    public function edit(){
        if(!Session::get('loginuser')){
            return redirect('/login');
        } else {
        $id = Session::get('id_user');
        $data = M_user::where('id_user', $id)->first();
        return view('peserta.edituser',compact('data'));
        }
    }

    public function daftar(){
        if(!Session::get('loginuser')){
            return redirect('/login');
        } else {
        $id = Session::get('id_user');
        $data = M_user::where('id_user', $id)->first();
        $date = M_jadwal::where('id_jadwal', 1)->first();
        
        // if($i->tgl_daftar)
        return view('peserta.daftar', compact('data' ,'date'));
        }
    }

    public function postdaftar(){
       
        $id = Session::get('id_user');
        $isi = M_user::where('id_user', $id)->first();
        if($isi->gambar != null){
            $data = M_User::where('id_user', $id)->update([
                'peserta' => 1,
            ]);
            return redirect('/daftar_peserta');
        }else{
            return redirect('/daftar_peserta')->with('gagal', 'Isi Data Diri Anda dengan Benar');
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
