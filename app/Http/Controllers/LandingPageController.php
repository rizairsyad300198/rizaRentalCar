<?php

namespace App\Http\Controllers;

use App\Models\DataBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class LandingPageController extends Controller
{
    //
    public function index()
    {

        return view ('landingpage.index');
    }

    public function checkout()
    {

        return view ('landingpage.pages.content.checkout');
    }

    public function checkoutPayment(Request $request)

    {


        $data = $this->validate($request, [
            'bukti_pembayaran'  => 'mimes:png,jpg',
            'nama'              => 'required|regex:/^[\pL\s\-]+$/u',
            'nik'               => 'required|max:15',
            'nohp'              => 'required|max:13',
        ]);

        $file = $request->file('bukti_pembayaran');
        $name = 'BP-' . Carbon::now()->format('Y-m-d-H-i-s') . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('bukti_pembayaran', '' . $name . '', 'public');

        $tanggalSewa    = Carbon::parse($request->start_date)->format('d F, Y');
        $tanggalKembali = Carbon::parse($request->end_date)->format('d F, Y');

        $dataCustomer = DataBooking::create([
            'nama'              => $request->nama,
            'nik'               => $request->nik,
            'nohp'              => $request->nohp,
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
}
