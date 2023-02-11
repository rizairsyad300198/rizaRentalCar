@extends('backend.layouts.dashboard-app')
@section('content')

    <!-- Instructor Dashboard -->
    <div class="col-xl-9 col-lg-8 col-md-12">

        <div class="row">
            <div class="col-md-12">
                <div class="card instructor-card">
                    <div class="card-header">
                        <h4>Order</h4>
                    </div>
                    <div class="card-body">
                        <div id="order_chart"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="settings-widget">
                    <div class="settings-inner-blk p-0">
                        <div class="sell-course-head comman-space">
                            <h3>Data Mobil</h3>
                        </div>
                        <div class="comman-space pb-0">
                            <div class="settings-tickets-blk course-instruct-blk table-responsive">

                                <!-- Referred Users-->
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
                                                        <form action="">
                                                            <button class="btn btn-warning">
                                                                Proses
                                                            </button>
                                                            <button class="btn btn-danger">
                                                                Tolak
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
