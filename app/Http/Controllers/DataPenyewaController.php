<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPenyewa;
use App\Http\Requests\StoreDataPenyewaRequest;
use App\Http\Requests\UpdateDataPenyewaRequest;

class DataPenyewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DataPenyewa = DataPenyewa::get();
        return view('backend.content.data-penyewa', compact('DataPenyewa') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.content.tambah-data-penyewa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDataPenyewaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
        $data = $this->validate($request, [
            'nama'               => 'required',
            'nik'                => 'required|max:15',
            'no_telepon'         => 'required|max:13',
            'email'              => 'required|email',
            'alamat'             => 'required'
        ]);

        $dataPenyewa =  DataPenyewa::create([
            'nama'              => $request->nama,
            'nik'               => $request->nik,
            'no_telepon'        => $request->no_telepon,
            'email'             => $request->email,
            'alamat'            => $request->alamat
        ]);
        return redirect('dashboard/data-penyewa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataPenyewa  $dataPenyewa
     * @return \Illuminate\Http\Response
     */
    public function show(DataPenyewa $dataPenyewa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataPenyewa  $dataPenyewa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $data = DataPenyewa::find($id);
        return  view('backend.content.edit-data-penyewa', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDataPenyewaRequest  $request
     * @param  \App\Models\DataPenyewa  $dataPenyewa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = DataPenyewa::find($id)->update([
            'nama'              => $request->nama,
            'nik'               => $request->nik,
            'no_telepon'        => $request->no_telepon,
            'email'             => $request->email,
            'alamat'            => $request->alamat
        ]);

        return redirect()->action([DataPenyewaController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataPenyewa  $dataPenyewa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = DataPenyewa::find($id)->delete();
        return back();
    }
}
