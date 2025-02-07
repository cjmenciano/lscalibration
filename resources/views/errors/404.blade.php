@extends('layouts.app')

@section('content')
    <!-- Error Page -->
		<section class="error-page section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-12">
						<!-- Error Inner -->
						<div class="error-inner">
							<h1>404<span>Page Not Found</span></h1>
							<p></p>
							<form action="{{ route('index') }}" class="search-form">
								<button class="btn" type="submit">Go to Home</button>
							</form>
						</div>
						<!--/ End Error Inner -->
					</div>
				</div>
			</div>
		</section>	
		<!--/ End Error Page -->
@endsection
