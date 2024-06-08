@extends('userpage.master')
@section('title','Fasilitas')
@section('content')
    <section id="title">
        <h1>FASILITAS <span class="orange">SMK BAKTI</span> PURWOKERTO</h1>
    </section>
    <section id="fasilitas">
        <div class="title">
            <h1>FASILITAS</h1>
        </div>
        <div class="content">
            <div class="cards">
                @foreach($dataFasilitas as $fasilitas)
                <div class="card">
                    <img src="/storage/{{$fasilitas->foto}}" alt="" srcset="">
                    <p>{{$fasilitas->nama}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
