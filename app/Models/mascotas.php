<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mascotas extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre', 'Edad', 'Genero'];
}

