<?php

namespace Database\Seeders;

use App\Models\Grados_Profesion;
use Illuminate\Database\Seeder;

class GradosProfesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grados_Profesion::factory(20)->create();
    }
}
