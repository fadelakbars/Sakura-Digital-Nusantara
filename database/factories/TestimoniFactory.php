<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Testimoni;

class TestimoniFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Testimoni::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'customer_name' => $this->faker->word(),
            'job_title' => $this->faker->text(),
            'testimonial_text' => $this->faker->word(),
            'service' => $this->faker->randomFloat(2, 0, 99999999.99),
            'profile_image' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
