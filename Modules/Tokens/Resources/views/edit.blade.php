@extends('frontend.layouts.template')
@section('content')
<!-- ============abt-01 Section  Start============ -->
<section class="bg-0-b">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="col-md-6">Token</h4>
          </div>
          <form class="card-body" method="Post" action="{{url('tokens/update/'.$token->id)}}"  enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="">Payment Method</label>
                <select name="payment_method" class="form-control" id="">
                  @foreach($paymentmethods as $p_method)
                  <option value="{{$p_method->id}}"{{ $p_method->id == $token->payment_method ? 'selected' : ''}} >{{$p_method->bank_name}}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group col-md-6">
                    <label>Image</label>
                    <input type="file" class="form-control" name="fee_slip" id="image" onchange="document.getElementById('image-display').src = window.URL.createObjectURL(this.files[0])">
                  </div>
                  <div class="form-group col-md-6">
                    <img src="{{url('images/token/'.$token->fee_slip)}}" class="image-display" id="image-display" width="100" height="100">
                  </div>
              
              <div class="col-12 text-center">
                <button class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection