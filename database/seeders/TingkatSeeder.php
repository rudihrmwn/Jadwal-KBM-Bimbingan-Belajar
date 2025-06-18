<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TingkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("tingkats")->insert([
            [
                "name"=> "12 SMA",
            ],
            [
                "name"=> "11 SMA",
            ],
            [
                "name"=> "10 SMA",
            ],
            [
                "name"=> "9 SMP",
            ],
            [
                "name"=> "8 SMP",
            ],
            [
                "name"=> "7 SMP",
            ],
            [
                "name"=> "6 SD",
            ]
        ]);
    }
}
