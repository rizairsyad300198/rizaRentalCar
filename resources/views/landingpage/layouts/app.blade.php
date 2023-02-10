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
		<link rel="stylesheet" href="{{ url('frontend/assets/css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ url('frontend/assets/css/owl.theme.default.min.css') }}">

		<!-- Slick CSS -->
		<link rel="stylesheet" href="{{ url('frontend/assets/plugins/slick/slick.css') }}">
		<link rel="stylesheet" href="{{ url('frontend/assets/plugins/slick/slick-theme.css') }}">

		<!-- Select2 CSS -->
		<link rel="stylesheet" href="{{ url('frontend/assets/plugins/select2/css/select2.min.css') }}">

		<!-- Aos CSS -->
		<link rel="stylesheet" href="{{ url('frontend/assets/plugins/aos/aos.css') }}">

		<!-- Main CSS -->
		<link rel="stylesheet" href="{{ url('frontend/assets/css/style.css') }}">

	</head>
    <body>
        <div class="main-wrapper">
            <!-- Header -->
			<header class="header">
				<div class="header-fixed">
					<nav class="navbar navbar-expand-lg header-nav scroll-sticky">
						<div class="container">
							<div class="navbar-header">
								<a id="mobile_btn" href="javascript:void(0);">
									<span class="bar-icon">
										<span></span>
										<span></span>
										<span></span>
									</span>
								</a>
								<a href="index.html" class="navbar-brand logo">
									{{-- <img src="{{ url ('frontend/assets/img/logo.svg') }}" class="img-fluid" alt="Logo"> --}}
                                    <h2>Riza Rental Car</h2>
								</a>
							</div>
							<div class="main-menu-wrapper">
								{{-- <div class="menu-header">
									<a href="index.html" class="menu-logo">
										<img src="{{ url ('frontend/assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
									</a>
									<a id="menu_close" class="menu-close" href="javascript:void(0);">
										<i class="fas fa-times"></i>
									</a>
								</div>
								<ul class="main-nav">
									<li class="has-submenu active">
										<a class="" href="">Beranda</a>
									</li>
									<li class="has-submenu">
										<a href="#tarifRental">Tarif Rental</a>
									</li>
									<li class="has-submenu">
										<a href="">Jenis Mobil</a>
									</li>
									<li class="has-submenu">
										<a href="">Tentang Kami</a>
									</li>
									<li class="login-link">
										<a href="login.html">Login / Signup</a>
									</li>
								</ul> --}}
							</div>
							<ul class="nav header-navbar-rht">
								<li class="has-submenu active">
									<a class="nav-link"href="">Beranda</a>
								</li>
								<li class="has-submenu active">
									<a class="nav-link" href="#tarifRental">Tarif Rental</a>
								</li>
								<li class="has-submenu active">
									<a class="nav-link" href="#jenisMobil">Jenis Mobil</a>
								</li>
								<li class="has-submenu active">
									<a class="nav-link" href="#footer">Tentang Kami</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</header>
			<!-- /Header -->


            @yield('content')


            <!-- Footer -->
			<footer class="footer" id="footer">

				<!-- Footer Top -->
				<div class="footer-top aos" data-aos="fade-up">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-6">

								<!-- Footer Widget -->
								<div class="footer-widget footer-about">
									<div class="footer-logo">
										{{-- <img src="{{ url ('frontend/assets/img/logo.svg') }}" alt="logo"> --}}
                                        <h2>Riza Rental Car</h2>
									</div>
									<div class="footer-about-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat mauris Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat mauris</p>
									</div>
								</div>
								<!-- /Footer Widget -->

							</div>

							<div class="col-lg-4 col-md-6">

								<!-- Footer Widget -->
								<div class="footer-widget footer-contact">
									<h2 class="footer-title">News letter</h2>
									<div class="news-letter">
										<form>
											<input type="text" class="form-control" placeholder="Enter your email address" name="email">
										</form>
									</div>
									<div class="footer-contact-info">
										<div class="footer-address">
											<img src="{{ url ('frontend/assets/img/icon/icon-20.svg')}}" alt="" class="img-fluid">
											<p> Titimplik Dalam No. 1s<br> Bandung, Indonesia </p>
										</div>
										<p>
											<img src="frontend/assets/img/icon/icon-19.svg" alt="" class="img-fluid">
											rizarental@gmail.com
										</p>
										<p class="mb-0">
											<img src="{{ url ('frontend/assets/img/icon/icon-21.svg') }}" alt="" class="img-fluid">
											+6289606758871
										</p>
									</div>
								</div>
								<!-- /Footer Widget -->

							</div>

						</div>
					</div>
				</div>
				<!-- /Footer Top -->

				<!-- Footer Bottom -->
                <div class="footer-bottom">
					<div class="container">

						<!-- Copyright -->
						<div class="copyright">
							<div class="row">
								<div class="col-md-6">
									<div class="privacy-policy">
										<ul>
											<li><a href="term-condition.html">Terms</a></li>
											<li><a href="privacy-policy.html">Privacy</a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-6">
									<div class="copyright-text">
										<p class="mb-0">&copy; 2023 Riza Rental Car Bandung. All rights reserved.</p>
									</div>
								</div>
							</div>
						</div>
						<!-- /Copyright -->

					</div>
				</div>
				<!-- /Footer Bottom -->

			</footer>
			<!-- /Footer -->
        </div>

        <!-- jQuery -->
        <script src="{{ url('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>

        <!-- Bootstrap Core JS -->
        <script src="{{ url('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>

        <!-- counterup JS -->
        <script src="{{ url('frontend/assets/js/jquery.waypoints.js') }}"></script>
        <script src="{{ url('frontend/assets/js/jquery.counterup.min.js') }}"></script>

        <!-- Select2 JS -->
        <script src="{{ url('frontend/assets/plugins/select2/js/select2.min.js') }}"></script>

        <!-- Owl Carousel -->
        <script src="{{ url('frontend/assets/js/owl.carousel.min.js') }}"></script>

        <!-- Slick Slider -->
        <script src="{{ url('frontend/assets/plugins/slick/slick.js') }}"></script>

        <!-- Aos -->
        <script src="{{ url('frontend/assets/plugins/aos/aos.js') }}"></script>

        <!-- Custom JS -->
        <script src="{{ url('frontend/assets/js/script.js') }}"></script>

    </body>
</html>
