@extends('layouts.template')
@section('title')
Areas
@endsection
@section('content')
<section class="section">
  <div class="section-body">
    <form action="{{url('areas/update/'.$areas->id)}}" method="post">
      @csrf
      <div class="row">
        <div class="col-12 col-md-12">
          <div class="card card-primary">
            <div class="card-header bg-white">
              <h4>Areas</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">States</label>
                    <select id="state-dropdown" class="form-control" name="state_id">
                      <option value="">-- Select states --</option>
                      @foreach($states as $state)
                      <option value="{{$state->id}}"{{ $state->id == $areas->state_id ? 'selected' : ''}} >{{$state->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">City</label>
                    <select id="division-dropdown" class="form-control" name="city_id">
                      <option value="">-- Select City --</option>
                       @foreach($cities as $city)
                      <option value="{{$city->id}}"{{ $city->id == $areas->city_id ? 'selected' : ''}} >{{$city->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" value="{{$areas->name}}" name="name" placeholder="Enter Name">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Nearest Place</label>
                    <input type="text" class="form-control" value="{{$areas->nearest_place}}" name="nearest_place" placeholder="Enter Nearest Place">
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