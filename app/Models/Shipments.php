<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipments extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'user_id',
        'weight',
        'shipment_id',
        'note',
        'status',
        'cod_amount',
        'cod_status',
        'cross_checking_status',
        'price',
        'store_id',
        'tracking_id',
        'shipping_company_name',
        'tracking_link',
        'estimate_date_shipped',
        'date_shipped',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
    public function getAllShipment()
    {
        return Shipments::all();
    }
    
    public function getAllShipmentId()
    {
        return Shipments::where('id', $id)->first();
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

    public function insert($data)
    {
        return Shipments::create($data);
    }

    public function delete($id)
    {
        return Shipments::where('id', $id)->delete();
    }

}
