<header>
    <div class="top_logo_section d-flex justify-content-between align-items-center"> 
      <div class="top_text">
        <h5 class="m-0">Bangladesh | Save The World</h5>
      </div>
      <div class="top_text d-flex">
        @auth
          <a class="text-white log_text_hp" href="#">{{ Auth::user()->name }}</a>

          <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button class="home_logout_btn" type="submit"> logout</button>
          </form>

          @else

          <a class="text-white log_text_hp" href="{{  route('login') }}">login</a>
          <a class="text-white log_text_hp" href="{{ route('register') }}">Register</a>

        @endauth
      </div>
    </div>
    <!-- menu area  -->
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #ececec;">
      <div class="logo navbar-brand">
        <img src="{{asset('assets/front-end-image/save-the-world-logo.png')}}" alt="">
      </div>
      <div class="container justify-content-end"> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
            <li class="nav-item ps-2 pe-2">
              <a class="nav-link menu_text active" aria-current="page" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item ps-2 pe-2">
              <a class="nav-link menu_text" href="{{url('/about')}}">About</a>
            </li>
            <li class="nav-item ps-2 pe-2">
              <a class="nav-link menu_text" href="#">Statistics</a>
            </li>
            <li class="nav-item ps-2 pe-2">
              <a class="nav-link menu_text" href="#">Blog</a>
            </li>
            <li class="nav-item ps-2 pe-2">
              <a class="nav-link menu_text" href="#">Survey</a>
            </li>
            <li class="nav-item ps-2 pe-2">
              <a class="nav-link menu_text" href="#">Games</a>
            </li>
            <li class="nav-item ps-2 pe-2">
              <a class="nav-link menu_text" href="{{url('contact')}}">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>