<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'Laravel, JavaScript',
            'company' => 'Acme Corp',
            'Location' => 'Boston, MA',
            'email' => 'test@example.com',
            'website' => 'http://example.com',
            'description' => 'lorem ipsum ahhhrdb sdusuhdusd sduhsudh rmlhgfsigqrcec',
        ]);

        Listing::create([
            'title' => 'Full-Stack Engineer',
            'tags' => 'laravel, backend, api',
            'company' => 'Stark Industries',
            'location' => 'New York, NY',
            'email' => 'email2@email.com',
            'website' => 'http://example.com',
            'description' => 'lorem ipsum ahhhrdb sdusuhdusd sduhsudh rmlhgfsigqrcec',
        ]);
    }
}
