<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;

    /**
     * @return BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * @return BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo(User::class);
    }
    
    public function getAllReview()
    {
        return Reviews::all();        
    }

    public function getReviewsId($id)
    {
        return Reviews::where('id', $id)->first();
    }

    public function insert($data)
    {
        return Reviews::create($data);
    }

    public function update($id, $data)
    {
        $product = Product::find($id);
        
        $product->name = $data['name'];
        $product->website = $data['website'];
        $product->description = $data['description'];
        $product->status = $data['status'];
        $product->country = $data['country'];
        $product->image = $data['image'];

        return $product->save();
    }

    public function delete($id)
    {
        return Reviews::where('id', $id)->delete();
    }
}
