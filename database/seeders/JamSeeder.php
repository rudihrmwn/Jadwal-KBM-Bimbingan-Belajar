<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("jams")->insert([
            ["name" => "08.00 - 09.00"],
            ["name" => "09.00 - 10.00"],
            ["name" => "10.00 - 11.00"],
            ["name" => "11.00 - 12.00"],
            ["name" => "12.00 - 13.00"],
            ["name" => "13.00 - 14.00"],
            ["name" => "14.00 - 15.00"],
            ["name" => "15.00 - 16.00"]
        ]);
    }
}
