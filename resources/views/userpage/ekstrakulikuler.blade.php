@extends('userpage.master')
@section('title','Ekstrakulikuler')
@section('content')
    <section id="title">
        <h1>EKSTRAKULIKULER <span class="orange">SMK BAKTI</span> PURWOKERTO</h1>
    </section>
    <section id="ekstrakulikuler">
        <div class="title">
            <h1>EKSTRAKULIKULER</h1>
        </div>
        <div class="content">
            <div class="items">
                @foreach($dataEkstrakulikuler as $ekstrakulikuler)
                    <div class="item">
                        <img src="/storage/{{$ekstrakulikuler->foto}}" alt="" class="image">
                        <p class="desc">{{$ekstrakulikuler->nama}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
