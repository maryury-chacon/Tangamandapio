<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EstudianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombres' => $this->faker->name(),
            'apellidos' => $this->faker->lastName()." ".$this->faker->lastName(),
            'identidad' => $this->faker->numerify('####-####-######'),
            'ciudad' => $this->faker->country(), // password
            'direccion' => $this->faker->address(),
            'foto' => $this->faker->image(),
        ];
    }
}
