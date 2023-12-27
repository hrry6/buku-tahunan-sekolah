<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seragam extends Model
{
    use HasFactory;
    protected $table = "seragam";
    protected $primaryKey = "id_seragam";
    protected $fillable = ["id_sekolah", "seragam", "foto_seragam"];
    public $timestamps = false;
}
