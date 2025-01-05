<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\PriceRange;

class PriceRangeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PriceRange::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'min_pages' => $this->faker->numberBetween(-10000, 10000),
            'max_pages' => $this->faker->numberBetween(-10000, 10000),
            'price' => $this->faker->randomFloat(2, 0, 99999999.99),
        ];
    }
}
