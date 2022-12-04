<?php

namespace Database\Seeders;

use App\Models\Buyer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class BuyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Buyer::create(['Nombre' => 'Thomas', 'Edad' => 'Adulto', 'Mascota' => 'Perro']);
        Buyer::create(['Nombre' => 'Betty', 'Edad' => 'Adulto', 'Mascota' => 'Perro']);
        Buyer::create(['Nombre' => 'Lilly', 'Edad' => 'Menor', 'Mascota' => 'Gato']);
    }
}
