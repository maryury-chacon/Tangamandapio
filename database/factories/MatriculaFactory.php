<?php

namespace Database\Factories;

use App\Models\Estudiante;
use App\Models\Grado;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatriculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo_estudiante' => Estudiante::all()->random()->id,
            'codigo_grado' => Grado::all()->random()->id,
            'anio' => $this->faker->year(),
        ];
    }
}
