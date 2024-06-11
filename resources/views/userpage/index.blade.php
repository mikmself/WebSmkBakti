@extends('userpage.master')
@section('title', 'Beranda')
@section('content')
    <section id="banner">
        <img src="/assets/img/banner/hero-image.png" alt="Hero Image" class="hero-image">
        <h1 class="main-title">Pembukaan <span class="orange">akan berakhir</span> pada :</h1>
        <div class="content">
            <div class="countdown">
                <div class="countdown-item">
                    <h1 class="countdown-number" id="days">12</h1>
                    <p class="countdown-text">Days</p>
                </div>
                <div class="countdown-item">
                    <h1 class="countdown-number" id="hours">12</h1>
                    <p class="countdown-text">Hours</p>
                </div>
                <div class="countdown-item">
                    <h1 class="countdown-number" id="minutes">12</h1>
                    <p class="countdown-text">Minutes</p>
                </div>
                <div class="countdown-item">
                    <h1 class="countdown-number" id="seconds">12</h1>
                    <p class="countdown-text">Seconds</p>
                </div>
            </div>
            <div class="persuade">
                <h1 class="title">SIAP KULIAH DAN KERJA</h1>
                <p class="desc">SEGERA BERGABUNG DENGAN KAMI. JANGAN RAGU UNTUK MAJU!!!</p>
                <a class="btn-register">DAFTAR SEKARANG</a>
            </div>
        </div>
    </section>
    <section id="profile">
        <div class="left">
            <iframe src="https://www.youtube.com/embed/P996Jco31TQ?si=CNnvT5MkEkaMkYE0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="right">
            <h1 class="title">Video Profil SMK Bakti Purwokerto</h1>
            <p class="content">Vidio profil ini menjelaskan tentang visi misi, fasilitas dan jurusan yang ada di sekolah smk bakti purwokerto. Dalam vidio tersebut di perankan oleh para siswa sekolah tersebut fungsinya untuk menarik dan sebagai media promosi bagi para siswa yang akan mendaftar kesekolahan tersebut.</p>
        </div>
    </section>
    <section id="program">
        <div class="header">
            <h1 class="title">Program Kejuruan</h1>
            <hr class="strip">
            <p class="desc">Program kejuruan di SMK BAKTI PURWOKERTO memiliki 4 kejuruan yang di dukung oleh
                guru-guru yang berkompeten  dan kurikulum yang disusun  sesuai dengan kebutuhan industri</p>
        </div>
        <div class="content">
            <div class="card tkjt">
                <img src="/assets/img/content/jurusan/tkjt.png" alt="" class="image">
                <div class="text">
                    <h1 class="title">#TKJT</h1>
                    <p>Teknik Komputer Jaringan dan Telekomunikasi</p>
                    <a href="" class="btn-next">Selanjutnya>></a>
                </div>
            </div>
            <div class="card mplb">
                <img src="/assets/img/content/jurusan/mplb.png" alt="" class="image">
                <div class="text">
                    <h1 class="title">#MPLB</h1>
                    <p>Management Perkantoran dan Layanan Bisnis</p>
                    <a href="" class="btn-next">Selanjutnya>></a>
                </div>
            </div>
            <div class="card akl">
                <img src="/assets/img/content/jurusan/akl.png" alt="" class="image">
                <div class="text">
                    <h1 class="title">#AKL</h1>
                    <p>Akutansi Keuangan Lembaga</p>
                    <a href="" class="btn-next">Selanjutnya>></a>
                </div>
            </div>
            <div class="card dkv">
                <img src="/assets/img/content/jurusan/dkv.png" alt="" class="image">
                <div class="text">
                    <h1 class="title">#DKV</h1>
                    <p>Desain Komunikasi Visual</p>
                    <a href="" class="btn-next">Selanjutnya>></a>
                </div>
            </div>
        </div>
    </section>
    <section id="news">
        <div class="header">
            <h1 class="title">Berita Terbaru</h1>
            <a href="{{route('semuaBerita')}}" class="btn-more">Lebih Banyak</a>
        </div>
        <div class="cards">
            @foreach($dataBerita as $berita)
                <div class="card" style="height: auto">
                    <img src="/storage/{{$berita->foto}}" alt="" class="image">
                    <div class="text">
                        <h1 class="title"><a href="{{route('showBerita',$berita->slug)}}">{{$berita->judul}}</a></h1>
                        <p class="content">{!! \Illuminate\Support\Str::limit($berita->isi, 200) !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section id="event">
        <div class="left">
            <h1 class="title">Acara <br /> Yang Akan Datang</h1>
            <hr class="line">
            <p class="content">Informasi mengenai workshop, seminar, dan kegiatan sekolah lainnya.</p>
            <a href="" class="btn-more">Lebih Banyak</a>
        </div>
        <div class="right">
            <img src="/assets/img/content/acara-kelulusan.png" alt="" class="image">
            <p class="desc">Acara kelulusan siswa siswi SMK Bakti Purwokerto angkatan 2021</p>
        </div>
    </section>
    <section id="testimoni">
        <h1 class="title">Testimoni Alumni</h1>
        <hr class="line">
        <div class="content">
            <p class="desc">SMK BAKTI PURWOKERTO Membentuk saya menjadi seseorang yang memiliki dasar IPTEK yang berkualitas serta didasari dengan iman dan takwa sebagai bekal ketika saya bekerja.</p>
            <img src="/assets/img/ilustrator/testimoni.png" alt="" class="image">
        </div>
    </section>
@endsection
