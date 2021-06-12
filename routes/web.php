<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
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
    return view('dashboard');
})->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/posts', [PostsController::class, 'index'])->middleware(['auth'])->name('posts');

Route::post('/posts', [PostsController::class, 'store'])->middleware(['auth']);

Route::get('/posts/{post}/edit', [PostsController::class, 'edit'])->middleware(['auth']);

Route::put('/posts/{post}', [PostsController::class, 'update'])->middleware(['auth']);

Route::get('/posts/create', [PostsController::class, 'create'])->middleware(['auth']);

Route::post('/posts/{post}/delete', [PostsController::class, 'destroy'])->middleware(['auth']);


require __DIR__.'/auth.php';
