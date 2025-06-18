<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengajarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("pengajars")->insert([
            [
                "name"=> "Chomaria",
                "short_name"=> "ER",
                "phone_number"=> "0888888888888",
            ],
            [
                "name"=> "Khoeroni",
                "short_name"=> "AQ",
                "phone_number"=> "0888888888888",
            ],
            [
                "name"=> "Nadia",
                "short_name"=> "ND",
                "phone_number"=> "0888888888888",
            ],
            [
                "name"=> "Citra",
                "short_name"=> "CC",
                "phone_number"=> "0888888888888",
            ],
            [
                "name"=> "Rhomaria",
                "short_name"=> "RH",
                "phone_number"=> "0888888888888",
            ]
        ]);
    }
}
