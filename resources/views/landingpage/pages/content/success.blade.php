<!DOCTYPE html>
<html lang="en">
	<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>Riza Rent Car</title>

		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="{{url ('frontend/assets/img/favicon.svg') }}">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{url ('frontend/assets/css/bootstrap.min.css') }}">

		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{url ('frontend/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
		<link rel="stylesheet" href="{{url ('frontend/assets/plugins/fontawesome/css/all.min.css') }}">

		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{url ('frontend/assets/plugins/feather/feather.css') }}">

		<!-- Main CSS -->
		<link rel="stylesheet" href="{{url ('frontend/assets/css/style.css') }}">
	</head>
    <body class="error-page">

		<!-- Main Wrapper -->
        <div class="main-wrapper">

			<div class="error-box">
				<div class="error-logo">
					<a href="{{ url ('/') }}">
						{{-- <img src="{{ url('frontend/assets/img/logo.svg') }}" class="img-fluid" alt="Logo"> --}}
                        <h3>Riza Rent Car</h3>
					</a>
				</div>
				<div class="error-box-img">
					<img src="{{ url('frontend/assets/img/success.gif') }}" alt="" class="img-fluid" >
				</div>
				<h3 class="h2 mb-3"> Sukses Melakukan Pembayaran</h3>
				<p class="h4 font-weight-normal">Selamat Kamu Telah Menyelesaikan Pembayaran Silahkan Bawa Bukti Pembayaran Ke Tempat Kami</p>
				<a href="{{ url ('/') }}" class="btn btn-primary">Kembali Ke Beranda</a>
				<a href="#" class="btn btn-primary">Hubungi Admin</a>
			</div>

        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
		<script src="{{ url('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>

		<!-- Bootstrap Core JS -->
		<script src="{{ url('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>

		<!-- Custom JS -->
		<script src="{{ url('frontend/assets/js/script.js') }}"></script>

	</body>
</html>
