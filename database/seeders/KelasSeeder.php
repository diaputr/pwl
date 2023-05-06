<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
            ['nama' => '1A'],
            ['nama' => '1B'],
            ['nama' => '1C'],
            ['nama' => '2A'],
            ['nama' => '2B'],
            ['nama' => '2C'],
            ['nama' => '3A'],
            ['nama' => '3B'],
            ['nama' => '3C'],
            ['nama' => '4A'],
            ['nama' => '4B'],
            ['nama' => '4C']
        ]);
    }
}
