<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Avastar' => 'https://avatars.githubusercontent.com/u/1?v=4',
            'First Name' => $this->faker->firstName,
            'Last Name' => $this->faker->lastName,
            'Gender' => $this->faker->boolean,
            'signature' => $this->faker->sentence,
        ];
    }
}
