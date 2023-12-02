<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    protected $orderDetail;
    public function __construct(OrderDetail $orderDetail)
    {
        $this->orderDetail = $orderDetail;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getAllOrderDetail = $this->orderDetail->getAllOrderDetail();
        return $this->responseSuccess($getAllOrderDetail);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = [
            'name' => $request['name'],
            'shipping_option' => $request['website'],
            'shipping_method' => $request['description'],
            'status' => $request['status'],
            'amount' => $request['country'],
            'shipping_amount' => $request['image'],
        ];

        $this->orderDetail->insert($data);
        return $this->responseSuccess(1);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderDetail  $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $getAllOrderDetail = $this->orderDetail->getOrderDetailId($id);
        return $this->responseSuccess($getAllOrderDetail);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrderDetail  $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $this->orderDetail->update($request['id'], $request);
        return $this->responseSuccess(1);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderDetail  $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->orderDetail->delete($id);
        return $this->responseSuccess(1);
    }
}
