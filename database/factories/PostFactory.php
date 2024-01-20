<?php

namespace Database\Factories;

use App\Models\PostCategory;
use App\Models\User;
use App\Models\users\Category;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userId = FactoryHelper::getRandomModelId(User::class);
        $categoryId = FactoryHelper::getRandomModelId(PostCategory::class);
        $status = array('active', 'deleted');

        return [
            'user_id' => $userId,
            'category_id' => $categoryId,
            'title' => $this->faker()->title(),
            'meta_title' => $this->faker()->title(),
            'slug' => $this->faker()->title(),
            'content' => $this->faker()->paragraph(),
            'status' => array_rand($status, 1),
        ];
    }
}
