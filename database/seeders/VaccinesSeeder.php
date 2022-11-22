<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vaccines;

class VaccinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vaccines::create(['user_id'=>'1','Tipo'=>'Vacuna Viva','Descripcion'=>'Se le aplico esta vacuna con exito','Componentes'=>'Antigenos']);
        Vaccines::create(['user_id'=>'2','Tipo'=>'Vacuna Muerta','Descripcion'=>'Cuidarlo esta vacuna se le aplico y sigue enfermito','Componentes'=>'Inactivadores']);
        Vaccines::create(['user_id'=>'3','Tipo'=>'Vacuna Muerta','Descripcion'=>'Cuidarlo mucho','Componentes'=>'Conservantes']);
    }
}
