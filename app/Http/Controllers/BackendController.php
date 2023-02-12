<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackendController extends Controller
{
    //
    public function index()
    {
        return view('backend.pages.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }else{
            dd('gagal');
        }


    }


    public function dashboard() {
        return view('backend.content.dashboard');
    }


    public function edit_data_mobil() {
        return  view('backend.content.edit-data-mobil');
    }

    public function edit_data_penyewa() {
        return view('backend.content.edit-data-penyewa');
    }

    public function tambah_data_mobil () {
        return view ('backend.content.tambah-data-mobil');
    }

    public function tambah_data_penyewa () {
        return view ('backend.content.tambah-data-penyewa');
    }
}
