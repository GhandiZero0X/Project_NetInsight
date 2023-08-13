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
            $table->id('id_modul');
            $table->unsignedBigInteger('id_kategori');
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori')->onDelete('CASCADE');
            $table->string('nama_modul');
            $table->string('gambar_modul')->default('');
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
