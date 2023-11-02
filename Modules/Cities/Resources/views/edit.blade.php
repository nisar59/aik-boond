@extends('layouts.template')
@section('title')
Cities
@endsection
@section('content')
<section class="section">
  <div class="section-body">
    <form action="{{url('admin/cities/update/'.$cities->id)}}" method="post">
      @csrf
      <div class="row">
        <div class="col-12 col-md-12">
          <div class="card card-primary">
            <div class="card-header bg-white">
              <h4>Cities</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Country</label>
                    <select name="country_id" id="country-dropdown" class="form-control">
                      <option value="">-- Select Country --</option>
                      @foreach($countries as $country)
                      <option value="{{$country->id}}"{{ $country->id == $cities->country_id ? 'selected' : ''}}>{{$country->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">State</label>
                    <select id="state-dropdown" class="form-control" name="state_id">
                      <option value="">-- Select states --</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" value="{{$cities->name}}" name="name" placeholder="Enter Name">
                  </div>
                </div>
                
              </div>
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-primary mr-1" type="submit">Submit</button>
              </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>
@endsection
@section('js')
<script type="text/javascript">
 $(document).ready(function() {

setTimeout(function() {
 $("#country-dropdown").trigger('change');
}, 50);
$('#country-dropdown').on('change', function() {
        var idCountry = this.value;
        $("#state-dropdown").html('');
        $.ajax({
        url:"{{url('states')}}",
        type: "POST",
        data: {
        country_id: idCountry,
        _token: '{{csrf_token()}}'
        },
        dataType : 'json',
        success: function(result){
           
        $('#state-dropdown').html('<option value="">-- Select State --</option>');

        $.each(result.states,function(key,value){
          console.log(key);
          var sel='';
          if(value.id=='{{$cities->state_id}}'){

            sel='selected';
          }
        $("#state-dropdown").append('<option '+sel+' value="'+value.id+'">'+value.name+'</option>');
        });
        },
        error:function(err) {
        error(err.statusText);
        }
        });
        });
    
});
</script>
@endsection