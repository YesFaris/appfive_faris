<?php

namespace Database\Factories;

use App\Models\Ratings;
use App\Models\Step_Sections;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assessment>
 */
class AsessmentsFactory extends Factory
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
            'uuid' => $this->faker->uuid(),
            'rating_id' => random_int(1, Ratings::all()->count()),
            'step_section_id' => random_int(1, Step_Sections::all()->count()),
            'note_item' => random_int(1, 5),
            'assessment_date' => $this->faker->date()
        ];
    }
}
