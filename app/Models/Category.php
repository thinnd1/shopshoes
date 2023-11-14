<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function getCategory()
    {
        return Category::all();
    }
    public function getCategoryId($id)
    {
        return Category::where('id', $id)->first();
    }

    public function insert($data)
    {
        return Category::create($data);
    }

    public function update()
    {
        $category = Category::find($id);

        $category->name = $data['name'];
        $category->email = $data['email'];
        $category->phone = $data['phone'];
        $category->address = $data['address'];
        $category->country = $data['country'];
        $category->state = $data['state'];
        $category->city = $data['city'];
        $category->is_primary = $data['is_primary'];
        $category->is_shipping_location = $data['is_shipping_location'];

        return $category->save();
    }        
    }
    
    public function delete($id)
    {
        return Category::where('id', $id)->delete();
    }
}
