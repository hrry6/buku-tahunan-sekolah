<?php

namespace Database\Seeders;

use App\Models\Circle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CircleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $i = 1;
        for( $a = 1; $a <= 3; $a++ ){
            for( $b = 1; $b <= 3; $b++ ){
                for( $c = 1; $c <= 4; $c++ ){
                    Circle::create([
                        'id_sekolah' => $a,
                        'id_kelas' => $i,
                        'foto_circle' => 'foto_kelas.jpg',
                        'urutan' => $c
                    ]);
                }
                $i++;
            }
        }
    }
}
