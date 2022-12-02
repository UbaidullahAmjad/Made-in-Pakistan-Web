<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded=[];
    public function buyer()
    {
        return $this->belongsTo(Buyer::class);
    }
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
