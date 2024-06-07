<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    public function run(): void
    {
        Guru::create([
            'nama' => 'Saptodharmo Pramono',
            'mapel' => 'Pendidikan Kewarganegaraan',
            'nip' => '287672656782765787'
        ]);

        Guru::create([
            'nama' => 'Rahayu Purnama',
            'mapel' => 'Matematika',
            'nip' => '123456789012345678'
        ]);

        Guru::create([
            'nama' => 'Dwi Astuti',
            'mapel' => 'Bahasa Indonesia',
            'nip' => '234567890123456789'
        ]);

        Guru::create([
            'nama' => 'Teguh Budiarto',
            'mapel' => 'Sejarah',
            'nip' => '345678901234567890'
        ]);

        Guru::create([
            'nama' => 'Sri Lestari',
            'mapel' => 'Biologi',
            'nip' => '456789012345678901'
        ]);

        Guru::create([
            'nama' => 'Indah Permata Sari',
            'mapel' => 'Kimia',
            'nip' => '567890123456789012'
        ]);

        Guru::create([
            'nama' => 'Bambang Suharto',
            'mapel' => 'Fisika',
            'nip' => '678901234567890123'
        ]);

        Guru::create([
            'nama' => 'Ratna Wulandari',
            'mapel' => 'Bahasa Inggris',
            'nip' => '789012345678901234'
        ]);

        Guru::create([
            'nama' => 'Hendro Wibowo',
            'mapel' => 'Geografi',
            'nip' => '890123456789012345'
        ]);

        Guru::create([
            'nama' => 'Nina Kartika',
            'mapel' => 'Seni Budaya',
            'nip' => '901234567890123456'
        ]);
    }
}
