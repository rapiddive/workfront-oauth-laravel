<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Settings;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Settings::create(['key' => 'workfront_access_token', 'value' => '']);
        Settings::create(['key' => 'workfront_refresh_token', 'value' => '']);
        Settings::create(['key' => 'workfront_expires_in', 'value' => '']);
    }
}
