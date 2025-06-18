<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("lokasis")->insert([
            [
                "name"=> "Sriwijaya",
                "short_name"=> "SRI",
                "rooms_count"=> 5,
            ],
            [
                "name"=> "Pemuda",
                "short_name"=> "PMD",
                "rooms_count"=> 5,
            ],
            [
                "name"=> "Siliwangi",
                "short_name"=> "SLW",
                "rooms_count"=> 5,
            ]
        ]);
    }
}
