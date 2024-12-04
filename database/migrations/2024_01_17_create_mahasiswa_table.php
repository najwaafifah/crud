<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nim')->unique();
            $table->string('nama');
            $table->string('jurusan');
            $table->integer('semester');
            $table->string('email');
            $table->string('no_hp');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
};
