<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    use HasFactory;

    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;

    public function __construct($title, $excerpt, $date, $body, $slug = null)
    {
      $this->title = $title;
      $this->excerpt = $excerpt;
      $this->date = $date;
      $this->body = $body;

      $this->slug = $this->parseSlug($slug);
    }

    public static function all() {
        // $files = File::files(resource_path("views/html-posts/posts"));
        // array_map(fn($file) => $file->getContents(), $files);

        /* Using Foreach */
        // $posts = [];
        // foreach($files as $file) {
        //   $document = YamlFrontMatter::parseFile($file);

        //   $posts[] = new Post(
        //     $document->title,
        //     $document->excerpt,
        //     $document->date,
        //     $document->body,
        //     $document->slug,
        //   );
        // }

        // return $posts;

        /* Using array_map */
        // return array_map(function ($file) {
        //     $document = YamlFrontMatter::parseFile($file);

        //     return new Post(
        //         $document->title,
        //         $document->excerpt,
        //         $document->date,
        //         $document->body,
        //         $document->slug,
        //     );
        // }, $files);


        /* Using Laravel Collections with regular functions */
        // return collect(File::files(resource_path("views/html-posts/posts")))
        //     ->map(function ($file) {
        //         $document = YamlFrontMatter::parseFile($file);

        //         return new Post(
        //             $document->title,
        //             $document->excerpt,
        //             $document->date,
        //             $document->body,
        //             $document->slug,
        //         );
        // });

        return cache()->remember('html-posts.all', now()->addDay(), function () {
            return collect(File::files(resource_path("views/html-posts/posts")))
            ->map(fn($file) => YamlFrontMatter::parseFile($file))
            ->map(fn($document) => new Post(
                    $document->title,
                    $document->excerpt,
                    $document->date,
                    $document->body(),
                    $document->slug,
            ))
            ->sortBy('date');
        });

        // return collect(File::files(resource_path("views/html-posts/posts")))
        //     ->map(fn($file) => YamlFrontMatter::parseFile($file))
        //     ->map(fn($document) => new Post(
        //             $document->title,
        //             $document->excerpt,
        //             $document->date,
        //             $document->body(),
        //             $document->slug,
        //     ))
        //     ->sortBy('date');
        // $file and $document can be substituted with any variable name
    }

    public static function find(string $slug) {
        // of all the blog posts find the one who's slug matches the one that was requested
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);

        // if (!file_exists($path = resource_path("views/html-posts/posts/{$slug}.html"))) {
        //     /* Redirect if File doesn't exist */
        //    // return redirect('/html-posts');

        //     /* Abort 404 */
        //     // abort(404);

        //     /* Exception */
        //     throw new ModelNotFoundException();
        // }

        // // Cached return
        // return cache()->remember("html-posts.{$slug}", now()->addDay(), fn() => file_get_contents($path));
    }

    private function parseSlug($slug) {
        $slugPrototype = $slug ?? $this->title;
        return strtolower(implode('-', explode(' ', $slugPrototype)));
    }
}
