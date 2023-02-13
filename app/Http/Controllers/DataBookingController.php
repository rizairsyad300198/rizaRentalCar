<?php

namespace App\Http\Controllers;

use App\Models\DataBooking;

use App\Http\Requests\UpdateDataBookingRequest;
use App\Models\DataPenyewa;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        $penyewa = DataPenyewa::create([
            'nama'          => $request->nama,
            'nik'           => $request->nik,
            'no_telepon'    => $request->nohp,
            'alamat'        => $request->alamat,
            'email'         => 'riza@gmail.com',
        ]);

        $transaksi = DataBooking::create([
            'id_mobil'      => $request->id,
            'id_penyewa'      => $penyewa->id,
            'tanggal_mulai'      => $request->start_date,
            'tanggal_berakhir'  => $request->end_date,
            'status'            => 'booked',
            'bukti_bayar'      => $request->bukti_pembayaran,
            'total'      => $request->total,
        ]);

        return redirect('/success');
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
