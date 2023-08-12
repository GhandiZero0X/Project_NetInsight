<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('USERS', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('NAMA_USERS');
            $table->string('NO_TELP_USERS');
            $table->string('EMAIL_USERS')->unique();
            $table->string('PASSWORD_USERS');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('USERS');
    }
}

