<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\test_steps>
 */
class TestStepsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $stepName = ['Etude de dossier', 'Test psychotechnique', 'Test collectif', 'Test individuel'];
        return [
            //
            'uuid' => $this->faker->unique()->uuid(),
            'step_name' => $stepName[array_rand($stepName)]
        ];
    }
}
