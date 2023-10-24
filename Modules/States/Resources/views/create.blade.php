@extends('layouts.template')
@section('title')
States
@endsection
@section('content')
<section class="section">
  <div class="section-body">
    <form action="{{url('states/store')}}" method="post">
      @csrf
      <div class="row">
        <div class="col-12 col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h4>States</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="form-group col-md-6">
                  <label>Country Name</label>
                  <select name="country_id" id="" class="form-control">
                  @foreach($countries as $countrys)
                  <option value="{{$countrys->id}}">{{$countrys->name}}</option>
                  @endforeach
                </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter Name">
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
  @endsection