@extends('layouts.app')

@section('content')
    <!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Frequently Asked Questions</h2>
							<ul class="bread-list">
								<li><a href="/">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Frequently Asked Questions</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
		
		<!-- Single News -->
		<section class="news-single section">
			<div class="container">
				<div class="row">
                    <div class="col-12">
						<div class="blog-comments">
							<h2>Frequently Asked Questions</h2>
							<div class="comments-body">
								@foreach($faq as $faqs)
								<!-- Single Comments -->
								<div class="single-comments">
									<div class="main">
										<div class="body">
											<h4>{{ $faqs->questions }}</h4>
											<p><i class="icofont-info-circle"></i> {{ $faqs->answers }}</p>
										</div>
									</div>
								</div>		
								<!--/ End Single Comments -->	
								@endforeach
							</div>
						</div>
					</div>	
				</div>
			</div>
		</section>
		<!--/ End Single News -->
@endsection
