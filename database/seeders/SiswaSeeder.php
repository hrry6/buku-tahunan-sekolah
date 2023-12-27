<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $i = 1;
        for ($a = 1; $a <= 3; $a++) {
            for ($b = 1; $b <= 12; $b++) {
                for ($c = 1; $c <= 4; $c++) {
                    Siswa::create([
                        'id_sekolah' => $a,
                        'id_circle' => $i,
                        'nama_siswa' => $faker->name(),
                        'quotes' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eos odio voluptatem expedita sit minus.',
                        'media_sosial' => $faker->name().'.instagram',
                        'foto_siswa' => $faker->name().'.jpg'
                    ]);
                }
                $i++;
            }
        }
    }
}
