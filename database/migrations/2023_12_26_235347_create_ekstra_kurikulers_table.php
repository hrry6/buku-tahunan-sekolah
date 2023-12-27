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
        Schema::create('ekstra_kurikuler', function (Blueprint $table) {
            $table->integer('id_ekskul', true);
            $table->integer('id_sekolah');
            $table->string('nama_ekskul', 60);
            $table->text('foto_ekskul');

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
        Schema::dropIfExists('ekstra_kurikuler');
    }
};
