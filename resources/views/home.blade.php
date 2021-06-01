@extends('index')

@section("content")
    <!-- Home Page -->
  <div class="main-bg"></div>
  <div id="fullscreenAll" class="wrapper">
    <div class="homepage">
      <nav id="nav">
        <div class="container-fluid">
          <div class="navbar">
            <div></div>
            <a href="{{ url('/') }}" class="nav-logo">
              <img src="{{ url('assets/img/logo.svg') }}" class="img-fluid" alt="" />
            </a>
          </div>
        </div>
      </nav>
      <div class="container-fluid">
        <div class="main-title text-uppercase d-flex align-items-center"><button id="fulscreenBtn"><img src="assets/img/icons/expand.svg" /></button> Advanced and integrated mobility </div>
        <div class="full-page">
          <div class="home-center text-center">
            <a href="#" class="home-icon-col animate__animated animate__fadeInDown animate__delay-0s">
              <span class="icon-movie icon"></span>
              <div class="home-icon-title">Integrated Mobility</div>
            </a>
            <a href="{{ url('/interaction') }}" class="home-icon-col animate__animated animate__fadeInDown animate__delay-1s">
              <span class="icon-pen icon"></span>
              <div class="home-icon-title">Interactive Map</div>
            </a>
            <a href="{{ url('/signature') }}" class="home-icon-col animate__animated animate__fadeInDown animate__delay-2s">
              <span class="icon-signature icon"></span>
              <div class="home-icon-title">The Autograph Book</div>
            </a>
          </div>
        </div>
      </div>
      <footer id="footer">
        <div class="container-fluid height-fluid">
          <div class="footer-content height-fluid d-flex">
            <div class="fc-left">Saudi Aramco Mobility Center</div>
            <div class="fc-right"></div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Home Page -->
@endsection

@push('js')

    
@endpush