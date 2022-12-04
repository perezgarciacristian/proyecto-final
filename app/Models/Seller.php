<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seller extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['Nombre', 'user_id', 'Genero',];
    /*public $timestamps = false;*/

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
