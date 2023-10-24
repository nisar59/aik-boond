@extends('layouts.template')
@section('title')
States
@endsection
@section('content')
        <section class="section">
          <div class="section-body">
            <div class="row">
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
  var roles_table = $('#states').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{url('states')}}",
              buttons:[],
              columns: [
                {data: 'country_id', name: 'country_id',class:"text-center"},
                {data: 'name', name: 'name',class:"text-center"},
                {data: 'action', name: 'action', orderable: false, searchable: false,class:"text-center"},
            ]
          });
      });
</script>
@endsection
