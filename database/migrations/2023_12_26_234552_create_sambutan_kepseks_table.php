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
        Schema::create('sambutan_kepsek', function (Blueprint $table) {
            $table->integer('id_sambutan', true);
            $table->integer('id_sekolah');
            $table->string('nama_kepsek', 60);
            $table->text('sambutan');
            $table->text('foto_kepsek');

            //Foreign Key
            $table->foreign('id_sekolah')->references('id_sekolah')->on('sekolah')
                    ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sambutan_kepsek');
    }
};
