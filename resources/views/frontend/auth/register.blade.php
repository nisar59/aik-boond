@extends('frontend.layouts.template')

@section('content')

    <!-- ============abt-01 Section  Start============ -->

     <section class="bg-0-b">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <div class="card">
                         <div class="card-header">
                             <h5>Register</h5>
                         </div>
                             <form class="card-body">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Name">
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="">Phone No</label>
                                        <input type="text" class="form-control" placeholder="Enter Name">
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="">Password</label>
                                        <input type="text" class="form-control" placeholder="Enter Name">
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="">Age</label>
                                        <input type="number" min="18" class="form-control" placeholder="Enter Age">
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="">Blood Group</label>
                                        <input type="text" class="form-control" placeholder="Enter Name">
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="">Country</label>
                                        <input type="text" class="form-control" placeholder="Enter Name">
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="">State</label>
                                        <input type="text" class="form-control" placeholder="Enter Name">
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="">City</label>
                                        <input type="text" class="form-control" placeholder="Enter Name">
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="">Area</label>
                                        <input type="text" class="form-control" placeholder="Enter Name">
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="">Address / Town</label>
                                        <input type="text" class="form-control" placeholder="Enter Name">
                                    </div>

                                    <div class="col-12 text-center">
                                        <button class="btn btn-primary">Register</button>
                                        <p>Already have an account? <a href="">Login</a></p>
                                    </div>
                                </div>                                 
                             </form>
                         </div>
                     </div>
                 </div>
             </div>

     </section>


@endsection