<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    use HasFactory;
    public function offer()
    {
       return $this->belongsTo(Offer::class, 'offer_id');
    }
    public function buyer(){
        return $this->belongsTo(Buyer::class, 'customer_id');
    }
    public function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function rfq(){
        return $this->belongsTo(Product::class, 'rfq_id');
    }

}
