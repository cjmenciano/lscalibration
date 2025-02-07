@extends('layouts.app')

@section('content')

<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
						@foreach($page_name as $sub_category)
							<h2>{{ $sub_category->name }}</h2>
						@endforeach
							<ul class="bread-list">
								<li><a href="/">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li><a href="/products">Products</a></li>
								<li><i class="icofont-simple-right"></i></li>
								@foreach($categories as $category)
								<li><a href="/products/{{ $category->slug }}">{{ $category->name }}</a></li>
								@endforeach
								<li><i class="icofont-simple-right"></i></li>
								@foreach($page_name as $sub_category)
									@foreach($categories as $category)
								<li class="active"><a href="/products/{{ $category->slug }}{{ $sub_category->slug }}">{{ $sub_category->name }}</a></li>
									@endforeach
								@endforeach
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
							<h2>We Provide You The Best Product In Resonable Price</h2>
							<img src="/img/section-img.png" alt="#">
							<!--<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>-->
						</div>
					</div>
				</div>
				<div class="row">
					@foreach($item_subCategory as $product)
					<!-- Single Table -->
					<div class="col-lg-3 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<img src="/storage/{{ $product->image }}" alt="{{ $product->name }}">
								</div>
								<h4 class="title">{{ $product->name }}</h4>
								<div class="price">
									<!--<p class="amount"><i class="icofont-peso"></i><span></span></p>
									<p class="amount"><span>{{ $product->model }}</span></p>-->
								</div>
							</div>
							<div class="table-bottom">
								<a class="btn" href="/storage/{{ $product->catalog }}" target="_blank">See Details</a>
							</div>
							<div class="table-bottom">
								<a class="btn" href="{{ route('quote') }}">Inquire Now</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
					 @endforeach					 
                </div>
            </div>
        </div>
    </section>
@endsection
