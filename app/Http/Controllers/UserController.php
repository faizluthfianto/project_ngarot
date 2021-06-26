<?php

namespace App\Http\Controllers;
use App\M_panitia;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = M_panitia::all();
        return view ('user.index',compact('data'));
    }

    public function viewsejarah(){
        return view ('user.sejarahngarot');
    }

    public function viewsyarat(){
        return view ('user.syaratngarot');
    }

    public function viewjadwal(){
        return view ('user.jadwalngarot');
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
}
