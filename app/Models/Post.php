<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post
{
    use HasFactory;

    public static function all() {
        $files = File::files(resource_path("views/html-posts/posts/"));

        return array_map(fn($file) => $file->getContents(), $files);
    }

    public static function find(string $slug) {
        if (!file_exists($path = resource_path("views/html-posts/posts/{$slug}.html"))) {
            /* Redirect if File doesn't exist */
           // return redirect('/html-posts');

            /* Abort 404 */
            // abort(404);

            /* Exception */
            throw new ModelNotFoundException();
        }

        // Cached return
        return cache()->remember("html-posts.{$slug}", now()->addDay(), fn() => file_get_contents($path));
    }
}
