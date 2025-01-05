<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ParaphrasingPackage;

class ParaphrasingPackageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ParaphrasingPackage::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'text_type' => $this->faker->randomElement(["Biasa","Akademik"]),
            'language' => $this->faker->randomElement(["Indonesia","Inggris"]),
            'price_per_word' => $this->faker->randomFloat(2, 0, 99999999.99),
            'description' => $this->faker->text(),
        ];
    }
}
