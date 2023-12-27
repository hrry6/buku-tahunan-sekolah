<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EkstraKurikuler extends Model
{
    use HasFactory;
    protected $table = "ekstra_kurikuler";
    protected $primaryKey = "id_ekskul";
    protected $fillable = ["id_sekolah", "foto_ekskul", "nama_ekskul"];
    public $timestamps = false; 
}
