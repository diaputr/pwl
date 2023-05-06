<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prodis')->insert([
            ['nama' => 'D2 Perangkat Lunak Situs'],
            ['nama' => 'D4 Sistem Informasi Bisnis'],
            ['nama' => 'D4 Teknik Informatika']
        ]);
    }
}
