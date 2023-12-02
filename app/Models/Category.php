<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status',
        'image',
        'icon',
        'is_default'
    ];

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

    public function updateCategory($id, $data)
    {
        $category = Category::find($id);

        $category->name = $data['name'];
        $category->description = $data['description'];
        $category->status = $data['status'];
        $category->icon = $data['icon'];
        $category->is_default = $data['is_default'];

        return $category->save();
    }        

    public function deleteCategory($id)
    {
        return Category::where('id', $id)->delete();
    }
}
