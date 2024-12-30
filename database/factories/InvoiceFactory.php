<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Invoice;
use App\Models\Order;

class InvoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoice::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'order_id' => Order::factory(),
            'invoice_number' => $this->faker->word(),
            'amount' => $this->faker->randomFloat(2, 0, 99999999.99),
            'status' => $this->faker->randomElement(["pending","paid","failed"]),
            'payment_proof' => $this->faker->word(),
            'pdf_path' => $this->faker->word(),
            'sent_via' => $this->faker->randomElement(["whatsapp","email"]),
        ];
    }
}
