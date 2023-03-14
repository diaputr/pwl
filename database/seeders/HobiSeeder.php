<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobi_models')->insert([
            [
                'nama' => 'Menggambar digital',
                'kategori' => 'Seni',
                'level' => 'Intermediate',
                'deskripsi' => 'Menggambar dengan aplikasi MediBang Paint di smartphone'
            ], [
                'nama' => 'Mendesain',
                'kategori' => 'Teknologi',
                'level' => 'Advanced',
                'deskripsi' => 'Mendesain kebutuhan sosmed dengan CorelDRAW, Canva, Figma, dan Photoshop'
            ], [
                'nama' => 'Menyanyi',
                'kategori' => 'Musik',
                'level' => 'Intermediate',
                'deskripsi' => 'Spotify merupakan teman setia dalam memecah kesunyian'
            ], [
                'nama' => 'Menonton anime',
                'kategori' => 'Hiburan',
                'level' => 'Advanced',
                'deskripsi' => 'Visual yang memukau, datanglah!'
            ], [

                'nama' => 'Membaca webtoon',
                'kategori' => 'Hiburan',
                'level' => 'Intermediate',
                'deskripsi' => 'Dukung author lokal ^^'
            ],  [

                'nama' => 'Game visual novel',
                'kategori' => 'Teknologi',
                'level' => 'Intermediate',
                'deskripsi' => 'Pilih jalan akhir dari cerita seru yang bercabang'
            ]
        ]);
    }
}
