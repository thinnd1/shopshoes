<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $order;
    public function __construct(Order $order)
    {
        $this->order = $order;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getBrand = $this->order->getAllOrder();
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
            'user_id' => $request['user_id'],
            'shipping_option' => $request['shipping_option'],
            'shipping_method' => $request['shipping_method'],
            'status' => $request['status'],
            'amount' => $request['amount'],
            'shipping_amount' => $request['shipping_amount'],
            'currency_id' => $request['currency_id'],
            'description' => $request['description'],
            'coupon_code' => $request['coupon_code'],
            'discount_amount' => $request['discount_amount'],
            'is_confirmed' => $request['is_confirmed'],
            'discount_description' => $request['discount_description'],
            'is_finished' => $request['is_finished'],
            'payment_id' => $request['payment_id'],
        ];

        $this->order->insert($data);
        return $this->responseSuccess(1);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $getBrand = $this->order->getOrderId($id);
        return $this->responseSuccess($getBrand);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->order->updateOrder($request['id'], $request);
        return $this->responseSuccess(1);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->order->deleteOrder($id);
        return $this->responseSuccess(1);
    }
}
