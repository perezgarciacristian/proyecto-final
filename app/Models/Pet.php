<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pet extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['Nombre', 'Edad', 'Genero', 'Animal', 'user_id'];
    // Uno a muchos
    public function user()
    {
        return $this->belongsTo(User::class);
    }
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
    public function archivos()
    {
        return $this->hasMany(Archivo::class);
    }
    public function sale()
    {
        return $this->hasOne(Sale::class);
    }
}
