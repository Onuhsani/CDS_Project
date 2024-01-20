<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\users\Category;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userId = FactoryHelper::getRandomModelId(User::class);
        $categoryId = FactoryHelper::getRandomModelId(Category::class);
        $status = array('available', 'unavailable');
        $condition = array('new', 'used');
        return [
            'user_id' => $userId,
            'category_id' => $categoryId,
            'item_name' => $this->faker()->name(),
            'description' => $this->faker()->paragraph(),
            'price' => Str::random(34500, 78960),
            'condition' => array_rand($condition, 1),
            'status' => array_rand($status, 1),

        ];
    }
}
