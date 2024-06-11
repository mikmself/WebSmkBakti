<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            PendaftarSeeder::class,
            BeasiswaSeeder::class,
            KontakSeeder::class,
            GuruSeeder::class,
            EkstrakulikulerSeeder::class,
            FasilitasSeeder::class,
            BeritaSeeder::class,
        ]);
    }
}
