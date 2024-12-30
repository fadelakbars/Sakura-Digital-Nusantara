<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Order;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'customer_id' => Customer::factory(),
            'service_type' => $this->faker->randomElement(["penerbitan_buku","pemasaran_buku","pengurusan_hki","parafrase_turnitin"]),
            'service_options' => $this->faker->randomElement(["menerbitkan_buku","mencetak_buku","menerbitkan_dan_mencetak"]),
            'book_size' => $this->faker->randomElement(["100-250"]),
            'print_quantity' => $this->faker->numberBetween(-10000, 10000),
            'status' => $this->faker->randomElement(["pending","verified","in_progress","completed","revised"]),
            'invoice_id' => Invoice::factory(),
        ];
    }
}
