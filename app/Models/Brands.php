<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'website',
        'description',
        'status',
        'image',
    ];

    public function getAllBrand()
    {
        return Brands::all();
    }

    public function getBrandId($id)
    {
        return Brands::where('id', $id)->first();
    }

    public function insertBrand($data)
    {
        return Brands::create($data);
    }

    public function updateBrand($id, $data)
    {
        $brand = Brands::find($id);
        
        $brand->name = $data['name'];
        $brand->website = $data['website'];
        $brand->description = $data['description'];
        $brand->status = $data['status'];
        $brand->image = $data['image'];

        return $brand->save();
    }
    public function deleteBrand($id)
    {
        return Brands::where('id', $id)->delete();
    }
}
