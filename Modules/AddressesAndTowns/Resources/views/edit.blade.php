@extends('layouts.template')
@section('title')
Addresses And Towns
@endsection
@section('content')
<section class="section">
  <div class="section-body">
    
    <form action="{{url('addresses-and-towns/update/'.$addresses_and_towns->id)}}" method="post">
      @csrf
      <div class="row">
        <div class="col-12 col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h4>Addresses And Towns</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="">States</label>
                  <select name="state_id" id="state-dropdown" class="form-control">
                    <option value="">-- Select State --</option>
                    @foreach($states as $state)
                    <option value="{{$state->id}}"{{ $state->id == $addresses_and_towns->state_id ? 'selected' : ''}}>{{$state->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">City</label>
                    <select id="city-dropdown" class="form-control" name="city_id">
                      <option value="">-- Select City --</option>
                      @foreach($cities as $city)
                      <option value="{{$city->id}}"{{ $city->id == $addresses_and_towns->city_id ? 'selected' : ''}}>{{$city->name}}</option>
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
                      <option value="{{$area->id}}"{{ $area->id == $addresses_and_towns->area_id ? 'selected' : ''}}>{{$area->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" value="{{$addresses_and_towns->name}}" placeholder="Enter Name">
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