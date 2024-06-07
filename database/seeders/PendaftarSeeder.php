<?php

namespace Database\Seeders;

use App\Models\Pendaftar;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PendaftarSeeder extends Seeder
{
    public function run(): void
    {
        $user1 = User::create([
            'name' => 'Budi Santoso',
            'email' => 'budisanstoso@gmail.com',
            'password' => Hash::make('password')
        ]);
        Pendaftar::create([
            'kompetensi_keahlian' => 'Teknik Komputer Jaringan dan Telekomunikasi',
            'nama_lengkap' => 'Budi Santoso',
            'tempat_lahir' => 'Jakarta',
            'tanggal_lahir' => '2005-04-15',
            'asal_sekolah' => 'SMP Negeri 1 Jakarta',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'kewarganegaraan' => 'Indonesia',
            'jalan' => 'Jl. Merdeka No. 10',
            'kelurahan/desa' => 'Gambir',
            'kecamatan' => 'Gambir',
            'kota/kabupaten' => 'Jakarta Pusat',
            'provinsi' => 'DKI Jakarta',
            'jenis_tinggal' => 'Bersama Orang Tua',
            'telephone' => '081234567890',
            'nama_ayah' => 'Sukardi Santoso',
            'nik_ayah' => '1234567890123456',
            'tanggal_lahir_ayah' => '1975-08-20',
            'pendidikan_ayah' => 'S1',
            'pekerjaan_ayah' => 'Pegawai Negeri',
            'penghasilan_ayah' => '5.000.000',
            'telephone_ayah' => '081298765432',
            'nama_ibu' => 'Siti Aminah',
            'nik_ibu' => '6543210987654321',
            'tanggal_lahir_ibu' => '1978-11-10',
            'pendidikan_ibu' => 'SMA',
            'pekerjaan_ibu' => 'Ibu Rumah Tangga',
            'penghasilan_ibu' => '3.000.000',
            'telephone_ibu' => '081234567891',
            'sumber_rekomendasi' => 'Guru SMP',
            'nama_sumber_rekomendasi' => 'Pak Ahmad',
            'user_id' => $user1->id,
            'lulus' => null
        ]);
        $user2 = User::create([
            'name' => 'Siti Nurhaliza',
            'email' => 'sitinurhaliza@gmail.com',
            'password' => Hash::make('password')
        ]);
        Pendaftar::create([
            'kompetensi_keahlian' => 'Management Perkantoran dan Layanan Bisnis',
            'nama_lengkap' => 'Siti Nurhaliza',
            'tempat_lahir' => 'Bandung',
            'tanggal_lahir' => '2005-05-20',
            'asal_sekolah' => 'SMP Negeri 2 Bandung',
            'jenis_kelamin' => 'Perempuan',
            'agama' => 'Islam',
            'kewarganegaraan' => 'Indonesia',
            'jalan' => 'Jl. Asia Afrika No. 5',
            'kelurahan/desa' => 'Braga',
            'kecamatan' => 'Sumur Bandung',
            'kota/kabupaten' => 'Bandung',
            'provinsi' => 'Jawa Barat',
            'jenis_tinggal' => 'Bersama Orang Tua',
            'telephone' => '081234567891',
            'nama_ayah' => 'Abdul Rahman',
            'nik_ayah' => '2233445566778899',
            'tanggal_lahir_ayah' => '1972-07-15',
            'pendidikan_ayah' => 'S1',
            'pekerjaan_ayah' => 'Wiraswasta',
            'penghasilan_ayah' => '6.000.000',
            'telephone_ayah' => '081298765433',
            'nama_ibu' => 'Nur Aisyah',
            'nik_ibu' => '9988776655443321',
            'tanggal_lahir_ibu' => '1976-10-05',
            'pendidikan_ibu' => 'SMA',
            'pekerjaan_ibu' => 'Ibu Rumah Tangga',
            'penghasilan_ibu' => '2.500.000',
            'telephone_ibu' => '081234567892',
            'sumber_rekomendasi' => 'Tetangga',
            'nama_sumber_rekomendasi' => 'Ibu Maria',
            'user_id' => $user2->id,
            'lulus' => null
        ]);
        $user3 = User::create([
            'name' => 'Agus Salim',
            'email' => 'agussalim@gmail.com',
            'password' => Hash::make('password')
        ]);
        Pendaftar::create([
            'kompetensi_keahlian' => 'Akutansi Keuangan Lembaga',
            'nama_lengkap' => 'Agus Salim',
            'tempat_lahir' => 'Surabaya',
            'tanggal_lahir' => '2005-06-25',
            'asal_sekolah' => 'SMP Negeri 3 Surabaya',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Kristen',
            'kewarganegaraan' => 'Indonesia',
            'jalan' => 'Jl. Diponegoro No. 20',
            'kelurahan/desa' => 'Tegalsari',
            'kecamatan' => 'Tegalsari',
            'kota/kabupaten' => 'Surabaya',
            'provinsi' => 'Jawa Timur',
            'jenis_tinggal' => 'Kos',
            'telephone' => '081234567892',
            'nama_ayah' => 'Bambang Hermanto',
            'nik_ayah' => '3344556677889900',
            'tanggal_lahir_ayah' => '1973-05-10',
            'pendidikan_ayah' => 'SMA',
            'pekerjaan_ayah' => 'Petani',
            'penghasilan_ayah' => '3.000.000',
            'telephone_ayah' => '081298765434',
            'nama_ibu' => 'Sulastri',
            'nik_ibu' => '1122334455667788',
            'tanggal_lahir_ibu' => '1975-09-20',
            'pendidikan_ibu' => 'SMA',
            'pekerjaan_ibu' => 'Petani',
            'penghasilan_ibu' => '3.000.000',
            'telephone_ibu' => '081234567893',
            'sumber_rekomendasi' => 'Guru SD',
            'nama_sumber_rekomendasi' => 'Bu Dewi',
            'user_id' => $user3->id,
            'lulus' => null
        ]);
        $user4 = User::create([
            'name' => 'Dewi Sartika',
            'email' => 'dewisartika@gmail.com',
            'password' => Hash::make('password')
        ]);
        Pendaftar::create([
            'kompetensi_keahlian' => 'Desain Komunikasi Visual',
            'nama_lengkap' => 'Dewi Sartika',
            'tempat_lahir' => 'Yogyakarta',
            'tanggal_lahir' => '2005-07-30',
            'asal_sekolah' => 'SMP Negeri 4 Yogyakarta',
            'jenis_kelamin' => 'Perempuan',
            'agama' => 'Hindu',
            'kewarganegaraan' => 'Indonesia',
            'jalan' => 'Jl. Malioboro No. 50',
            'kelurahan/desa' => 'Malioboro',
            'kecamatan' => 'Gedongtengen',
            'kota/kabupaten' => 'Yogyakarta',
            'provinsi' => 'DI Yogyakarta',
            'jenis_tinggal' => 'Bersama Orang Tua',
            'telephone' => '081234567893',
            'nama_ayah' => 'Hendra Wijaya',
            'nik_ayah' => '4455667788990011',
            'tanggal_lahir_ayah' => '1974-03-25',
            'pendidikan_ayah' => 'D3',
            'pekerjaan_ayah' => 'Pegawai Swasta',
            'penghasilan_ayah' => '4.500.000',
            'telephone_ayah' => '081298765435',
            'nama_ibu' => 'Sri Lestari',
            'nik_ibu' => '2233445566778899',
            'tanggal_lahir_ibu' => '1978-12-15',
            'pendidikan_ibu' => 'SMA',
            'pekerjaan_ibu' => 'Ibu Rumah Tangga',
            'penghasilan_ibu' => '2.000.000',
            'telephone_ibu' => '081234567894',
            'sumber_rekomendasi' => 'Kerabat',
            'nama_sumber_rekomendasi' => 'Pak Budi',
            'user_id' => $user4->id,
            'lulus' => null
        ]);
        $user5 = User::create([
            'name' => 'Andi Wijaya',
            'email' => 'andiwijaya@gmail.com',
            'password' => Hash::make('password')
        ]);
        Pendaftar::create([
            'kompetensi_keahlian' => 'Teknik Komputer Jaringan dan Telekomunikasi',
            'nama_lengkap' => 'Andi Wijaya',
            'tempat_lahir' => 'Medan',
            'tanggal_lahir' => '2005-08-05',
            'asal_sekolah' => 'SMP Negeri 5 Medan',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Buddha',
            'kewarganegaraan' => 'Indonesia',
            'jalan' => 'Jl. Gatot Subroto No. 30',
            'kelurahan/desa' => 'Medan Baru',
            'kecamatan' => 'Medan Baru',
            'kota/kabupaten' => 'Medan',
            'provinsi' => 'Sumatera Utara',
            'jenis_tinggal' => 'Bersama Orang Tua',
            'telephone' => '081234567894',
            'nama_ayah' => 'Sudirman',
            'nik_ayah' => '5566778899001122',
            'tanggal_lahir_ayah' => '1970-06-30',
            'pendidikan_ayah' => 'S2',
            'pekerjaan_ayah' => 'Dosen',
            'penghasilan_ayah' => '7.000.000',
            'telephone_ayah' => '081298765436',
            'nama_ibu' => 'Ani Setiawati',
            'nik_ibu' => '3344556677889900',
            'tanggal_lahir_ibu' => '1973-11-20',
            'pendidikan_ibu' => 'SMA',
            'pekerjaan_ibu' => 'Ibu Rumah Tangga',
            'penghasilan_ibu' => '2.500.000',
            'telephone_ibu' => '081234567895',
            'sumber_rekomendasi' => 'Saudara',
            'nama_sumber_rekomendasi' => 'Pak Hasan',
            'user_id' => $user5->id,
            'lulus' => null
        ]);
    }
}
