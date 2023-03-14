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
        Schema::create('keluarga_models', function (Blueprint $table) {
            $table->id('keluarga_id');
            $table->string('nama', 35);
            $table->enum('jk', ['L', 'P']);
            $table->date('tgl_lahir');
            $table->string('hubungan', 20);
            $table->string('pekerjaan', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keluarga_models');
    }
};
