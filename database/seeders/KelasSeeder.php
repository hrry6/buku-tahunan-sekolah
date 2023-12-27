<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'id_sekolah' => 1,
                'id_jurusan' => 1,
                'id_wali_kelas' => 1,
                'nama_kelas' => 'A',
                'foto_kelas' => 'KelasA.jpg'
            ],
            [
                'id_sekolah' => 1,
                'id_jurusan' => 2,
                'id_wali_kelas' => 2,
                'nama_kelas' => 'A',
                'foto_kelas' => 'KelasA.jpg'
            ],
            [
                'id_sekolah' => 1,
                'id_jurusan' => 3,
                'id_wali_kelas' => 3,
                'nama_kelas' => 'A',
                'foto_kelas' => 'KelasA.jpg'
            ],
            [
                'id_sekolah' => 2,
                'id_jurusan' => 4,
                'id_wali_kelas' => 5,
                'nama_kelas' => 'A',
                'foto_kelas' => 'KelasA.jpg'
            ],
            [
                'id_sekolah' => 2,
                'id_jurusan' => 5,
                'id_wali_kelas' => 6,
                'nama_kelas' => 'A',
                'foto_kelas' => 'KelasA.jpg'
            ],
            [
                'id_sekolah' => 2,
                'id_jurusan' => 6,
                'id_wali_kelas' => 7,
                'nama_kelas' => 'A',
                'foto_kelas' => 'KelasA.jpg'
            ],
            [
                'id_sekolah' => 3,
                'id_jurusan' => 7,
                'id_wali_kelas' => 9,
                'nama_kelas' => 'A',
                'foto_kelas' => 'KelasA.jpg'
            ],
            [
                'id_sekolah' => 3,
                'id_jurusan' => 8,
                'id_wali_kelas' => 10,
                'nama_kelas' => 'A',
                'foto_kelas' => 'KelasA.jpg'
            ],
            [
                'id_sekolah' => 3,
                'id_jurusan' => 9,
                'id_wali_kelas' => 11,
                'nama_kelas' => 'A',
                'foto_kelas' => 'KelasA.jpg'
            ],
        ];

        foreach($datas as $data){
            Kelas::create($data);
        }
    }
}
