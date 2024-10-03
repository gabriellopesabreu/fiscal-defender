<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Company;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AutomaticRoutine>
 */
class AutomaticRoutineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $company = Company::inRandomOrder()->first();

        return [
            'cnpj_id' => $company->id,
            'document' => $this->faker->randomElement(['nfe', 'cte']),
            'hour' => $this->faker->time('H:i'),
        ];
    }
}
