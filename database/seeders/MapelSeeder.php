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
                "name"=> "Matematika",
                "short_name"=> "MAT"
            ],
            [
                "name"=> "Bahasa Indonesia",
                "short_name"=> "IND"
            ],
            [
                "name"=> "Bahasa Inggris",
                "short_name"=> "ING"
            ],
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
