@extends('backend.layouts.dashboard-app')
@section('content')

<div class="col-xl-9 col-md-8">
    <div class="settings-widget profile-details">
        <div class="settings-menu p-0">
            <div class="profile-heading">
                <h3>Detail Detail</h3>
            </div>
            <div class="course-group mb-0 d-flex">
            <div class="checkout-form personal-address add-course-info">
                <form action="{{url ('dashboard/data-mobil/edit-data-mobil/'.$data->id)}}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Merk</label>
                                <input type="text" name="merk" value="{{$data->merk}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">No Registrasi</label>
                                <input type="text" name="no_registrasi" value="{{$data->no_registrasi}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Warna</label>
                                <input type="text" name="warna_mobil" value="{{$data->warna_mobil}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Tahun</label>
                                <input type="text" name="tahun" value="{{$data->tahun}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Harga sewa</label>
                                <input type="text" name="harga_sewa" value="{{$data->harga_sewa}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Stock</label>
                                <input type="text" name="stock" value="{{$data->stock}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <img src="{{url ('frontend/assets/img/supra2.png')}}"  class="img-fluid" alt=""> <!--- ini untuk menampilkan data  image sebelumnya --->
                                <label class="form-control-label">Gambar</label>
                                <input type="file" name="gambar"  class="form-control" >
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <label class="add-course-label">Deskripsi Mobil</label><br>
                            <textarea id="editor" name="deskripsi">{{$data->deskripsi}}</textarea>
                        </div>
                        <div class="update-data-mobil">
                            <button type="submit" class="btn btn-primary">Update Data Mobil</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
