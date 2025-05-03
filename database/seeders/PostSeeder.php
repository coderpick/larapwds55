<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Post::create([
        //     'title' => 'Post 1',
        //     'description' => 'Description 1',
        // ]);
        DB::table('posts')->insert([
            'title' => 'Post 1',
            'description' => 'Description 1',
        ]);
    }
}
