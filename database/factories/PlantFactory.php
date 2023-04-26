<?php

namespace Database\Factories;
use App\Models\Plant;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlantFactory extends Factory
{
    protected $model = Plant::class;

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word,
            'description' => $this->faker->sentence,
            'image_url' => $this->faker->imageUrl(640, 480, 'plants', true),
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
        ];
    }
}
