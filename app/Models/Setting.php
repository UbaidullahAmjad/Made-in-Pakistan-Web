<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ['phone','address','category'];

    public function setting(){
        return $this->hasMany(SliderImage::class, 'setting_id');
    }
}
