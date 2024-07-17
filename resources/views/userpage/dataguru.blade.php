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
                <div class="search" style="visibility: hidden">
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
                </tr>
                @php($no = 1)
                @foreach($dataGuru as $guru)
                    <tr>
                        <td class="pendek">{{$no}}</td>
                        <td>{{$guru->nama}}</td>
                        <td>{{$guru->mapel}}</td>
                        <td>{{$guru->nip}}</td>
                    </tr>
                @php($no++)
                @endforeach
            </table>
        </div>
    </section>
@endsection
