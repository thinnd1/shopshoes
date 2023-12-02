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

    public function getAllProduct()
    {
        return Product::all();
    }

    public function getProductId($id)
    {
        return Product::where('id', $id)->first();
    }

    public function insert($data)
    {
        return Product::create($data);
    }

    public function updateProduct($id, $data)
    {
        $product = Product::find($id);

        $product->name = $data['name'];
        $product->content = $data['content'];
        $product->description = $data['description'];
        $product->status = $data['status'];
        $product->brand_id = $data['brand_id'];
        $product->sku = $data['sku'];
        $product->images = $data['images'];
        $product->price = $data['price'];
        $product->sale_price = $data['sale_price'];
        $product->sale_type = $data['sale_type'];
        $product->sale_at = $data['sale_at'];
        $product->end_sale_at = $data['end_sale_at'];
        $product->views = $data['views'];

        return $product->save();
    }

    public function deleteProduct($id)
    {
        return Product::where('id', $id)->delete();
    }

}
