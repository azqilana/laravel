<?php

namespace Database\Seeders;

use App\Models\kategory;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();

        // kategory::create([
        //     'name'=>'Web Programming',
        //     'slug'=>'web-programming'
        // ]);
        // kategory::create([
        //     'name'=>'Web Design',
        //     'slug'=>'web-design'
        // ]);
        // kategory::create([
        //     'name'=>'personal',
        //     'slug'=>'personal'
        // ]);
        Post::factory(3)->create();
    }
}

