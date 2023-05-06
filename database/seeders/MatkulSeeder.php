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
        DB::table('matkuls')->insert([
            [
                'kode' => 'ADBO',
                'nama' => 'Analisis dan Desain Berorentasi Objek',
                // 'dosen' => 'Aria Ririd, S.Kom., M.Kom.',
                'semester' => 4,
                'sks' => 4,
                'jam' => 2,
                // 'hari' => 'Jumat',
                // 'ruang' => 'LIG2'
            ], [
                'kode' => 'BI',
                'nama' => 'Business Intelligence',
                // 'dosen' => 'Endang Septya, S.Pd., M.Kom.',
                'semester' => 4,
                'sks' => 4,
                'jam' => 3,
                // 'hari' => 'Jumat',
                // 'ruang' => 'LPY4'
            ], [
                'kode' => 'JRK',
                'nama' => 'Jaringan Komputer',
                // 'dosen' => 'Kaka Syamsiyah, S.Kom., M.T.',
                'semester' => 4,
                'sks' => 4,
                'jam' => 2,
                // 'hari' => 'Selasa',
                // 'ruang' => 'RT06'
            ], [
                'kode' => 'KWN',
                'nama' => 'Kewarganegaraan',
                // 'dosen' => 'Widya Ningtyas, S.H., M.H.',
                'semester' => 4,
                'sks' => 2,
                'jam' => 2,
                // 'hari' => 'Rabu',
                // 'ruang' => 'RT07'
            ], [
                'kode' => 'MPRO',
                'nama' => 'Manajemen Proyek',
                // 'dosen' => 'Chandra Bellina, S.Kom., M.T.',
                'semester' => 4,
                'sks' => 3,
                'jam' => 2,
                // 'hari' => 'Selasa',
                // 'ruang' => 'LSI2'
            ], [
                'kode' => 'PWL',
                'nama' => 'Pemrograman Web Lanjut',
                // 'dosen' => 'Moch. Abdul, S.ST., M.Kom.',
                'semester' => 4,
                'sks' => 6,
                'jam' => 4,
                // 'hari' => 'Rabu',
                // 'ruang' => 'LPR6'
            ], [
                'kode' => 'PRO',
                'nama' => 'Proyek 1',
                // 'dosen' => 'Rudi Adiari, S.T., M.Cs.',
                'semester' => 4,
                'sks' => 6,
                'jam' => 4,
                // 'hari' => 'Senin',
                // 'ruang' => 'LPY3'
            ], [
                'kode' => 'STK',
                'nama' => 'Statistik Komputasi',
                // 'dosen' => 'Eli Nurhayati, S.T, M.T.',
                'semester' => 4,
                'sks' => 4,
                'jam' => 2,
                // 'hari' => 'Kamis',
                // 'ruang' => 'RT13'
            ]
        ]);
    }
}
