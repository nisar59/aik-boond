@extends('layouts.template')
@section('title')
Blood Donor
@endsection
@section('content')
        <section class="section">
          <div class="section-body">
            
            <form action="{{url('donors/store')}}" method="post" enctype="multipart/form-data">
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
                      <label>Image</label>
                      <input type="file" class="form-control" name="image" placeholder="Enter Name">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group col-md-12">
                      <label>Age</label>
                      <input type="number" class="form-control" name="age" placeholder="Enter Age">
                    </div>
                    <div class="form-group col-md-12">
                      <label>Upazila Name</label>
                     <select class="form-control" name="upazila_name">
                    @foreach ($doner as $doners)
                    <option value="{{$doners->id}}">{{$doners->name}}</option>
                    @endforeach
                  </select>
                    </div>
                    <div class="form-group col-md-12">
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
                    <div class="form-group col-md-12">
                      <label>Contact No</label>
                      <input type="number" class="form-control" name="contact_no"  placeholder="Enter Contact No">
                    </div>
                    <div class="form-group col-md-12">
                      <label>Last Donate Date</label>
                      <input type="date" class="form-control" name="last_donate_date" placeholder="Enter Last Donate Date">
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
