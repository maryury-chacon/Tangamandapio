<?php

namespace Database\Factories;

use App\Models\Grado;
use App\Models\Profesor;
use Illuminate\Database\Eloquent\Factories\Factory;

class Grados_ProfesionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo_profesor' => Profesor::all()->random()->id,
            'codigo_grado' => Grado::all()->random()->id
        ];
    }
}
