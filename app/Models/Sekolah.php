<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    use HasFactory;
    protected $table = "sekolah";
    protected $primaryKey = "id_sekolah";
    protected $fillable = ["nama_sekolah", "tahun_angkatan", "logo_sekolah", "foto_sekolah","visi", "misi", "mars"];
    public $timestamps = false;
}
