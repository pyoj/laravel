<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'title' => $this->faker->sentence,
            'body' => $this->faker->realText(500),
            'slug' => $this->faker->slug,
            'author' => $this->faker->name,
            'tags' => $this->faker->word . ", " . $this->faker->word
        ];
    }
}
