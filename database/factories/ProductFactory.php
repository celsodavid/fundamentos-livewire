<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'category_id' => Category::all()->random()->id,
            'name' => sprintf('Produto %s', fake()->name),
            'price' => random_int(111, 999),
            'stock' => random_int(11, 99),
        ];
    }
}
