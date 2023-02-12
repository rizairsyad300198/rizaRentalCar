@extends('backend.layouts.dashboard-app')
@section('content')

    <!-- Dashboard -->
    <div class="col-xl-9 col-lg-8 col-md-12">

        <div class="row">
            <div class="col-md-4 d-flex">
                <div class="card instructor-card w-100">
                    <div class="card-body">
                        <div class="instructor-inner">
                            <h6>BOOKING</h6>
                            <h4 class="instructor-text-important feather-user-plus"><span></span>  50  </h4>
                            <p>Butuh Konfirmasi</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="card instructor-card w-100">
                    <div class="card-body">
                        <div class="instructor-inner">
                            <h6>BOOKED</h6>
                            <h4 class="instructor-text-warning feather-users">  25  </h4>
                            <p>Mobil Tesewa</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="card instructor-card w-100">
                    <div class="card-body">
                        <div class="instructor-inner">
                            <h6>SELESAI SEWA</h6>
                            <h4 class="instructor-text-success feather-user-check">  12  </h4>
                            <p>Mobil Tesewa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!---- Order Graphic --->
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
        <!---- /Order Graphic --->

        <div class="row">
            <div class="col-md-4 d-flex">
                <div class="card instructor-card w-100">
                    <div class="card-body">
                        <div class="instructor-inner">
                            <h6>TOTAL PENDAPATAN </h6>
                            <h4 class="instructor-text-info">Rp.460000000</h4>
                            <p>Total Pendapatan Bulan ini</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="card instructor-card w-100">
                    <div class="card-body">
                        <div class="instructor-inner">
                            <h6>TOTAL PENYEWAAN BULAN INI</h6>
                            <h4 class="instructor-text-info">12,000</h4>
                            <p>Mobil Tesewa</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="card instructor-card w-100">
                    <div class="card-body">
                        <div class="instructor-inner">
                            <h6>TOTAL PENYEWAAN TAHUN INI</h6>
                            <h4 class="instructor-text-info">12,000</h4>
                            <p>Mobil Tesewa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!---- Data Booking --->
        <div class="row">
            <div class="col-md-12">
                <div class="settings-widget">
                    <div class="settings-inner-blk p-0">
                        <div class="sell-course-head comman-space">
                            <h3>Data Booking</h3>
                        </div>
                        <div class="comman-space pb-0">
                            <div class="settings-tickets-blk course-instruct-blk table-responsive">
                                <table class="table table-stripped text-center">
                                        <thead>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Penyewa</th>
                                            <th scope="col">Tanggal Sewa</th>
                                            <th scope="col">Tanggal Kembali</th>
                                            <th scope="col">Bukti Pembayaran</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Aksi</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Riza</td>
                                                <td>25, Juni 2022</td>
                                                <td>28, Juni 2022</td>
                                                <td>
                                                    <img src="" alt="" class="img-thumbnail">
                                                </td>
                                                <td>Booking</td>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---- Data Booking --->

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
                                                                Dikembalikan
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

   <!--- Data Selesai Sewa -->
        <div class="row">
            <div class="col-md-12">
                <div class="settings-widget">
                    <div class="settings-inner-blk p-0">
                        <div class="sell-course-head comman-space">
                            <h3>Data Sewa Selesai</h3>
                        </div>
                        <div class="comman-space pb-0">
                            <div class="settings-tickets-blk course-instruct-blk table-responsive">
                                <table class="table table-stripped text-center">
                                        <thead>
                                            <th scope="col">No</th>
                                            <th scope="col">No KTP</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">No. Telepon</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Aksi</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>123123123123123</td>
                                                <td>Agus Sudibjo</td>
                                                <td>09809809809</td>
                                                <td>bandung jalan cilawung sakahayang</td>
                                                <td>
                                                    <div class="d-flex justify-content-around">
                                                        <form action="">
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
    </div>
    <!-- Dashboard -->
@endsection
