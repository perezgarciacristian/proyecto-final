<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pet extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['Nombre', 'Edad', 'Genero', 'Animal'];


    //Muchos a muchos
    public function buyers()
    {
        return $this->belongsToMany(Buyer::class);
    }

    public function sellers()
    {
        return $this->belongsToMany(Seller::class);
    }

    public function vaccines()
    {
        return $this->belongsToMany(Vaccine::class);
    }
    //Uno a uno
    public function archivo()
    {
        return $this->hasOne(Archivo::class);
    }
    public function sale()
    {
        return $this->hasOne(Sale::class);
    }


}
