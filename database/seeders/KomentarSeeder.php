<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\Komentar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KomentarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 9;$i++){
            Komentar::create([
                'id_kelas' => $i,
                'pembuat' => $faker->name(),
                'komentar' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium voluptatem voluptas amet earum, dignissimos nobis?'
            ]);
        }
    }
}
