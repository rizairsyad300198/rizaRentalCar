@extends('backend.layouts.dashboard-app')
@section('content')

<div class="col-xl-9 col-md-8">
    <div class="settings-widget profile-details">
        <div class="settings-menu p-0">
            <div class="profile-heading">
                <h3>Input Data Mobil</h3>
            </div>
            <div class="course-group mb-0 d-flex">
            <div class="checkout-form personal-address add-course-info">
                <form action=" {{ url ('dashboard/data-mobil/tambah-data-mobil')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Merk</label>
                                <input type="text" class="form-control" name="merk" value="{{ old('merk')}}">
                                @error('merk')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">No Registrasi</label>
                                <input type="text" class="form-control" name="no_registrasi" value="{{ old('no_registrasi')}}">
                                @error('no_registrasi')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Warna</label>
                                <input type="text" class="form-control" name="warna" value="{{ old('warna')}}">
                                @error('warna')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Tahun</label>
                                <select name="tahun" class="form-control" name="tahun" id="tahun" value="{{ old('tahun')}}"></select>
                                @error('tahun')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Harga sewa</label>
                                <input type="number" class="form-control" name="harga_sewa" value="{{ old('harga_sewa')}}">
                                @error('harga_sewa')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Stock</label>
                                <input type="number" class="form-control" name="stock" value="{{ old('stock')}}">
                                @error('stock')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Gambar</label>
                                <input type="file" class="form-control" name="gambar" value="{{ old('gambar')}}">
                                @error('gambar')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <label class="class-form-label" name="desksipsi">Deskripsi Mobil</label><br>
                            <textarea id="editor" class="form_control" placeholder="description" name="deskripsi" value="{{ old('deskripsi')}}"></textarea>
                            @error('deskripsi')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                            <div class="tambah-data-mobil">
                            <button type="submit" class="btn btn-primary">Tambah Data Mobil</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
