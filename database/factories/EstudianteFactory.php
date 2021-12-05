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
            'identidad' => $this->faker->numerify('070#-199#-#####'),
            'ciudad' => $this->faker->randomElement($array = array ('Danlí','El Paraíso','Yuscaran','Yauyupe', 'Morocelí', 'San Lucas', 'Trojes')),
            'direccion' => $this->faker->address(),
            'foto' => $this->faker->image(),
        ];
    }
}
