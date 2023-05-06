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
        Schema::table('matkuls', function (Blueprint $table) {
            $table->string('kode', 6)->after('matkul_id');
            $table->integer('jam')->after('sks');
            $table->integer('semester')->after('dosen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matkuls', function (Blueprint $table) {
            $table->dropColumn('dosen');
            $table->dropColumn('hari');
            $table->dropColumn('ruang');
        });
    }
};
