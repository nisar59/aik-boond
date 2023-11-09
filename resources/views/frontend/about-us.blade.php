@extends('frontend.layouts.template')

@section('content')
    <!-- ============abt-01 Section  Start============ -->

    <section class="abt-01">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="heading-wrapper">
              <h3>About Us</h3>
              <ol>
                <li>Hmoe<i class="far fa-angle-double-right"></i></li>
                <li>About Us</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======== bg-02-b started ========= -->

    <section class="bg-02-b">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="head-001">
              <h2>About Us Charity</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laborisnisi.</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12 ">
            <div class="_do_er_xs">
              <div class="_kl_de_s">
                <img src="{{URL::To('frontend-asset/images/slider/donation-01.png')}}">
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <div class="_do_er_xs">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehen derit in voluptate velit esse cillum dolore
                eu fugiat nulla pariatur.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation they ullamco.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation they ullamco.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========bg-05 started ========= -->

    <section class="bg-05">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="heading">
              <h2>Our Team</h2>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-6 col-12">
            <div class="team-wrapper">
              <div class="team-img">
                <img src="{{URL::To('frontend-asset/images/team/1.jpg')}}">
              </div>
              <div class="team-content">
                <h3>James</h3>
                <p>Designer</p>
                <ul>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                  <li><a href="#"><i class="fab fa-behance"></i></a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-6 col-12">
            <div class="team-wrapper">
              <div class="team-img">
                <img src="{{URL::To('frontend-asset/images/team/3.jpg')}}">
              </div>
              <div class="team-content">
                <h3>Albert</h3>
                <p>Art Designer</p>
                <ul>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                  <li><a href="#"><i class="fab fa-behance"></i></a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-6 col-12">
            <div class="team-wrapper">
              <div class="team-img">
                <img src="{{URL::To('frontend-asset/images/team/2.jpg')}}">
              </div>
              <div class="team-content">
                <h3>Johns</h3>
                <p>SEO</p>
                <ul>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                  <li><a href="#"><i class="fab fa-behance"></i></a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-6 col-12">
            <div class="team-wrapper">
              <div class="team-img">
                <img src="{{URL::To('frontend-asset/images/team/4.jpg')}}">
              </div>
              <div class="team-content">
                <h3>Smith</h3>
                <p>Developer</p>
                <ul>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                  <li><a href="#"><i class="fab fa-behance"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection