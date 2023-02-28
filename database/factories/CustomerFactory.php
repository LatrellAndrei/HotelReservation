<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [      
        'roomID' => fake()->unique()->numberBetween(1, 100),
        'roomDescription' => fake()->sentence(),
        'roomCapacity' => fake()->numberBetween(1, 5),
        'dateFrom' => fake()->dateTimeBetween('-1 month', '+1 month'),
        'dateTo' => fake()->dateTimeBetween('+2 days', '+1 week'),
        ];
    }
}
