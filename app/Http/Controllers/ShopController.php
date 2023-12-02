<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    protected $shop;
    public function __construct(Shop $shop)
    {
        $this->shop = $shop;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getShop = $this->shop->getAllShop();
        return $this->responseSuccess($getShop);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request['name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'address' => $request['address'],
            'country' => $request['country'],
            'state' => $request['state'],
            'city' => $request['city'],
            'is_primary' => $request['is_primary'],
            'is_shipping_location' => $request['is_shipping_location'],
        ];

        $this->shop->insertShop($data);
        return $this->responseSuccess(1);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $getShop = $this->shop->getShopId($id);
        return $this->responseSuccess($getShop);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->shop->updateShop($request['id'], $request);
        return $this->responseSuccess(1);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->shop->deleteBrand($id);
        return $this->responseSuccess(1);
    }
}
