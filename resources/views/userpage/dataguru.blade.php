@extends('userpage.master')
@section('title','Data Guru')
@section('content')
    <section id="title">
        <h1>DATA GURU <span class="orange">SMK BAKTI</span> PURWOKERTO</h1>
    </section>
    <section id="dataguru">
        <div class="title">
            <h1>DATA GURU</h1>
        </div>
        <div class="content">
            <div class="container">
                <div class="search">
                    <p class="desc">Search</p>
                    <input type="text" name="" id="">
                </div>
            </div>
            <table>
                <tr>
                    <th class="pendek">No.</th>
                    <th>NAMA</th>
                    <th>MATA PELAJARAN</th>
                    <th>NIP</th>
                    <th class="pendek">Lihat</th>
                </tr>
                @foreach($dataGuru as $guru)
                    <tr>
                        <td class="pendek">1.</td>
                        <td>{{$guru->nama}}</td>
                        <td>{{$guru->mapel}}</td>
                        <td>{{$guru->nip}}</td>
                        <td class="pendek"><img src="/assets/img/icon/search.png" alt=""></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </section>
@endsection
