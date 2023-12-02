<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product;
    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = $this->product->getAllProduct();
        return $this->responseSuccess($product);
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
            'content' => $request['content'],
            'description' => $request['description'],
            'status' => $request['status'],
            'user_id' => $request['user_id'],
            'brand_id' => $request['brand_id'],
            'sku' => $request['sku'],
            'price' => $request['price'],
            'images' => $request['images'],
            'sale_price' => $request['sale_price'],
            'sale_type' => $request['sale_type'],
            'sale_at' => $request['sale_at'],
            'end_sale_at' => $request['end_sale_at'],
            'views' => $request['views'],
        ];

        $this->product->insert($data);
        return $this->responseSuccess(1);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->product->getProductId($id);
        return $this->responseSuccess($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->product->updateProduct($request['id'], $request);
        return $this->responseSuccess(1);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->product->delete($id);
        return $this->responseSuccess(1);
    }
}
