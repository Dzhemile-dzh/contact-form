<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Inquiry;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Inquiry::factory(10)->create();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test2@example.com',
        ]);
    }
}
