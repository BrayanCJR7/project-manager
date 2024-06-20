<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(1), // Generate a random sentence with 3 words for project name
            'city_id' => $this->faker->numberBetween(1, 10), // Assuming you have city IDs between 1 and 50
            'company_id' => $this->faker->numberBetween(1, 10), // Assuming you have company IDs between 1 and 100
            'user_id' => $this->faker->numberBetween(1, 10), // Assuming you have user IDs between 1 and 20
            'execution_date' => $this->faker->date(), // Generate a random date for execution
            'is_active' => $this->faker->boolean(), // Randomly set active or inactive
        ];
    }
}
