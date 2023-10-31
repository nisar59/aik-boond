<!doctype html>
<html lang="en">
  @include('frontend.layouts.head')
  <body>
    <!-- ======== header started ========= -->
    @include('frontend.layouts.header')
    <!-- ======== main started ========= -->
    <main class="charity-01-main">
      @yield('content')
    </main>
    
    @include('frontend.layouts.footer')
  </body>
  @include('frontend.layouts.footer-js')
</html>