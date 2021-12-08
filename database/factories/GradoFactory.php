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
            'jornada' => $this->faker->randomElement($array = array ('Vespertina','Matutina', 'Nocturna')),
            'seccion' => $this->faker->randomElement($array = array ('A','B', 'C', 'D')),
            'aula' => $this->faker->numerify('AL##'),
        ];
    }
}
