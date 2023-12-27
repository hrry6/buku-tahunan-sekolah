<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\SambutanKepsek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SambutanKepsekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for($i = 1;$i <= 3; $i++) {
            SambutanKepsek::create([
                'id_sekolah' => $i,
                'nama_kepsek' => $faker->name(),
                'sambutan' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti natus provident delectus nostrum? Explicabo unde culpa voluptatem id, libero nemo molestias et odio sed suscipit iusto soluta sunt temporibus maiores.',
                'foto_kepsek' => 'Kepsek.jpg',
            ]);
        }
    }
}
