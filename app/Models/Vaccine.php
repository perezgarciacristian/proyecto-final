<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vaccine extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['Tipo', 'Descripcion', 'Componentes', 'user_id'];
    //Muchos a muchos
    public function pets()
    {
        return $this->belongsToMany(Pet::class)->withPivot('lote');
    }
    //Muchos a uno
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
