<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = 'Product ' . Str::random(2);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'type' => '',
            'description' => '',
            'price' => 0,
            'quantity' => 0,
        ];
    }
}
