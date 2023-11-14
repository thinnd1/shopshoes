<?php

namespace App\Http\Controllers;

use App\Models\Shipments;
use Illuminate\Http\Request;

class ShipmentsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shipments  $shipments
     * @return \Illuminate\Http\Response
     */
    public function show(Shipments $shipments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shipments  $shipments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shipments $shipments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shipments  $shipments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shipments $shipments)
    {
        //
    }
}
