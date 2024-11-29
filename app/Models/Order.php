<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'foodname',
        'quantity',
        'price',
        'name',
        'phone',
        'address',
       
    ];

    public function food()
    {
        return $this->hasMany(Food::class,'food_id','id');
    }
}