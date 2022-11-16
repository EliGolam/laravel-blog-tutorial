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

Route::get('/', function () {
    return view('welcome');
});


// TESTING ROUTES
/* -----------------------------------------------------------------------
| html-posts
| using html literals through wildcards using php filegetcontent
*/
Route::get('/html-posts', function () {
    return view('html-posts.index');
});

Route::get('/html-posts/{post}', function ($slug) {
    $post = file_get_contents(resource_path("views/html-posts/posts/{$slug}.html"));

    return view('html-posts.show', compact('post'));
});
