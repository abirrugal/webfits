<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => Category::all()->random()->id,
            'title'       => $this->faker->unique()->jobTitle,
            'description' => $this->faker->realText(30),
            'price'       => random_int(100, 1000),
            'image'       => $this->faker->imageUrl(),
            

        ];
    }
}
