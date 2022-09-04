<?php

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

// Route::get('/', function () {
//     return 'Hallow WPU';
// });

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
});

Route::get('/posts', function () {
    return view('posts', [
        "active" => "posts",
        "title" => "Posts"
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    return view('single-post', [
        "active" => "posts",
        "title" => "Posts"
    ]);
});
