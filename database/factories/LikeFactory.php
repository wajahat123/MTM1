<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Like>
 */
class LikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => rand(1,10),
            "likeable_type" =>  $this->faker->title,
            "likeable_id"=> rand(1,10) ,
            "liked"=> $this->faker->boolean,
        ];
    }
}
