<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = Category::inRandomOrder()->first() ?? Category::factory()->create();
        $brand = Brand::inRandomOrder()->first() ?? Brand::factory()->create();

        return [
            'name' => $this->faker->word,
            'category_id' => $category->id,
            'brand_id' => $brand->id,
        ];
    }
}
