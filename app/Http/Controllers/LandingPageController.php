<?php

namespace App\Http\Controllers;

use App\Models\DataBooking;
use App\Models\DataMobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class LandingPageController extends Controller
{
    //
    public function index()
    {
        return view ('landingpage.index',[
            'mobil' => DataMobil::all(),
        ]);
    }

    public function checkout($id)
    {
        return view ('landingpage.pages.content.checkout',[
            'mobil' => DataMobil::find($id),
        ]);
    }

    public function checkoutPayment(Request $request)

    {


        $data = $this->validate($request, [
            'bukti_pembayaran'  => 'mimes:png,jpg',
            'nama'              => 'required|regex:/^[\pL\s\-]+$/u',
            'nik'               => 'required|max:15',
            'nohp'              => 'required|max:13'
        ]);

        $file = $request->file('bukti_pembayaran');
        $name = 'BP-' . Carbon::now()->format('Y-m-d-H-i-s') . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('bukti_pembayaran', '' . $name . '', 'public');

        $tanggalSewa    = Carbon::parse($request->start_date)->format('d F, Y');
        $tanggalKembali = Carbon::parse($request->end_date)->format('d F, Y');

        $dataCustomer = DataBooking::create([
            'nama'              => $request->nama,
            'nik'               => $request->nik,
            'no_hp'             => $request->nohp,
            'alamat'            => $request->alamat,
            'tanggal_mulai'     => $tanggalSewa,
            'tanggal_berakhir'  => $tanggalKembali,
            'status'            => 'booked',
            'bukti_bayar'       => $path
        ]);

        return view('landingpage.pages.content.success');
    }

    public function success ()
    {
        return view('landingpage.pages.content.success');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampilDataBook($id)
    {
        dd($id);
        $data = DataBooking::find($id);
        return  view('backend.content.edit-data-penyewa', compact('data'));
    }

}
