<!DOCTYPE html>
<html lang="en">
	<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>RR Car Bandung</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ url ('frontend/assets/img/favicon-riza.png') }}">


		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ url('frontend/assets/css/bootstrap.min.css') }}">

		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{ url('frontend/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
		<link rel="stylesheet" href="{{ url('frontend/assets/plugins/fontawesome/css/all.min.css') }}">

		<!-- Feather CSS -->
		<link rel="stylesheet" href="{{ url('frontend/assets/css/feather.css') }}">

		<!-- Main CSS -->
		<link rel="stylesheet" href="{{ url('frontend/assets/css/style.css') }}">

	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">

			<!-- Header -->
			<header class="header header-page">
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
								<a href="{{ url ('/') }}" class="navbar-brand logo">
									{{-- <img src="{{ url ('frontend/assets/img/logo.svg') }}" class="img-fluid" alt="Logo"> --}}
                                    <h2>Riza Rental Car</h2>
								</a>
							</div>
							<div class="main-menu-wrapper">

								<div class="menu-header">
									<a href="index.html" class="menu-logo">
										<img src="{{ url ('frontend/assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
									</a>
									<a id="menu_close" class="menu-close" href="javascript:void(0);">
										<i class="fas fa-times"></i>
									</a>
								</div>
							</div>

						</div>
					</nav>
				</div>
			</header>
			<!-- /Header -->

			<!-- Page Wrapper -->
			<div class="page-content instructor-page-content">
				<div class="container">
					<div class="row">
						<!-- Sidebar -->
						<div class="col-xl-3 col-lg-4 col-md-12 theiaStickySidebar">
							<div class="settings-widget dash-profile">
								<div class="settings-menu p-0">
									<div class="profile-bg">
										<img src="{{ url ('frontend/assets/img/instructor-profile-bg.jpg') }}" alt="">
										<div class="profile-img">
											<a href="instructor-profile.html"><img src="{{ url ('frontend/assets/img/user/user15.jpg') }}" alt=""></a>
										</div>
									</div>
									<div class="profile-group">
										<div class="profile-name text-center">
											<h4><a href="#">{{ Auth::user()->name}}</a></h4>
										</div>
									</div>
								</div>
							</div>
							<div class="settings-widget account-settings">
								<div class="settings-menu">
									<h3>DASHBOARD</h3>
									<ul>
										<li class="nav-item">
											<a href="{{ url ('dashboard')}}" class="nav-link">
												<i class="feather-clipboard"></i> My Dashboard
											</a>
										</li>
                                        <li class="nav-item">
											<a href="{{ url ('dashboard\data-mobil') }}" class="nav-link">
												<i class="feather-file-text"></i> Data mobil
											</a>
										</li>
                                        <li class="nav-item">
											<a href="{{ url ('dashboard\data-penyewa') }}" class="nav-link">
												<i class="feather-users"></i> Data Penyewa
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /Sidebar -->

						@yield('content')

					</div>
				</div>
			</div>
			<!-- /Page Wrapper -->

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
	   	<!-- /Main Wrapper -->

		<!-- jQuery -->
		<script src="{{ url('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>

		<!-- Bootstrap Core JS -->
		<script src="{{ url('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>

		<!-- Feature JS -->
		<script src="{{ url('frontend/assets/plugins/feather/feather.min.js') }}"></script>
        <script src="{{ url('frontend/assets/js/ckeditor.js') }} "></script>
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>


<script>
    var startYear = 1800;
for (i = new Date().getFullYear(); i > startYear; i--)
{
  $('#tahun').append($('<option />').val(i).html(i));
}
</script>
		<!-- Sticky Sidebar JS -->
        <script src="{{ url('frontend/assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
        <script src="{{ url('frontend/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>

        <!-- Chart JS -->
		<script src="{{ url('frontend/assets/plugins/apexchart/apexcharts.min.js') }}"></script>
		<script src="{{ url('frontend/assets/plugins/apexchart/chart-data.js') }}"></script>

		<!-- Custom JS -->
		<script src="{{ url('frontend/assets/js/script.js') }}"></script>

	</body>
</html>
