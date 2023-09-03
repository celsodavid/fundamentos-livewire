<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'email' => fake()->unique()->email,
            'document' => random_int(11111111, 999999999),
            'birthdate' => fake()->date,
            'social_link' => 'https://' . fake()->domainName,
        ];
    }
}
