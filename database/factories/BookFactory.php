<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Book;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->text(),
            'author' => $this->faker->word(),
            'price' => $this->faker->randomFloat(2, 0, 99999999.99),
            'stock' => $this->faker->numberBetween(-10000, 10000),
            'cover_image' => $this->faker->word(),
            'category' => $this->faker->word(),
            'isbn' => $this->faker->word(),
            'published_year' => $this->faker->numberBetween(-10000, 10000),
            'publisher' => $this->faker->word(),
        ];
    }
}
