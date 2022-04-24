<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();
            $table->text('nama');
            $table->string('nik');
            $table->string('email');
            $table->string('no_hp');
            $table->string('alamat');
            $table->string('asal_kampus');
            $table->string('jurusan');
            $table->string('id_divisi');
            $table->string('alasan_ditolak');
            $table->string('status');
            $table->string('khs');
            $table->string('foto');
            $table->string('surat_pengantar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peserta');
    }
};
