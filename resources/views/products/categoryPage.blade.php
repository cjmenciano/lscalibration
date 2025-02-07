@extends('layouts.app')

@section('content')
<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							@foreach($page_name as $category)
							<h2>{{ $category->name }}</h2>
							@endforeach
							<ul class="bread-list">
								<li><a href="/">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li><a href="/products">Products</a></li>
								<li><i class="icofont-simple-right"></i></li>
								@foreach($page_name as $category)
								<li class="active"><a href="/products/{{ $category->slug }}">{{ $category->name }}</a></li>
								@endforeach
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
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Provide You The Best Product In Resonable Price</h2>
							<img src="/img/section-img.png" alt="#">
							<!--<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>-->
						</div>
					</div>
				</div>
				<div class="inner">
					<div class="row">
						<div class="col-lg-12 col-12">
							<div class="contact-us-form">
							@foreach($page_name as $category)
								<h2>{{ $category->name }}</h2>
							@endforeach
								<!-- Form -->
								<form class="form">
									<div class="row">
										@foreach($item_category as $tags)
										<div class="col-lg-6 col-sm-3 col-12">
											<div class="form-group">	
												<h1><a class="btn" href="{{ $categorySlug }}/{{ $tags->slug }}">{{ $tags->name }}</a></h1>
											</div>
										</div>
										@endforeach
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
