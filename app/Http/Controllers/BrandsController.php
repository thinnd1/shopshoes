<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    protected $brand;
    public function __construct(Brands $brands)
    {
        $this->brand = $brands;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getBrand = $this->brand->getAllBrand();
        return $this->responseSuccess($getBrand);
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
            'website' => $request['website'],
            'description' => $request['description'],
            'status' => $request['status'],
            'image' => $request['image'],
        ];

        $this->brand->insertBrand($data);
        return $this->responseSuccess(1);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $getBrand = $this->brand->getBrandId($id);
        return $this->responseSuccess($getBrand);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->brand->updateBrand($request['id'], $request);
        return $this->responseSuccess(1);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->brand->deleteBrand($id);
        return $this->responseSuccess(1);
    }
}
