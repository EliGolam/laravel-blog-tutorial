<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
// use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    public function index() {
        return view('html-posts.index', [
            // Lazy Loading method
            // 'posts' => Post::all(),

            // Eager Loading
            'posts' => Post::latest()->with('category', 'author')->get(),
        ]);
    }

    public function find(Post $post) {
        // dd($post->title);
        // return view('html-posts.show', [
        //     // 'post' => Post::find($post->id),
        //     'post' => $post, // Eloquent Model Binding
        // ]);

        // LOGGING
        // DB::listen(function ($query) {
        //     logger($query->sql);
        // });

        return view('html-posts.show', compact('post'));
    }
}
