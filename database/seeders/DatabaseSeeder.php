<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //User::factory(5)->create();
        // $default_user_value = [
        //     'email_verified_at' => now(),
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //     'remember_token' => Str::random(10),

        // ];

        // $staff = User::create(array_merge([
        //     'email' => 'staff@gmail.com',
        //     'name' => 'staff',
        // ], $default_user_value));


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        $this->call([
            UserRolePermissionSeeder::class,
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'I putu krisna dharma wijaya',
        //     'email' => 'iputukrisnadharmawijaya@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        // User::create([
        //     'name' => 'Dewi',
        //     'email' => 'dewi@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);




        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae rerum, deserunt inventore labore quisquam,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae rerum, deserunt inventore labore quisquam,',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae rerum, deserunt inventore labore quisquam,',
        //     'body' => 'Lorem',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae rerum, deserunt inventore labore quisquam,',
        //     'body' => 'Lorem',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
