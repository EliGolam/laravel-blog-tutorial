<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('authors.index', [
            'authors' => User::all(),
        ]);
    }

    public function find(User $author) {
        return view('html-posts.index', [
            // 'author' => $author,
            'posts' => $author->posts->load(['category', 'author']),
        ]);
    }

    public function showUser(User $user) {
        return view('authors.show', []);
    }
}
