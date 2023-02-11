<!DOCTYPE html>
<html lang="en">
	<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>RR Car Bandung</title>

		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="{{ url ('frontend/assets/img/favicon-riza.png') }}">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ url ('frontend/assets/css/bootstrap.min.css') }}">

		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{ url ('frontend/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
		<link rel="stylesheet" href="{{ url ('frontend/assets/plugins/fontawesome/css/all.min.css') }}">

		<!-- Owl Carousel CSS -->
		<link rel="stylesheet" href="{{ url ('frontend/assets/css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ url ('frontend/assets/css/owl.theme.default.min.css') }}">

		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{ url ('frontend/assets/plugins/feather/feather.css') }}">

		<!-- Main CSS -->
		<link rel="stylesheet" href="{{ url ('frontend/assets/css/style.css') }}">

	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper log-wrap">

			<div class="row">

				<!-- Login Banner -->
				<div class="col-md-6 login-bg">
					<div class="owl-carousel login-slide owl-theme">
						<div class="welcome-login">
							<div class="login-banner">
								<img src="{{ url ('frontend/assets/img/supra2.png')}}" class="img-fluid" alt="Logo">
							</div>
							<div class="mentor-course text-center">
								<h2>Welcome to <br>Riza Rental Car</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							</div>
						</div>
						<div class="welcome-login">
							<div class="login-banner">
								<img src="{{ url ('frontend/assets/img/supra2.png')}}" class="img-fluid" alt="Logo">
							</div>
							<div class="mentor-course text-center">
								<h2>Welcome to <br>Riza Rental Car</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							</div>
						</div>
						<div class="welcome-login">
							<div class="login-banner">
								<img src="{{ url ('frontend/assets/img/supra2.png')}}" class="img-fluid" alt="Logo">
							</div>
							<div class="mentor-course text-center">
								<h2>Welcome to <br>Riza Rental Car</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- /Login Banner -->

				<div class="col-md-6 login-wrap-bg">

					<!-- Login -->
					<div class="login-wrapper">
						<div class="loginbox">
							<div class="w-100">
								<div class="img-logo">
									{{-- <img src="frontend/assets/img/logo.svg" class="img-fluid" alt="Logo"> --}}
                                    <h2>Riza Rental Car Bandung</h2>
									<div class="back-home">
										<a href="{{ url ('/')}}">Back to Home</a>
									</div>
								</div>
								<h1>Hallo Admin Silahkan Login</h1>
								<form action="{{ route('login') }}" method="post">
                                    @csrf
									<div class="form-group">
										<label class="form-control-label">Email</label>
										<input type="email" class="form-control" name="email" placeholder="Enter your email address" required>
									</div>
									<div class="form-group">
										<label class="form-control-label">Password</label>
										<div class="pass-group">
											<input type="password" class="form-control pass-input" name="password" placeholder="Enter your password" required>
											<span class="feather-eye toggle-password"></span>
										</div>
									</div>
									<div class="forgot">
										<span><a class="forgot-link" href="forgot-password.html">Forgot Password ?</a></span>
									</div>
									<div class="remember-me">
										<label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
											<input type="checkbox" name="radio">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="d-grid">
										<button class="btn btn-primary btn-start" type="submit">Sign In</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- /Login -->

				</div>

			</div>

	   </div>
	   <!-- /Main Wrapper -->

		<!-- jQuery -->
		<script src="{{url ('frontend/assets/js/jquery-3.6.0.min.js')}}"></script>

		<!-- Bootstrap Core JS -->
		<script src="{{url ('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>

		<!-- Owl Carousel -->
		<script src="{{url ('frontend/assets/js/owl.carousel.min.js')}}"></script>

		<!-- Custom JS -->
		<script src="{{ url('frontend/assets/js/script.js')}}"></script>

	</body>
</html>
