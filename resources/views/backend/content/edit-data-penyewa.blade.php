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
                <form action="{{url ('dashboard/data-penyewa/edit-data-penyewa/'.$data->id)}}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Nama Lengkap</label>
                                <input type="text" name="nama" value="{{$data->nama}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">NIK</label>
                                <input type="text" name="nik" value="{{$data->nik}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Nomor telepon</label>
                                <input type="text" name="no_telepon" value="{{$data->no_telepon}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input type="text" name="email" value="{{$data->email}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Alamat Lengkap</label>
                            <input type="text" name="alamat" value="{{$data->alamat}}" class="form-control">
                        </div>
                        <div class="update-data-penyewa">
                            <button type="submit" class="btn btn-primary">Ubah data Penyewa</button>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
