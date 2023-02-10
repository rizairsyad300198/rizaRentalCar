<?php

namespace App\Http\Controllers;

use App\Models\DataBooking;
use App\Http\Requests\StoreDataBookingRequest;
use App\Http\Requests\UpdateDataBookingRequest;

class DataBookingController extends Controller
{
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDataBookingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDataBookingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataBooking  $dataBooking
     * @return \Illuminate\Http\Response
     */
    public function show(DataBooking $dataBooking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataBooking  $dataBooking
     * @return \Illuminate\Http\Response
     */
    public function edit(DataBooking $dataBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDataBookingRequest  $request
     * @param  \App\Models\DataBooking  $dataBooking
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDataBookingRequest $request, DataBooking $dataBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataBooking  $dataBooking
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataBooking $dataBooking)
    {
        //
    }
}
