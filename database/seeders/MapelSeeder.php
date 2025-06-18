<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("mapels")->insert([
            [
                "name"=> "Fisika",
                "short_name"=> "FIS"
            ],
            [
                "name"=> "Kimia",
                "short_name"=> "KIM"
            ],
            [
                "name"=> "Biologi",
                "short_name"=> "BIO"
            ]

        ]);
    }
}
