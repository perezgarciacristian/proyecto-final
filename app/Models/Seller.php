<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre','user_id', 'Genero',];
    /*public $timestamps = false;*/

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pets()
    {
        return $this->belongsToMany(Pet::class);
    }
}
