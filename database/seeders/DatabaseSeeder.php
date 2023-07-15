<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $tag = fake()->word();
        $slug = Str::slug($tag, '-');
        \App\Models\Tag::factory(1)->create([
            'tag' => $tag,
            'slug' => $slug,
        ]);
    }
}
