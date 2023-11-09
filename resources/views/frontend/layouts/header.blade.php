<header>
  <div class="my-nav">
    <div class="container">
      <div class="row">
        <div class="nav-items">
          <div class="menu-toggle">
            <div class="menu-hamburger"></div>
          </div>
          <div class="logo">
            <img src="{{url('public/img/settings/'.Settings()->portal_logo)}}">
          </div>
          <div class="menu-items">
            <div class="menu">
              <ul>
                <li><a href="{{url('index')}}">Home</a></li>
                <li><a href="{{url('about-us')}}">About Us</a></li>
                <li><a href="{{url('services')}}">Services</a></li>
                <li><a href="{{url('blog')}}">Blog</a></li>
                <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                <li><a href="{{url('login')}}">Login</a></li>
                <li><a href="{{url('logout')}}">Logout</a></li>
              </ul>
              <!--  <ul class="navbar-nav">
                @guest
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('login') }}">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('registration') }}">Register</a>
                </li>
                @else
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('logout') }}">Logout</a>
                </li>
                @endguest
              </ul> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>