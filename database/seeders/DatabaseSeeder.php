<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Role;
use \App\Models\Permission;
use \App\Models\Categoryy;
use App\Models\Emoji;
use App\Models\Prefix;
use App\Models\Profile;
use \App\Models\Thread;
use \App\Models\Thread_Comment;

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
/* 
        User::factory()->count(10)->has(
            Role::factory()->count(3)->has(
                Permission::factory()->count(3)
            ))
        ->has(Emoji::factory()->count(3))
        ->has(Categoryy::factory()->count(3)->has(
            Thread::factory()->count(3)->has(
                Thread_Comment::factory()->count(3)
            )))
        ->create(); */
        
/*         Categoryy::factory(1)->has(
        categoryy::factory(3)->has(
            Thread::factory(3)->has(
                Thread::factory(3)
            )
        ))->create(); */
        
        

        User::factory(3)
        ->create();


        
    }
}
