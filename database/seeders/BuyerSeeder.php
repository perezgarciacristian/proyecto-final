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

        Buyer::create(['user_id' => 1, 'Nombre' => 'Thomas', 'Edad' => 23, 'Mascota' => 'Perro']);
        Buyer::create(['user_id' => 2, 'Nombre' => 'Betty', 'Edad' => 21, 'Mascota' => 'Perro']);
        Buyer::create(['user_id' => 3, 'Nombre' => 'Lilly', 'Edad' => 32, 'Mascota' => 'Gato']);
    }
}
