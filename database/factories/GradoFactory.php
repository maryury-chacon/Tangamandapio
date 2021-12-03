<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GradoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'jornada' => $this->faker->randomElement($array = array ('Vespertino','Matutino')),
            'seccion' => $this->faker->word(),
            'aula' => $this->faker->numerify('Al##'),
        ];
    }
}
