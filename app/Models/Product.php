<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    protected $guarded = [];
    use HasFactory, Searchable;
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function reviews()
    {
      return $this->hasMany(Review::class);
    }
    public function attributes()
    {
      return $this->belongsToMany(Attribute::class,'product_attributes','product_id','attribute_id');
    }
 
    public function images(){
      return $this->morphMany(Image::class, 'imageable');
    }

    public function seller(){
      return $this->belongsTo(Seller::class, 'seller_id', 'id');
    }

    public function items(){
      return $this->belongsTo(Item::class, 'item_id', 'id');
    }

    public function pictures(){
      return $this->hasMany(ProductImage::class);
    }

    // public function getMinPriceAttribute($query){
      
      
    //   return "$ ".$query;
    // }
    // public function getPerProductAttribute($query){
    //   return " / ".$query;
    // }
    
    

}
