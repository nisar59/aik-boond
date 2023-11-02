@extends('layouts.template')
@section('title')
Blood Donor
@endsection
@section('content')
<section class="section">
  <div class="section-body">
    
    <form action="{{url('admin/donors/update/'.$donor->id)}}" method="post">
      @csrf
      <div class="row">
        <div class="col-12 col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h4>Blood Donor</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="form-group col-md-6">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" value="{{$donor->name}}" placeholder="Enter Name">
                </div>
                <input type="text" hidden name="country_id" value="167">
                <div class="form-group col-md-6">
                  <label for="">States</label>
                  <select name="state_id" id="state-dropdown" class="form-control">
                    <option value="">-- Select State --</option>
                    @foreach($states as $state)
                    <option value="{{$state->id}}"{{ $state->id == $donor->state_id ? 'selected' : ''}}>{{$state->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">City</label>
                    <select id="city-dropdown" class="form-control" name="city_id">
                      <option value="">-- Select City --</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Area Name</label>
                    <select id="area-dropdown" class="form-control" name="area_id">
                      <option value="">-- Select Area --</option>
                    </select>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Address</label>
                  <input type="text" class="form-control" name="address" value="{{$donor->address}}"  placeholder="Enter Address">
                </div>
                <div class="form-group col-md-6">
                  <label>Blood Group</label>
                  <select class="form-control" name="blood_group">
                    <option value="A+" @if($donor->blood_group=="A+") selected @endif>A+</option>
                    <option value="A-" @if($donor->blood_group=="A-") selected @endif>A-</option>
                    <option value="B+" @if($donor->blood_group=="B+") selected @endif>B+</option>
                    <option value="B-" @if($donor->blood_group=="B-") selected @endif>B-</option>
                    <option value="O+" @if($donor->blood_group=="O+") selected @endif>O+</option>
                    <option value="O-" @if($donor->blood_group=="O-") selected @endif>O-</option>
                    <option value="AB+" @if($donor->blood_group=="AB+") selected @endif>AB+</option>
                    <option value="AB-" @if($donor->blood_group=="AB-") selected @endif>AB-</option>
                    
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Contact No</label>
                  <input type="number" class="form-control" min="0" value="{{$donor->contact_no}}" name="contact_no"  placeholder="Enter Contact No">
                </div>
                <div class="form-group col-md-6">
                  <label>Last Donate Date</label>
                  <input type="date" class="form-control" value="{{$donor->last_donate_date}}" name="last_donate_date" placeholder="Enter Last Donate Date">
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
 $("#state-dropdown").trigger('change');
}, 50);

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
                        $('#city-dropdown').html('<option value="">-- Select City --</option>');
                    },
                    error:function(err) {
                    error(err.statusText);
                     }
                });
            });

    /*------------------city listing----------------*/
     $('#state-dropdown').on('change', function () {
                var idState = this.value;
                $("#city-dropdown").html('');
                $.ajax({
                    url: "{{url('cities')}}",
                    type: "POST",
                    data: {
                        state_id: idState,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (res) {
                        $('#city-dropdown').html('<option value="">-- Select City --</option>');
                        $.each(res.cities, function (key, value) {
                           var sel='';
                           if(value.id=='{{$donor->city_id}}'){
                            sel='selected';
                           }
                            $("#city-dropdown").append('<option value="' + value
                                .id + '" '+sel+'>' + value.name + '</option>');
                        });

                        $('#city-dropdown').trigger('change');
                    },
                    error:function(err) {
                    error(err.statusText);
                    }
                });
                 $('#area-dropdown').html('<option value="">-- Select Area --</option>');

            });
     /*-----------------area listing-----------*/
     $('#city-dropdown').on('change', function() {
        var city_id = this.value;
        $("#area-dropdown").html('');
        $.ajax({
        url:"{{url('areas')}}",
        type: "POST",
        data: {
        city_id: city_id,
        _token: '{{csrf_token()}}'
        },
        dataType : 'json',
        success: function(result){
        $('#area-dropdown').html('<option value="">Select Area</option>');
        $.each(result.areas,function(key,value){
          var sel='';
          if(value.id=='{{$donor->area_id}}'){
            sel='selected';
          }
        $("#area-dropdown").append('<option '+sel+' value="'+value.id+'">'+value.name+'</option>');
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