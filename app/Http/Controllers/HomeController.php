<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\Ekstrakulikuler;
use App\Models\Fasilitas;
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
