<?php

namespace Database\Factories;


use App\Models\Employer;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'job_name'=>fake()->jobTitle(),
         'employer_id'=>Employer::factory(),
        'salary'=>(string) $this->faker->numberBetween(30000, 100000),
        ];
    }
}
