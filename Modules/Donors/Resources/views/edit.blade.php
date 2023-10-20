@extends('layouts.template')
@section('title')
Blood Donor
@endsection
@section('content')
<section class="section">
  <div class="section-body">
    
    <form action="{{url('donors/update/'.$data['donor']->id)}}" method="post" enctype="multipart/form-data">
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
                    <input type="file" class="form-control" name="image" id="image" onchange="document.getElementById('image-display').src = window.URL.createObjectURL(this.files[0])">
                  </div>
                  <div class="form-group col-md-6">
                    <img src="{{url('public/img/donor/'.$data['donor']->image)}}" class="image-display" id="image-display" width="100" height="100">
                  </div>
                </div>
              <div class="row">
                <div class="form-group col-md-12">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" value="{{$data['donor']->name}}" placeholder="Enter Name">
                </div>
                <div class="form-group col-md-12">
                  <label>Age</label>
                  <input type="number" class="form-control" name="age" value="{{$data['donor']->age}}" placeholder="Enter Age">
                </div>
                <div class="form-group col-md-12">
                  <label>Upazila Name</label>
                   <select class="form-control" name="upazila_name">
                    @foreach ($doner as $doners)
                    <option value="{{$doners->id}}" @if($doners->id==$data['donor']->id) selected @endif>{{$doners->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-12">
                  <label>Blood Group</label>
                  <select class="form-control" name="blood_group">
                     <option value="A+" @if($data['donor']->blood_group=="A+") selected @endif>A+</option>

                     <option value="A-" @if($data['donor']->blood_group=="A-") selected @endif>A-</option>

                     <option value="B+" @if($data['donor']->blood_group=="B+") selected @endif>B+</option>

                     <option value="B-" @if($data['donor']->blood_group=="B-") selected @endif>B-</option>

                     <option value="O+" @if($data['donor']->blood_group=="O+") selected @endif>O+</option>

                     <option value="O-" @if($data['donor']->blood_group=="O-") selected @endif>O-</option>

                     <option value="AB+" @if($data['donor']->blood_group=="AB+") selected @endif>AB+</option>

                     <option value="AB-" @if($data['donor']->blood_group=="AB-") selected @endif>AB-</option>
                  
                  </select>
                </div>
                <div class="form-group col-md-12">
                  <label>Contact No</label>
                  <input type="number" class="form-control" name="contact_no" value="{{$data['donor']->contact_no}}" placeholder="Enter Contact No">
                </div>
                <div class="form-group col-md-12">
                  <label>Last Donate Date</label>
                  <input type="date" class="form-control" name="last_donate_date" value="{{$data['donor']->last_donate_date}}" placeholder="Enter Last Donate Date">
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