<?php

namespace App\Http\Controllers;

use App\Models\Circle;
use App\Models\EkstraKurikuler;
use App\Models\Fasilitas;
use App\Models\Gallery;
use App\Models\Jurusan;
use App\Models\KaryawanSekolah;
use App\Models\Kelas;
use App\Models\Komentar;
use App\Models\Sekolah;
use App\Models\Seragam;
use App\Models\Siswa;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function super_admin(Sekolah $sekolah, EkstraKurikuler $ekstra_kurikuler, Seragam $seragam, Fasilitas $fasilitas, KaryawanSekolah $karyawan_sekolah, Jurusan $jurusan, Kelas $kelas, Circle $circle, Siswa $siswa, Gallery $gallery, Komentar $komentar)   
    {
        $jumlah_sekolah = $sekolah->count();
        $jumlah_ekstra_kurikuler = $ekstra_kurikuler->count();
        $jumlah_seragam = $seragam->count();
        $jumlah_fasilitas = $fasilitas->count();
        $jumlah_karyawan_sekolah = $karyawan_sekolah->count();
        $jumlah_jurusan = $jurusan->count();
        $jumlah_kelas = $kelas->count();
        $jumlah_circle = $circle->count();
        $jumlah_siswa = $siswa->count();
        $jumlah_gallery = $gallery->count();
        $jumlah_komentar = $komentar->count();

        return Inertia::render('Auth/DashboardSuperAdmin', [
            'jumlahSekolah' => $jumlah_sekolah,
            'jumlahEkstraKurikuler' => $jumlah_ekstra_kurikuler,
            'jumlahSeragam' => $jumlah_seragam,
            'jumlahFasilitas'=> $jumlah_fasilitas,
            'jumlahKaryawanSekolah' => $jumlah_karyawan_sekolah,
            'jumlahJurusan' => $jumlah_jurusan, 
            'jumlahKelas' => $jumlah_kelas, 
            'jumlahCircle' => $jumlah_circle, 
            'jumlahSiswa' => $jumlah_siswa, 
            'jumlahGallery' => $jumlah_gallery, 
            'jumlahKomentar' => $jumlah_komentar
        ]);
    }

    public function admin_sekolah()
    {
        return Inertia::render('Auth/DashboardAdminSekolah');
    }
}
