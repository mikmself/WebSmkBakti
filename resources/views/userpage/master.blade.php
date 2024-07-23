<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @yield('style')
    <link rel="stylesheet" href="/assets/scss/style.css">
    <title>SMK BAKTI | @yield('title')</title>
</head>
<body>
@include('sweetalert::alert')
<div class="topnav" id="myTopnav">
    <a href="{{route('index')}}" class="active">BERANDA</a>
    <div class="dropdown">
        <button class="dropbtn">PROFILE
            &#x25BC;
        </button>
        <div class="dropdown-content">
            <a href="{{route('visiMisi')}}">VISI MISI</a>
            <a href="{{route('fasilitas')}}">FASILITAS</a>
            <a href="{{route('ekstrakulikuler')}}">EKSTRAKULIKULER</a>
            <a href="{{route('strukturOrganisasi')}}">STRUKTUR ORGANISASI</a>
        </div>
    </div>
    <a href="{{route('dataGuru')}}">DATA GURU</a>
    <a href="{{route('galeri')}}">GALERI</a>
    <div class="dropdown">
        <button class="dropbtn">PPDB
            &#x25BC;
        </button>
        <div class="dropdown-content">
            <a href="{{route('alurPendaftaran')}}">ALUR PENDAFTARAN</a>
            <a href="{{route('beasiswa')}}">BEASISWA</a>
            <a href="{{route('pendaftaranWhatsapp')}}">PENDAFTARAN VIA WHATSAPP</a>
            <a href="{{route('pendaftaranWebsite')}}">PENDAFTARAN VIA WEBSITE</a>
        </div>
    </div>
    <a href="{{route('kontak')}}">KONTAK</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<header>
    <nav>
        <img
            src="/assets/img/logo/logo-lengkap.png"
            alt="Logo Smk Bakti"
            class="logo"
        />
        <div class="items">
            <a href="{{route('index')}}" class="item">BERANDA</a>
            <a class="item" id="dropdown">PROFILE &#x25BC;</a>
            <div class="dropdown-content" id="dropdown-content">
                <a href="{{route('visiMisi')}}">VISI MISI</a>
                <a href="{{route('fasilitas')}}">FASILITIAS</a>
                <a href="{{route('ekstrakulikuler')}}">EKSTRAKULIKULER</a>
                <a href="{{route('strukturOrganisasi')}}">STRUKTUR ORGANISASI</a>
            </div>
            <a href="{{route('dataGuru')}}" class="item">DATA GURU</a>
            <a href="/galeri" class="item">GALERI</a>
            <a class="item" id="dropdown2">PPDB &#x25BC;</a>
            <div class="dropdown-content2" id="dropdown-content2">
                <a href="{{route('alurPendaftaran')}}">ALUR PENDAFTARAN</a>
                <a href="{{route('biaya')}}">RICIAN BIAYA</a>
                <a href="{{route('syaratPendaftaran')}}">SYARAT PENDAFTARAN</a>
                <a href="{{route('beasiswa')}}">BEASISWA</a>
                <a href="{{route('pendaftaranWhatsapp')}}">PENDAFTARAN VIA WHATSAPP</a>
                <a href="{{route('pendaftaranWebsite')}}">PENDAFTARAN VIA WEBSITE</a>
            </div>
            <a href="{{route('kontak')}}" class="item">KONTAK</a>
        </div>
        <div class="search" style="visibility: hidden">
            <input type="text" name="search" class="search-input">
            <img src="/assets/img/icon/search.png" alt="Icon Cari" class="icon">
        </div>
    </nav>
</header>
<main>
    @yield('content')
    <section id="contact">
        <div class="left">
            <h1 class="title">Kontak</h1>
            <p class="desc">Terimakasih telah berkunjung. Kami menunggu anda bergabung.</p>
            <div class="contents">
                <div class="content">
                    <div class="icon">
                        <img src="/assets/img/icon/jam.png" alt="">
                    </div>
                    <div class="fill">
                        <p>Jam Operasional</p>
                        <p>Sen-Jum:  8AM - 12PM</p>
                    </div>
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="/assets/img/icon/telephone.png" alt="">
                    </div>
                    <div class="fill">
                        <p>Nomor Telepon</p>
                        <p>081326830861</p>
                    </div>
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="/assets/img/icon/location.png" alt="">
                    </div>
                    <div class="fill">
                        <p>Alamat</p>
                        <p>Jl. DR. Soeparno No.13, Purwokerto Wetan, Kec. Purwokerto Tim., Kabupaten Banyumas, Jawa Tengah 53111</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <form action="{{route('kontak.store')}}" method="post">
                @csrf
                <input type="text" name="first_name" id="first-name" class="input-text" placeholder="Nama Depan">
                <input type="text" name="last_name" id="last-name" class="input-text" placeholder="Nama Belakang">
                <input type="email" name="email" id="email" class="input-text" placeholder="Alamat Email">
                <input type="text" name="phone" id="phone" class="input-text" placeholder="Nomor HP">
                <textarea name="message" id="message" class="input-text" placeholder="Pesan"></textarea>
                <div class="container">
                    <button class="btn-submit">Send Message</button>
                </div>
            </form>
        </div>
    </section>
</main>
<footer>
    <div class="first">
        <h1 class="title">Links</h1>
        <a href="{{route('index')}}" class="link">Beranda</a>
        <a href="{{route('semuaBerita')}}" class="link">Akses Berita</a>
        <a href="{{route('dataGuru')}}" class="link">Data Guru</a>
        <a href="{{route('galeri')}}" class="link">Galeri</a>
        <a href="{{route('kontak')}}" class="link">Kontak</a>
    </div>
    <div class="seccond">
        <h1 class="title">Profile</h1>
        <a href="{{route('visiMisi')}}" class="link">Visi Misi</a>
        <a href="{{route('fasilitas')}}" class="link">Fasilitas</a>
        <a href="{{route('ekstrakulikuler')}}" class="link">Ekstrakulikuler</a>
        <a href="{{route('strukturOrganisasi')}}" class="link">Struktur Organisasi</a>
    </div>
    <div class="seccond">
        <h1 class="title">Ppdb</h1>
        <a href="{{route('alurPendaftaran')}}" class="link">Alur Pendaftaran</a>
        <a href="{{route('syaratPendaftaran')}}" class="link">Syarat Pendaftaran</a>
        <a href="{{route('beasiswa')}}" class="link">Beasiswa</a>
        <a href="{{route('pendaftaranWhatsapp')}}" class="link">Pendaftaran Via Whatsapp</a>
        <a href="{{route('pendaftaranWebsite')}}" class="link">Pendaftaran Via Website</a>
    </div>
    <div class="third">
        <h1 class="title">Legal</h1>
        <a href="" class="link">Terms and condititon</a>
        <a href="" class="link">Privacy Policy</a>
    </div>
    <div class="fourth">
        <h1 class="title">Social Media Link</h1>
        <a href="https://www.facebook.com/smk.purwokerto/" class="link" target="_blank">Facebook</a>
        <a href="https://www.instagram.com/smkbaktipurwokerto/" class="link" target="_blank">Instagram</a>
        <a href="" class="link" target="_blank">Twitter</a>
        <a href="https://www.youtube.com/channel/UCvNiUgrcHC69mvErl7o4ylQ" class="link" target="_blank">Youtube</a>
    </div>
</footer>
</body>
<script src="/assets/js/beranda.js"></script>
</html>
