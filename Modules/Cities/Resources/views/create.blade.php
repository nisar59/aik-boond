@extends('layouts.template')
@section('title')
Cities
@endsection
@section('content')
<section class="section">
  <div class="section-body">
    <form action="{{url('admin/cities/store')}}" method="post">
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
                <label for="">Countries</label>
                <select name="country_id" id="country-dropdown" class="form-control">
                  <option value="">-- Select Country --</option>
                  @foreach($countries as $country)
                  <option value="{{$country->id}}">{{$country->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">States</label>
               <select id="state-dropdown" class="form-control" name="state_id">
                  <option value="">-- Select states --</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter City Name">
              </div>
            </div>
          </div>
        </div>
            <div class="card-footer text-end">
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
 $('#country-dropdown').on('change', function () {
                var idCountry = this.value;
                $("#state-dropdown").html('');
                $.ajax({
                    url: "{{url('states')}}",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#state-dropdown').html('<option value="">-- Select State --</option>');
                        $.each(result.states, function (key, value) {
                            $("#state-dropdown").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
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