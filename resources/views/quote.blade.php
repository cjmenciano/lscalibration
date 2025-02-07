@extends('layouts.app')

@section('content')
<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Request a Calibration Quote</h2>
							<ul class="bread-list">
								<li><a href="/">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Request a Calibration Quote</li>
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
							<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<i class="icofont-support-faq"></i>
								</div>
								<h4 class="title">Request a Calibration Quote</h4>
								<div class="price">
									<p class="amount"><span>We welcome the opportunity to provide you a quote for your calibration and repair questions. To submit your equipment for quotation quickly and easily, email us your document that contains a list of equipment. We will process your request for pricing immediately.</span></p>
								</div>	
							    </div>
							    <!-- Table Bottom -->
						    </div>
						</div>
						<div class="col-lg-6">
							<div class="contact-us-form">
								<h2>Request for Quote</h2>
								<!-- Form -->
								<form class="form" action="{{ route('send-quote') }}" method="POST">
                                    @csrf <!-- CSRF token for security -->
									@honeypot
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<input type="text" name="name" value="{{ old('name') }}" placeholder="Fullname" required="">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<input type="email" name="email" value="{{ old('email') }}" placeholder="Email" required="">
											</div>
										</div>
                                        <div class="col-lg-12">
											<div class="form-group">
												<input type="text" name="companyName" value="{{ old('companyName') }}" placeholder="Company Name" required="">
											</div>
										</div>
                                        <div class="col-lg-12">
											<div class="form-group">
												<input type="text" name="companyAddress" value="{{ old('companyAddress') }}" placeholder="Company Address" required="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="phoneNumber" value="{{ old('phoneNumber') }}" placeholder="Phone" required="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="subject" value="{{ old('subject') }}" placeholder="Subject" required="">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<textarea name="message" value="{{ old('message') }}" placeholder="Your Message" required=""></textarea>
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
			</div>
		</section>
		<!--/ End Contact Us -->
@endsection
