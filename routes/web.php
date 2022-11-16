<?php

use App\Models\Post;
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
    return view('html-posts.index', [
        'posts' => Post::all(),
    ]);

    // $posts = [];

    // $posts[] = file_get_contents(resource_path("views/html-posts/posts/example-post-1.html"));
    // $posts[] = file_get_contents(resource_path("views/html-posts/posts/example-post-2.html"));
    // $posts[] = file_get_contents(resource_path("views/html-posts/posts/example-post-3.html"));


    // return view('html-posts.index', compact('posts'));
});

Route::get('/html-posts/{post}', function ($slug) {
    // Find an html-post by its slug and pass it dynamically to a view called show
    return view('html-posts.show', [
        'post' => Post::find($slug),
    ]);

})->where('post', '([a-zA-Z1-9\-\+_&])+');
