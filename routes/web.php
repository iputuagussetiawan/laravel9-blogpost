<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        "active" => "dashboard",
        "title" => "Dashboard"
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/posts',  [PostController::class, 'index']);
Route::get('/posts/create',  [PostController::class, 'create']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::get('/posts/edit',  [PostController::class, 'edit']);

Route::get('roleTabel/', [RoleController::class, 'table'])->name('roleTabel');

require __DIR__ . '/auth.php';



Route::middleware('auth')->group(function () {
    Route::resource('configurasi/roles', RoleController::class);
});

Route::get('/', function () {
    return view('home', [
        "active" => "home",
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "active" => "about",
        "title" => "About",
        "name" => "I Putu Agus Setiawan",
        "email" => "iputuagussetiawan@gmail.com",
        "image" => "people-2.jpg"
    ]);
    return view('welcome');
});

Route::get('categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all(),
    ]);
});
Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post By Category : $category->name",
        'posts' => $category->posts->load('category', 'author'),
    ]);
});
Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts->load('category', 'author')
    ]);
});



// Route::controller(RoleController::class)->group(function () {
//     Route::get('/roles', 'index')->middleware('can:read role');
//     Route::get('/roles/create', 'create')->middleware('can:create role');
// });
