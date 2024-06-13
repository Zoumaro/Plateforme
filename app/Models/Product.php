<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'unit_price',
        'description',
        'picture',
        'address',
        'stock',
        'unit_id',
        'product_type_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }
    public function product_type()
    {
        return $this->belongsTo(product_type::class,'product_type_id');
    }
}
