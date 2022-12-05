<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vaccine;

class VaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vaccine::create(['user_id' => 1, 'Tipo' => 'Vacuna rabia', 'Descripcion' => 'Se le aplico esta vacuna con exito', 'Componentes' => 'Antigenos']);
        Vaccine::create(['user_id' => 2, 'Tipo' => 'Vacuna Moquillo', 'Descripcion' => 'Cuidarlo esta vacuna se le aplico y sigue enfermito', 'Componentes' => 'Inactivadores']);
        Vaccine::create(['user_id' => 3, 'Tipo' => 'Vacuna hepatitis canina', 'Descripcion' => 'Cuidarlo mucho', 'Componentes' => 'Conservantes']);
    }
}
