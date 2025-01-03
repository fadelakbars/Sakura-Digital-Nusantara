<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Journal;

class JournalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Journal::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'journalcname' => $this->faker->word(),
            'description' => $this->faker->text(),
            'link' => $this->faker->word(),
            'courrent_issue' => $this->faker->word(),
            'image' => $this->faker->word(),
        ];
    }
}
