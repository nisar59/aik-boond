<!doctype html>
<html lang="en">
@include('frontend.head')

<body>
  <!-- ======== header started ========= -->
  @include('frontend.header')
  <!-- ======== main started ========= -->

  <main class="charity-01-main">

    <!-- ============abt-01 Section  Start============ -->

    <section class="abt-01">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-wrapper">
                        <h3>Blog</h3>
                        <ol>
                            <li>Hmoe<i class="far fa-angle-double-right"></i></li>
                            <li>Blog</li>
                        </ol>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero
                                dolor
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero
                                dolor
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero
                                dolor
                                nobis....</p>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <article class="_kl_cd">
                        <div class="_i-tr">
                            <img src="{{asset('frontend-asset/images/blog/blog_4.jpg')}}">
                        </div>
                        <div class="_oi_er_we">
                            <h3>Provide pure water for syrian poor people</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero
                                dolor
                                nobis....</p>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <article class="_kl_cd">
                        <div class="_i-tr">
                            <img src="{{asset('frontend-asset/images/blog/blog_5.jpg')}}">
                        </div>
                        <div class="_oi_er_we">
                            <h3>Provide pure water for syrian poor people</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero
                                dolor
                                nobis....</p>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <article class="_kl_cd">
                        <div class="_i-tr">
                            <img src="{{asset('frontend-asset/images/blog/blog_6.jpg')}}">
                        </div>
                        <div class="_oi_er_we">
                            <h3>Provide pure water for syrian poor people</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero
                                dolor
                                nobis....</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

  </main>

  @include('frontend.footer')
</body>
@include('frontend.footer-js')
</html>