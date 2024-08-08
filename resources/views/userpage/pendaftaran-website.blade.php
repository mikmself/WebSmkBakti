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
            <form action="{{route('daftarWebsite')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="title-form">
                    <h1 class="text">DATA CALON SISWA</h1>
                </div>
                <h1 class="title-form">PROGRAM STUDI</h1>
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
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" />
                    <span id="error_message" style="color:red; display:none;">Tanggal lahir tidak boleh melebihi tanggal sekarang</span>
                </div>
                <div class="input-group">
                    <label for="asal_sekolah">Asal Sekolah SMP/MTS</label>
                    <input type="text" id="asal_sekolah" name="asal_sekolah" />
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
                    <input type="number" name="telephone" id="" />
                </div>
                <h1 class="title-form">NAMA ORANG TUA/WALI (AYAH)</h1>
                <div class="input-group">
                    <label for="">NAMA AYAH</label>
                    <input type="text" name="nama_ayah" id="" />
                </div>
                <div class="input-group">
                    <label for="">NIK</label>
                    <input type="number" name="nik_ayah" id="" />
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
                    <input type="number" name="penghasilan_ayah" id="" />
                </div>
                <div class="input-group">
                    <label for="">NO. HP</label>
                    <input type="number" name="telephone_ayah" id="" />
                </div>
                <h1 class="title-form">NAMA ORANG TUA/WALI (IBU)</h1>
                <div class="input-group">
                    <label for="">NAMA IBU</label>
                    <input type="text" name="nama_ibu" id="" />
                </div>
                <div class="input-group">
                    <label for="">NIK</label>
                    <input type="number" name="nik_ibu" id="" />
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
                    <input type="number" name="penghasilan_ibu" id="" />
                </div>
                <div class="input-group">
                    <label for="">NO. HP</label>
                    <input type="number" name="telephone_ibu" id="" />
                </div>
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
                <h1 class="title-form">UPLOAD BERKAS (ext : pdf)</h1>
                <div class="input-group">
                    <label for="">Upload SKL / Rapot</label>
                    <input type="file" name="file_skl" id="" style="text-align: center;"/>
                </div>
                <div class="input-group">
                    <label for="">Upload FC Kartu Keluarga</label>
                    <input type="file" name="file_kk" id="" />
                </div>
                <div class="input-group">
                    <label for="">Upload Akta Kelahiran</label>
                    <input type="file" name="file_akte" id="" />
                </div>
                <div class="input-group">
                    <label for="">Upload FC Kartu KIP (Bila Ada)</label>
                    <input type="file" name="file_kip" id="" />
                </div>
                <div class="input-group">
                    <label for="">Upload SKTM (bila ada)</label>
                    <input type="file" name="file_sktm" id="" />
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
    <script>
        document.getElementById('tanggal_lahir').addEventListener('change', function() {
            var inputDate = new Date(this.value);
            var currentDate = new Date();
            var errorMessage = document.getElementById('error_message');

            if (inputDate > currentDate) {
                errorMessage.style.display = 'inline';
                this.value = '';  // Clear the invalid date
            } else {
                errorMessage.style.display = 'none';
            }
        });
    </script>
@endsection
