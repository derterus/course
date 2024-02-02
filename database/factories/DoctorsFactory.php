<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctors>
 */
class DoctorsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'FirstName' => $this->faker->firstName(),
            'LastName' => $this->faker->lastName(),
            'Specialization' => $this->faker->jobTitle,
            'PhoneNumber' => $this->faker->phoneNumber,
            'Email' => $this->faker->unique()->safeEmail,
            'ExperienceYears' => $this->faker->numberBetween($min = 1, $max = 20),
            'WorkSchedule' => $this->faker->time($format = 'H:i', $max = 'now') . ' - ' . $this->faker->time($format = 'H:i', $max = 'now'),

            'Adress' => $this->faker->address,
            'Photo' => $this->faker->imageUrl($width = 360, $height = 250)
        ];
    }
}
