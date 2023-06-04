<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * @return array
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
        ];
    }
}
