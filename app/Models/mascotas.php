<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mascotas extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre','user_id', 'Edad', 'Genero','Animal'];
    /*public $timestamps = false;*/

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comprador()
    {
        return $this->belongsToMany(Comprador::class);
    }

    public function sellers()
    {
        return $this->belongsToMany(Seller::class);
    }
}

