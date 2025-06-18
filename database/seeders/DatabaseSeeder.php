<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $this->call(JamSeeder::class);
        $this->call(LokasiSeeder::class);
        $this->call(MapelSeeder::class);
        $this->call(PengajarSeeder::class);
        $this->call(TingkatSeeder::class);
        $this->call(TingkatMapelSeeder::class);
        $this->call(PengajarMapelSeeder::class);
    }
}
