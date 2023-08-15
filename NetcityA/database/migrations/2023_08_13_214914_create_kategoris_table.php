<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kategoris', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nama_kategori', 100);
            $table->timestamps();
        });

        DB::table('kategoris')->insert([
            ['nama_kategori' => 'Kategori 1', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kategori' => 'Kategori 2', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kategori' => 'Kategori 3', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('kategoris');
    }
};
