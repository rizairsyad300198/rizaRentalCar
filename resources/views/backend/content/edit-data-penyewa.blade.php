@extends('backend.layouts.dashboard-app')
@section('content')
<!-- Profile Details -->
<div class="col-xl-9 col-md-8">
    <div class="settings-widget profile-details">
        <div class="settings-menu p-0">
            <div class="profile-heading">
                <h3>Data Penyewa</h3>
            </div>
            <div class="checkout-form personal-address">
                <form action="#">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Nama Lengkap</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">NIK</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Nomor telepon</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Alamat Lengkap</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="update-profile save-social">
                            <button type="button" class="btn btn-primary">Ubah data Penyewa</button>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
