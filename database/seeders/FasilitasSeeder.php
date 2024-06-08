<?php

namespace Database\Seeders;

use App\Models\Fasilitas;
use Illuminate\Database\Seeder;

class FasilitasSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                "nama" => "Ruang Teori",
                "foto" => "default_ruangteori.jpg"
            ],
            [
                "nama" => "Ruang Praktik AKL",
                "foto" => "default_praktikakl.jpg"
            ],
            [
                "nama" => "Ruang Praktik MPLB",
                "foto" => "default_praktikmplb.jpg"
            ],
            [
                "nama" => "Ruang Praktik DKV",
                "foto" => "default_praktikdkv.jpg"
            ],
            [
                "nama" => "Ruang Praktik TKJT",
                "foto" => "default_praktiktkj.jpg"
            ]
        ];
        foreach ($data as $fasilitas) {
            Fasilitas::create($fasilitas);
        }
    }
}
