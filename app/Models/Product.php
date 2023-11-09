<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'description',
        'content',
        'images',
        'status',
        'user_id',
        'brand_id',
        'is_featured',
        'sku',
        'price',
        'sale_price',
        'sale_type',
        'sale_at',
        'end_sale_at',
        'tax_id',
        'is_variation',
        'priority',
        'stock_status'
    ];

    protected $appends = [
        'image',
        'sell_price',
        'sell_price_with_taxes',
        'price_with_taxes',
    ];

    public function getAllProduct()
    {
    }

}
