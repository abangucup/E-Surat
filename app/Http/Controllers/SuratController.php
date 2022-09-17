<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;

class SuratController extends Controller
{

    public function suratmasuk(){
        if (auth()->user()->role_id == 1) {
            $surats = Surat::get();
            return view('surats.admin.suratmasuk',compact('surats'));
        } elseif (auth()->user()->role_id == 2) {
            return view('surats.dosen.suratmasuk');
        }else 
        return view('surats.mahasiswa.suratmasuk');
    }
    public function suratkeluar(){
        if (auth()->user()->role_id == 1) {
            return view('surats.admin.suratkeluar', compact('surats'));
        } elseif (auth()->user()->role_id == 2) {
            $surats = Surat::where('user_id', '2')->get();
            return view('surats.dosen.suratkeluar', compact('surats'));
        }else 
        $surats = Surat::where('user_id', '3')->get();
        return view('surats.mahasiswa.suratkeluar', compact('surats'));
    }
    public function suratkegiatan(){
        return view('surats.suratmasuk');
    }

}