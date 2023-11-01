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
					<div class="card-body">
						<div class="table-responsive table-sm">
							<table class="table table-striped table-hover table-sm" id="tokens" style="width:100%;">
								<thead>
									<tr>
										<th>Payment Method</th>
										<th>Fee Slip</th>
										<th>Token</th>
										<th>Status</th>
										<th>Date</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('js')
<script type="text/javascript">
				//Roles table
				$(document).ready( function(){
				var roles_table = $('#tokens').DataTable({
				processing: true,
				serverSide: true,
				ajax: "{{url('tokens/user-dashboard')}}",
				buttons:[],
				columns: [
 				{data: 'payment_method', name: 'payment_method'},
                {data: 'fee_slip', name: 'fee_slip',class:'text-center', orderable: false, searchable: false ,class:'text-center'},
                {data: 'token', name: 'token'},
                {data: 'status', name: 'status', orderable: false, searchable: false },
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false,class:'text-center'},
				]
				});
				});
</script>
@endsection
