<?php

namespace App\Http\Controllers;

use App\Models\data_karyawan;
use App\Http\Requests\Storedata_karyawanRequest;
use App\Http\Requests\Updatedata_karyawanRequest;

class DataKaryawanController extends Controller
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
     * @param  \App\Http\Requests\Storedata_karyawanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storedata_karyawanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\data_karyawan  $data_karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(data_karyawan $data_karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\data_karyawan  $data_karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(data_karyawan $data_karyawan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedata_karyawanRequest  $request
     * @param  \App\Models\data_karyawan  $data_karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Updatedata_karyawanRequest $request, data_karyawan $data_karyawan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\data_karyawan  $data_karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(data_karyawan $data_karyawan)
    {
        //
    }
}
