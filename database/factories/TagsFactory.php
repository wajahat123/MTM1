<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tags>
 */
class TagsFactory extends Factory
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

            "name"=> $this->faker->name,
            "slug"=> $this->faker->slug,
            "group_name"=> $this->faker->text,
            "description" => $this->faker->paragraph,
            "image" => $this->faker->imageUrl,
            "status" => $this->faker->boolean,
            "css_class" => $this->faker->slug,
            "meta_title"=> $this->faker->title,
            "meta_description"=> $this->faker->paragraph,
            "meta_keywords"=> $this->faker->name,

        ];
    }
}
