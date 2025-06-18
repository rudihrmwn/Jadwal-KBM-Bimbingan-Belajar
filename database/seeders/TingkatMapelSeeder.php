<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TingkatMapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("tingkat_mapels")->insert([
            [
                "tingkat_id" => 1,
                "mapel_id" => 1
            ],
            [
                "tingkat_id" => 1,
                "mapel_id" => 2
            ],
            [
                "tingkat_id" => 1,
                "mapel_id" => 3
            ],
            [
                "tingkat_id" => 1,
                "mapel_id" => 4
            ],
            [
                "tingkat_id" => 1,
                "mapel_id" => 5
            ],
            [
                "tingkat_id" => 1,
                "mapel_id" => 6
            ],
        ]);
    }
}
