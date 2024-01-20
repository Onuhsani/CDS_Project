<?php

namespace Database\Factories;

use App\Models\users\HouseAgent;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $agentId = FactoryHelper::getRandomModelId(HouseAgent::class);
        $status = array('available', 'unavailable');
        return [
            'agent_id' => $agentId,
            'location' => $this->faker()->word(),
            'description' => $this->faker()->sentence(),
            'rent_amount' => Str::random(2745, 67567),
            'negotiable'=> 1,
            'number_of_bedrooms' => Str::random(1, 9),
            'status' => array_rand($status, 1),

        ];
    }
}
