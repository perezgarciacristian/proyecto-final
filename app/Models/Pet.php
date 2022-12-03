<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre', 'user_id', 'Edad', 'Genero', 'Animal'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function buyers()
    {
        return $this->belongsToMany(Comprador::class);
    }

    public function sellers()
    {
        return $this->belongsToMany(Seller::class);
    }

    public function vaccines()
    {
        return $this->belongsToMany(Vaccine::class);
    }
    public function archivo()
    {
        return $this->hasOne(Archivo::class);
    }
}
