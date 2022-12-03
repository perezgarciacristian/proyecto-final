<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;
    protected $fillable = ['pet_id', 'ubicacion', 'mime', 'nombre_original'];
    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}
