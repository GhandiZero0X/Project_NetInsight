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
        Schema::create('modul', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('users_id')->references('id')->on('users');
            $table->foreignId('kategoris_id')->references('id')->on('kategoris');
            $table->string('nama_modul');
            $table->string('gambar_modul')->default('');
            $table->string('download_modul')->default('');
            $table->text('isi_modul');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kategori',function(Blueprint $table){
            $table->dropForeign('kategori_id_modul_foreign');
        });
        Schema::dropIfExists('modul');
    }
};
