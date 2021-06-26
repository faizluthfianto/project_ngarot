<?php

namespace App\Http\Controllers;
use App\M_panitia;
use App\M_sejarah;
use App\M_jadwal;
use App\M_user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = M_panitia::all();
        return view ('user.index',compact('data'));
    }

    public function viewsejarah(){
        $data = M_sejarah::where('id_sejarah',1)->first();
        return view ('user.sejarahngarot', compact('data'));
    }

    public function viewsyarat(){
        $data = M_sejarah::where('id_sejarah',3)->first();
        return view ('user.syaratngarot', compact('data'));
    }

    public function viewjadwal(){
        $data = M_jadwal::where('id_jadwal',1)->first();
        return view ('user.jadwalngarot',compact('data'));
    }

    public function viewdaftar(){
        return view ('user.daftarngarot');
    }

    public function viewsjdesa(){
        return view ('user.sejarahdesa');
    }

    public function viewalat(){
        return view ('user.alat');
    }

    public function viewgadis(){
        return view ('user.gadisngarot');
    }

    public function viewbujang(){
        return view ('user.bujangngarot');
    }

    public function daftar_peserta(Request $request){
        $data = new M_user;
        $data->nama = $request->nama;
        $data->level = $request->level;
        $data->email = $request->email;
        $data->ttl = $request->ttl;
        $data->jenis_kelamin = $request->jk;
        $data->password =bcrypt($request->password);
        $data->nohp = $request->nohp;
        $data->status = 0;
        $data->alamat = $request->alamat;
        if($request->hasFile('gambar')) {
            // File::delete('Foto/'. $data->image);
            $image = $request->file('gambar');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('Foto'), $filename);
            $data->gambar = $request->file('gambar')->getClientOriginalName();
        }
        $data->save();
        return redirect('/');
    }
}
