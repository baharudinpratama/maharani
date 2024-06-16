<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()
            ->count(2)
            ->state(new Sequence(
                [
                    'name' => 'Unikelo Shirt',
                    'slug' => Str::slug('Unikelo Shirt'),
                    'type' => 'Shirt',
                    'description' => 'Comfy shirt by Unikelo.',
                    'price' => 10,
                    'quantity' => 100,
                ],
                [
                    'name' => 'Jara Dress',
                    'slug' => Str::slug('Jara Dress'),
                    'type' => 'Dress',
                    'description' => 'Perfect dress for you by Jara.',
                    'price' => 15,
                    'quantity' => 50,
                ],
            ))
            ->create();
    }
}
