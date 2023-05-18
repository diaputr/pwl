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
                'id_mhs' => '1',
                'id_matkul' => '1',
                'nilai' => 'B'
            ], [
                'id_mhs' => '1',
                'id_matkul' => '2',
                'nilai' => 'A'
            ], [
                'id_mhs' => '1',
                'id_matkul' => '3',
                'nilai' => 'A+'
            ], [
                'id_mhs' => '1',
                'id_matkul' => '4',
                'nilai' => 'B'
            ], [
                'id_mhs' => '1',
                'id_matkul' => '5',
                'nilai' => 'A'
            ], [
                'id_mhs' => '1',
                'id_matkul' => '6',
                'nilai' => 'A+'
            ], [
                'id_mhs' => '1',
                'id_matkul' => '7',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '1',
                'id_matkul' => '8',
                'nilai' => 'A'
            ], [
                'id_mhs' => '2',
                'id_matkul' => '1',
                'nilai' => 'A'
            ], [
                'id_mhs' => '2',
                'id_matkul' => '2',
                'nilai' => 'A+'
            ], [
                'id_mhs' => '2',
                'id_matkul' => '3',
                'nilai' => 'A'
            ], [
                'id_mhs' => '2',
                'id_matkul' => '4',
                'nilai' => 'A'
            ], [
                'id_mhs' => '2',
                'id_matkul' => '5',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '2',
                'id_matkul' => '6',
                'nilai' => 'A+'
            ], [
                'id_mhs' => '2',
                'id_matkul' => '7',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '2',
                'id_matkul' => '8',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '3',
                'id_matkul' => '1',
                'nilai' => 'A'
            ], [
                'id_mhs' => '3',
                'id_matkul' => '2',
                'nilai' => 'C'
            ], [
                'id_mhs' => '3',
                'id_matkul' => '3',
                'nilai' => 'A'
            ], [
                'id_mhs' => '3',
                'id_matkul' => '4',
                'nilai' => 'A+'
            ], [
                'id_mhs' => '3',
                'id_matkul' => '5',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '3',
                'id_matkul' => '6',
                'nilai' => 'A+'
            ], [
                'id_mhs' => '3',
                'id_matkul' => '7',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '3',
                'id_matkul' => '8',
                'nilai' => 'A+'
            ], [
                'id_mhs' => '4',
                'id_matkul' => '1',
                'nilai' => 'A'
            ], [
                'id_mhs' => '4',
                'id_matkul' => '2',
                'nilai' => 'B'
            ], [
                'id_mhs' => '4',
                'id_matkul' => '3',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '4',
                'id_matkul' => '4',
                'nilai' => 'A'
            ], [
                'id_mhs' => '4',
                'id_matkul' => '5',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '4',
                'id_matkul' => '6',
                'nilai' => 'A+'
            ], [
                'id_mhs' => '4',
                'id_matkul' => '7',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '4',
                'id_matkul' => '8',
                'nilai' => 'C'
            ], [
                'id_mhs' => '5',
                'id_matkul' => '1',
                'nilai' => 'A'
            ], [
                'id_mhs' => '5',
                'id_matkul' => '2',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '5',
                'id_matkul' => '3',
                'nilai' => 'A'
            ], [
                'id_mhs' => '5',
                'id_matkul' => '4',
                'nilai' => 'A'
            ], [
                'id_mhs' => '5',
                'id_matkul' => '5',
                'nilai' => 'B'
            ], [
                'id_mhs' => '5',
                'id_matkul' => '6',
                'nilai' => 'A+'
            ], [
                'id_mhs' => '5',
                'id_matkul' => '7',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '5',
                'id_matkul' => '8',
                'nilai' => 'A'
            ], [
                'id_mhs' => '6',
                'id_matkul' => '1',
                'nilai' => 'A'
            ], [
                'id_mhs' => '6',
                'id_matkul' => '2',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '6',
                'id_matkul' => '3',
                'nilai' => 'A'
            ], [
                'id_mhs' => '6',
                'id_matkul' => '4',
                'nilai' => 'C'
            ], [
                'id_mhs' => '6',
                'id_matkul' => '5',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '6',
                'id_matkul' => '6',
                'nilai' => 'A+'
            ], [
                'id_mhs' => '6',
                'id_matkul' => '7',
                'nilai' => 'B+'
            ], [
                'id_mhs' => '6',
                'id_matkul' => '8',
                'nilai' => 'A+'
            ],
        ]);
    }
}
