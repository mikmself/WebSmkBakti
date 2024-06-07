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
                <tr>
                    <td class="pendek">1.</td>
                    <td>SMK BAKTI Purwokerto school</td>
                    <td>SMK BAKTI Purwokerto school</td>
                    <td>9 Agustus 2024</td>
                    <td class="pendek"><img src="/assets/img/icon/search.png" alt=""></td>
                </tr>
            </table>
        </div>
    </section>
@endsection
