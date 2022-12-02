<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'subcategory_id');
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }    
}