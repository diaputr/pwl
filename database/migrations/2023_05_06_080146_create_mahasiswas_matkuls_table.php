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
        Schema::create('mhs_matkuls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_mhs')->nullable();
            $table->foreign('id_mhs')->references('id')->on('mahasiswas');
            $table->unsignedBigInteger('id_matkul')->nullable();
            $table->foreign('id_matkul')->references('matkul_id')->on('matkuls');
            $table->string('nilai', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mhs_matkuls');
    }
};
