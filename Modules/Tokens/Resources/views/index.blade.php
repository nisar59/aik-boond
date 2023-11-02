@extends('frontend.layouts.template')
@section('content')
<!-- ============abt-01 Section  Start============ -->
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h4 class="col-md-12">Token</h4>
					<div class="col-md-12 text-right">
						<a href="{{url('tokens/create')}}" class="btn btn-success">+</a>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table table-striped table-hover table-condensed">
						<thead>
							<tr>
								<th><strong>Payment Method</strong></th>
								<th><strong>Fee Slip</strong></th>
								<th><strong>Token</strong></th>
								<th><strong>Status</strong></th>
								<th><strong>Date</strong></th>
								<th><strong>Action</strong></th>
							</tr>
						</thead>
						<tbody>
							@forelse($tokens as $token)
							<tr>
								<th>{{ PaymentMethods($token->payment_method)}}</th>
								<th>
									<img src="{{ url('images/token/'.$token->fee_slip) }}" height="50px" width="50px" alt=""/>
								</th>
								<th>{{ $token->token}}</th>
								<th>
									@if($token->status== 0)
									<button class="btn btn-success">Active</button>
									@else
									<button class="btn btn-danger">Used</button>
									@endif
								</th>
								<th>{{ $token->created_at->format('d,m, Y')}}</th>
								<th type="submit"><a href="{{ url('tokens/edit/'.$token->id) }}"><i class="fas fa-pencil-alt"></i>
                                 </a>
                                    </th>
							</tr>
							@empty
							<tr><td colspan="4">No record found</td></tr>
							@endforelse
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection