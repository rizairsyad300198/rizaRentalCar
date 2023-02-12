@extends('backend.layouts.dashboard-app')
@section('content')
        <!--- Data Booked --->
        <div class="row">
            <div class="col-md-12">
                <div class="settings-widget">
                    <div class="settings-inner-blk p-0">
                        <div class="sell-course-head comman-space">
                            <h3>Data Booked</h3>
                        </div>
                        <div class="comman-space pb-0">
                            <div class="settings-tickets-blk course-instruct-blk table-responsive">
                                <table class="table table-stripped text-center">
                                        <thead>
                                            <th scope="col">No</th>
                                            <th scope="col">Merk</th>
                                            <th scope="col">Nomor Registrasi</th>
                                            <th scope="col">Nama Penyewa</th>
                                            <th scope="col">Nama Karyawan</th>
                                            <th scope="col">Lama Sewa</th>
                                            <th scope="col">Aksi</th></th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Avanza</td>
                                                <td>Z 1212 GV</td>
                                                <td>Irsyad</td>
                                                <td>Agus Supriyadi</td>
                                                <td>10 Hari</td>
                                                <td>
                                                    <div class="d-flex justify-content-around">
                                                        <form action="">
                                                            <button class="btn btn-return">
                                                                Return
                                                            </button>
                                                            <button class="btn btn-information-detail">
                                                                Detail
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
@endsection
