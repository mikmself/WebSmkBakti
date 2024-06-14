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
                    <a href="{{route('detailJurusan','tkjt')}}" class="btn-next">Selanjutnya>></a>
                </div>
            </div>
            <div class="card mplb">
                <img src="/assets/img/content/jurusan/mplb.png" alt="" class="image">
                <div class="text">
                    <h1 class="title">#MPLB</h1>
                    <p>Management Perkantoran dan Layanan Bisnis</p>
                    <a href="{{route('detailJurusan','mplb')}}" class="btn-next">Selanjutnya>></a>
                </div>
            </div>
            <div class="card akl">
                <img src="/assets/img/content/jurusan/akl.png" alt="" class="image">
                <div class="text">
                    <h1 class="title">#AKL</h1>
                    <p>Akutansi Keuangan Lembaga</p>
                    <a href="{{route('detailJurusan','akl')}}" class="btn-next">Selanjutnya>></a>
                </div>
            </div>
            <div class="card dkv">
                <img src="/assets/img/content/jurusan/dkv.png" alt="" class="image">
                <div class="text">
                    <h1 class="title">#DKV</h1>
                    <p>Desain Komunikasi Visual</p>
                    <a href="{{route('detailJurusan','dkv')}}" class="btn-next">Selanjutnya>></a>
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
                <div class="card">
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
        <div class="slider">
            <div class="slider-wrapper">
                <div class="slide">
                    <p class="desc">SMK BAKTI PURWOKERTO Membentuk saya menjadi seseorang yang memiliki dasar IPTEK yang berkualitas serta didasari dengan iman dan takwa sebagai bekal ketika saya bekerja.</p>
                    <img src="/assets/img/testimoni/1.png" alt="Testimoni 1" class="image">
                </div>
                <div class="slide">
                    <p class="desc">Sekolah ini memberikan pengalaman belajar yang luar biasa dan mendukung penuh pengembangan karir saya.</p>
                    <img src="/assets/img/testimoni/2.png" alt="Testimoni 2" class="image">
                </div>
                <div class="slide">
                    <p class="desc">Para pengajar sangat berkompeten dan selalu memberikan bimbingan yang tepat sehingga saya bisa mencapai tujuan saya.</p>
                    <img src="/assets/img/testimoni/3.png" alt="Testimoni 3" class="image">
                </div>
                <div class="slide">
                    <p class="desc">Lingkungan belajar yang kondusif dan fasilitas yang lengkap membantu saya belajar dengan lebih efektif.</p>
                    <img src="/assets/img/testimoni/4.png" alt="Testimoni 4" class="image">
                </div>
                <div class="slide">
                    <p class="desc">SMK BAKTI PURWOKERTO memberikan saya banyak kesempatan untuk berpartisipasi dalam berbagai kegiatan ekstrakurikuler.</p>
                    <img src="/assets/img/testimoni/5.png" alt="Testimoni 5" class="image">
                </div>
                <div class="slide">
                    <p class="desc">Saya merasa bangga menjadi alumni sekolah ini karena telah dibekali dengan pengetahuan dan keterampilan yang cukup.</p>
                    <img src="/assets/img/testimoni/6.png" alt="Testimoni 6" class="image">
                </div>
                <div class="slide">
                    <p class="desc">Sekolah ini mengajarkan nilai-nilai moral yang sangat penting selain pendidikan akademik.</p>
                    <img src="/assets/img/testimoni/7.png" alt="Testimoni 7" class="image">
                </div>
                <div class="slide">
                    <p class="desc">Dengan pendidikan yang saya peroleh di sini, saya merasa siap untuk menghadapi dunia kerja.</p>
                    <img src="/assets/img/testimoni/8.png" alt="Testimoni 8" class="image">
                </div>
                <div class="slide">
                    <p class="desc">Banyak pengalaman berharga yang saya dapatkan selama bersekolah di SMK BAKTI PURWOKERTO.</p>
                    <img src="/assets/img/testimoni/9.png" alt="Testimoni 9" class="image">
                </div>
                <div class="slide">
                    <p class="desc">SMK BAKTI PURWOKERTO membantu saya menemukan passion dan mengejar cita-cita saya dengan semangat.</p>
                    <img src="/assets/img/testimoni/10.png" alt="Testimoni 10" class="image">
                </div>
            </div>
            <button class="prev">&lt;</button>
            <button class="next">&gt;</button>
        </div>
    </section>
@endsection
