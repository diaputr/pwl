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
        Schema::create('artikel_models', function (Blueprint $table) {
            $table->id('artikel_id');
            $table->string('judul', 50);
            $table->string('penulis', 35);
            $table->enum('kategori', ['hobi', 'politik', 'keseharian']);
            $table->date('tgl_publish');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikel_models');
    }
};
