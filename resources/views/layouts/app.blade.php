<!DOCTYPE html>
<html lang="en">
<head class="no-js" lang="zxx">
    
    <!-- Meta Tags -->
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="Site keywords here">
	<meta name="description" content="">
	<meta name='copyright' content=''>	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    

		
	<!-- Title -->
    <title>LS Advance Calibration and Services</title>
		
	<!-- Favicon -->
    <link rel="icon" href="/img/favicon.ico">
		
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    
    <!-- Include Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="/css/nice-select.css">
	<!-- Font Awesome CSS -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
	<!-- icofont CSS -->
    <link rel="stylesheet" href="/css/icofont.css">
	<!-- Slicknav -->
	<link rel="stylesheet" href="/css/slicknav.min.css">
	<!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="/css/owl-carousel.css">
	<!-- Datepicker CSS -->
	<link rel="stylesheet" href="/css/datepicker.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="/css/animate.min.css">
	<!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="/css/leaflet.css">
		
	<!-- Medipro CSS -->
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/responsive.css">
</head>
<body>
    <!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter">
				</div>
                <div class="loader-inner">
					<img src="/img/logo.png" >
				</div>
            </div>
        </div>
        <!-- End Preloader -->
    <!-- Get Pro Button -->
		<ul class="pro-features">
			<a class="get-pro" href="/ls">Login</a>
			<!--<li class="big-title">Pro Version Available on Themeforest</li>
			<li class="title">Pro Version Features</li>
			<li>2+ premade home pages</li>
			<li>20+ html pages</li>
			<li>Color Plate With 12+ Colors</li>
			<li>Sticky Header / Sticky Filters</li>
			<li>Working Contact Form With Google Map</li>
			<div class="button">
				<a href="http://preview.themeforest.net/item/mediplus-medical-and-doctor-html-template/full_screen_preview/26665910?_ga=2.145092285.888558928.1591971968-344530658.1588061879" target="_blank" class="btn">Pro Version Demo</a>
				<a href="https://themeforest.net/item/mediplus-medical-and-doctor-html-template/26665910" target="_blank" class="btn">Buy Pro Version</a>
			</div>-->
		</ul>
    <!-- Header Area -->
	<header class="header" >
        <!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						@foreach (Illuminate\Support\Facades\DB::table('company_details')->get() as $company_details)
                        <div class="col-lg-2 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="/"><img src="/storage/{{ $company_details->image }}" alt="{{ $company_details->company_name }}"></a>
								</div>
								<!-- End Logo -->
                        </div>
						<div class="col-lg-6 col-md-5 col-12">
							<!-- Contact -->
							<ul class="top-link">
								<li><a href="/">{{ strtoupper($company_details->company_name) }}</a></li>
							</ul>
							<!-- End Contact -->
						</div>
						<div class="col-lg-4 col-md-4 col-12">
							<!-- Top Contact -->
                            <div class="row row-cols-4">
							    <ul class="top-contact">
								    <li><i class="icofont-phone-circle"></i>(+63){{ $company_details->contact }}</li>
								    <li><i class="icofont-email"></i>{{ $company_details->email }}</li>
                                    <li><i class="icofont-map-pins"></i>{{ $company_details->address }}</li>
							    </ul>
                            </div>
							<!-- End Top Contact -->
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row" >
                            <div class="col">
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-12 col-md-12 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li class="{{ Request::routeIs('index') ? 'active' : '' }}"><a href="/">Home</a></li>
											<li class="{{ Request::routeIs('about') ? 'active' : '' }}"><a href="/about">About Us <i class="icofont-rounded-down"></i></a>
                                                <ul class="dropdown">
													<li><a href="/iso">ISO Accreditation and Permits</a></li>
												</ul>
                                            </li>
											<li class="{{ Request::routeIs('services') ? 'active' : '' }}"><a href="/services">Calibration Services </a></li>
											<li class="{{ Request::routeIs('quote') ? 'active' : '' }}"><a href="/quote">Request a Calibration Qoute</a></li>
											<li class="{{ Request::routeIs('products') ? 'active' : '' }}"><a href="/products">Products <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													@foreach (Illuminate\Support\Facades\DB::table('categories')->get() as $category)
														<li><a href="/products/{{ $category->slug }}">{{ $category->name }}</a></li>
													@endforeach
												</ul>
											</li>
											<li class="{{ Request::routeIs('trainingprograms') ? 'active' : '' }}"><a href="/trainingprograms">Training Programs</a></li>
                                            <li class="{{ Request::routeIs('faq') ? 'active' : '' }}"><a href="/faq">FAQS</a></li>
                                            <li class="{{ Request::routeIs('contact') ? 'active' : '' }}"><a href="/contact">Contact</a></li>
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							<!--<div class="col-lg-2 col-12">
								<div class="get-quote">
									<a href="appointment.html" class="btn">Book Appointment</a>
								</div>
							</div>-->
						</div>
					</div>
				</div>
			</div>
		<!--/ End Header Inner -->
    </header>
    <!-- End Header Area -->
    <main>
        @yield('content')
    </main>
    <!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>About Us</h2>
								<p>LS Advance Calibration Services & Supply is a leading calibration company dedicated to providing high-quality calibration services and products to industries nationwide.</p>
								<!-- Social -->
								<ul class="social">
									<li><a href="https://www.facebook.com/lscalibrationservices" target="_blank"><i class="icofont-facebook"></i></a></li>
									<!--<li><a href="#"><i class="icofont-google-plus"></i></a></li>-->
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Quick Links</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="/"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="/about"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a></li>
											<li><a href="/services"><i class="fa fa-caret-right" aria-hidden="true"></i>Services</a></li>
											<li><a href="/trainingprograms"><i class="fa fa-caret-right" aria-hidden="true"></i>Training Programs</a></li>
											<li><a href="/products"><i class="fa fa-caret-right" aria-hidden="true"></i>Products</a></li>	
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="/faq"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQS</a></li>
											<!--<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Testimonials</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>	-->
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Main Office</h2>
								@foreach (Illuminate\Support\Facades\DB::table('company_details')->get() as $company_details)
                                <p>{{ $company_details->address }}</p>
															
								<ul class="time-sidual">
									<li class="day">{{ $company_details->start_working_day }} - {{ $company_details->end_working_day }} <span>{{ $company_details->start_working_hours }}-{{ $company_details->end_working_hours }}</span></li>
								</ul>

                                <ul class="social">
									<li><a href="https://www.google.com/maps/place/Fitness+Zone/@14.5806217,121.1787117,18z/data=!4m10!1m2!2m1!1sFitness+Zone+Bldg.+Circumferential+Road,Cor.+E.+Rodriguez+Ave.,+Brgy.+Dalig!3m6!1s0x3397c0a825a92209:0x1c6a269bdf527380!8m2!3d14.580962!4d121.1802983!15sCktGaXRuZXNzIFpvbmUgQmxkZy4gQ2lyY3VtZmVyZW50aWFsIFJvYWQsQ29yLiBFLiBSb2RyaWd1ZXogQXZlLiwgQnJneS4gRGFsaWdaRyJFZml0bmVzcyB6b25lIGJsZGcgY2lyY3VtZmVyZW50aWFsIHJvYWQgY29yIGUgcm9kcmlndWV6IGF2ZSBicmd5IGRhbGlnkgEDZ3ltmgEkQ2hkRFNVaE5NRzluUzBWSlEwRm5TVVJITkMwemVXNW5SUkFC4AEA-gEECAAQSw!16s%2Fg%2F1vzqpt2q?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank"><i class="icofont-location-pin"></i></a></li>

								</ul>	
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Contact Us</h2>
								<p><i class="fa fa-envelope-o"></i> {{ $company_details->email }}</p>
                                <p><i class="icofont-phone"></i> (+63){{ $company_details->contact }}</p>
							</div>
						</div>
								@endforeach
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright {{ date('Y') }}  |  All Rights Reserved by <a href="#" target="_blank">LS Advance Calibration & Services</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
		
		<!-- jquery Min JS -->
        <script src="/js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="/js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="/js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="/js/easing.js"></script>
		<!-- Color JS -->
		<script src="/js/colors.js"></script>
		<!-- Popper JS -->
		<script src="/js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="/js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="/js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="/js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
        <script src="/js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="/js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="/js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="/js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="/js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="/js/steller.js"></script>
		<!-- Wow JS -->
		<script src="/js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="/js/jquery.magnific-popup.min.js"></script>        
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <!-- Leaflet Map API Key JS -->
		<script src="/js/leaflet.js"></script>
        <!-- Include Toastr JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <!-- Validator JS -->
		<script src="/js/validator.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="/js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="/js/main.js"></script>
        <script>
        // Wait until the DOM is fully loaded
        document.addEventListener('DOMContentLoaded', function() {
        // Check for Laravel session messages
        @if(session('success'))
            toastr.success("{{ session('success') }}");
        @endif

        @if(session('error'))
            toastr.error("{{ session('error') }}");
        @endif
    });
</script>

</body>
</html>
