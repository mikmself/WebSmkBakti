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
                    <label for="">Kompetensi Keahlian <span style="color: red">*</span></label>
                    <select class="" id="" name="kompetensi_keahlian" required>
                        <option value="" {{ old('kompetensi_keahlian') == '' ? 'selected' : '' }}>-- Pilih Kompetensi Keahlian --</option>
                        <option value="Akutansi Keuangan dan Lembaga" {{ old('kompetensi_keahlian') == 'Akutansi Keuangan dan Lembaga' ? 'selected' : '' }}>Akutansi Keuangan dan Lembaga</option>
                        <option value="Otomatisasi Tata Kelola Perkantoran" {{ old('kompetensi_keahlian') == 'Otomatisasi Tata Kelola Perkantoran' ? 'selected' : '' }}>Otomatisasi Tata Kelola Perkantoran</option>
                        <option value="Multimedia" {{ old('kompetensi_keahlian') == 'Multimedia' ? 'selected' : '' }}>Multimedia</option>
                        <option value="Teknik Komputer dan Jaringan" {{ old('kompetensi_keahlian') == 'Teknik Komputer dan Jaringan' ? 'selected' : '' }}>Teknik Komputer dan Jaringan</option>
                    </select>
                </div>
                <h1 class="title-form">DATA DIRI SISWA</h1>
                <div class="input-group">
                    <label for="">Nama Lengkap <span style="color: red">*</span></label>
                    <input type="text" name="nama_lengkap" id="" value="{{ old('nama_lengkap') }}" required />
                </div>
                <div class="input-group">
                    <label for="">Tempat Lahir <span style="color: red">*</span></label>
                    <input type="text" name="tempat_lahir" id="" value="{{ old('tempat_lahir') }}" required />
                </div>
                <div class="input-group">
                    <label for="tanggal_lahir">Tanggal Lahir <span style="color: red">*</span></label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required />
                    <span id="error_message" style="color:red; display:none;">Tanggal lahir tidak boleh melebihi tanggal sekarang</span>
                </div>
                <div class="input-group">
                    <label for="asal_sekolah">Asal Sekolah SMP/MTS <span style="color: red">*</span></label>
                    <input type="text" id="asal_sekolah" name="asal_sekolah" value="{{ old('asal_sekolah') }}" required />
                </div>
                <div class="input-group">
                    <label for="">JENIS KELAMIN <span style="color: red">*</span></label>
                    <select name="jenis_kelamin" id="" required>
                        <option value="" {{ old('jenis_kelamin') == '' ? 'selected' : '' }}>-- Pilih Jenis Kelamin --</option>
                        <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="">AGAMA <span style="color: red">*</span></label>
                    <input type="text" name="agama" id="" value="{{ old('agama') }}" required />
                </div>
                <div class="input-group">
                    <label for="">KEWARGANEGARAAN <span style="color: red">*</span></label>
                    <input type="text" name="kewarganegaraan" id="" value="{{ old('kewarganegaraan') }}" required />
                </div>
                <h1 class="title-form">ALAMAT RUMAH</h1>
                <div class="input-group">
                    <label for="">JALAN <span style="color: red">*</span></label>
                    <input type="text" name="jalan" id="" value="{{ old('jalan') }}" required />
                </div>
                <div class="input-group">
                    <label for="">RT/RW <span style="color: red">*</span></label>
                    <input type="text" name="rt/rw" id="" value="{{ old('rt/rw') }}" required />
                </div>
                <div class="input-group">
                    <label for="">KELURAHAN/DESA <span style="color: red">*</span></label>
                    <input type="text" name="kelurahan/desa" id="" value="{{ old('kelurahan/desa') }}" required />
                </div>
                <div class="input-group">
                    <label for="">KECAMATAN <span style="color: red">*</span></label>
                    <input type="text" name="kecamatan" id="" value="{{ old('kecamatan') }}" required />
                </div>
                <div class="input-group">
                    <label for="">KABUPATEN/KOTA <span style="color: red">*</span></label>
                    <input type="text" name="kota/kabupaten" id="" value="{{ old('kota/kabupaten') }}" required />
                </div>
                <div class="input-group">
                    <label for="">PROVINSI <span style="color: red">*</span></label>
                    <input type="text" name="provinsi" id="" value="{{ old('provinsi') }}" required />
                </div>
                <div class="input-group">
                    <label for="">JENIS TINGGAL <span style="color: red">*</span></label>
                    <select name="jenis_tinggal" id="" required>
                        <option value="" {{ old('jenis_tinggal') == '' ? 'selected' : '' }}>-- Pilih Jenis Tinggal --</option>
                        <option value="Kost" {{ old('jenis_tinggal') == 'Kost' ? 'selected' : '' }}>Kost</option>
                        <option value="Orang Tua" {{ old('jenis_tinggal') == 'Orang Tua' ? 'selected' : '' }}>Orang Tua</option>
                        <option value="Kontrak Dan Lainnya" {{ old('jenis_tinggal') == 'Kontrak Dan Lainnya' ? 'selected' : '' }}>Kontrak Dan Lainnya</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="">TELEPHONE/HP <span style="color: red">*</span></label>
                    <input type="number" name="telephone" id="" value="{{ old('telephone') }}" required />
                </div>
                <h1 class="title-form">NAMA ORANG TUA/WALI (AYAH)</h1>
                <div class="input-group">
                    <label for="">NAMA AYAH <span style="color: red">*</span></label>
                    <input type="text" name="nama_ayah" id="" value="{{ old('nama_ayah') }}" required />
                </div>
                <div class="input-group">
                    <label for="nik_ayah">NIK <span style="color: red">*</span></label>
                    <input type="number" name="nik_ayah" id="nik_ayah" maxlength="16" oninput="validateNIK(this)" value="{{ old('nik_ayah') }}" required/>
                    <span id="error-nik" style="color: red; display: none;">NIK tidak boleh lebih dari 16 digit</span>
                </div>
                <div class="input-group">
                    <label for="">TANGGAL LAHIR <span style="color: red">*</span></label>
                    <input type="date" name="tanggal_lahir_ayah" id="" value="{{ old('tanggal_lahir_ayah') }}" required />
                </div>
                <div class="input-group">
                    <label for="">PENDIDIKAN <span style="color: red">*</span></label>
                    <input type="text" name="pendidikan_ayah" id="" value="{{ old('pendidikan_ayah') }}" required />
                </div>
                <div class="input-group">
                    <label for="">PEKERJAAN <span style="color: red">*</span></label>
                    <input type="text" name="pekerjaan_ayah" id="" value="{{ old('pekerjaan_ayah') }}" required />
                </div>
                <div class="input-group">
                    <label for="">PENGHASILAN <span style="color: red">*</span></label>
                    <input type="number" name="penghasilan_ayah" id="" value="{{ old('penghasilan_ayah') }}" required />
                </div>
                <div class="input-group">
                    <label for="">NO. HP <span style="color: red">*</span></label>
                    <input type="number" name="telephone_ayah" id="" value="{{ old('telephone_ayah') }}" required />
                </div>
                <h1 class="title-form">NAMA ORANG TUA/WALI (IBU)</h1>
                <div class="input-group">
                    <label for="">NAMA IBU <span style="color: red">*</span></label>
                    <input type="text" name="nama_ibu" id="" value="{{ old('nama_ibu') }}" required />
                </div>
                <div class="input-group">
                    <label for="">NIK <span style="color: red">*</span></label>
                    <input type="number" name="nik_ibu" id="nik_ibu" maxlength="16" oninput="validateNIK2(this)" value="{{ old('nik_ibu') }}" required/>
                    <span id="error-nik2" style="color: red; display: none;">NIK tidak boleh lebih dari 16 digit</span>
                </div>
                <div class="input-group">
                    <label for="">TANGGAL LAHIR <span style="color: red">*</span></label>
                    <input type="date" name="tanggal_lahir_ibu" id="" value="{{ old('tanggal_lahir_ibu') }}" required />
                </div>
                <div class="input-group">
                    <label for="">PENDIDIKAN <span style="color: red">*</span></label>
                    <input type="text" name="pendidikan_ibu" id="" value="{{ old('pendidikan_ibu') }}" required />
                </div>
                <div class="input-group">
                    <label for="">PEKERJAAN <span style="color: red">*</span></label>
                    <input type="text" name="pekerjaan_ibu" id="" value="{{ old('pekerjaan_ibu') }}" required />
                </div>
                <div class="input-group">
                    <label for="">PENGHASILAN <span style="color: red">*</span></label>
                    <input type="number" name="penghasilan_ibu" id="" value="{{ old('penghasilan_ibu') }}" required />
                </div>
                <div class="input-group">
                    <label for="">NO. HP <span style="color: red">*</span></label>
                    <input type="number" name="telephone_ibu" id="" value="{{ old('telephone_ibu') }}" required />
                </div>
                <div class="input-group">
                    <label for="">SUMBER REKOMENDASI <span style="color: red">*</span></label>
                    <select name="sumber_rekomendasi" id="" required>
                        <option value="" {{ old('sumber_rekomendasi') == '' ? 'selected' : '' }}>-- Pilih Sumber Rekomendasi --</option>
                        <option value="Orang Tua" {{ old('sumber_rekomendasi') == 'Orang Tua' ? 'selected' : '' }}>Orang Tua</option>
                        <option value="Teman" {{ old('sumber_rekomendasi') == 'Teman' ? 'selected' : '' }}>Teman</option>
                        <option value="Alumni" {{ old('sumber_rekomendasi') == 'Alumni' ? 'selected' : '' }}>Alumni</option>
                        <option value="Saudara" {{ old('sumber_rekomendasi') == 'Saudara' ? 'selected' : '' }}>Saudara</option>
                        <option value="Kakak Kelas" {{ old('sumber_rekomendasi') == 'Kakak Kelas' ? 'selected' : '' }}>Kakak Kelas</option>
                        <option value="Kerabat" {{ old('sumber_rekomendasi') == 'Kerabat' ? 'selected' : '' }}>Kerabat</option>
                        <option value="Leaflet/Brosur" {{ old('sumber_rekomendasi') == 'Leaflet/Brosur' ? 'selected' : '' }}>Leaflet/Brosur</option>
                        <option value="Guru" {{ old('sumber_rekomendasi') == 'Guru' ? 'selected' : '' }}>Guru BK</option>
                        <option value="Sekolah" {{ old('sumber_rekomendasi') == 'Sekolah' ? 'selected' : '' }}>Sekolah</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="">NAMA SUMBER REKOMENDASI <span style="color: red">*</span></label>
                    <input type="text" name="nama_sumber_rekomendasi" id="" value="{{ old('nama_sumber_rekomendasi') }}" required />
                </div>
                <h1 class="title-form">UPLOAD BERKAS (ext : pdf)</h1>
                <div class="input-group">
                    <label for="">Upload SKL / Rapot <span style="color: red">*</span></label>
                    <input type="file" name="file_skl" id="" style="text-align: center;" required />
                </div>
                <div class="input-group">
                    <label for="">Upload FC Kartu Keluarga <span style="color: red">*</span></label>
                    <input type="file" name="file_kk" id="" required />
                </div>
                <div class="input-group">
                    <label for="">Upload Akta Kelahiran <span style="color: red">*</span></label>
                    <input type="file" name="file_akte" id="" required />
                </div>
                <div class="input-group">
                    <label for="">Upload FC Kartu KIP (Bila Ada) </label>
                    <input type="file" name="file_kip" id="" />
                </div>
                <div class="input-group">
                    <label for="">Upload SKTM (Bila ada) </label>
                    <input type="file" name="file_sktm" id=""  />
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="" id="" />
                    <p class="desc">
                        Saya menyatakan bahwa informasi yang saya tulis dan unggah di atas adalah benar dan saya bersedia mengikuti aturan yang berlaku dalam penyelenggaraan PPDB ini, termasuk didiskualifikasi jika data yang saya tulis tidak benar. Untuk informasi selanjutnya akan di beritahukan melalui berita yang ada di website kami.
                    </p>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
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
        function validateNIK(input) {
            const maxLength = 16;
            const errorElement = document.getElementById('error-nik');

            if (input.value.length > maxLength) {
                input.value = input.value.slice(0, maxLength); // Memotong input jika lebih dari 16 digit
                errorElement.style.display = 'block'; // Menampilkan pesan error
            } else {
                errorElement.style.display = 'none'; // Menyembunyikan pesan error
            }
        }
        function validateNIK2(input) {
            const maxLength = 16;
            const errorElement = document.getElementById('error-nik2');

            if (input.value.length > maxLength) {
                input.value = input.value.slice(0, maxLength); // Memotong input jika lebih dari 16 digit
                errorElement.style.display = 'block'; // Menampilkan pesan error
            } else {
                errorElement.style.display = 'none'; // Menyembunyikan pesan error
            }
        }
    </script>
@endsection
