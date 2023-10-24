@extends('layouts.template')
@section('title')
Areas
@endsection
@section('content')
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="col-md-6">Areas</h4>
                    <div class="col-md-6 text-right">
                    <a href="{{url('areas/create')}}" class="btn btn-success">+</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="areas" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Country Name</th>
                            <th>State Name</th>
                            <th>City Name</th>
                            <th>Name</th>
                            <th>Nearest Place</th>
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
  var roles_table = $('#areas').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{url('areas')}}",
              buttons:[],
              columns: [
                {data: 'country_id', name: 'country_id',class:"text-center"},
                {data: 'state_id', name: 'state_id',class:"text-center"},
                {data: 'city_id', name: 'city_id',class:"text-center"},
                {data: 'name', name: 'name',class:"text-center"},
                {data: 'nearest_place', name: 'nearest_place',class:"text-center"},
                {data: 'action', name: 'action', orderable: false, searchable: false,class:"text-center"},
            ]
          });
      });
</script>
@endsection
