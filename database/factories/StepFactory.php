<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Step>
 */
class StepFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(), 'description' => fake()->text(50), 'due_date'=> now(), 'project_id' => Project::inRandomOrder()->first()->id, 'user_id' => User::inRandomOrder()->first()->id, 'status' => fake()->randomElement(['todo', 'pending', 'completed']), 'priority' =>fake()->randomElement(['high', 'medium', 'normal']) , 'remind' => fake()->randomElement([true, false])
        ];
    }
}
