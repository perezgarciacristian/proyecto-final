<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comprador;


class CompradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Comprador::create(['user_id'=>'1','Nombre'=>'Thomas','Edad'=>'Adulto','Mascota'=>'Perro']);
        Comprador::create(['user_id'=>'2','Nombre'=>'Betty','Edad'=>'Adulto','Mascota'=>'Perro']);
        Comprador::create(['user_id'=>'3','Nombre'=>'Lilly','Edad'=>'Menor','Mascota'=>'Gato']);

       /* Comprador::factory(10)->create();*/

    }
}
