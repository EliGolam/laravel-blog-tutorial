<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker;
use Illuminate\Support\Str;


class PostSeeder extends Seeder
{
    private int $NUM_OF_POSTS = 16;
    private int $CATEGORIES = 4;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 1; $i <= $this->NUM_OF_POSTS; $i++) {
            $post = new Post();

            $title = "This is a Post: {$i}";

            $post->title = $title;
            $post->excerpt = $faker->realText();
            $post->slug = Str::slug($title, '-');
            $post->body = $faker->realTextBetween(300, 800, 3);
            $post->category_id = $faker->numberBetween(1, $this->CATEGORIES);

            $post->save();
        }
    }
}
