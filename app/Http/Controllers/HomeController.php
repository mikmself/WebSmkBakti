<?php

namespace App\Http\Controllers;

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
        return view('userpage.beasiswa');
    }
    public function dataGuru(){
        return view('userpage.dataguru');
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
