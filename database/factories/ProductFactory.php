<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name = $this->faker->unique()->words($nb=4,$asText=true);
        $slug = Str::slug($product_name);
        return [
            'name' => $product_name,
            'slug' => $slug,
            'description' => $this->faker->text(500),
            'price' => $this->faker->numberBetween(1,700),
            'quantity' => $this->faker->numberBetween(1,200),
            'image' => 'racket_' . $this->faker->unique()->numberBetween(1,7).'.jpg',
            'category_id' => $this->faker->numberBetween(1,4)
        ];
    }
}
