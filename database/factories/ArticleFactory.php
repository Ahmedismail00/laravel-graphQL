<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * @return array
     */
    public function definition(): array
    {
        return [
            'category_id' => fake()->unique()->numberBetween(1, Category::count()),
            'title'   => fake()->sentence(),
            'content' => fake()->paragraphs(3, true),

        ];
    }
}
