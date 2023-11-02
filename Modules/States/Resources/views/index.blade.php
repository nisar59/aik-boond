@extends('layouts.template')
@section('title')
States
@endsection
@section('content')
<section class="section">
  <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card card-primary" id="filters-container">
                  <div class="card-header bg-white" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
                    <h4><i class="fas fa-filter"></i> Filters</h4>
                  </div>
                  <div class="card-body p-0">
                    <div class="collapse multi-collapse" id="multiCollapseExample2" data-bs-parent="#filters-container">
                      <div class="p-3 accordion-body">
                        <div class="row">
                          <div class="col-md-6 form-group">
                            <label for="">Country Name</label>
                            <select name="country_id" class="form-control filters">
                              <option value="">Select Country</option>
                              @foreach($countries as $country)
                              <option value="{{$country->id}}">{{$country->name}}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="col-md-6 form-group">
                            <label for="">State</label>
                            <input type="text" class="form-control filters" name="name" placeholder="State Name">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="col-md-6">States</h4>
                    <div class="col-md-6 text-right">
<!--                     <a href="{{url('states/create')}}" class="btn btn-success">+</a>
 -->                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="states" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Country Name</th>
                            <th>Name</th>
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
  data_table = $('#states').DataTable({
      processing: true,
      serverSide: true,
      ajax: {
        url:"{{url('admin/states')}}",
        data:data,
        },
      buttons:[],
      buttons:[],
              columns: [
                {data: 'country_id', name: 'country_id',class:"text-center"},
                {data: 'name', name: 'name',class:"text-center"},
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
