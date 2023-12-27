<?php

namespace Database\Seeders;

use App\Models\Fasilitas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_fasilitas = ['Lab-RPL', 'Lab-AK', 'Lab-MM'];

        for($i = 1;$i <= 3; $i++)
        {
            foreach($data_fasilitas as $fasilitas)
            {
                Fasilitas::create([
                    'id_sekolah' => $i,
                    'fasilitas' => $fasilitas,
                    'foto_fasilitas' => $fasilitas.".jpg"
                ]);
            }
        }
    }
}
