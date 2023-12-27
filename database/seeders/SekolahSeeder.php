<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [1, 2, 3];

        for($i=1; $i<=3;$i++ )
        {
            Sekolah::create([
                'nama_sekolah' => 'SMK Negeri '. $i .' Kota Bekasi',
                'tahun_angkatan' => 2023,
                'logo_sekolah' => 'Logo.jgp',
                'foto_sekolah' => 'Foto.jpg',
                'visi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id officiis nisi nemo itaque. Veniam, ut.',
                'misi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto hic unde quasi veritatis, sint est amet velit at qui. Rem nulla quam consectetur dolorem fugiat quo at? Modi, quos?',
                'mars' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi architecto minima culpa aut, dicta numquam.
                
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi architecto minima culpa aut, dicta numquam.
                
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi architecto minima culpa aut, dicta numquam.'
            ]);
        }        
    }
}
