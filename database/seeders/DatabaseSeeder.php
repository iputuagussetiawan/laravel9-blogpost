<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'I putu krisna dharma wijaya',
            'email' => 'iputukrisnadharmawijaya@gmail.com',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Dewi',
            'email' => 'dewi@gmail.com',
            'password' => bcrypt('123456')
        ]);


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae rerum, deserunt inventore labore quisquam,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae rerum, deserunt inventore labore quisquam,',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae rerum, deserunt inventore labore quisquam,',
            'body' => 'Lorem',
            'category_id' => 1,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae rerum, deserunt inventore labore quisquam,',
            'body' => 'Lorem',
            'category_id' => 2,
            'user_id' => 1
        ]);
    }
}
