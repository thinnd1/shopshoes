<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->belongsToMany(Product::class, config('hameos.ecommerce.general.table.product_with_categories_table'), 'category_id', 'product_id');
    }
}
