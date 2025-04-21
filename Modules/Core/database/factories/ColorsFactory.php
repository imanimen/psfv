<?php

namespace Modules\Core\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Core\Models\Color;

class ColorsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = Color::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}
