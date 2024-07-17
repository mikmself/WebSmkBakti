@extends('userpage.master')
@section('title','Pendaftaran Whatsapp')
@section('content')
    <section id="title">
        <h1>PENDAFTARAN WHATSAPP <span class="orange">SMK BAKTI</span> PURWOKERTO</h1>
    </section>
    <section id="pendaftaran-whatsapp">
        <div class="title">
            <h1>PENDAFTARAN VIA WHATSAPP</h1>
        </div>
        <div class="content">
            <table>
                <tr>
                    <th class="pendek">No.</th>
                    <th>Berkas Pendaftaran</th>
                    <th>Penyelenggara</th>
                    <th class="pendek">Download</th>
                </tr>
                <tr>
                    <td class="pendek">1.</td>
                    <td>Formulir Pendaftaran Calon Peserta Didik Baru</td>
                    <td>SMK BAKTI Purwokerto school</td>
                    <td class="pendek gambar">
                        <a href="{{route('download',1)}}">
                            <img src="/assets/img/icon/download.png" alt="">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="pendek">2.</td>
                    <td>Ketentuan Biaya Masuk Calon Peserta Didik Baru</td>
                    <td>SMK BAKTI Purwokerto school</td>
                    <td class="pendek gambar">
                        <a href="{{route('download',2)}}">
                            <img src="/assets/img/icon/download.png" alt="">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="pendek">3.</td>
                    <td>Berkas Persyaratan Pendaftaran Calon Peserta Didik Baru</td>
                    <td>SMK BAKTI Purwokerto school</td>
                    <td class="pendek gambar">
                        <a href="{{route('download',3)}}">
                            <img src="/assets/img/icon/download.png" alt="">
                        </a>
                    </td>
                </tr>
            </table>
            <div class="whatsapp">
                <div class="title-content">
                    <h1 class="text">PENDAFTARAN <span class="orange">VIA</span> WHATSAPP</h1>
                </div>
                <p class="desc">*Tata cara pendaftaran via whatsapp : Pilih salah satu nomor Hotline dibawah ini setelah itu isi dan kirim formulir yang telah disediakan.</p>
                <div class="numbers">
                    <div class="number" style="cursor: pointer" onclick="window.location.replace('https://wa.me/6285227081875');">
                        <img src="/assets/img/icon/whatsapp.png" style="width: 1.2cm; margin-bottom: .2cm">
                        <p class="name">BU RETNO</p>
                        <p class="phone-number">085227081875</p>
                    </div>
                    <div class="number" style="cursor: pointer" onclick="window.location.replace('https://wa.me/6281546912260');">
                        <img src="/assets/img/icon/whatsapp.png" style="width: 1.2cm; margin-bottom: .2cm">
                        <p class="name">BU SUDI</p>
                        <p class="phone-number"> 081546912260</p>
                    </div>
                    <div class="number" style="cursor: pointer" onclick="window.location.replace('https://wa.me/6285747500033');">
                        <img src="/assets/img/icon/whatsapp.png" style="width: 1.2cm; margin-bottom: .2cm">
                        <p class="name">BU DIAN</p>
                        <p class="phone-number">085747500033</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
