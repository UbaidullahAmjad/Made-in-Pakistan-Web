<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = []; 
    
    public function subcategory(){
        return $this->hasMany(SubCategory::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    public function childrenCategories()
    {
        return $this->hasMany(SubCategory::class);
        // return $this->hasMany(Category::class)->with('childrenCategories');
    }

    public function images(){
        return $this->morphMany(Image::class, 'imageable');
    }
}
