<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\schools;
use App\Models\students;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        schools::factory(10)->create();
        students::factory(20)->create();
        students::factory()->create([
            'email' => 'test@example.com',
        ]);
    }
}
