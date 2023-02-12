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
                <form action=" {{ url ('dashboard/data-penyewa/tambah-data-penyewa')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" value="{{ old('nama')}}">
                                @error('nama')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">NIK</label>
                                <input type="number" class="form-control" name="nik" value="{{ old('nik')}}">
                                @error('nik')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Nomor telepon</label>
                                <input type="number" class="form-control" name="no_telepon" value="{{ old('no_telepon')}}">
                                @error('no_telepon')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email')}}">
                                @error('email')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Alamat Lengkap</label>
                            <input type="text" class="form-control" name="alamat" value="{{ old('alamat')}}">
                            @error('alamat')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="tambah-data-penyewa">
                            <button type="submit" class="btn btn-primary">Tambah data Penyewa</button>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
