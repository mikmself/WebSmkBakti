@extends('userpage.master')
@section('title','Pendaftaran Website')
@section('style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
    <section id="title">
        <h1>
            PENDAFTARAN WEBSITE <span class="orange">SMK BAKTI</span> PURWOKERTO
        </h1>
    </section>
    <section id="pendaftaran-website">
        <div class="title">
            <h1>PENDAFTARAN VIA WEBSITE</h1>
        </div>
        <div class="content">
            <form action="{{route('daftarWebsite')}}" method="post">
                @csrf
                <div class="title-form">
                    <h1 class="text">DATA CALON SISWA</h1>
                </div>
                <div class="input-group">
                    <label for="">Kompetensi Keahlian</label>
                    <select class="" id="" name="kompetensi_keahlian">
                        <option selected="" disabled="">-- Pilih Kompetensi Keahlian --</option>
                        <option value="Akutansi Keuangan dan Lembaga">Akutansi Keuangan dan Lembaga</option>
                        <option value="Otomatisasi Tata Kelola Perkantoran">Otomatisasi Tata Kelola Perkantoran</option>
                        <option value="Multimedia">Multimedia</option>
                        <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                    </select>
                </div>
                <h1 class="title-form">DATA DIRI SISWA</h1>
                <div class="input-group" b>
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" id="" />
                </div>
                <div class="input-group">
                    <label for="">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" id="" />
                </div>
                <div class="input-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="" />
                </div>
                <div class="input-group">
                    <label for="">Asal Sekolah SMP/MTS</label>
                    <select name="asal_sekolah" id="asalsekolah">
                        <option selected="" disabled="">-- Pilih sekolah --</option>
                        <option value="SMP DIPONEGORO 1 PURWOKERTO">SMP DIPONEGORO 1 PURWOKERTO</option>
                        <option value="SMP ISLAM TERPADU HARAPAN">SMP ISLAM TERPADU HARAPAN BUNDA</option>
                        <option value="SMP MAARIF NU 03">SMP MAARIF NU 03 PURWOKERTO</option>
                        <option value="SMP MAARIF NU 2">SMP MAARIF NU 2 PURWOKERTO</option>
                        <option value="SMP MUHAMMADIYAH 1 PURWOKERTO">SMP MUHAMMADIYAH 1 PURWOKERTO</option>
                        <option value="SMP MUHAMMADIYAH 2 PURWOKERTO">SMP MUHAMMADIYAH 2 PURWOKERTO</option>
                        <option value="SMP NEGERI 5 PURWOKERTO">SMP NEGERI 5 PURWOKERTO</option>
                        <option value="SMP NEGERI 7 PURWOKERTO">SMP NEGERI 7 PURWOKERTO</option>
                        <option value="SMP TELKOM PURWOKERTO">SMP TELKOM PURWOKERTO</option>
                        <option value="SMPS NASIONAL 3 BAHASA PUTERA HARAPAN">SMPS NASIONAL 3 BAHASA PUTERA HARAPAN</option>
                        <option value="MTSN 1 BANYUMAS">MTSN 1 BANYUMAS</option>
                        <option value="MTS MUHAMMADIYAH PURWOKERTO">MTS MUHAMMADIYAH PURWOKERTO</option>
                        <option value="SMP AL IRSYAD AL ISLAMIYYAH">SMP AL IRSYAD AL ISLAMIYYAH</option>
                        <option value="SMP BRUDERAN PURWOKERTO">SMP BRUDERAN PURWOKERTO</option>
                        <option value="SMP KRISTEN 1 PURWOKERTO">SMP KRISTEN 1 PURWOKERTO</option>
                        <option value="SMP MAARIF NU 1 PURWOKERTO">SMP MAARIF NU 1 PURWOKERTO</option>
                        <option value="SMP NEGERI 1 PURWOKERTO">SMP NEGERI 1 PURWOKERTO</option>
                        <option value="SMP NEGERI 2 PURWOKERTO">SMP NEGERI 2 PURWOKERTO</option>
                        <option value="SMP NEGERI 6 PURWOKERTO">SMP NEGERI 6 PURWOKERTO</option>
                        <option value="SMP NEGERI 8 PURWOKERTO">SMP NEGERI 8 PURWOKERTO</option>
                        <option value="SMP PERMATA HATI">SMP PERMATA HATI</option>
                        <option value="SMP SUSTERAN PURWOKERTO">SMP SUSTERAN PURWOKERTO</option>
                        <option value="SMPN 3 PURWOKERTO">SMPN 3 PURWOKERTO</option>
                        <option value="MTS AL HIDAYAH PURWOKERTO BARAT">MTS AL HIDAYAH PURWOKERTO BARAT</option>
                        <option value="MTS MA`ARIF NU 1 PURWOKERTO BARAT">MTS MA`ARIF NU 1 PURWOKERTO BARAT</option>
                        <option value="SMP BOARDING SCHOOL PUTRA HARAPAN PURWOKERTO">SMP BOARDING SCHOOL PUTRA HARAPAN PURWOKERTO</option>
                        <option value="SMP GUNUNGJATI 1 PURWOKERTO">SMP GUNUNGJATI 1 PURWOKERTO</option>
                        <option value="SMP GUNUNGJATI 2 PURWOKERTO">SMP GUNUNGJATI 2 PURWOKERTO</option>
                        <option value="SMP NEGERI 4 PURWOKERTO">SMP NEGERI 4 PURWOKERTO</option>
                        <option value="MTS AL - HIDAYAH PURWOKERTO">MTS AL - HIDAYAH PURWOKERTO</option>
                        <option value="SMP MUHAMMADIYAH 3 PURWOKERTO">SMP MUHAMMADIYAH 3 PURWOKERTO</option>
                        <option value="SMP NEGERI 9 PURWOKERTO">SMP NEGERI 9 PURWOKERTO</option>
                        <option value="MTS AL IKHSAN BEJI KEDUNGBANTENG">MTS AL IKHSAN BEJI KEDUNGBANTENG</option>
                        <option value="MTS MA`ARIF NU 1 KEDUNGBANTENG">MTS MA`ARIF NU 1 KEDUNGBANTENG</option>
                        <option value="SMP DIPONEGORO 3 KEDUNGBANTENG">SMP DIPONEGORO 3 KEDUNGBANTENG</option>
                        <option value="SMP MUHAMMADIYAH BEJI KEDUNGBANTENG">SMP MUHAMMADIYAH BEJI KEDUNGBANTENG</option>
                        <option value="SMP NEGERI 1 KEDUNGBANTENG">SMP NEGERI 1 KEDUNGBANTENG</option>
                        <option value="SMP NEGERI 2 KEDUNGBANTENG">SMP NEGERI 2 KEDUNGBANTENG</option>
                        <option value="SMP NEGERI 3 KEDUNGBANTENG">SMP NEGERI 3 KEDUNGBANTENG</option>
                        <option value="SMP NEGERI 4 KEDUNGBANTENG">SMP NEGERI 4 KEDUNGBANTENG</option>
                        <option value="MTS MA`ARIF NU 1 SOKARAJA">MTS MA`ARIF NU 1 SOKARAJA</option>
                        <option value="SMP IT ANNIDA SOKARAJA">SMP IT ANNIDA SOKARAJA</option>
                        <option value="SMP MUHAMMADIYAH SOKARAJA">SMP MUHAMMADIYAH SOKARAJA</option>
                        <option value="SMP NEGERI 1 SOKARAJA">SMP NEGERI 1 SOKARAJA</option>
                        <option value="SMP NEGERI 2 SOKARAJA">SMP NEGERI 2 SOKARAJA</option>
                        <option value="SMP YOS SUDARSO SOKARAJA">SMP YOS SUDARSO SOKARAJA</option>
                        <option value="SMPN 3 SOKARAJA">SMPN 3 SOKARAJA</option>
                        <option value="MTS MA`ARIF NU 1 KEMBARAN">MTS MA`ARIF NU 1 KEMBARAN</option>
                        <option value="MTS SA RAODHOTUT THOLIBIN KEMBARAN71">MTS SA RAODHOTUT THOLIBIN KEMBARAN</option>
                        <option value="SMP GUNUNGJATI KEMBARAN">SMP GUNUNGJATI KEMBARAN</option>
                        <option value="SMP ISLAM WALISONGO KEMBARAN">SMP ISLAM WALISONGO KEMBARAN</option>
                        <option value="SMP MUHAMMADIYAH KEMBARAN">SMP MUHAMMADIYAH KEMBARAN</option>
                        <option value="SMP NEGERI 1 KEMBARAN">SMP NEGERI 1 KEMBARAN</option>
                        <option value="SMP NEGERI 2 KEMBARAN">SMP NEGERI 2 KEMBARAN</option>
                        <option value="MTSN 3 BANYUMAS">MTSN 3 BANYUMAS</option>
                        <option value="MTS MA`ARIF NU 1 SUMBANG">MTS MA`ARIF NU 1 SUMBANG</option>
                        <option value="SMP MUHAMMADIYAH SUMBANG">SMP MUHAMMADIYAH SUMBANG</option>
                        <option value="SMP N 4 SUMBANG">SMP N 4 SUMBANG</option>
                        <option value="SMP NEGERI 1 SUMBANG">SMP NEGERI 1 SUMBANG</option>
                        <option value="SMP NEGERI 2 SUMBANG">SMP NEGERI 2 SUMBANG</option>
                        <option value="SMP PGRI SUMBANG">SMP PGRI SUMBANG</option>
                        <option value="SMPN 3 SUMBANG">SMPN 3 SUMBANG</option>
                        <option value="MTS AL MASRURIYAH BATURADEN">MTS AL MASRURIYAH BATURADEN</option>
                        <option value="SMP BOARDING SCHOOL AL IRSYAD AL ISLAMIYYAH PURWOK">SMP BOARDING SCHOOL AL IRSYAD AL ISLAMIYYAH PURWOKERTO</option>
                        <option value="SMP NEGERI 1 BATURRADEN">SMP NEGERI 1 BATURRADEN</option>
                        <option value="SMP NEGERI 2 BATURRADEN">SMP NEGERI 2 BATURRADEN</option>
                        <option value="SMP PGRI BATURRADEN">SMP PGRI BATURRADEN</option>
                        <option value="MTS MA`ARIF NU 1 KARANGLEWAS">MTS MA`ARIF NU 1 KARANGLEWAS</option>
                        <option value="SMP MUHAMMADIYAH 1 KARANGLEWAS">SMP MUHAMMADIYAH 1 KARANGLEWAS</option>
                        <option value="SMP MUHAMMADIYAH 2 KARANGLEWAS">SMP MUHAMMADIYAH 2 KARANGLEWAS</option>
                        <option value="SMP NEGERI 1 KARANGLEWAS">SMP NEGERI 1 KARANGLEWAS</option>
                        <option value="SMP NEGERI 2 KARANGLEWAS">SMP NEGERI 2 KARANGLEWAS</option>
                        <option value="SMP NEGERI 3 KARANGLEWAS">SMP NEGERI 3 KARANGLEWAS</option>
                        <option value="0">Sekolah lainnya</option>
                    </select>
                </div>
                <div class="input-group" id="otherSchoolInput" style="display:none;">
                    <label for="asal_sekolah_lain">Nama Sekolah Lainnya</label>
                    <input type="text" id="asal_sekolah_lain" name="asal_sekolah_lain" />
                </div>
                <div class="input-group">
                    <label for="">JENIS KELAMIN</label>
                    <select name="jenis_kelamin" id="">
                        <option selected="" disabled="">-- Pilih Jenis Kelamin --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="">AGAMA</label>
                    <input type="text" name="agama" id="" />
                </div>
                <div class="input-group">
                    <label for="">KEWARGANEGARAAN</label>
                    <input type="text" name="kewarganegaraan" id="" />
                </div>
                <h1 class="title-form">ALAMAT RUMAH</h1>
                <div class="input-group">
                    <label for="">JALAN</label>
                    <input type="text" name="jalan" id="" />
                </div>
                <div class="input-group">
                    <label for="">RT/RW</label>
                    <input type="text" name="rt/rw" id="" />
                </div>
                <div class="input-group">
                    <label for="">KELURAHAN/DESA</label>
                    <input type="text" name="kelurahan/desa" id="" />
                </div>
                <div class="input-group">
                    <label for="">KECAMATAN</label>
                    <input type="text" name="kecamatan" id="" />
                </div>
                <div class="input-group">
                    <label for="">KABUPATEN/KOTA</label>
                    <input type="text" name="kota/kabupaten" id="" />
                </div>
                <div class="input-group">
                    <label for="">PROVINSI</label>
                    <input type="text" name="provinsi" id="" />
                </div>
                <div class="input-group">
                    <label for="">JENIS TINGGAL</label>
                    <select name="jenis_tinggal" id="">
                        <option selected="" disabled="">-- Pilih Jenis Tinggal --</option>
                        <option value="Kost">Kost</option>
                        <option value="Orang Tu">Orang Tua</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="">TELEPHONE/HP</label>
                    <input type="text" name="telephone" id="" />
                </div>
                <h1 class="title-form">NAMA ORANG TUA/WALI (AYAH)</h1>
                <div class="input-group">
                    <label for="">NAMA AYAH</label>
                    <input type="text" name="nama_ayah" id="" />
                </div>
                <div class="input-group">
                    <label for="">NIK</label>
                    <input type="text" name="nik_ayah" id="" />
                </div>
                <div class="input-group">
                    <label for="">TANGGAL LAHIR</label>
                    <input type="date" name="tanggal_lahir_ayah" id="" />
                </div>
                <div class="input-group">
                    <label for="">PENDIDIKAN</label>
                    <input type="text" name="pendidikan_ayah" id="" />
                </div>
                <div class="input-group">
                    <label for="">PEKERJAAN</label>
                    <input type="text" name="pekerjaan_ayah" id="" />
                </div>
                <div class="input-group">
                    <label for="">PENGHASILAN</label>
                    <input type="text" name="penghasilan_ayah" id="" />
                </div>
                <div class="input-group">
                    <label for="">NO. HP</label>
                    <input type="text" name="telephone_ayah" id="" />
                </div>
                <h1 class="title-form">NAMA ORANG TUA/WALI (IBU)</h1>
                <div class="input-group">
                    <label for="">NAMA IBU</label>
                    <input type="text" name="nama_ibu" id="" />
                </div>
                <div class="input-group">
                    <label for="">NIK</label>
                    <input type="text" name="nik_ibu" id="" />
                </div>
                <div class="input-group">
                    <label for="">TANGGAL LAHIR</label>
                    <input type="date" name="tanggal_lahir_ibu" id="" />
                </div>
                <div class="input-group">
                    <label for="">PENDIDIKAN</label>
                    <input type="text" name="pendidikan_ibu" id="" />
                </div>
                <div class="input-group">
                    <label for="">PEKERJAAN</label>
                    <input type="text" name="pekerjaan_ibu" id="" />
                </div>
                <div class="input-group">
                    <label for="">PENGHASILAN</label>
                    <input type="text" name="penghasilan_ibu" id="" />
                </div>
                <div class="input-group">
                    <label for="">NO. HP</label>
                    <input type="text" name="telephone_ibu" id="" />
                </div>
                <h1 class="title-form">REKOMENDASI</h1>
                <div class="input-group">
                    <label for="">SUMBER REKOMENDASI</label>
                    <select name="sumber_rekomendasi" id="">
                        <option selected="" disabled="">-- Pilih Sumber Rekomendasi --</option>
                        <option value="Orang Tua">Orang Tua</option>
                        <option value="Teman">Teman</option>
                        <option value="Alumni">Alumni</option>
                        <option value="Saudara">Saudara</option>
                        <option value="Kakak Kelas">Kakak Kelas</option>
                        <option value="Kerabat">Kerabat</option>
                        <option value="Leaflet/Brosur">Leaflet/Brosur</option>
                        <option value="Guru">Guru BK</option>
                        <option value="Sekolah">Sekolah</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="">NAMA SUMBER REKOMENDASI</label>
                    <input type="text" name="nama_sumber_rekomendasi" id="" />
                </div>
                <h1 class="title-form">DATA AKUN</h1>
                <div class="input-group">
                    <label for="">EMAIL</label>
                    <input type="text" name="email" id="" />
                </div>
                <div class="input-group">
                    <label for="">PASSWORD</label>
                    <input type="text" name="password" id="" />
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="" id="" />
                    <p class="desc">
                        Saya menyatakan bahwa informasi yang saya tulis dan unggah di atas adalah benar dan saya bersedia mengikuti aturan yang berlaku dalam penyelenggaraan PPDB ini, termasuk didiskualifikasi jika data yang saya tulis tidak benar. Untuk informasi selanjutnya akan di beritahukan melalui berita yang ada di website kami.
                    </p>
                </div>
                <button type="submit">JOIN NOW</button>
            </form>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script lang="text/javascript">
        $(document).ready(function() {
            $('#asalsekolah').select2();

            $('#asalsekolah').on('change', function() {
                if ($(this).val() == '0') {
                    $('#asal_sekolah_lain').show();
                } else {
                    $('#asal_sekolah_lain').hide();
                }
            });
        });
    </script>
@endsection
