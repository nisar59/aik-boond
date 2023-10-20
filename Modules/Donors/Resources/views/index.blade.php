@extends('layouts.template')
@section('title')
Blood Donors
@endsection
@section('content')
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="col-md-6">Blood Donors</h4>
                    <div class="col-md-6 text-right">
                    <a href="{{url('donors/create')}}" class="btn btn-success">+</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="users" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Upazila Name</th>
                            <th>Blood Group</th>
                            <th>Contact No</th>
                            <th>Last Donated Date</th>
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
  var roles_table = $('#users').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{url('donors')}}",
              buttons:[],
              columns: [
                {data: 'image', name: 'image', orderable: false, searchable: false},
                {data: 'name', name: 'name'},
                {data: 'age', name: 'age'},
                {data: 'upazila_name', name: 'upazila_name'},
                {data: 'blood_group', name: 'blood_group'},
                {data: 'contact_no', name: 'contact_no'},
                {data: 'last_donate_date', name: 'last_donate_date'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
          });
      });
</script>
@endsection
