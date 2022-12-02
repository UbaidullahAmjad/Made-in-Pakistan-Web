<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $timestamp=false;
    public function attributes()
    {
      return $this->belongsToMany(Product::class,'product_attributes');
    }
}
