<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulTable extends Migration
{
    public function up()
    {
        Schema::create('MODUL', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('ID_USERS')->references('id')->on('USERS');
            $table->foreignId('ID_KTG_MODUL')->references('id')->on('KATEGORI_MODUL');
            $table->string('JUDUL_MODUL', 50);
            $table->binary('GAMBAR_MODUL');
            $table->text('ISI_MODUL');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('MODUL');
    }
}

