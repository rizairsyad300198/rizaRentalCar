@extends('backend.layouts.dashboard-app')
@section('content')

    <!-- Instructor Dashboard -->
    <div class="col-xl-9 col-lg-8 col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="settings-widget">
                    <div class="settings-inner-blk p-0">
                        <div class="sell-course-head comman-space">
                            <h3>Data Mobil</h3>
                            <button class="btn btn-outline-add-data navbar-btn float: right;">Tambah data mobil</button>
                        </div>

                        <div class="comman-space pb-0">
                            <div class="settings-tickets-blk course-instruct-blk table-responsive">
                                <table class="table table-stripped text-center">
                                        <thead>
                                            <th scope="col">No</th>
                                            <th scope="col">Merk</th>
                                            <th scope="col">Nomor Registrasi</th>
                                            <th scope="col">Warna Mobil</th>
                                            <th scope="col">Jenis Mobil</th>
                                            <th scope="col">Stock</th>
                                            <th scope="col">Aksi</th></th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Avanza</td>
                                                <td>Z 1212 GV</td>
                                                <td>Hitam</td>
                                                <td>Mini Bus</td>
                                                <td>10</td>
                                                <td>
                                                    <div class="d-flex justify-content-around">
                                                        <a href="{{ url ('dashboard/data-mobil/edit-data-mobil') }}" class="nav-link">
                                                            <button class="btn btn-warning">
                                                                Ubah
                                                            </button>
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
@endsection
