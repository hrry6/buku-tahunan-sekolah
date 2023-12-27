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
        Schema::create('karyawan_sekolah', function (Blueprint $table) {
            $table->integer('id_karyawan', true);
            $table->integer('id_sekolah');
            $table->string('nama_karyawan', 60);
            $table->string('status', 60);
            $table->text('quotes');
            $table->string('media_sosial', 60);
            $table->text('foto_karyawan');

            //Foreign Key
            $table->foreign('id_sekolah')->references('id_sekolah')->on('sekolah')
                    ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan_sekolah');
    }
};
