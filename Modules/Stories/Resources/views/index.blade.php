@extends('layouts.template')
@section('title')
Stories
@endsection
@section('content')
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="col-md-6">Stories</h4>
                    <div class="col-md-6 text-right">
                    <a href="{{url('stories/create')}}" class="btn btn-success">+</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="stories" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Description</th>
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
  var roles_table = $('#stories').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{url('stories')}}",
              buttons:[],
              columns: [
                {data: 'title', name: 'title',class:"text-center"},
                {data: 'slug', name: 'slug',class:"text-center"},
                {data: 'description', name: 'description',class:"text-center"},
                {data: 'action', name: 'action', orderable: false, searchable: false,class:"text-center"},
            ]
          });
      });
</script>
@endsection
