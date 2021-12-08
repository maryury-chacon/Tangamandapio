<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombres' => $this->faker->firstName()." ".$this->faker->firstName(),
            'apellidos' => $this->faker->lastName()." ".$this->faker->lastName(),
            'profesion' => $this->faker->jobTitle(),
            'fecha_entrada' => $this->faker->date(),
            'activo' => $this->faker->randomElement($array = array ('A','I')),
        ];
    }
}
