<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sekolah', function (Blueprint $table) {
            $table->integer('id_sekolah', true);
            $table->string('nama_sekolah', 60);
            $table->integer('tahun_angkatan');
            $table->text('logo_sekolah');
            $table->text('foto_sekolah');
            $table->string('visi', 60);
            $table->text('misi');
            $table->text('mars');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolah');
    }
};
