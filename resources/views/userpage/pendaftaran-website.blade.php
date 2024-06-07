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
            <form action="">
                <div class="title-form">
                    <h1 class="text">DATA CALON SISWA</h1>
                </div>
                <div class="input-group">
                    <label for="">Kompetensi Keahlian</label>
                    <select class="" id="">
                        <option selected="" disabled="">-- Pilih Kompetensi Keahlian --</option>
                        <option value="Akutansi Keuangan dan Lembaga">Akutansi Keuangan dan Lembaga</option>
                        <option value="Otomatisasi Tata Kelola Perkantoran">Otomatisasi Tata Kelola Perkantoran</option>
                        <option value="Multimedia">Multimedia</option>
                        <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                    </select>
                </div>
                <h1 class="title-form">DATA DIRI SISWA</h1>
                <div class="input-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="" id="" />
                </div>
                <div class="input-group">
                    <label for="">Tempat Lahir</label>
                    <input type="text" name="" id="" />
                </div>
                <div class="input-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="" id="" />
                </div>
                <div class="input-group">
                    <label for="">Asal Sekolah SMP/MTS</label>
                    <select name="" id="asalsekolah">
                        <option selected="" disabled="">-- Pilih sekolah --</option>
                        <option value="23">SMP DIPONEGORO 1 PURWOKERTO</option>
                        <option value="24">SMP ISLAM TERPADU HARAPAN BUNDA</option>
                        <option value="25">SMP MAARIF NU 03 PURWOKERTO</option>
                        <option value="26">SMP MAARIF NU 2 PURWOKERTO</option>
                        <option value="27">SMP MUHAMMADIYAH 1 PURWOKERTO</option>
                        <option value="28">SMP MUHAMMADIYAH 2 PURWOKERTO</option>
                        <option value="29">SMP NEGERI 5 PURWOKERTO</option>
                        <option value="30">SMP NEGERI 7 PURWOKERTO</option>
                        <option value="31">SMP TELKOM PURWOKERTO</option>
                        <option value="32">SMPS NASIONAL 3 BAHASA PUTERA HARAPAN</option>
                        <option value="33">MTSN 1 BANYUMAS</option>
                        <option value="34">MTS MUHAMMADIYAH PURWOKERTO</option>
                        <option value="35">SMP AL IRSYAD AL ISLAMIYYAH</option>
                        <option value="36">SMP BRUDERAN PURWOKERTO</option>
                        <option value="37">SMP KRISTEN 1 PURWOKERTO</option>
                        <option value="38">SMP MAARIF NU 1 PURWOKERTO</option>
                        <option value="39">SMP NEGERI 1 PURWOKERTO</option>
                        <option value="40">SMP NEGERI 2 PURWOKERTO</option>
                        <option value="41">SMP NEGERI 6 PURWOKERTO</option>
                        <option value="42">SMP NEGERI 8 PURWOKERTO</option>
                        <option value="43">SMP PERMATA HATI</option>
                        <option value="44">SMP SUSTERAN PURWOKERTO</option>
                        <option value="45">SMPN 3 PURWOKERTO</option>
                        <option value="46">MTS AL HIDAYAH PURWOKERTO BARAT</option>
                        <option value="47">MTS MA`ARIF NU 1 PURWOKERTO BARAT</option>
                        <option value="48"> SMP BOARDING SCHOOL PUTRA HARAPAN PURWOKERTO</option>
                        <option value="49">SMP GUNUNGJATI 1 PURWOKERTO</option>
                        <option value="50">SMP GUNUNGJATI 2 PURWOKERTO</option>
                        <option value="51">SMP NEGERI 4 PURWOKERTO</option>
                        <option value="52">MTS AL - HIDAYAH PURWOKERTO</option>
                        <option value="53">SMP MUHAMMADIYAH 3 PURWOKERTO</option>
                        <option value="54">SMP NEGERI 9 PURWOKERTO</option>
                        <option value="55">MTS AL IKHSAN BEJI KEDUNGBANTENG</option>
                        <option value="56">MTS MA`ARIF NU 1 KEDUNGBANTENG</option>
                        <option value="57">SMP DIPONEGORO 3 KEDUNGBANTENG</option>
                        <option value="58">SMP MUHAMMADIYAH BEJI KEDUNGBANTENG</option>
                        <option value="59">SMP NEGERI 1 KEDUNGBANTENG</option>
                        <option value="60">SMP NEGERI 2 KEDUNGBANTENG</option>
                        <option value="61">SMP NEGERI 3 KEDUNGBANTENG</option>
                        <option value="62">SMP NEGERI 4 KEDUNGBANTENG</option>
                        <option value="63">MTS MA`ARIF NU 1 SOKARAJA</option>
                        <option value="64">SMP IT ANNIDA SOKARAJA</option>
                        <option value="65">SMP MUHAMMADIYAH SOKARAJA</option>
                        <option value="66">SMP NEGERI 1 SOKARAJA</option>
                        <option value="67">SMP NEGERI 2 SOKARAJA</option>
                        <option value="68">SMP YOS SUDARSO SOKARAJA</option>
                        <option value="69">SMPN 3 SOKARAJA</option>
                        <option value="70">MTS MA`ARIF NU 1 KEMBARAN</option>
                        <option value="71">MTS SA RAODHOTUT THOLIBIN KEMBARAN</option>
                        <option value="72">SMP GUNUNGJATI KEMBARAN</option>
                        <option value="73">SMP ISLAM WALISONGO KEMBARAN</option>
                        <option value="74">SMP MUHAMMADIYAH KEMBARAN</option>
                        <option value="75">SMP NEGERI 1 KEMBARAN</option>
                        <option value="76">SMP NEGERI 2 KEMBARAN</option>
                        <option value="77">MTSN 3 BANYUMAS</option>
                        <option value="78">MTS MA`ARIF NU 1 SUMBANG</option>
                        <option value="79">SMP MUHAMMADIYAH SUMBANG</option>
                        <option value="80">SMP N 4 SUMBANG</option>
                        <option value="81">SMP NEGERI 1 SUMBANG</option>
                        <option value="82">SMP NEGERI 2 SUMBANG</option>
                        <option value="83">SMP PGRI SUMBANG</option>
                        <option value="84">SMPN 3 SUMBANG</option>
                        <option value="85">MTS AL MASRURIYAH BATURADEN</option>
                        <option value="86">SMP BOARDING SCHOOL AL IRSYAD AL ISLAMIYYAH PURWOK</option>
                        <option value="87">SMP NEGERI 1 BATURRADEN</option>
                        <option value="88">SMP NEGERI 2 BATURRADEN</option>
                        <option value="89">SMP PGRI BATURRADEN</option>
                        <option value="90">MTS MA`ARIF NU 1 KARANGLEWAS</option>
                        <option value="91">SMP MUHAMMADIYAH 1 KARANGLEWAS</option>
                        <option value="92">SMP MUHAMMADIYAH 2 KARANGLEWAS</option>
                        <option value="93">SMP NEGERI 1 KARANGLEWAS</option>
                        <option value="94">SMP NEGERI 2 KARANGLEWAS</option>
                        <option value="95">SMP NEGERI 3 KARANGLEWAS</option>
                        <option value="0">Sekolah lainnya</option>
                    </select>
                </div>
                <div class="input-group" id="otherSchoolInput" style="display:none;">
                    <label for="otherSchool">Nama Sekolah Lainnya</label>
                    <input type="text" id="otherSchool" name="otherSchool" />
                </div>
                <div class="input-group">
                    <label for="">JENIS KELAMIN</label>
                    <select name="" id="">
                        <option selected="" disabled="">-- Pilih Jenis Kelamin --</option>
                        <option value="">Laki-laki</option>
                        <option value="">Perempuan</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="">AGAMA</label>
                    <input type="text" name="" id="" />
                </div>
                <div class="input-group">
                    <label for="">KEWARGANEGARAAN</label>
                    <input type="text" name="" id="" />
                </div>
                <h1 class="title-form">ALAMAT RUMAH</h1>
                <div class="input-group">
                    <label for="">JALAN</label>
                    <input type="text" name="" id="" />
                </div>
                <div class="input-group">
                    <label for="">KELURAHAN/DESA</label>
                    <input type="text" name="" id="" />
                </div>
                <div class="input-group">
                    <label for="">RT/RW</label>
                    <input type="text" name="" id="" />
                </div>
                <div class="input-group">
                    <label for="">KECAMATAN</label>
                    <input type="text" name="" id="" />
                </div>
                <div class="input-group">
                    <label for="">KABUPATEN/KOTA</label>
                    <input type="text" name="" id="" />
                </div>
                <div class="input-group">
                    <label for="">PROVINSI</label>
                    <input type="text" name="" id="" />
                </div>
                <div class="input-group">
                    <label for="">JENIS TINGGAL</label>
                    <select name="" id="">
                        <option selected="" disabled="">-- Pilih Jenis Tinggal --</option>
                        <option value="">Kost</option>
                        <option value="">Orang Tua</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="">TELEPHONE/HP</label>
                    <input type="text" name="" id="" />
                </div>
                <h1 class="title-form">NAMA ORANG TUA/WALI (AYAH)</h1>
                <div class="input-group">
                    <label for="">NAMA AYAH</label>
                    <input type="text" name="" id="" />
                </div>
                <div class="input-group">
                    <label for="">NIK</label>
                    <input type="text" name="" id="" />
                </div>
                <div class="input-group">
                    <label for="">TANGGAL LAHIR</label>
                    <input type="text" name="" id="" />
                </div>
                <div class="input-group">
                    <label for="">PENDIDIKAN</label>
                    <input type="text" name="" id="" />
                </div>
                <div class="input-group">
                    <label for="">PEKERJAAN</label>
                    <input type="text" name="" id="" />
                </div>
                <div class="input-group">
                    <label for="">PENGHASILAN</label>
                    <input type="text" name="" id="" />
                </div>
                <div class="input-group">
                    <label for="">NO. HP</label>
                    <input type="text" name="" id="" />
                </div>
                <h1 class="title-form">NAMA ORANG TUA/WALI (IBU)</h1>
                <div class="input-group">
                    <label for="">NAMA IBU</label>
                    <input type="text" name="" id="" />
                </div>
                <div class="input-group">
                    <label for="">NIK</label>
                    <input type="text" name="" id="" />
                </div>
                <div class="input-group">
                    <label for="">TANGGAL LAHIR</label>
                    <input type="text" name="" id="" />
                </div>
                <div class="input-group">
                    <label for="">PENDIDIKAN</label>
                    <input type="text" name="" id="" />
                </div>
                <div class="input-group">
                    <label for="">PEKERJAAN</label>
                    <input type="text" name="" id="" />
                </div>
                <div class="input-group">
                    <label for="">PENGHASILAN</label>
                    <input type="text" name="" id="" />
                </div>
                <div class="input-group">
                    <label for="">NO. HP</label>
                    <input type="text" name="" id="" />
                </div>
                <h1 class="title-form">REKOMENDASI</h1>
                <div class="input-group">
                    <label for="">SUMBER REKOMENDASI</label>
                    <select name="" id="">
                        <option selected="" disabled="">-- Pilih Sumber Rekomendasi --</option>
                        <option value="">Orang Tua</option>
                        <option value="">Teman</option>
                        <option value="">Alumni</option>
                        <option value="">Saudara</option>
                        <option value="">Kakak Kelas</option>
                        <option value="">Kerabat</option>
                        <option value="">Leaflet/Brosur</option>
                        <option value="">Guru BK</option>
                        <option value="">Sekolah</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="">NAMA SUMBER REKOMENDASI</label>
                    <input type="text" name="" id="" />
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="" id="" />
                    <p class="desc">
                        Saya menyatakan bahwa informasi yang saya tulis dan unggah di
                        atas adalah benar dan saya bersedia mengikuti aturan yang
                        berlaku dalam penyelenggaraan PPDB ini, termasuk
                        didiskualifikasi jika data yang saya tulis tidak benar.
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
                    $('#otherSchoolInput').show();
                } else {
                    $('#otherSchoolInput').hide();
                }
            });
        });
    </script>
@endsection
