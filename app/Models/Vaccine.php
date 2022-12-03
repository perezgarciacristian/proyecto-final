<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;
    protected $fillable = ['Tipo', 'user_id', 'Descripcion', 'Componentes'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pets()
    {
        return $this->belongsToMany(Pet::class);
    }
}
