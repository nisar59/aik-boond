@extends('frontend.layouts.template')
@section('content')
<!-- ============abt-01 Section  Start============ -->
<section class="bg-0-b">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Register</h5>
                    </div>
                    <form class="card-body" method="post" action="{{url('register')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Name">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="">Phone No</label>
                                <input type="text" class="form-control" name="contact_no" placeholder="Enter Name">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter Name">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="">Age</label>
                                <input type="number" min="18" name="age" class="form-control" placeholder="Enter Age">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Blood Group</label>
                                <select name="blood_group" class="form-control">
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="">State</label>
                                <select name="state_id" id="state-dropdown" class="form-control">
                                    <option value="">-- Select State --</option>
                                    @foreach(AllStates() as $state)
                                    <option value="{{$state->id}}">{{$state->name}}</option>
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
                            <div class="col-md-6 form-group">
                                <label for="">Address / Town</label>
                                <input type="text" class="form-control" name="address" placeholder="Enter Name">
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary">Register</button>
                                <p>Already have an account? <a href="{{url('login')}}">Login</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
                      console.log(result);
                        $('#state-dropdown').html('<option value="">-- Select State --</option>');
                        $.each(result.states, function (key, value) {
                            $("#state-dropdown").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        $('#city-dropdown').html('<option value="">-- Select City --</option>');
                    },
                    error:function(err) {
                    error(err.statusText);
                    console.log(err.responseJSON.message);
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
                            $("#city-dropdown").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
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
        $("#area-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
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