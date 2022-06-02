<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(20),
            'image' => 'Изображение',
            'content' => $this->faker->text(),
            'price' => 100,
            'sale' => 100,
            'description' => '1',
            'is_published' => '1',
            'category_id' => Category::get()->random()->id
        ];
    }
}
