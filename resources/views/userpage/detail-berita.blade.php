@extends('userpage.master')
@section('title',$berita->judul)
@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .berita {
            margin-bottom: 20px;
        }
        .gambar {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .judul {
            font-size: 24px;
            margin-top: 10px;
            margin-bottom: 5px;
        }
        .isi {
            font-size: 16px;
            line-height: 1.6;
        }
    </style>
    <div class="container">
        <div class="berita">
            <img src="/storage/{{$berita->foto}}" alt="Gambar Berita" class="gambar">
            <h1 class="judul">{{$berita->judul}}</h1>
            <p class="isi">{!! $berita->isi !!}</p>
        </div>
    </div>
@endsection
