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
        Schema::create('hobi_models', function (Blueprint $table) {
            $table->id('hobi_id');
            $table->string('nama', 20);
            $table->string('kategori', 20);
            $table->string('level', 20);
            $table->string('deskripsi', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hobi_models');
    }
};
