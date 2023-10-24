@extends('layouts.template')
@section('title')
Cities
@endsection
@section('content')
<section class="section">
  <div class="section-body">
    <form action="{{url('cities/update/'.$cities->id)}}" method="post">
  @csrf
  <div class="row">
    <div class="col-12 col-md-12">
      <div class="card card-primary">
        <div class="card-header bg-white">
          <h4>Cities</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Countries</label>
                <select name="country_id" id="country-dropdown" class="form-control">
                  <option value="">-- Select Country --</option>
                  @foreach($countries as $country)
                  <option value="{{$country->id}}"{{ $country->id == $cities->country_id ? 'selected' : ''}}>{{$country->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">States / Provinces</label>
                <select id="state-dropdown" class="form-control" name="state_id">
                  <option value="">-- Select states --</option>
                  @foreach($states as $state)
                  <option value="{{$state->id}}"{{ $state->id == $cities->state_id ? 'selected' : ''}}>{{$state->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" value="{{$cities->name}}" name="name" placeholder="Enter Name">
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
