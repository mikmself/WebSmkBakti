<?php

namespace Database\Seeders;

use App\Models\Ekstrakulikuler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EkstrakulikulerSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                "nama" => "Pramuka",
                "foto" => "default_pramuka.png",
            ],
            [
                "nama" => "Paskibra",
                "foto" => "default_paskibra.png",
            ],
            [
                "nama" => "PMR",
                "foto" => "default_pmr.png",
            ],
            [
                "nama" => "PKS",
                "foto" => "default_pks.png",
            ],
            [
                "nama" => "Osis",
                "foto" => "default_osis.png",
            ],
            [
                "nama" => "Marching Band",
                "foto" => "default_marching-band.png",
            ]
        ];
        foreach ($data as $ekstrakulikuler) {
            Ekstrakulikuler::create($ekstrakulikuler);
        }
    }
}
