<?php

namespace App\Models;

use App\Models\Buyer;
use App\Models\Offer;
use App\Models\Seller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rfq extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function offer() 
    {
        return $this->hasOne(Offer::class);
    }
    public function buyer() 
    {
        return $this->belongsTo(Buyer::class,'customer_id');
    }
    public function seller() 
    {
        return $this->belongsTo(Seller::class, 'seller_id');
    }

    public function products(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
