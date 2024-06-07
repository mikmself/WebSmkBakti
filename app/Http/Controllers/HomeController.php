<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\Guru;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('userpage.index');
    }
    public function alurPendaftaran(){
        return view('userpage.alurpendaftaran');
    }
    public function beasiswa(){
        $dataBeasiswa = Beasiswa::all();
        return view('userpage.beasiswa',compact('dataBeasiswa'));
    }
    public function dataGuru(){
        $dataGuru = Guru::all();
        return view('userpage.dataguru',compact('dataGuru'));
    }
    public function ekstrakulikuler(){
        return view('userpage.ekstrakulikuler');
    }
    public function fasilitas(){
        return view('userpage.fasilitas');
    }
    public function kontak(){
        return view('userpage.kontak');
    }
    public function pendaftaranWebsite(){
        return view('userpage.pendaftaran-website');
    }
    public function pendaftaranWhatsapp(){
        return view('userpage.pendaftaran-whatsapp');
    }
    public function strukturOrganisasi(){
        return view('userpage.struktur-organisasi');
    }
    public function visiMisi(){
        return view('userpage.visimisi');
    }
}
