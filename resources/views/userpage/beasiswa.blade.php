@extends('userpage.master')
@section('title','Beasiswa')
@section('content')
    <section id="title">
        <h1>BEASISWA <span class="orange">SMK BAKTI</span> PURWOKERTO</h1>
    </section>
    <section id="beasiswa">
        <div class="title">
            <h1>BEASISWA</h1>
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
                    <th>Beasiswa</th>
                    <th>Penyelenggara</th>
                    <th>Deadline</th>
                    <th class="pendek">Lihat</th>
                </tr>
                @foreach($dataBeasiswa as $beasiswa)
                    <tr>
                        <td class="pendek">1.</td>
                        <td>{{$beasiswa->nama_beasiswa}}</td>
                        <td>{{$beasiswa->penyelenggara}}</td>
                        <td>{{ date('d M Y', strtotime($beasiswa->deadline)) }}</td>
                        <td class="pendek"><img src="/assets/img/icon/search.png" alt=""></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </section>
@endsection
