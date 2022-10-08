<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class PostController extends Controller
{
    //
    public function index()
    {
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
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Posts",
            "post" => $post
        ]);
    }

    public function create()
    {
        return view('createpost');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
