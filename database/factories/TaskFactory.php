<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = ['pending', 'completed', 'todo'];
        $priority = ['normal', 'medium', 'high'];
        return [
            'title' => fake()->title(),
            'description' => fake()->text(20),
            'status' => $status[rand(0, 2)],
            'priority' => $priority[rand(0, 2)],
            'due_date' => fake()->dateTimeBetween('today', 'tomorrow'),
            'user_id' => User::inRandomOrder()->first()->id,
            'remind' => fake()->boolean()
        ];
    }


}
