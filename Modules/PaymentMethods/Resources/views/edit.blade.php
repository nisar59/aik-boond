@extends('layouts.template')
@section('title')
Payment Methods
@endsection
@section('content')
<section class="section">
  <div class="section-body">
    <form action="{{url('payment-methods/update/'.$payment_methods->id)}}" method="post">
      @csrf
      <div class="row">
        <div class="col-12 col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h4>Payment Methods</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="form-group col-md-4">
                  <label>Bank Name</label>
                  <input type="text" class="form-control" value="{{$payment_methods->bank_name}}" name="bank_name" placeholder="Enter Bank Name">
                </div>
                <div class="form-group col-md-4">
                  <label>Account Title</label>
                  <input type="text" class="form-control" value="{{$payment_methods->account_title}}" name="account_title" placeholder="Enter Account Title">
                </div>
                <div class="form-group col-md-4">
                  <div class="form-group">
                    <label for="">IBAN Number</label>
                    <input type="text" class="form-control" value="{{$payment_methods->iban_no}}" name="iban_no" placeholder="Enter IBAN Number">
                  </div>
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