<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Order;
use App\Models\Revision;

class RevisionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Revision::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'order_id' => Order::factory(),
            'revision_request' => $this->faker->text(),
            'revision_file' => $this->faker->word(),
            'status' => $this->faker->randomElement(["requested","completed"]),
        ];
    }
}
