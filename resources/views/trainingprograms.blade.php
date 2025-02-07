@extends('layouts.app')

@section('content')
<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Training Programs</h2>
							<ul class="bread-list">
								<li><a href="/">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Training Programs</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
<!-- Pricing Table -->
		<section class="pricing-table section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Provide You The Best Training Programs In Resonable Price</h2>
							<img src="img/section-img.png" alt="#">
							<!--<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>-->
						</div>
					</div>
				</div>
				<div class="row">
				@foreach($training_type as $training_title)
					<!-- Single Table -->
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<i class="icofont-license"></i>
								</div>
								<h4 class="title">{{ $training_title->training_type }} Training Programs</h4>
								<!--<div class="price">
									<p class="amount"><i class="icofont-peso"></i>199.00<span>/Per Module</span></p>
								</div>-->	
							</div>
                            <!-- Table List -->
							<ul class="table-list">
								@foreach($trainings as $training)
									@if($training_title->training_type == $training->training_type)
										<li><i class="icofont icofont-ui-check"></i>{{ $training->code }} {{ $training->title }}</li>
									@endif
								@endforeach
							</ul>
							<div class="table-bottom">
								<!--<a class="btn" href="#">Book Now</a>-->
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
					 @endforeach
            </div>
        </div>
    </section>

@endsection
