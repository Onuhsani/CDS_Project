<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RentalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category' => $this->faker()->title(),
            'specification' => $this->faker()->title(),
            'description' => $this->faker()->sentence(),
            'location' => $this->faker()->sentence(),
            'price' => Str::random(34210, 56830),
            'negotiable' => 1,
        ];
    }
}
