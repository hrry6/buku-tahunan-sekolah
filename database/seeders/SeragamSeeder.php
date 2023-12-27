<?php

namespace Database\Seeders;

use App\Models\Seragam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeragamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_seragam = ['Putih-Abu', 'Batik', 'Pramuka'];

        for($i = 1; $i <= 3; $i++) {
            foreach($data_seragam as $seragam){
                Seragam::create([
                   'id_sekolah' => $i,
                   'seragam' => $seragam,
                   'foto_seragam' => $seragam.".jpg" 
                ]); 
            }
        }
    }
}
