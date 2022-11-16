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
    $idx = 1;
    $posts = [];

    $posts[] = file_get_contents(resource_path("views/html-posts/posts/example-post-1.html"));
    $posts[] = file_get_contents(resource_path("views/html-posts/posts/example-post-2.html"));
    $posts[] = file_get_contents(resource_path("views/html-posts/posts/example-post-3.html"));


    return view('html-posts.index', compact('posts'));
});

Route::get('/html-posts/{post}', function ($slug) {
    // Find an html-post by its slug and pass it dynamically to a view called show

    if (!file_exists($path = resource_path("views/html-posts/posts/{$slug}.html"))) {
        /* Redirect if File doesn't exist */
        // return redirect('/html-posts');

        /* Abort 404 */
        abort(404);
    }

    // Cache
    $post = cache()->remember("html-posts.{$slug}", now()->addDay(), fn() => file_get_contents($path));

    return view('html-posts.show', compact('post'));
})->where('post', '([a-zA-Z1-9\-\+_&])+');
