<?php

namespace Database\Seeders;

use App\Models\Akun;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Akun::create([
            'id_sekolah' => null,
            'username' => 'super-admin',
            'password' => Hash::make('123'),
            'role' => 'super_admin' 
        ]);

        for($i = 1; $i <= 3; $i++) {
            Akun::create([
                'id_sekolah' => $i,
                'username' => 'sekolah'.$i,
                'password' => Hash::make('123'),
                'role' => 'admin_sekolah' 
            ]);
        }
    }
}
