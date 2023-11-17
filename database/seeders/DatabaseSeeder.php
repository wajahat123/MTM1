<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use App\Models\Role;
use App\Models\Tags;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

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

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'moderator']);
        Role::create(['name' => 'user']);

        Schema::disableForeignKeyConstraints();


        User::truncate();
        Post::truncate();
        Tags::truncate();
        Comment::truncate();
        Like::truncate();

        Schema::enableForeignKeyConstraints();

        User::factory(20)->create();
        Post::factory(20)->create();
        Tags::factory(20)->create();
        Comment::factory(20)->create();
        Like::factory(20)->create();
    }
}
