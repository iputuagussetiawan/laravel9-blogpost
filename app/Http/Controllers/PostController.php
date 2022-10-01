<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
<<<<<<< HEAD
        //dd(request('search'));
        $posts = Post::latest();

        if (request('search')) {
            $posts->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');
        }
        return view('posts', [
            "title" => "All Posts",
            "posts" => $posts->get()
=======
        // $posts = Post::latest();

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }


        return view('posts', [
            "title" => "All Posts" . $title,
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(8)->withQueryString()
>>>>>>> e70644179b1bbde4ce78220cb4c08bebe1a0dec6
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Posts",
            "post" => $post
        ]);
    }
}
