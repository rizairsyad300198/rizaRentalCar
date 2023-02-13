<?php

namespace App\Http\Controllers;

use App\Models\DataMobil;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDataMobilRequest;
use App\Http\Requests\UpdateDataMobilRequest;
use Carbon\Carbon;

use function PHPSTORM_META\registerArgumentsSet;

class DataMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DataMobil = DataMobil::get();
        return view('backend.content.data-mobil', compact('DataMobil') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.content.tambah-data-mobil');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDataMobilRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
        // dd($request->all());
        $data = $this->validate($request, [

            'merk'              => 'required',
            'no_registrasi'     => 'required|max:15',
            'warna'             => 'required|max:13',
            'tahun'              => 'required',
            'stock'             => 'required',
            'gambar'            => 'mimes:png,jpg',
            'deskripsi'         => 'required'
        ]);


        $file = $request->file('gambar');
        $name = 'mobil-' . Carbon::now()->format('Y-m-d-H-i-s') . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('data-mobil', '' . $name . '', 'public');



        try {
            // DataMobil::create($request->except(['_token']));
            $dataMobil =  DataMobil::create([
            'merk'              => $request->merk,
            'no_registrasi'     => $request->no_registrasi,
            'warna_mobil'       => $request->warna,
            'tahun'             => $request->tahun,
            'harga_sewa'        => $request->harga_sewa,
            'stock'             => $request->stock,
            'gambar'            => $path,
            'deskripsi'         => $request->deskripsi
          ]);

          } catch (\Exception $e) {

              return $e->getMessage();
          }

          return redirect('dashboard/data-mobil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataMobil  $dataMobil
     * @return \Illuminate\Http\Response
     */
    public function show(DataMobil $dataMobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataMobil  $dataMobil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $data = DataMobil::find($id);
        return  view('backend.content.edit-data-mobil', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDataMobilRequest  $request
     * @param  \App\Models\DataMobil  $dataMobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = DataMobil::find($id)->update([
            'merk'              => $request->merk,
            'no_registrasi'     => $request->no_registrasi,
            'warna_mobil'       => $request->warna_mobil,
            'tahun'             => $request->tahun,
            'harga_sewa'        => $request->harga_sewa,
            'stock'             => $request->stock,
            'gambar'            => $request->gambar,
            'deskripsi'         => $request->deskripsi
        ]);

        // dd($update);
        return redirect()->action([DataMobilController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataMobil  $dataMobil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        // dd($id);
        $delete = DataMobil::find($id)->delete();

        return back();
    }
}
