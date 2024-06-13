@extends('userpage.master')
@section('title','Galeri')
@section('content')
    <section id="title">
        <h1>GALERI <span class="orange">SMK BAKTI</span> PURWOKERTO</h1>
    </section>
    <section id="galeri">
        <div class="content">
            <div class="cards">
                @foreach($dataGaleri as $galeri)
                    <div class="card">
                        <img src="/storage/{{$galeri->foto}}" alt="" srcset="">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
