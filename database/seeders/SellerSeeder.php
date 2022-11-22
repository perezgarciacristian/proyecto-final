<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seller;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seller::create(['user_id'=>'1','Nombre'=>'Pepe','Genero'=>'M']);
        Seller::create(['user_id'=>'2','Nombre'=>'Jonas','Genero'=>'F']);
        Seller::create(['user_id'=>'3','Nombre'=>'Carly','Genero'=>'F']);
    }
}
