<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccines extends Model
{
    use HasFactory;
    protected $fillable = ['Tipo', 'user_id', 'Descripcion', 'Componentes'];
    /*public $timestamps = false;*/

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
