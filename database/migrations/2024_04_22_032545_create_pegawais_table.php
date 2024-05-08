<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nip', 50);
            $table->string('nik', 50)->nullable();
            $table->string('nama', 100)->nullable();
            $table->string('jk', 30)->nullable();
            $table->string('tmp_lahir', 30)->nullable();
            $table->date('tgl_lahir');
            $table->string('alamat', 200)->nullable();
            $table->string('departemen', 30)->nullable();
            $table->string('pendidikan', 50)->nullable();
            $table->date('mulai_kontrak');
            $table->string('status_aktif', 3)->default('1');
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
        Schema::dropIfExists('pegawais');
    }
}
