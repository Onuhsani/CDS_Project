<?php

namespace Database\Factories;

use App\Models\users\Corper;
use App\Models\users\House;
use App\Models\users\Item;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FavoriteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $corperId = FactoryHelper::getRandomModelId(Corper::class);
        $houseId = FactoryHelper::getRandomModelId(House::class);
        $itemId = FactoryHelper::getRandomModelId(Item::class);
        return [
            'corper_id' => $corperId,
            'house_id' => $houseId,
            'item_id' => $itemId,
        ];
    }
}
