<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;
    protected $fillable = ['Tipo', 'Descripcion', 'Componentes'];


    public function pets()
    {
        return $this->belongsToMany(Pet::class);
    }
}
