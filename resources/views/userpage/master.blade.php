<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/css/beranda.css">
    <link rel="stylesheet" href="/assets/css/responsif.css">
    <title>SMK BAKTI | @yield('title')</title>
</head>
<body>
<div class="topnav" id="myTopnav">
    <a href="/index.html" class="active">BERANDA</a>
    <div class="dropdown">
        <button class="dropbtn">PROFILE
            &#x25BC;
        </button>
        <div class="dropdown-content">
            <a href="/visimisi.html">VISI MISI</a>
            <a href="/fasilitas.html">FASILITAS</a>
            <a href="/ekstrakulikuler.html">EKSTRAKULIKULER</a>
            <a href="/struktur-organisasi.html">STRUKTUR ORGANISASI</a>
        </div>
    </div>
    <a href="/dataguru.html">DATA GURU</a>
    <a href="">GALERI</a>
    <div class="dropdown">
        <button class="dropbtn">PPDB
            &#x25BC;
        </button>
        <div class="dropdown-content">
            <a href="/alurpendaftaran.html">ALUR PENDAFTARAN</a>
            <a href="/beasiswa.html">BEASISWA</a>
            <a href="/pendaftaran-whatsapp.html">PENDAFTARAN VIA WHATSAPP</a>
            <a href="/pendaftaran-website.html">PENDAFTARAN VIA WEBSITE</a>
        </div>
    </div>
    <a href="/kontak.html">KONTAK</a>
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
            <a href="/index.html" class="item">BERANDA</a>
            <a class="item" id="dropdown">PROFILE &#x25BC;</a>
            <div class="dropdown-content" id="dropdown-content">
                <a href="/visimisi.html">VISI MISI</a>
                <a href="/fasilitas.html">FASILITIAS</a>
                <a href="/ekstrakulikuler.html">EKSTRAKULIKULER</a>
                <a href="/struktur-organisasi.html">STRUKTUR ORGANISASI</a>
            </div>
            <a href="/dataguru.html" class="item">DATA GURU</a>
            <a href="" class="item">GALERI</a>
            <a class="item" id="dropdown2">PPDB &#x25BC;</a>
            <div class="dropdown-content2" id="dropdown-content2">
                <a href="/alurpendaftaran.html">ALUR PENDAFTARAN</a>
                <a href="/beasiswa.html">BEASISWA</a>
                <a href="/pendaftaran-whatsapp.html">PENDAFTARAN VIA WHATSAPP</a>
                <a href="/pendaftaran-website.html">PENDAFTARAN VIA WEBSITE</a>
            </div>
            <a href="/kontak.html" class="item">KONTAK</a>
        </div>
        <div class="search">
            <input type="text" name="search" class="search-input">
            <img src="/assets/img/icon/search.png" alt="Icon Cari" class="icon">
        </div>
    </nav>
</header>
<main>
    @yield('content')
    <section id="contact">
        <div class="left">
            <h1 class="title">Contact</h1>
            <p class="desc">Thank you for your interest. We look forward to hearing from you soon.</p>
            <div class="contents">
                <div class="content">
                    <div class="icon">
                        <img src="/assets/img/icon/jam.png" alt="">
                    </div>
                    <div class="fill">
                        <p>Hours Of Operation</p>
                        <p>Mon-Fri:  9AM - 5PM</p>
                    </div>
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="/assets/img/icon/telephone.png" alt="">
                    </div>
                    <div class="fill">
                        <p>24/7 Emergency Service</p>
                        <p>(205) 484-9624</p>
                    </div>
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="/assets/img/icon/location.png" alt="">
                    </div>
                    <div class="fill">
                        <p>HService Area</p>
                        <p>Birmingham, AL</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <form action="">
                <input type="text" name="first-name" id="first-name" class="input-text" placeholder="First name">
                <input type="text" name="last-name" id="last-name" class="input-text" placeholder="Last name">
                <input type="email" name="email" id="email" class="input-text" placeholder="Email address">
                <input type="text" name="phone" id="phone" class="input-text" placeholder="Phone number">
                <textarea name="message" id="message" class="input-text" placeholder="Message"></textarea>
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
        <a href="" class="link">Beranda</a>
        <a href="" class="link">Profile</a>
        <a href="" class="link">Direktori</a>
        <a href="" class="link">Galeri</a>
        <a href="" class="link">PPDB</a>
        <a href="" class="link">Kontak</a>
    </div>
    <div class="seccond">
        <h1 class="title">Account</h1>
        <a href="" class="link">Login</a>
        <a href="" class="link">Register</a>
    </div>
    <div class="third">
        <h1 class="title">Legal</h1>
        <a href="" class="link">Terms and condititon</a>
        <a href="" class="link">Privacy Policy</a>
    </div>
    <div class="fourth">
        <h1 class="title">Social Media Link</h1>
        <a href="" class="link">Facebook</a>
        <a href="" class="link">Instagram</a>
        <a href="" class="link">Twitter</a>
        <a href="" class="link">Youtube</a>
    </div>
</footer>
</body>
<script src="/assets/js/beranda.js"></script>
</html>
