<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('flowers')->insert([
            'nama' => 'Kaktus',
            'jenistanaman' => 'outdoor',
            'warna' => 'Hijau',

        ]);
    }
}
