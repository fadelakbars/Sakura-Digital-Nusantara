<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Delivery;
use App\Models\Order;

class DeliveryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Delivery::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'order_id' => Order::factory(),
            'delivery_type' => $this->faker->randomElement(["e_book","certificate","link_e_commerce","revised"]),
            'file_url' => $this->faker->word(),
            'sent_via' => $this->faker->randomElement(["whatsapp","email"]),
        ];
    }
}
