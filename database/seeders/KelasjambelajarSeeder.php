<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasjambelajarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kelasjambelajars')->insert([
            [
                'day' => 1,
                'room' => 1,
                'kelas_id' => 1,
                'jam_id' => 1
            ],
            [
                'day' => 1,
                'room' => 1,
                'kelas_id' => 1,
                'jam_id' => 2
            ],
            [
                'day' => 2,
                'room' => 1,
                'kelas_id' => 1,
                'jam_id' => 1
            ],
            [
                'day' => 2,
                'room' => 1,
                'kelas_id' => 1,
                'jam_id' => 2
            ],
        ]);
    }
}
