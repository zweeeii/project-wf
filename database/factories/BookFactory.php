<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),        // Generates a random title
            'describtion' => fake()->paragraph(), // Generates a random description
            'author_id' => Author::inRandomOrder()->first()->id ?? Author::factory(),  // Get random existing author or create a new one
        ];
    }
}
