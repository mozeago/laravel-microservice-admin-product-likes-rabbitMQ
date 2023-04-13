<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;
    public function definition()
    {
        return [
            "title" => $this->faker->text(30),
            "image" => $this->faker->imageUrl()

        ];
    }
}
