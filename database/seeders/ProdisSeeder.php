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
            [
                'kode' => 'D2 PLS',
                'nama' => 'D2 Perangkat Lunak Situs'
            ],
            [
                'kode' => 'D4 SIB',
                'nama' => 'D4 Sistem Informasi Bisnis'
            ],
            [
                'kode' => 'D4 TI',
                'nama' => 'D4 Teknik Informatika'
            ]
        ]);
    }
}
