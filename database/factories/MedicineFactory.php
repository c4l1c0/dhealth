<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medicine>
 */
class MedicineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'codename' => $this->faker->regexify('[A-Z]{3}[0-4]{8}'),
            'name' => $this->faker->name(),
            'stock' => $this->faker->randomFloat(2, 0, 100000),
            'additional_data' => $this->faker->sentence(10)
        ];
    }
}
