<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matkul_models')->insert([
            [
                'nama' => 'Analisis dan Desain Berorentasi Objek',
                'dosen' => 'Aria Ririd, S.Kom., M.Kom.',
                'sks' => 4,
                'hari' => 'Jumat',
                'ruang' => 'LIG2'
            ], [
                'nama' => 'Business Intelligence',
                'dosen' => 'Endang Septya, S.Pd., M.Kom.',
                'sks' => 4,
                'hari' => 'Jumat',
                'ruang' => 'LPY4'
            ], [
                'nama' => 'Jaringan Komputer',
                'dosen' => 'Kaka Syamsiyah, S.Kom., M.T.',
                'sks' => 4,
                'hari' => 'Selasa',
                'ruang' => 'RT06'
            ], [
                'nama' => 'Kewarganegaraan',
                'dosen' => 'Widya Ningtyas, S.H., M.H.',
                'sks' => 2,
                'hari' => 'Rabu',
                'ruang' => 'RT07'
            ], [
                'nama' => 'Manajemen Proyek',
                'dosen' => 'Chandra Bellina, S.Kom., M.T.',
                'sks' => 3,
                'hari' => 'Selasa',
                'ruang' => 'LSI2'
            ], [
                'nama' => 'Pemrograman Web Lanjut',
                'dosen' => 'Moch. Abdul, S.ST., M.Kom.',
                'sks' => 6,
                'hari' => 'Rabu',
                'ruang' => 'LPR6'
            ], [
                'nama' => 'Proyek 1',
                'dosen' => 'Rudi Adiari, S.T., M.Cs.',
                'sks' => 6,
                'hari' => 'Senin',
                'ruang' => 'LPY3'
            ], [
                'nama' => 'Statistik Komputasi',
                'dosen' => 'Eli Nurhayati, S.T, M.T.',
                'sks' => 4,
                'hari' => 'Kamis',
                'ruang' => 'RT13'
            ]
        ]);
    }
}
