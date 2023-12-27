<?php

namespace Database\Seeders;

use App\Models\EkstraKurikuler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EkstraKurikulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_ekskul = ['Pramuka', 'Basket', 'Voli'];

        for($i = 1;$i <= 3; $i++)
        {
            foreach($data_ekskul as $ekskul)
            {
                EkstraKurikuler::create([
                    'id_sekolah' => $i,
                    'nama_ekskul' => $ekskul,
                    'foto_ekskul' => $ekskul.".jpg"
                ]);
            }
        }
    }
}
