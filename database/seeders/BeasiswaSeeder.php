<?php

namespace Database\Seeders;

use App\Models\Beasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeasiswaSeeder extends Seeder
{
    public function run(): void
    {
        Beasiswa::create([
            'nama_beasiswa' => 'SMK BAKTI Purwokerto school',
            'penyelenggara' => 'SMK BAKTI Purwokerto school',
            'deadline' => '2024-06-06',
        ]);
        Beasiswa::create([
            'nama_beasiswa' => 'Beasiswa Pendidikan',
            'penyelenggara' => 'Pemerintah',
            'deadline' => '2024-06-06',
        ]);
        Beasiswa::create([
            'nama_beasiswa' => 'Beasiswa KIP',
            'penyelenggara' => 'Pemerintah',
            'deadline' => '2024-06-06',
        ]);
    }
}
