@extends('landingpage.pages.layouts.app')
@section('content')
    <!-- Cart -->
        <section class="course-content checkout-widget">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <!-- Billing Address -->
                        <div class="student-widget">
                            <div class="student-widget-group add-course-info">
                                <div class="cart-head">
                                    <h4>Form Pembayaran Customer</h4>

                                </div>
                                <div class="checkout-form">
                                    <form action=" {{ route ('bayar')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label">Nama Lengkap</label>
                                                    <input type="text" class="form-control" name="nama" value="{{ old('nama') }}" placeholder="Masukan Nama Lengkap Sesuai KTP" required>
                                                    @error('nama')
                                                        <span class="text-danger"> {{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label">NIK</label>
                                                    <input type="number" class="form-control" name="nik" value="{{ old('nik') }}" placeholder="Masukan NIK" required>
                                                    @error('nik')
                                                        <span class="text-danger"> {{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label">Nomor Telepon</label>
                                                    <input type="number" class="form-control" name="nohp" value="{{ old('nohp') }}" placeholder="0821xxxxxx" required>
                                                    @error('nohp')
                                                        <span class="text-danger"> {{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label">Alamat Lengkap</label>
                                                    <input type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" placeholder="Masukan Alamat Lengkap Sesuai KTP" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label">Tanggal Sewa</label>
                                                    <input id="start_date" type="date" class="form-control" name="start_date" value="{{ old('start_date') }}" min="{{ date('Y-m-d', strtotime(Carbon\Carbon::now())) }}"required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label">Tanggal Kembali</label>
                                                    <input id="end_date" type="date" class="form-control" name="end_date" value="{{ old('end_date') }}"  required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label">Harga Sewa / Hari</label>
                                                    <input id="price" type="text" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label">Total</label>
                                                    <input id="total" type="text" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="wallet-method">
                                                    <p class="text-muted" style="font-style: italic !important;">Note : Silahkan Transfer Ke No Rekening dibawah sebesar <span id="hargaDp"></span> dan Upload Bukti Pembayaran</p>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label">No Rekening</label>
                                                    <input type="text" class="form-control" value="Bank BNI 123456789 - An Riza Rental Car Bandung" readonly>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label">Upload Bukti Pembayaran</label>
                                                    <input type="file" class="form-control" name="bukti_pembayaran" placeholder="Upload Bukti Pembayaran" required>
                                                    @error('bukti_pembayaran')
                                                        <span class="text-danger"> {{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="payment-btn">
                                                <button  class="btn btn-primary" type="submit">Konfirmasi Pembayaran</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /Billing Address -->

                    </div>
                </div>
            </div>
        </section>
    <!-- /Cart -->

    @push('script')
        <script>
            $(document).ready(function () {
                $('#price').val('Rp. 300.000');
            });
            function datediff(first, second) {
                return Math.round((second - first + 1) / (1000 * 60 * 60 * 24));
            }

            function converRp(param){
                return "Rp. " + param.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
            }

            $('#start_date').on('change', function() {
                var tanggalMulai    = $('#start_date').val();
                $('#end_date').attr('min', tanggalMulai);
                $('#end_date').val("");
                $('#total').val("");
                $('#hargaDp').html("");
            });

            $('#end_date').on('change', function() {
                var tanggalMulai    = new Date($('#start_date').val());
                var tanggalBerakhir = new Date($('#end_date').val());
                const money = $('#price').val();
                let price = parseInt(money.replace(/[^0-9]/g, ''));
                const sumDate = datediff((tanggalMulai), (tanggalBerakhir));
                if (sumDate == 0) {
                    var hasil = price;
                } else {
                    var hasil = price * sumDate;
                }
                var dp = hasil * (50 / 100);
                $('#total').val(converRp(hasil));
                $('#hargaDp').html(converRp(dp))
            });

        </script>
    @endpush
@endsection
