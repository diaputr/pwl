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
        Schema::create('matkul_models', function (Blueprint $table) {
            $table->id('matkul_id');
            $table->string('nama', 50);
            $table->string('dosen', 80);
            $table->integer('sks');
            $table->string('hari', 20);
            $table->string('ruang', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matkul_models');
    }
};
