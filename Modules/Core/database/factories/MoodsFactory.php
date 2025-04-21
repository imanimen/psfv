<?php

namespace Modules\Core\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Core\Models\Mood;

class MoodsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = Mood::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [

        ];
    }
}
