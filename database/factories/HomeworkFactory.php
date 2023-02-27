<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Homework>
 */
class HomeworkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name(20),
            'japanese'=>$this->faker->numberBetween(1,100),
            'math'=>$this->faker->numberBetween(1,100),
            'english'=>$this->faker->numberBetween(1,100),
            'science'=>$this->faker->numberBetween(1,100),
            'society'=>$this->faker->numberBetween(1,100),
        ];
    }
}
