@extends('backend.layouts.dashboard-app')
@section('content')

    <!-- Instructor Dashboard -->
    <div class="col-xl-9 col-lg-8 col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="settings-widget">
                    <div class="settings-inner-blk p-0">
                        <div class="sell-course-head comman-space">
                            <h3>Data Karyawan</h3>
                            <button class="btn btn-outline-add-data navbar-btn float: right;">Tambah data karyawan</button>
                        </div>
                        <div class="comman-space pb-0">
                            <div class="settings-tickets-blk course-instruct-blk table-responsive">

                                <!-- Referred Users-->
                                <table class="table table-stripped text-center">
                                        <thead>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Karyawan</th>
                                            <th scope="col">Nomor Induk Karyawan</th>
                                            <th scope="col">No. Telepon</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Aksi</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Agus Sujibdo</td>
                                                <td>123781239127312</td>
                                                <td>078123916734</td>
                                                <td>jalan ciwarurug bandung</td>
                                                <td>
                                                    <div class="d-flex justify-content-around">
                                                        <a href="{{ url ('dashboard/data-karyawan/edit-data-karyawan') }}" class="nav-link">
                                                            <button class="btn btn-warning">
                                                                Ubah
                                                            </button>
                                                            <button class="btn btn-danger">
                                                                Edit
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                  </table>
                                <!-- /Referred Users-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Instructor Dashboard -->
@endsection
