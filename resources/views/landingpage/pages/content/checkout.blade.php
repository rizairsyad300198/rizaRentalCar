@extends('landingpage.pages.layouts.app')
@section('content')
    <!-- Cart -->
        <section class="course-content checkout-widget">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <!-- Billing Address -->
                        <div class="student-widget">
                            <div class="student-widget-group add-course-info">
                                <div class="cart-head">
                                    <h4>Form Pembayaran Customer</h4>

                                </div>
                                <div class="checkout-form">
                                    <form action=" {{ route ('bayar')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label">Nama Lengkap</label>
                                                    <input type="text" class="form-control" name="nama" value="{{ old('nama') }}" placeholder="Masukan Nama Lengkap Sesuai KTP" required>
                                                    @error('nama')
                                                        <span class="text-danger"> {{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label">NIK</label>
                                                    <input type="number" class="form-control" name="nik" value="{{ old('nik') }}" placeholder="Masukan NIK" required>
                                                    @error('nik')
                                                        <span class="text-danger"> {{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label">Nomor Telepon</label>
                                                    <input type="number" class="form-control" name="nohp" value="{{ old('nohp') }}" placeholder="0821xxxxxx" required>
                                                    @error('nohp')
                                                        <span class="text-danger"> {{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label">Alamat Lengkap</label>
                                                    <input type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" placeholder="Masukan Alamat Lengkap Sesuai KTP" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="wallet-method">
                                                    <p class="text-muted" style="font-style: italic !important;">Note : Silahkan Transfer Ke No Rekening dibawah dan Upload Bukti Pembayaran</p>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label">No Rekening</label>
                                                    <input type="text" class="form-control" value="Bank BNI 123456789 - An Riza Rental Car Bandung" readonly>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label">Upload Bukti Pembayaran</label>
                                                    <input type="file" class="form-control" name="bukti_pembayaran" placeholder="Upload Bukti Pembayaran" required>
                                                    @error('bukti_pembayaran')
                                                        <span class="text-danger"> {{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="payment-btn">
                                                <button  class="btn btn-primary" type="submit">Konfirmasi Pembayaran</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /Billing Address -->

                    </div>
                </div>
            </div>
        </section>
    <!-- /Cart -->
@endsection
