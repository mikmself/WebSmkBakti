@extends('userpage.master')
@section('title','Semua Berita')
@section('content')
    <section id="news" style="margin-top: 0px">
        <div class="cards">
            @foreach($dataBerita as $berita)
                <div class="card" style="height: auto">
                    <img src="/storage/{{$berita->foto}}" alt="" class="image">
                    <div class="text">
                        <h1 class="title">{{$berita->judul}}</h1>
                        <p class="content">{!! \Illuminate\Support\Str::limit($berita->isi, 200) !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
