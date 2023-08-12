<?php

// database/migrations/xxxx_xx_xx_create_kategori_modul_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriModulTable extends Migration
{
    public function up()
    {
        Schema::create('KATEGORI_MODUL', function (Blueprint $table) {
            $table->id();
            $table->string('NAMA_KTG');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('KATEGORI_MODUL');
    }
}

