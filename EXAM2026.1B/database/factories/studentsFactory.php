<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\schools;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\students>
 */
class studentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'schools_id' => schools::inRandomOrder()->value('id'),
            'full_name' => $this->faker->word(),
            'student_id' => $this->faker->word(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
        ];
    }
}
