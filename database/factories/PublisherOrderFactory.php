<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\PublisherOrder;

class PublisherOrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PublisherOrder::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'client_name' => $this->faker->word(),
            'client_email' => $this->faker->word(),
            'client_phone' => $this->faker->word(),
            'client_gender' => $this->faker->randomElement(["Pria","Wanita"]),
            'client_birthdate' => $this->faker->date(),
            'client_job_title' => $this->faker->word(),
            'client_institution' => $this->faker->word(),
            'book_title' => $this->faker->word(),
            'manuscript_path' => $this->faker->word(),
            'invoice_number' => $this->faker->word(),
            'invoice_path' => $this->faker->word(),
            'status' => $this->faker->randomElement(["Pending","In"]),
            'package_id' => $this->faker->word(),
            'price_range_id' => $this->faker->word(),
            'print_quantity_id' => $this->faker->word(),
            'total_price' => $this->faker->randomFloat(2, 0, 99999999.99),
        ];
    }
}
