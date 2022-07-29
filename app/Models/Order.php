<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [''];

    Public function user(){
        return $this->belongsTo(User::class);
    }
    public function OrderItems()
    {
        return $this->hasMany(OrderItems::class);
    }
    Public function products(){
        return $this->belongsToMany(Product::class,'order_items');
    }
}
