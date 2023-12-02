<?php

namespace App\Http\Controllers;

use App\Models\Shipments;
use Illuminate\Http\Request;

class ShipmentsController extends Controller
{
    protected $shipments;
    public function __construct(Shipments $shipments)
    {
        $this->shipments = $shipments;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getAllShipment = $this->shipments->getAllShipment();
        return $this->responseSuccess($getAllShipment);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shipments  $shipments
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $getAllShipment = $this->shipments->getAllShipmentId($id);
        return $this->responseSuccess($getAllShipment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shipments  $shipments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shipments  $shipments
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->shipments->delete($id);
        return $this->responseSuccess(1);
    }
}
