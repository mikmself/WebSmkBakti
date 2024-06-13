@extends('userpage.master')
@section('title','Detail Jurusan')
@section('content')
    <section id="detail-jurusan">
        <div class="left">
            <div class="card">
                <h1 class="title">Program Lainnya</h1>
                <a href="{{route('detailJurusan','tkjt')}}">Teknik Komputer Jaringan dan Telekomunikasi</a>
                <a href="{{route('detailJurusan','mplb')}}">Management Perkantoran dan Layanan Bisnis</a>
                <a href="{{route('detailJurusan','dkv')}}">Dasar Komunikasi Visual</a>
                <a href="{{route('detailJurusan','akl')}}">Akuntansi Keuangan Lembaga</a>
            </div>
        </div>
        <div class="right">
            <div class="content">
                <img src="{{$image}}" alt="" class="image">
                <h1 class="title">{{$title}}</h1>
                <p class="isi">{{$isi}}</p>
            </div>
        </div>
    </section>
@endsection
