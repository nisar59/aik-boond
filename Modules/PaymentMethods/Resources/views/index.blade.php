@extends('layouts.template')
@section('title')
Payment Methods
@endsection
@section('content')
<section class="section">
  <div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="col-md-6">Payment Methods</h4>
            <div class="col-md-6 text-right">
              <a href="{{url('admin/payment-methods/create')}}" class="btn btn-success">+</a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover table-sm" id="payment-methods" style="width:100%;">
                <thead>
                  <tr>
                    <th>Bank Name</th>
                    <th>Account Title</th>
                    <th>IBAN number</th>
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
  var data_table;
  function DataTableInit(data={}) {
  data_table = $('#payment-methods').DataTable({
      processing: true,
      serverSide: true,
      ajax: {
        url:"{{url('admin/payment-methods')}}",
        data:data,
        },
      buttons:[],
      buttons:[],
              columns: [
                {data: 'bank_name', name: 'bank_name'},
                {data: 'account_title', name: 'account_title'},
                {data: 'iban_no', name: 'iban_no'},
                {data: 'status', name: 'status', orderable: false, searchable: false },
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
  });
}

DataTableInit();


$(document).on('change', '.filters', function () {
var data={};
$('.filters').each(function() {
data[$(this).attr('name')]=$(this).val();
});
data_table.destroy();
DataTableInit(data);
});


});
</script>
@endsection
