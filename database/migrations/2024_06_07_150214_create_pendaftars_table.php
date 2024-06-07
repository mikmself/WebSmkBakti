<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pendaftar', function (Blueprint $table) {
            $table->id();
            // Kompetensi keahlian
            $table->string('kompetensi_keahlian');
            // Data diri siswa
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('asal_sekolah');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('kewarganegaraan');
            // Alamat siswa
            $table->string('jalan');
            $table->string('kelurahan/desa');
            $table->string('kecamatan');
            $table->string('kota/kabupaten');
            $table->string('provinsi');
            $table->string('jenis_tinggal');
            $table->string('telephone');
            // Data ayah
            $table->string('nama_ayah');
            $table->string('nik_ayah')->unique();
            $table->date('tanggal_lahir_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('penghasilan_ayah');
            $table->string('telephone_ayah');
            // Data ibu
            $table->string('nama_ibu');
            $table->string('nik_ibu')->unique();
            $table->date('tanggal_lahir_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('penghasilan_ibu');
            $table->string('telephone_ibu');
            // Rekomendasi
            $table->string('sumber_rekomendasi');
            $table->string('nama_sumber_rekomendasi');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('lulus')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('pendaftar');
    }
};
