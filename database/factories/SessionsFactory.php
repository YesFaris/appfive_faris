<?php

namespace Database\Factories;

use App\Models\Admins;
use App\Models\test_steps;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sessions>
 */
class SessionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'uuid' => $this->faker->unique()->uuid(),
            'quota' => random_int(1, 5),
            'session_date' => $this->faker->date(),
            'session_time' => $this->faker->time(),
            'admin_id' => random_int(1, Admins::all()->count()),
            'test_step_id' => random_int(1, test_steps::all()->count())
        ];
    }
}
