@extends('layouts.template')
@section('title')
Countries
@endsection
@section('content')
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="col-md-6">Countries</h4>
                    <div class="col-md-6 text-right">
<!--                     <a href="{{url('country/create')}}" class="btn btn-success">+</a>
 -->                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="countries" style="width:100%;">
                        <thead>
                          <tr>
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
  var roles_table = $('#countries').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{url('country')}}",
              buttons:[],
              columns: [
                {data: 'name', name: 'name',class:"text-center"},
                {data: 'action', name: 'action', orderable: false, searchable: false,class:"text-center"},
            ]
          });
      });
</script>
@endsection
