<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Playlist;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        Playlist::factory(6)->create();

        // Playlist::create([
        //     'name' => 'Grooves',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac vehicula libero. Maecenas nec sollicitudin velit. Nam sollicitudin id felis id pharetra.'
        // ]);

        // Playlist::create([
        //     'name' => 'its ya boi',
        //     'description' => 'Thundercat playlist!!'
        // ]);

        // Playlist::create([
        //     'name' => 'Jazz Club Time Machine',
        //     'description' => 'Curabitur ac vehicula libero. Maecenas nec sollicitudin velit. Nam sollicitudin id felis id pharetra.'
        // ]);

        // Playlist::create([
        //     'name' => 'Alt R&B',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac vehicula libero. Maecenas nec sollicitudin velit. Nam sollicitudin id felis id pharetra.'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
