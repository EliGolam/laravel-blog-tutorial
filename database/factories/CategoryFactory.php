<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    private array $CATEGORIES = [
        "Fun Projects",
        "Art",
        "Hobbies",
        "Learning",
    ];

    private static int $CAT_IDX = 0;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $idx = CategoryFactory::$CAT_IDX;
        CategoryFactory::$CAT_IDX++;

        if($idx >= count($this->CATEGORIES)) {
            $name = "Other Category {$idx}";
        }
        else {
            $name = $this->CATEGORIES[$idx];
        }

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->realText(),
        ];
    }
}
