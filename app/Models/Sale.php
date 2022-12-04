<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable = ['pet_id', 'buyer_id', 'seller_id', 'fecha_v', 'user_id'];
    // Uno a muchos
    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
    public function buyer()
    {
        return $this->belongsTo(Seller::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
