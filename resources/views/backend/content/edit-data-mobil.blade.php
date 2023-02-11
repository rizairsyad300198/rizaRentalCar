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
                <form action="#">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Merk</label>
                                <input type="text" class="form-control" placeholder="Enter your first Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">No Registrasi</label>
                                <input type="text" class="form-control" >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Warna</label>
                                <input type="text" class="form-control" >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Tahun</label>
                                <input type="text" class="form-control" >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Harga sewa</label>
                                <input type="text" class="form-control" ">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Gambar</label>
                                <input type="file" class="form-control" name="bukti_pembayaran" >
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <label class="add-course-label">Deskripsi Mobil</label><br>
                            <div id="editor"></div>
                        </div>
                        <div class="update-profile">
                            <button type="button" class="btn btn-primary">Update Data Mobil</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
