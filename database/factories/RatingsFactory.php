<?php

namespace Database\Factories;

use App\Models\Admins;
use App\Models\Folders;
use App\Models\test_steps;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ratings>
 */
class RatingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $folderIds = Folders::all()->pluck('id')->toArray();
        $stepIds = test_steps::pluck('id')->toArray();
        $adminIds = Admins::pluck('id')->toArray();
        return [
            //
            'uuid' => $this->faker->unique()->uuid(),
            'statut' => random_int(1, 4),
            'step_rate' => random_int(10, 20),
            'folder_id' => $folderIds[array_rand($folderIds)],
            'step_id' => $stepIds[array_rand($stepIds)],
            'admin_id' => $adminIds[array_rand($adminIds)]
        ];
    }
}
