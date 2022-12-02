<?php

namespace App\Models;

use App\Models\Rfq;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Passwords\CanResetPassword as TraitCanResetPassword;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Notifications\SellerRessetPasswordNotification;
use Laravel\Scout\Searchable;

class Seller extends Authenticable implements CanResetPassword
{
    use TraitCanResetPassword, Searchable;
    use HasFactory, Notifiable;
    protected $guard = 'seller';
    protected $guarded = [];

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function company(){
        return $this->hasOne(Company::class);
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new SellerRessetPasswordNotification($token));
    }
}
