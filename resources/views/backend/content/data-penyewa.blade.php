@extends('backend.layouts.dashboard-app')
@section('content')

    <!-- Instructor Dashboard -->
    <div class="col-xl-9 col-lg-8 col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="settings-widget">
                    <div class="settings-inner-blk p-0">
                        <div class="sell-course-head comman-space">
                            <h3>Data Penyewa</h3>
                        </div>
                        <div class="tambah-data-penyewa"  float: right>
                            <button class="btn btn-outline-add-data navbar-btn">Tambah data Penyewa</button></div>
                        <div class="comman-space pb-0">
                            <div class="settings-tickets-blk course-instruct-blk table-responsive">
                                <table class="table table-stripped text-center">
                                        <thead>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Penyewa</th>
                                            <th scope="col">NIK</th>
                                            <th scope="col">No. Telepon</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Aksi</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>maman abdurahman</td>
                                                <td>123123123123</td>
                                                <td>0891239012</td>
                                                <td>Jakarta Raya</td>
                                                <td>
                                                    <div class="d-flex justify-content-around">
                                                        <a href="{{ url('dashboard/data-penyewa/edit-data-penyewa')}}">
                                                            <button class="btn btn-warning">
                                                                Ubah
                                                            </button>
                                                        </a>
                                                            <button class="btn btn-danger">
                                                                Hapus
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Instructor Dashboard -->
@endsection
