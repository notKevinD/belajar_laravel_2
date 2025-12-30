<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Post::factory(100)->recycle([
            Type::factory(3)->create(),
            User::factory(5)->create()
        ])
        ->create();

        
        // membuat secara manual
        // User::create([
        //     'name' => 'Kevin Darmawan',
        //     'username' => 'kevin',
        //     'email' => 'kein@asfd',

        // ]);
    }
}
