<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\TurnitinOrder;

class TurnitinOrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TurnitinOrder::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'client_name' => $this->faker->word(),
            'client_email' => $this->faker->word(),
            'client_phone' => $this->faker->word(),
            'document_title' => $this->faker->word(),
            'document_path' => $this->faker->word(),
            'invoice_number' => $this->faker->word(),
            'invoice_path' => $this->faker->word(),
            'status' => $this->faker->randomElement(["Pending","Completed","Revised"]),
            'total_price' => $this->faker->randomFloat(2, 0, 99999999.99),
        ];
    }
}
