<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
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
            'DateOfBirth' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'Gender' => $this->faker->randomElement($array = array ('Мужчина','Женщина')),
            'PhoneNumber' => $this->faker->phoneNumber,
            'Email' => $this->faker->unique()->safeEmail,
            'Diagnosis' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'Adress' => $this->faker->address,
            'Photo' => $this->faker->imageUrl($width = 360, $height = 250)
        ];
    }
}
