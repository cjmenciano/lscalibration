@extends('layouts.app')

@section('content')
<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Contact Us</h2>
							<ul class="bread-list">
								<li><a href="/">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Contact Us</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
				
		<!-- Start Contact Us -->
		<section class="contact-us section">
			<div class="container">
				<div class="inner">
					<div class="row"> 
						<div class="col-lg-6">
							<div class="contact-us-left">
								<!--Start Google-map -->
								<!--<div class="myMap" id="myMap"></div>-->
								<!--/End Google-map -->
                                <div style="width: 100%">
									@foreach($item_company_details as $company_details)
                                    <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q={{ $company_details->latitude }},{{ $company_details->longtitude }}+(LS%20Advance%20Calibration%20Services%20and%20Supply)&amp;t=&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                                        <a href="https://www.gps.ie/">gps tracker sport</a>
                                    </iframe>
									@endforeach
                                </div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="contact-us-form">
								<h2>Contact With Us</h2>
								<p>If you have any questions please fell free to contact with us.</p>
								<!-- Form -->
								<form class="form" action="{{ route('send-contact') }}" method="POST">
                                    @csrf <!-- CSRF token for security -->
									@honeypot
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<input type="text" name="name" placeholder="Fullname" required="">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<input type="email" name="email" placeholder="Email" required="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="phoneNumber" placeholder="Phone" required="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="subject" placeholder="Subject" required="">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<textarea name="message" placeholder="Your Message" required=""></textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group login-btn">
												<button class="btn" type="submit"><i class="icofont-paper-plane"></i> Send</button>
											</div>
											<!--<div class="checkbox">
												<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Do you want to subscribe our Newsletter ?</label>
											</div>-->
										</div>
									</div>
								</form>
								<!--/ End Form -->
							</div>
						</div>
					</div>
				</div>
				<div class="contact-info">
					<div class="row">
						@foreach($item_company_details as $company_details)
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont-phone-circle"></i>
								<div class="content">
									<h3>(+63){{ $company_details->contact }}</h3>
									<p>{{ $company_details->email }}</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-map"></i>
								<div class="content">
									<h3>{{ $company_details->address }}</h3>
									<!--<p></p>-->
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-wall-clock"></i>
								<div class="content">
									<h3>{{ $company_details->start_working_day }} - {{ $company_details->end_working_day }} {{ $company_details->start_working_hours }}-{{ $company_details->end_working_hours }} </h3>
									<p>Saturday and Sunday Closed</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						@endforeach
					</div>
				</div>
			</div>
		</section>
		<!--/ End Contact Us -->
@endsection
