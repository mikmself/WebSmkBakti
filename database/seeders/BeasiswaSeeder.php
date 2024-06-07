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
            'nama' => 'SMK BAKTI Purwokerto school',
            'penyelenggara' => 'SMK BAKTI Purwokerto school',
            'deadline' => '2024-12-31',
        ]);
        Beasiswa::create([
            'nama' => 'Beasiswa Pendidikan',
            'penyelenggara' => 'Pemerintah',
            'deadline' => '2024-06-31',
        ]);
        Beasiswa::create([
            'nama' => 'Beasiswa KIP',
            'penyelenggara' => 'Pemerintah',
            'deadline' => '2024-08-31',
        ]);
    }
}
