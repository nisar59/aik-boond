@extends('frontend.layouts.template')

@section('content')
      <!-- ======== banner started ========= -->
    <section class="banner">
      <!-- <div class="shap-svg-01">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          width="600px" height="600px" viewBox="0 0 600 600" style="enable-background:new 0 0 600 600;" xml:space="preserve">
          <g id="Layer_1">
          </g>
          <g id="Layer_2">
            <circle style="fill:#FFE4EC;" cx="296.333" cy="301.333" r="283.666" />
          </g>
        </svg>
      </div> -->
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="wrapper">
              <div class="content">
                <h1>You can help with the poor children</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur adipisci quasi, 
                  blanditiis, quidem distinctio suscipit sunt ducimus illo veritatis corporis quas! Ipsa
                  obcaecati beatae, aut saepe aliquam corrupti fugit. Cupiditate.</p>
                <div class="btn-002">
                  <ul>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Follow Us</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="img-wrapper">
              <div class="banner-img">
                <img src="{{asset('frontend-asset/images/slider/donation-02.png')}}">
              </div>
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
                <img src="{{asset('frontend-asset/images/slider/donation-01.png')}}">
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

    <!-- ======== services started ========= -->

    <section class="services-01">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="head-01">
              <h2>Our Services</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="ser-box">
              <i class="fal fa-bone"></i>
              <h3>Raise Fund for Healthy Food</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="ser-box">
              <i class="fal fa-graduation-cap"></i>
              <h3>Education for poor children </h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="ser-box">
              <i class="fal fa-child"></i>
              <h3>Promoting the Rights of Children</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="ser-box">
              <i class="fal fa-box-heart"></i>
              <h3>Massive Donation to Poor</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="ser-box">
              <i class="fal fa-hands-heart"></i>
              <h3>Huge help to homeless pupil</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="ser-box">
              <i class="fal fa-home"></i>
              <h3>Let’s build some homes.</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="ser-box">
              <i class="fal fa-hand-holding-water"></i>
              <h3>Pure Water For Poor People</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="ser-box">
              <i class="fal fa-heartbeat"></i>
              <h3>Medical Facilities For Childrens</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======== _ng_cs_we_rw started ========= -->

    <section class="_ng_cs_we_rw">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <div class="_lk_bg_cd">
              <i class="fal fa-school"></i>
              <div style="color:#fff;font-size:20px;" class="counting" data-count="200">200</div>
              <h5>Primary Schools</h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <div class="_lk_bg_cd">
              <i class="fal fa-hospitals"></i>
              <div style="color:#fff;font-size:20px;" class="counting" data-count="107">107</div>
              <h5>Hospitals</h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <div class="_lk_bg_cd">
              <i class="fal fa-hands-helping"></i>
              <div style="color:#fff;font-size:20px;" class="counting" data-count="20">20</div>
              <h5>Volunteers</h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <div class="_lk_bg_cd">
              <i class="fal fa-trophy"></i>
              <div style="color:#fff;font-size:20px;" class="counting" data-count="123">123</div>
              <h5>Winning Awards</h5>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========bg-03 started ========= -->

    <section class="bg-03">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="head-01">
              <h2>Latest news</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <article class="_kl_cd">
              <div class="_i-tr">
                <img src="{{asset('frontend-asset/images/blog/blog_1.jpg')}}">
              </div>
              <div class="_oi_er_we">
                <h3>Brilliant After All, A New Album by Rebecca: Help poor people</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor
                  nobis....</p>
              </div>
            </article>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <article class="_kl_cd">
              <div class="_i-tr">
                <img src="{{asset('frontend-asset/images/blog/blog_2.jpg')}}">
              </div>
              <div class="_oi_er_we">
                <h3>South african pre primary school build for children</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor
                  nobis....</p>
              </div>
            </article>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <article class="_kl_cd">
              <div class="_i-tr">
                <img src="{{asset('frontend-asset/images/blog/blog_3.jpg')}}">
              </div>
              <div class="_oi_er_we">
                <h3>Provide pure water for syrian poor people</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor
                  nobis....</p>
              </div>
            </article>
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
                <img src="{{asset('frontend-asset/images/team/1.jpg')}}">
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
                <img src="{{asset('frontend-asset/images/team/3.jpg')}}">
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
                <img src="{{asset('frontend-asset/images/team/2.jpg')}}">
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
                <img src="{{asset('frontend-asset/images/team/4.jpg')}}">
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