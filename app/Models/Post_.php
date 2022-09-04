<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            'title' => 'Judul Turlisan Pertama',
            'author' => 'I Putu Agus Setiawan',
            'slug' => 'judul-tulisan-pertama',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet alias velit mollitia minima ipsa odit unde similique temporibus natus nihil! Hic, cum repellat fugit excepturi odio ea dolorum a sapiente!'
        ],

        [
            'title' => 'Judul Turlisan Kedua',
            'author' => 'I Putu Krisna',
            'slug' => 'judul-tulisan-kedua',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet alias velit mollitia minima ipsa odit unde similique temporibus natus nihil! Hic, cum repellat fugit excepturi odio ea dolorum a sapiente!'
        ],


    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
