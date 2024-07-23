<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\Berita;
use App\Models\Ekstrakulikuler;
use App\Models\Fasilitas;
use App\Models\Galeri;
use App\Models\Guru;

class HomeController extends Controller
{
    public function index(){
        $dataBerita = Berita::get()->take(4);
        return view('userpage.index',compact('dataBerita'));
    }
    public function detailJurusan($jurusan){
        $title = "";
        $image = "";
        $isi = "";
        if($jurusan=="tkjt"){
            $title = "Teknik Komputer Jaringan dan Telekomunikasi";
            $image = "/assets/img/content/jurusan/tkjt.jpeg";
            $isi = "Teknik Jaringan Komputer dan Telekomunikasi (TJKT) yang sebelumnya bernama Teknik Komputer Jaringan (TKJ) merupakan salah satu program keahlian di bidang teknologi dan informasi yang juga menjadi unggulan di SMK Bakti Purwokerto. Jurusan TJKT memberikan pendidikan sekaligus pelatihan bagi peserta didik untuk memahami bidang komputer jaringan yang terus berkembang seiring dengan era teknologi saat ini. Lingkup yang di pelajari oleh program keahlian TJKT ini yakni cara merakit/ memperbaiki personal computer (PC), menginstalasi program komputer, dan jaringan komputer. Peluang kerja untuk jurusan TJKT ini diantaranya menjadi teknisi komputer, teknisi jaringan, web administrator, administrasi server & jaringan, integrator sistem dan banyak lagi yang berhubungan dengan teknologi tingkat menengah.";
        }elseif($jurusan=="mplb"){
            $title = "Management Perkantoran dan Layanan Bisnis";
            $image = "/assets/img/content/jurusan/mplb.jpeg";
            $isi = "Konsentrasi Keahlian Manajemen Perkantoran merupakan salah satu jurusan di Sekolah Menengah Kejuruan (SMK) yang sangat diminati. Jurusan ini berfokus pada pendidikan manajemen kegiatan kantor serta pelayanan bisnis agar operasional suatu bisnis berjalan dengan baik dan lancar. Ada banyak hal yang mempengaruhi keberhasilan sebuah bisnis, termasuk beberapa di antaranya urusan administrasi dan anggaran keuangan. Dunia kerja sangat membutuhkan staf yang terampil dalam bidang administrasi, mengelola keuangan, serta mampu berkomunikasi dengan baik. Di jurusan ini, peserta didik akan dibekali dengan pengetahuan, keterampilan dan sikap kerja profesional. Peluang kerja untuk jurusan MPLB ini diantaranya menjadi sekertaris junior, resepsionis, operator komputer, petugas humas, operator mesin kantor, dan arsiparis.";
        }elseif ($jurusan=="dkv"){
            $title = "Desain Komunikasi Visual";
            $image = "/assets/img/content/jurusan/akl.jpeg";
            $isi = "Jurusan Desain Komunikasi Visual (DKV) merupakan program studi yang bertujuan menghasilkan desainer dan peneliti dalam bidang komunikasi visual yang memiliki kepemimpinan, kemampuan berpikir kritis, kreatif, terampil, serta memiliki kepekaan dalam mengembangkan karya sebagai solusi berbagai permasalahan komunikasi visual (terkait fungsi informasi, identitas, ataupun persuasi) di masyarakat. Program studi ini mengajarkan pengetahuan dan keterampilan, serta melatih kepekaan mahasiswa dalam merancang komunikasi visual melalui pembelajaran berbasis proyek yang dikerjakan secara metodologis, mulai dari riset, pengembangan ide, prototyping, sampai dengan eksekusi pembuatan karya dengan beragam media sesuai kebutuhan. Peluang kerja untuk jurusan DKV ini diantaranya pengembangan web, pengembangan multimedia, pengembangan games, rumah produksi sinema/ film, dan industri media.";
        }elseif($jurusan=="akl"){
            $title = "Akuntansi dan Keuangan Lembaga";
            $image = "/assets/img/content/jurusan/dkv.jpeg";
            $isi = "Jurusan Akuntansi dan Keuangan Lembaga (AKL) merupakan salah satu program keahlian dalam kelompok bisnis dan manajemen yang bertujuan untuk mempelajari pencatatan dan penyusunan laporan keuangan secara manual maupun menggunakan sistem komputerisasi untuk diterapkan terhadap suatu perusahaan baik itu jasa, dagang, maupun manufaktur. Program Keahlian Akuntansi dan Keuangan Lembaga (AKL) memiliki peran kerja yakni memiliki kemampuan menyusun laporan keuangan dan kemampuan mengoperasikan aplikasi komputer akuntansi untuk penyusunan laporan keuangan untuk bekerja di usaha bisnis dan/atau manajemen serta memiliki kemampuan mengelola keuangan dan menganalisis data keuangan, untuk bekerja di usaha dan manajemen baik dengan sistem manual maupun otomatisasi. Peluang kerja untuk jurusan AKL ini diantaranya pemegang buku, kasir, operator komputer, penyusunan laporan dan administrasi gudang.";
        }else{
            $title = "Jurusan tidak ditemukan";
            $image = "";
            $isi = "Jurusan tidak ditemukan";
        }
        return view('userpage.detail-jurusan',compact('title','image','isi'));
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
    public function galeri(){
        $dataGaleri = Galeri::all();
        return view('userpage.galeri',compact('dataGaleri'));
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
    public function biaya(){
        return view('userpage.rincianbiaya');
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

    public function syaratPendaftaran(){
        return view('userpage.syarat-pendaftaran');
    }
}
