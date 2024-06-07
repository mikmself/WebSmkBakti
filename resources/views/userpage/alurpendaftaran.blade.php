@extends('userpage.master')
@section('title','Alur Pendaftaran')
@section('content')
    <section id="title">
        <h1>ALUR PENDAFTARAN <span class="orange">SMK BAKTI</span> PURWOKERTO</h1>
    </section>
    <section id="alurpendaftaran">
        <div class="title">
            <h1>ALUR PENDAFTARAN</h1>
            <div class="button">
                <a href="{{route('pendaftaranWebsite')}}" class="btn">Daftar Via Webiste >></a>
                <a href="{{route('pendaftaranWhatsapp')}}" class="btn">Daftar Via Whatsapp >></a>
            </div>
        </div>
        <img src="/assets/img/banner/alur-pendaftaran.png" alt="" srcset="">
    </section>
@endsection
