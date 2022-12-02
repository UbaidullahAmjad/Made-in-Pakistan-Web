<?php

namespace App\Models;

use App\Models\Rfq;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Buyer extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $guarded = [];

    protected $guard = 'buyer';
    public function rfqs() 
    {
        return $this->hasMany(Rfq::class);
    }
    public function orders(){
        return $this->hasMany(Order::class, 'customer_id');
    }
    
}
