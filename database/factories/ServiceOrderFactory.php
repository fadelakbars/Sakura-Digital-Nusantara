<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ServiceOrder;

class ServiceOrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ServiceOrder::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'date_of_birth' => $this->faker->date(),
            'gender' => $this->faker->randomElement(["Male","Female"]),
            'institution' => $this->faker->word(),
            'job_title' => $this->faker->word(),
            'address' => $this->faker->text(),
            'service_type' => $this->faker->randomElement(["penerbitan_buku","mencetak_buku","menerbitkan_dan_mencetak"]),
            'book_size' => $this->faker->randomElement(["100-250"]),
            'print_quantity' => $this->faker->numberBetween(-10000, 10000),
            'invoice_number' => $this->faker->word(),
            'amount' => $this->faker->randomFloat(2, 0, 99999999.99),
            'pdf_path' => $this->faker->word(),
            'status' => $this->faker->randomElement(["pending","verified","in_progress","completed","revised"]),
        ];
    }
}
