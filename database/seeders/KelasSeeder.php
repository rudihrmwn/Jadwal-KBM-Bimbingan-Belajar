<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kelas')->insert([
            [
                'name' => '12-SMA-111',
                'lokasi_id' => 1,
                'tingkat_id' => 1
            ],
            [
                'name' => '12-SMA-112',
                'lokasi_id' => 1,
                'tingkat_id' => 1
            ],
            [
                'name' => '12-SMA-113',
                'lokasi_id' => 1,
                'tingkat_id' => 1
            ],
            [
                'name' => '11-SMA-111',
                'lokasi_id' => 1,
                'tingkat_id' => 2
            ],
            [
                'name' => '10-SMA-111',
                'lokasi_id' => 1,
                'tingkat_id' => 3
            ]
        ]);
    }
}
