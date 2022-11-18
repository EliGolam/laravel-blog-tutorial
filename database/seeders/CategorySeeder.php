<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Faker;
use Illuminate\Support\Str;


class CategorySeeder extends Seeder
{

    private array $CATEGORIES = [
        "Fun Projects",
        "Art",
        "Hobbies",
        "Learning",
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach($this->CATEGORIES as $category) {
            $c = new Category();

            $c->name = $category;
            $c->slug = Str::slug($category);
            $c->description = $faker->realText();

            $c->save();
        }
    }
}
