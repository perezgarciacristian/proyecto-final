<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Buyer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['Nombre', 'Edad', 'Mascota'];
    //Muchos a uno
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
