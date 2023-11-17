<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //

            "user_id" => rand(1,10),
            "parent_id"=> rand(1,5),
            "comment" => $this->faker->paragraph,
            "commentable_type" =>  $this->faker->title,
            "commentable_id"=> rand(1,10) ,
        ];
    }
}
