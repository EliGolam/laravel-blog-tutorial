<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        return view('html-posts.index', [
            'posts' => Post::all(),
        ]);
    }

    public function find(Post $post) {
        // dd($post->title);
        // return view('html-posts.show', [
        //     // 'post' => Post::find($post->id),
        //     'post' => $post, // Eloquent Model Binding
        // ]);

        return view('html-posts.show', compact('post'));
    }
}
