<?php

use App\Http\Controllers\RoleController;
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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';



Route::middleware('auth')->group(function () {
    Route::resource('roles', RoleController::class);
});

// Route::controller(RoleController::class)->group(function () {
//     Route::get('/roles', 'index')->middleware('can:read role');
//     Route::get('/roles/create', 'create')->middleware('can:create role');
// });
