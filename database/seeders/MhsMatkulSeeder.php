<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MhsMatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mhs_matkuls')->insert([
            [
                'id_mhs' => '11',
                'id_matkul' => '12',
                'nilai' => 'B'
            ], [
                'id_mhs' => '11',
                'id_matkul' => '13',
                'nilai' => 'A'
            ], [
                'id_mhs' => '11',
                'id_matkul' => '14',
                'nilai' => 'A+'
            ], [
                'id_mhs' => '11',
                'id_matkul' => '15',
                'nilai' => 'B'
            ], [
                'id_mhs' => '11',
                'id_matkul' => '16',
                'nilai' => 'A'
            ], [
                'id_mhs' => '11',
                'id_matkul' => '17',
                'nilai' => 'A+'
            ], [
                'id_mhs' => '11',
                'id_matkul' => '18',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '11',
                'id_matkul' => '19',
                'nilai' => 'A'
            ], [
                'id_mhs' => '12',
                'id_matkul' => '16',
                'nilai' => 'A'
            ], [
                'id_mhs' => '12',
                'id_matkul' => '12',
                'nilai' => 'A+'
            ], [
                'id_mhs' => '12',
                'id_matkul' => '13',
                'nilai' => 'A'
            ], [
                'id_mhs' => '12',
                'id_matkul' => '14',
                'nilai' => 'A'
            ], [
                'id_mhs' => '12',
                'id_matkul' => '15',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '12',
                'id_matkul' => '17',
                'nilai' => 'A+'
            ], [
                'id_mhs' => '12',
                'id_matkul' => '18',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '12',
                'id_matkul' => '19',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '13',
                'id_matkul' => '16',
                'nilai' => 'A'
            ], [
                'id_mhs' => '13',
                'id_matkul' => '12',
                'nilai' => 'C'
            ], [
                'id_mhs' => '13',
                'id_matkul' => '13',
                'nilai' => 'A'
            ], [
                'id_mhs' => '13',
                'id_matkul' => '14',
                'nilai' => 'A+'
            ], [
                'id_mhs' => '13',
                'id_matkul' => '15',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '13',
                'id_matkul' => '17',
                'nilai' => 'A+'
            ], [
                'id_mhs' => '13',
                'id_matkul' => '18',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '13',
                'id_matkul' => '19',
                'nilai' => 'A+'
            ], [
                'id_mhs' => '14',
                'id_matkul' => '16',
                'nilai' => 'A'
            ], [
                'id_mhs' => '14',
                'id_matkul' => '12',
                'nilai' => 'B'
            ], [
                'id_mhs' => '14',
                'id_matkul' => '13',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '14',
                'id_matkul' => '14',
                'nilai' => 'A'
            ], [
                'id_mhs' => '14',
                'id_matkul' => '15',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '14',
                'id_matkul' => '17',
                'nilai' => 'A+'
            ], [
                'id_mhs' => '14',
                'id_matkul' => '18',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '14',
                'id_matkul' => '19',
                'nilai' => 'C'
            ], [
                'id_mhs' => '15',
                'id_matkul' => '16',
                'nilai' => 'A'
            ], [
                'id_mhs' => '15',
                'id_matkul' => '12',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '15',
                'id_matkul' => '13',
                'nilai' => 'A'
            ], [
                'id_mhs' => '15',
                'id_matkul' => '14',
                'nilai' => 'A'
            ], [
                'id_mhs' => '15',
                'id_matkul' => '15',
                'nilai' => 'B'
            ], [
                'id_mhs' => '15',
                'id_matkul' => '17',
                'nilai' => 'A+'
            ], [
                'id_mhs' => '15',
                'id_matkul' => '18',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '15',
                'id_matkul' => '19',
                'nilai' => 'A'
            ], [
                'id_mhs' => '16',
                'id_matkul' => '16',
                'nilai' => 'A'
            ], [
                'id_mhs' => '16',
                'id_matkul' => '12',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '16',
                'id_matkul' => '13',
                'nilai' => 'A'
            ], [
                'id_mhs' => '16',
                'id_matkul' => '14',
                'nilai' => 'C'
            ], [
                'id_mhs' => '16',
                'id_matkul' => '15',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '16',
                'id_matkul' => '17',
                'nilai' => 'A+'
            ], [
                'id_mhs' => '16',
                'id_matkul' => '18',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '16',
                'id_matkul' => '19',
                'nilai' => 'A+'
            ],
        ]);
    }
}
