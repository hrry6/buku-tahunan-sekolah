<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\KaryawanSekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryawanSekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 3; $i++){
            KaryawanSekolah::create([
                'id_sekolah' => $i,
                'nama_karyawan' => $faker->name(),
                'status' => 'Guru RPL',
                'quotes' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eos odio voluptatem expedita sit minus.',
                'media_sosial' => $faker->name().'.instagram',
                'foto_karyawan' => $faker->name().'.jpg'
            ]);
            KaryawanSekolah::create([
                'id_sekolah' => $i,
                'nama_karyawan' => $faker->name(),
                'status' => 'Guru AK',
                'quotes' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eos odio voluptatem expedita sit minus.',
                'media_sosial' => $faker->name().'.instagram',
                'foto_karyawan' => $faker->name().'.jpg'
            ]);
            KaryawanSekolah::create([
                'id_sekolah' => $i,
                'nama_karyawan' => $faker->name(),
                'status' => 'Guru MM',
                'quotes' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eos odio voluptatem expedita sit minus.',
                'media_sosial' => $faker->name().'.instagram',
                'foto_karyawan' => $faker->name().'.jpg'
            ]);
            KaryawanSekolah::create([
                'id_sekolah' => $i,
                'nama_karyawan' => $faker->name(),
                'status' => 'Tata Usaha',
                'quotes' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eos odio voluptatem expedita sit minus.',
                'media_sosial' => $faker->name().'.instagram',
                'foto_karyawan' => $faker->name().'.jpg'
            ]);
        }
    }
}
