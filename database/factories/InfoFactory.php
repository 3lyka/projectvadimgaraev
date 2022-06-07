<?php

namespace Database\Factories;

use App\Models\CategoryInfo;
use Illuminate\Database\Eloquent\Factories\Factory;

class InfoFactory extends Factory
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
			'description' => $this->faker->text(),
			'image' => 'изображение',
			'url' => '',
			'category_id' => CategoryInfo::get()->random()->id
        ];
    }
}
