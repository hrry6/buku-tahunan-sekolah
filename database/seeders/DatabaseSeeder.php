<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(SekolahSeeder::class);
        $this->call(AkunSeeder::class);
        $this->call(SambutanKepsekSeeder::class);
        $this->call(EkstraKurikulerSeeder::class);
        $this->call(SeragamSeeder::class);
        $this->call(FasilitasSeeder::class);
        $this->call(KaryawanSekolahSeeder::class);
        $this->call(JurusanSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(KomentarSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(CircleSeeder::class);
        $this->call(SiswaSeeder::class);
    }
}
