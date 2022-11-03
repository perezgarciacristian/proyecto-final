<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprador extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre','user_id','Edad', 'Mascota'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mascotas()
    {
        return $this->belongsToMany(Mascota::class);
    }
}
