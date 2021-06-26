<?php

namespace App\Http\Controllers;

use App\M_User;
use App\M_sejarah;
use App\M_lapak;
use App\M_produk;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view('user.login');
    }

    public function postlogin(Request $request){
        $email = $request->email;
        $password = $request->password;

        $user = M_User::where('email', $email)->first();

        if($user->level == 'admin'){
            if($user){
                if(Hash::check($password,$user->password)){
                    Session::put('id_user',$user->id_user);
                    Session::put('nama',$user->nama);
                    Session::put('loginadmin',TRUE);
                    return redirect('/home')->with('success', 'Login Berhasil');
                }else{
                    return redirect('/login')->with('info', 'E-mail / Password Salah');
                }
            } else {
                return redirect('/login')->with('info', 'E-mail / Password Salah');
            }
        }

        if($user->level == 'peserta'){
            if($user){
                if(Hash::check($password,$user->password)){
                    Session::put('id_user',$user->id_user);
                    Session::put('nama',$user->nama);
                    Session::put('loginuser',TRUE);
                    return redirect('/')->with('success', 'Login Berhasil');
                }else{
                    return redirect('/login')->with('info', 'E-mail / Password Salah');
                }
            } else {
                return redirect('/login')->with('info', 'E-mail / Password Salah');
            }
        }


    }

    public function logout(){
        Session::flush();
        return redirect('/login');
    }

    public function gantipass(Request $request){
        $id = $request->id_user;
        $user = M_User::where('id_user',$id)->first();
        $pass = $user->password;

        

        if(\Hash::check($request->curpass, $pass))
        {
            // dd('j');
            $data = M_User::find($id);
            $data->password = \Hash::make($request->input('newpass'));
            $data->save();
            Session::flush();
            return redirect('/login')->with('success', 'Password berhasil diganti');
        } else {
            // dd('k');
            return back()->with('error','Password lama anda salah');
        }
        
    }

    public function index(){
        if (!session::get('loginadmin')) {
            return redirect('login');
        }else{
            $lapak = M_lapak::count();
            $produk = M_produk::count();
            $peserta = M_user::where('status', 1)->count();
            return view('admin.dashboard' ,compact('lapak','produk', 'peserta'));
        }
    }

    public function sej_ngarot(){
        if (!Session::get('loginadmin')) {
            return redirect('login');
        } else {
            $sej = M_sejarah::where('id_sejarah', 1)->first();
            return view('admin.sej_ngarot', compact('sej'));
        }
    }

    public function sej_desa(){
        if (!Session::get('loginadmin')) {
            return redirect('login');
        } else {
            $sej = M_sejarah::where('id_sejarah', 2)->first();
            return view('admin.sej_desa', compact('sej'));
        }
    }

    public function sarat_ngarot(){
        if (!Session::get('loginadmin')) {
            return redirect('login');
        } else {
            $sej = M_sejarah::where('id_sejarah', 3)->first();
            return view('admin.syarat_ngarot', compact('sej'));
        }
    }


    public function update_ngarot(Request $request){
        $id = $request->id_sejarah;
        // dd($id);
        $data = M_sejarah::find($id);
        $data->judul = $request->judul;
        $data->deskripsi = $request->isi;
        if($request->hasFile('gambar')) {
            File::delete('Foto/'. $data->image);
            $image = $request->file('gambar');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('Foto'), $filename);
            $data->gambar = $request->file('gambar')->getClientOriginalName();
        }
        $data->update();
        if($id == 1){
        return redirect('/sejngarot')->with('success', 'Berhasil');
        } elseif ($id == 2){
            return redirect('/sejdesa')->with('success', 'Berhasil');
        } elseif ($id == 3){
            return redirect('/saratngarot')->with('success', 'Berhasil');
        }
    }

    public function lapak(){
        if(!Session::get('loginadmin')){
            return redirect('/login');
        }else{
            $data = M_lapak::all();
            return view('admin.lapak', compact('data'));
        }
    }

    public function addlapak(Request $request){
        // $id = $request->id_sejarah;
        // dd($id);
        $data = new M_lapak;
        // $data->judul = $request->deskripsi;
        $data->deskripsi = $request->deskripsi;
        $data->harga = $request->harga;
        if($request->hasFile('gambar')) {
            // File::delete('Foto/'. $data->image);
            $image = $request->file('gambar');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('Foto/lapak'), $filename);
            $data->gambar = $request->file('gambar')->getClientOriginalName();
        }
        $data->save();
        return redirect('/lapak');
    }

    public function editlapak(Request $request){
        $id = $request->id_lapak;
        $data = M_lapak::find($id);
        $data->deskripsi = $request->deskripsi;
        $data->harga = $request->harga;
        if($request->hasFile('gambar')) {
            File::delete('Foto/lapak'. $data->image);
            $image = $request->file('gambar');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('Foto/lapak'), $filename);
            $data->gambar = $request->file('gambar')->getClientOriginalName();
        }
        $data->update();
        return redirect('/lapak')->with('success', 'Berhasil diedit');
    }

    public function hapus_lapak($id){
        $data = M_lapak::find($id);
        File::delete('Foto/lapak/'. $data->gambar);
        M_lapak::where('id_lapak', $id)->delete();
        return redirect('/lapak')->with('success', 'Berhasil dihapus');
    }

    public function produk(){
        if(!Session::get('loginadmin')){
            return redirect('/login');
        }else{
            $data = M_produk::all();
            return view('admin.produk', compact('data'));
        }
    }

    public function add_produk(Request $request){
        // $id = $request->id_sejarah;
        // dd($id);
        $data = new M_produk;
        $data->nama_produk = $request->nama_produk;
        $data->deskripsi = $request->deskripsi;
        $data->harga = $request->harga;
        $data->pembuat = $request->pembuat;
        if($request->hasFile('gambar')) {
            // File::delete('Foto/'. $data->image);
            $image = $request->file('gambar');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('Foto/produk'), $filename);
            $data->gambar = $request->file('gambar')->getClientOriginalName();
        }

        $data->save();
        return redirect('/produk');
    }

    public function editproduk(Request $request){
        $id = $request->id_produk;
        $data = M_produk::find($id);
        $data->nama_produk = $request->nama_produk;
        $data->deskripsi = $request->deskripsi;
        $data->harga = $request->harga;
        $data->pembuat = $request->pembuat;
        if($request->hasFile('gambar')) {
            File::delete('Foto/produk'. $data->image);
            $image = $request->file('gambar');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('Foto/produk'), $filename);
            $data->gambar = $request->file('gambar')->getClientOriginalName();
        }
        $data->update();
        return redirect('/produk')->with('success', 'Berhasil diedit');
    }

    public function hapus_produk($id){
        $data = M_produk::find($id);

        File::delete('Foto/produk/'. $data->gambar);
        M_produk::where('id_produk', $id)->delete();
        return redirect('/produk')->with('success', 'Berhasil dihapus');
    }

    public function peserta(){
        $data = M_User::where('level', 'peserta')->get();
        return view ('admin.datapeserta', compact('data'));
    }

    public function status_acc($id){
        $data = M_user::find($id);
        $status = 1;
        // dd($data->status);
        if ($data->status == 0){
            // dd('sd');
            $data->status = $status;
            $data->update();   
            // dd($data); 
            return redirect('datapeserta');
        } else {
            $data->status = 0;
            $data->update();
            return redirect('datapeserta');
        }  
    }

    public function hapus_user($id){
        $data = M_user::find($id);
        $data->delete();
        return redirect('datapeserta');
    }

}