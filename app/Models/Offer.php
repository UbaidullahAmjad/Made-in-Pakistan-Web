<?php

namespace App\Models;

use App\Models\Rfq;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offer extends Model
{
    protected $guarded = [];
    use HasFactory;
    public function order(){
        return $this->hasOne(Order::class);
    }
    public function rfqs(){
        return $this->belongsTo(Rfq::class);
    }
}
