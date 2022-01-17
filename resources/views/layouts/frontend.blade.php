<!DOCTYPE html>
<html lang="en">
@php 
  $genData = App\generalInfo::get()->first();   
@endphp
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="Crisp Tv Media">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon/favicon-32x32.png">
  <title>{{ $genData->name }} @yield('page_title')</title>
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<body>

  <!-- Preloader Start -->
  <div class="preloader">
    <div class="loader_34">
      <div class="ytp-spinner">
        <div class="ytp-spinner-container">
          <div class="ytp-spinner-rotator">
            <div class="ytp-spinner-left">
              <div class="ytp-spinner-circle"></div>
            </div>
            <div class="ytp-spinner-right">
              <div class="ytp-spinner-circle"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Preloader End -->

  <!-- header-top-area-start-here -->
  <section class="header-top-area @yield('HeaderClasses')">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 d-flex align-items-center">
          <div class="header-logo">
            <a href="/">
              <img class="blackLogo" src="/{{$genData->logo}}" alt="{{$genData->logo}}">
              <img class="whiteLogo" src="/{{$genData->white_logo}}" alt="{{$genData->white_logo}}">
            </a>
          </div>
          <!-- MObile Menu -->
          <div class="mobile-menu-container"></div>
        </div>
        <div class="col-lg-10">
          <div class="mainmenu">
            <nav>
              <ul>
              <!-- @yield('menuActive') -->
                <li><a class="@yield('homeMenu')" href="/">home</a></li>
                <li><a class="@yield('aboutMenu')" href="/about-us">about us</a></li>
                <li><a class="@yield('wedoMenu')" href="/what-we-do">what we do</a></li>
                <li><a class="@yield('eventMenu')" href="/events">events</a></li>
                <li><a class="@yield('tvMenu')" href="/tv-channel">tv channel</a></li>
                <li><a class="@yield('projectMenu')" href="/projects">projects</a></li>
                <li><a class="@yield('academyMenu')" href="/academy">academy</a></li>
                <li><a class="@yield('careerMenu')" href="/careers">careers</a></li>
                <li><a class="@yield('blogMenu')" href="/blog">blog</a></li>
                <li><a class="@yield('contactMenu')" href="/contact">contact us</a></li>
              </ul>
            </nav>
          </div>

        </div>
      </div>
    </div>
  </section>

  @yield('frontend_content')
  
  <!-- footer-area-start-here -->
  <section class="footer-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 wow fadeInUp" data-wow-delay=".3s">
          <div class="footer-1">
            <p>let us help tell the world your story</p>
            <h1>Looking for creative solutions?</h1>
            <a href="/contact" class="footer-hire-us-btn">Hire us now</a>
          </div>
        </div>
      </div>
      <div class="row wow fadeInUp" data-wow-delay=".4s">
        <div class="col-lg-2 col-md-6 col-6 order-2">
          <div class="footer-2">
            <p>&copy; 2022 - {{ $genData->name }} <span>|</span> </p>
          </div>
        </div>
        <div class="col-lg-6 order-lg-2 order-1 wow fadeInUp" data-wow-delay=".5s">
          <div class="footer-3">
            <div class="footer-menu">
              <ul>
                @if ($genData->fb)
                 <li><a href="{{ $genData->fb }}">FACEBOOK</a></li>
                @endif
                @if ($genData->tw)
                 <li><a href="{{ $genData->tw }}">TWITTER</a></li>
                @endif
                @if ($genData->insta)
                 <li><a href="{{ $genData->insta }}">INSTAGRAM</a></li>
                @endif
                @if ($genData->ytb)
                 <li><a href="{{ $genData->ytb }}">YOUTUBE</a></li>
                @endif  
              </ul>
            </div>
          </div>
        </div>
        {{-- <div class="col-lg-4 col-md-6 col-6 order-3 wow fadeInUp" data-wow-delay=".6s">
          <div class="footer-4">
            <p>Site created by <a href="#">Viicsoft</a></p>
          </div>
        </div> --}}
      </div>
    </div>
  </section>


  <!-- business-branding-modal -->
  <div class="modal fade business-branding" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header modal-header-content">
          <div class="modal-header-content-item">
            <h2>Business Branding</h2>
          </div>
          <div class="modal-header-content-item">
            <p>Lorem ipsum dolor sit amet, 
              consectetur adipiscing elit</p>
          </div>
        </div>
        <div class="modal-body">
          <div class="modal-popup-content">
            <div class="single-modal-popup-content">
              <div class="single-modal-popup-content-item">
                <b>Lorem</b>
              </div>
              <div class="single-modal-popup-content-item">
                <p>Lorem ipsum dolor sit amet, 
                  consectetur adipiscing elit</p>
              </div>
            </div>
            <div class="single-modal-popup-content">
              <div class="single-modal-popup-content-item">
                <b>Lorem</b>
              </div>
              <div class="single-modal-popup-content-item">
                <p>Lorem ipsum dolor sit amet, 
                  consectetur adipiscing elit</p>
              </div>
            </div>
            <div class="single-modal-popup-content">
              <div class="single-modal-popup-content-item">
                <b>Lorem</b>
              </div>
              <div class="single-modal-popup-content-item">
                <p>Lorem ipsum dolor sit amet, 
                  consectetur adipiscing elit</p>
              </div>
            </div>
            <div class="single-modal-popup-content">
              <div class="single-modal-popup-content-item">
                <b>Lorem</b>
              </div>
              <div class="single-modal-popup-content-item">
                <p>Lorem ipsum dolor sit amet, 
                  consectetur adipiscing elit</p>
              </div>
            </div>
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024"><path fill="currentColor" d="M195.2 195.2a64 64 0 0 1 90.496 0L512 421.504L738.304 195.2a64 64 0 0 1 90.496 90.496L602.496 512L828.8 738.304a64 64 0 0 1-90.496 90.496L512 602.496L285.696 828.8a64 64 0 0 1-90.496-90.496L421.504 512L195.2 285.696a64 64 0 0 1 0-90.496z"/></svg>
        </button>
      </div>
    </div>
  </div>

  <!-- commercials-branding-modal -->
  <div class="modal fade business-branding commercials-branding" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header modal-header-content">
          <div class="modal-header-content-item">
            <h2>Commercials</h2>
          </div>
          <div class="modal-header-content-item">
            <p>Lorem ipsum dolor sit amet, 
              consectetur adipiscing elit</p>
          </div>
        </div>
        <div class="modal-body">
          <div class="modal-popup-content">
            <div class="single-modal-popup-content">
              <div class="single-modal-popup-content-item">
                <b>Lorem</b>
              </div>
              <div class="single-modal-popup-content-item">
                <p>Lorem ipsum dolor sit amet, 
                  consectetur adipiscing elit</p>
              </div>
            </div>
            <div class="single-modal-popup-content">
              <div class="single-modal-popup-content-item">
                <b>Lorem</b>
              </div>
              <div class="single-modal-popup-content-item">
                <p>Lorem ipsum dolor sit amet, 
                  consectetur adipiscing elit</p>
              </div>
            </div>
            <div class="single-modal-popup-content">
              <div class="single-modal-popup-content-item">
                <b>Lorem</b>
              </div>
              <div class="single-modal-popup-content-item">
                <p>Lorem ipsum dolor sit amet, 
                  consectetur adipiscing elit</p>
              </div>
            </div>
            <div class="single-modal-popup-content">
              <div class="single-modal-popup-content-item">
                <b>Lorem</b>
              </div>
              <div class="single-modal-popup-content-item">
                <p>Lorem ipsum dolor sit amet, 
                  consectetur adipiscing elit</p>
              </div>
            </div>
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024"><path fill="currentColor" d="M195.2 195.2a64 64 0 0 1 90.496 0L512 421.504L738.304 195.2a64 64 0 0 1 90.496 90.496L602.496 512L828.8 738.304a64 64 0 0 1-90.496 90.496L512 602.496L285.696 828.8a64 64 0 0 1-90.496-90.496L421.504 512L195.2 285.696a64 64 0 0 1 0-90.496z"/></svg>
        </button>
      </div>
    </div>
  </div>

  <!-- documentaries-branding-modal -->
  <div class="modal fade business-branding documentaries-branding" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header modal-header-content">
          <div class="modal-header-content-item">
            <h2>Documentaries</h2>
          </div>
          <div class="modal-header-content-item">
            <p>Lorem ipsum dolor sit amet, 
              consectetur adipiscing elit</p>
          </div>
        </div>
        <div class="modal-body">
          <div class="modal-popup-content">
            <div class="single-modal-popup-content">
              <div class="single-modal-popup-content-item">
                <b>Lorem</b>
              </div>
              <div class="single-modal-popup-content-item">
                <p>Lorem ipsum dolor sit amet, 
                  consectetur adipiscing elit</p>
              </div>
            </div>
            <div class="single-modal-popup-content">
              <div class="single-modal-popup-content-item">
                <b>Lorem</b>
              </div>
              <div class="single-modal-popup-content-item">
                <p>Lorem ipsum dolor sit amet, 
                  consectetur adipiscing elit</p>
              </div>
            </div>
            <div class="single-modal-popup-content">
              <div class="single-modal-popup-content-item">
                <b>Lorem</b>
              </div>
              <div class="single-modal-popup-content-item">
                <p>Lorem ipsum dolor sit amet, 
                  consectetur adipiscing elit</p>
              </div>
            </div>
            <div class="single-modal-popup-content">
              <div class="single-modal-popup-content-item">
                <b>Lorem</b>
              </div>
              <div class="single-modal-popup-content-item">
                <p>Lorem ipsum dolor sit amet, 
                  consectetur adipiscing elit</p>
              </div>
            </div>
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024"><path fill="currentColor" d="M195.2 195.2a64 64 0 0 1 90.496 0L512 421.504L738.304 195.2a64 64 0 0 1 90.496 90.496L602.496 512L828.8 738.304a64 64 0 0 1-90.496 90.496L512 602.496L285.696 828.8a64 64 0 0 1-90.496-90.496L421.504 512L195.2 285.696a64 64 0 0 1 0-90.496z"/></svg>
        </button>
      </div>
    </div>
  </div>

  <!-- scroll-back-to-top -->
  <div class="scroll-top">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
      width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
      <path d="M16 4L6 14l1.41 1.41L15 7.83V28h2V7.83l7.59 7.58L26 14L16 4z" fill="currentColor" /></svg>
  </div>

  <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/js/wow.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.meanmenu.min.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
  </script> 
</body> 
</html>