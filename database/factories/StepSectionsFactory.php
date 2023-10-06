<?php

namespace Database\Factories;

use App\Models\test_steps;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Step_Sections>
 */
class StepSectionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $testStepIds = test_steps::pluck('id')->toArray();
        return [
            //
            'uuid' => $this->faker->unique()->uuid(),
            'section_name' => $this->faker->word(),
            'test_steps_id' => $testStepIds[array_rand($testStepIds)]
        ];
    }
}
