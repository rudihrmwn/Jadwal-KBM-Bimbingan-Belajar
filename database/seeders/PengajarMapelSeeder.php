<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengajarMapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("pengajar_mapels")->insert([
            [
                "pengajar_id" => 1,
                "mapel_id" => 1
            ],
            [
                "pengajar_id" => 1,
                "mapel_id" => 2
            ],
            [
                "pengajar_id" => 1,
                "mapel_id" => 3
            ],
            [
                "pengajar_id" => 2,
                "mapel_id" => 4
            ],
            [
                "pengajar_id" => 2,
                "mapel_id" => 5
            ],
            [
                "pengajar_id" => 2,
                "mapel_id" => 6
            ],
        ]);
    }
}
