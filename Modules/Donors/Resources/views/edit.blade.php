@extends('layouts.template')
@section('title')
Blood Donor
@endsection
@section('content')
<section class="section">
  <div class="section-body">
    
    <form action="{{url('donors/update/'.$donor->id)}}" method="post">
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
                <div class="form-group col-md-6">
                  <label>Age</label>
                  <input type="number" class="form-control" value="{{$donor->age}}" min="0" name="age" placeholder="Enter Age">
                </div>
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
                      @foreach($cities as $city)
                      <option value="{{$city->id}}"{{ $city->id == $donor->city_id ? 'selected' : ''}}>{{$city->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Area Name</label>
                    <select id="area-dropdown" class="form-control" name="area_id">
                      <option value="">-- Select Area --</option>
                      @foreach($areas as $area)
                      <option value="{{$area->id}}"{{ $area->id == $donor->area_id ? 'selected' : ''}}>{{$area->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Address</label>
                  <input type="text" class="form-control" value="{{$donor->address}}" name="address"  placeholder="Enter Address">
                </div>
                <div class="form-group col-md-4">
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
                <div class="form-group col-md-4">
                  <label>Contact No</label>
                  <input type="number" class="form-control" value="{{$donor->contact_no}}" min="0" name="contact_no"  placeholder="Enter Contact No">
                </div>
                <div class="form-group col-md-4">
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