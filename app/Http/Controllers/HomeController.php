<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\Berita;
use App\Models\Ekstrakulikuler;
use App\Models\Fasilitas;
use App\Models\Guru;

class HomeController extends Controller
{
    public function index(){
        $dataBerita = Berita::get()->take(4);
        return view('userpage.index',compact('dataBerita'));
    }
    public function semuaBerita(){
        $dataBerita = Berita::all();
        return view('userpage.semua-berita',compact('dataBerita'));
    }
    public function showBerita($slug){
        $berita = Berita::where('slug',$slug)->first();
        return view('userpage.detail-berita',compact('berita'));
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
        $dataEkstrakulikuler = Ekstrakulikuler::all();
        return view('userpage.ekstrakulikuler',compact('dataEkstrakulikuler'));
    }
    public function fasilitas(){
        $dataFasilitas = Fasilitas::all();
        return view('userpage.fasilitas',compact('dataFasilitas'));
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
