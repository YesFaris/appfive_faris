<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admins>
 */
class AdminsFactory extends Factory
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
            'admin_name' => $this->faker->firstName(),
            'admin_surname' => $this->faker->lastName(),
            'admin_login' => $this->faker->email(),
            'admin_password' => 'password' ,
            'isenabled' => random_int(0, 1) ,
            'isadmin' => random_int(0, 1),
        ];
    }
}
