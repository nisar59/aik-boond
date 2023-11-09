@extends('frontend.layouts.template')
@section('content')
<!-- ============abt-01 Section  Start============ -->
<section class="bg-0-b">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5>Forgot Phone Number</h5>
					</div>
					@if (Session::has('message'))
					<div class="alert alert-success" role="alert">
						{{ Session::get('message') }}
					</div>
					@endif
					<form action="{{ url('forget.password.post') }}" method="POST">
						@csrf
						<div class="form-group row">
							<label for="email_address" class="col-md-4 col-form-label text-md-right">Phone Number</label>
							<div class="col-md-6">
								<input type="number" id="email_address" class="form-control" name="email" required autofocus>
								@if ($errors->has('contact_no'))
								<span class="text-danger">{{ $errors->first('contact_no') }}</span>
								@endif
							</div>
						</div>
						<div class="col-md-6 offset-md-4">
							<button type="submit" class="btn btn-primary">
							Send Phone Number Reset Link
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection