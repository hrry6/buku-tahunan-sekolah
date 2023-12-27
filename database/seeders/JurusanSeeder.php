<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_jurusan = ['RPL', 'AK', 'MM'];
        for($i = 1;$i <= 3;$i++) {
            foreach($data_jurusan as $jurusan){
                Jurusan::create([
                    'id_sekolah' => $i,
                    'jurusan' => $jurusan
                ]);
            }
        }
    }
}