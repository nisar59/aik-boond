@extends('frontend.layouts.template')
@section('content')
<!-- ============abt-01 Section  Start============ -->
<section class="bg-0-b">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Login</h5>
                    </div>
                    <form class="card-body" action="{{url('login')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="">Phone No</label>
                                <input type="text" name="contact_no" class="form-control  @error('contact_no') is-invalid @enderror" placeholder="Enter phone no">
                                @error('contact_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter password">
                                
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary">Login</button>
                                <p><a href="{{url('forget')}}">Forgot Password</a></p>
                                <p>Have not an account? <a href="{{url('register')}}">Register</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection