@extends('layouts.template')
@section('title')
Token
@endsection
@section('content')
<section class="section">
  <div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="col-md-6">Token</h4>
            <!-- <div class="col-md-6 text-right">
              <a href="{{url('tokon/create')}}" class="btn btn-success">+</a>
            </div> -->
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover" id="token" style="width:100%;">
                <thead>
                  <tr>
                    <th>Payment Method</th>
                    <th>Fee Slip</th>
                    <th>Token</th>
                    <th>Status</th>
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
</section>
@endsection
@section('js')
<script type="text/javascript">
    //Roles table
    $(document).ready( function(){
  var roles_table = $('#token').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{url('admin/tokens')}}",
              buttons:[],
              columns: [
                {data: 'payment_method', name: 'payment_method',class:"text-center"},
                {data: 'fee_slip', name: 'fee_slip',class:"text-center"},
                {data: 'token', name: 'token',class:"text-center"},
                {data: 'status', name: 'status', orderable: false, searchable: false,class:"text-center"},
                {data: 'action', name: 'action', orderable: false, searchable: false,class:"text-center"},
            ]
          });
      });
</script>
@endsection