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

Route::get('/', 'WelcomePageController@index')->name('welcome-page');


// TESTING ROUTES
/* -----------------------------------------------------------------------
| html-posts
| using html literals through wildcards using php filegetcontent
*/
Route::get('/html-posts', 'PostController@index')->name('html-posts');

Route::get('/html-posts/{post:slug}', 'PostController@find')->name("html-posts.show");

// Route::get('/html-posts/{post}', function ($slug) {
//     // Find an html-post by its slug and pass it dynamically to a view called show
//     return view('html-posts.show', [
//         'post' => Post::find($slug),
//     ]);

// })->where('post', '([a-zA-Z1-9\-\+_&])+');
