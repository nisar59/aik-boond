@extends('frontend.layouts.template')
@section('content')
<section class="bg-0-b">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="col-md-6">Token</h4>
          </div>
          <form class="card-body" method="Post" action="{{url('tokens/store')}}"  enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="">Payment Method</label>
                <select name="payment_method" class="form-control" id="">
                  @foreach($paymentmethods as $p_method)
                  <option value="{{$p_method->id}}">{{$p_method->bank_name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-md-6 form-group">
                <label for="">Fee Slip</label>
                <input type="file" class="form-control" name="fee_slip" placeholder="Enter Fee Slip">
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