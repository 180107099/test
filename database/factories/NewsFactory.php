<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'announc' => $this->faker->name(),
            'desc' => $this->faker->text(50),
            'author_id' => rand(1, 5),
        ];
    }
}
