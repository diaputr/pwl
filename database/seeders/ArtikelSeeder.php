<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
{
    /*
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikel_models')->insert([
            [
                'judul' => 'Semangat Membagi Hobi Menjadi Pekerjaan',
                'penulis' => 'Rian Hiori',
                'kategori' => 'Hobi',
                'tgl_publish' => fake()->dateTime()
            ], [
                'judul' => 'Serunya Konflik Politik',
                'penulis' => 'Tao Suci',
                'kategori' => 'Politik',
                'tgl_publish' => fake()->dateTime()
            ], [
                'judul' => 'Slice of Life In Indonesia',
                'penulis' => 'Maya Elisa',
                'kategori' => 'Keseharian',
                'tgl_publish' => fake()->dateTime()
            ],
        ]);
    }
}
