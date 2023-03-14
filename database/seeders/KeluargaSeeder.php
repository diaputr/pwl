<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keluarga_models')->insert([
            [
                'nama' => 'Joko Harianto',
                'jk' => 'L',
                'tgl_lahir' => '1973-08-04',
                'hubungan' => 'Ayah',
                'pekerjaan' => 'Petani'
            ], [
                'nama' => 'Sriani',
                'jk' => 'P',
                'tgl_lahir' => '1975-06-16',
                'hubungan' => 'Ibu',
                'pekerjaan' => 'Petani'
            ], [
                'nama' => 'Rudi Hermawan',
                'jk' => 'L',
                'tgl_lahir' => '1994-12-07',
                'hubungan' => 'Kakak',
                'pekerjaan' => 'Pekerja Swasta'
            ], [
                'nama' => 'Dewi Yani Purwitasari',
                'jk' => 'P',
                'tgl_lahir' => '1996-01-23',
                'hubungan' => 'Kakak Ipar',
                'pekerjaan' => 'Pekerja Swasta'
            ], [
                'nama' => 'Nathania Amel Titan Pratiwi',
                'jk' => 'P',
                'tgl_lahir' => '2006-09-06',
                'hubungan' => 'Adik Sepupu',
                'pekerjaan' => 'Pelajar'
            ]
        ]);
    }
}
