<!DOCTYPE html>
<html lang="en">
    @php 
    $Backg = App\OtherMedia::where('position','comming-soon')->get()->first(); 
    $app_name = "";
    $app_logo = "";
    $app_logo2 = "";
    $fb = "";
    $tw = "";
    $insta = "";
    $ytb = "";
      $genData = App\generalInfo::get()->first();
      if ($genData) {
        if ($genData->name) {
            $app_name = $genData->name;
        }
        if ($genData->logo) {
            $app_logo = $genData->logo;
        }
        if ($genData->white_logo) {
            $app_logo2 = $genData->white_logo;
        }
        if ($genData->fb) {
            $fb = $genData->fb;
        }
        if ($genData->tw) {
            $tw = $genData->tw;
        }
        if ($genData->insta) {
            $insta = $genData->insta;
        }
        if ($genData->ytb) {
            $ytb = $genData->ytb;
        }
      }   
    @endphp
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Crisp Tv Media">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon/favicon-32x32.png">
    <title>CrispTv</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"> 
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">  
    <style>
        html,
        body {
            height: 100%;
        }
    </style>
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

    <!-- comming-area-start-here -->
    <section class="comming-soon-area" style="background-image: url({{$Backg ? $Backg->img : ""}})">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="cs-top-left-logo">
                        <a href="/"><img src="assets/img/logo3-white-(for-dark-and-black-BG) 1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="cs-top-right">
                        <a href="/" class="cs-home-back-btn"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em"
                                height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                                <path
                                    d="M946.5 505L560.1 118.8l-25.9-25.9a31.5 31.5 0 0 0-44.4 0L77.5 505a63.9 63.9 0 0 0-18.8 46c.4 35.2 29.7 63.3 64.9 63.3h42.5V940h691.8V614.3h43.4c17.1 0 33.2-6.7 45.3-18.8a63.6 63.6 0 0 0 18.7-45.3c0-17-6.7-33.1-18.8-45.2zM568 868H456V664h112v204zm217.9-325.7V868H632V640c0-22.1-17.9-40-40-40H432c-22.1 0-40 17.9-40 40v228H238.1V542.3h-96l370-369.7l23.1 23.1L882 542.3h-96.1z"
                                    fill="currentColor" /></svg> Back home
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="comming-sson-content">
                        <h3>Crisptv tv channel</h3>
                        <strong>we’re coming soon</strong>
                        <p>Our Tv channel website is about ot launch pretty soon <br>
                            Be the first to know about that and subscribe today!</p>
                        <div class="cs-subscription-form">
                            <form action="/submit/subscribed" method="post">
                              @csrf
                              <input type="email" name="email" placeholder="Enter your email" required>
                              <input type="submit" value="Notify me">
                            </form> 
                        </div>
                        <div class="cs-social-links">
                            <ul>
                                @if ($fb)
                                 <li><a href="{{ $fb }}">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                            width="1em" height="1em" preserveAspectRatio="xMidYMid meet"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z"
                                                fill="currentColor" /></svg>
                                </a></li>
                                @endif 
                                @if ($insta)
                                 <li><a href="{{ $insta }}">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                            width="1em" height="1em" preserveAspectRatio="xMidYMid meet"
                                            viewBox="0 0 1024 1024">
                                            <path
                                                d="M512 306.9c-113.5 0-205.1 91.6-205.1 205.1S398.5 717.1 512 717.1S717.1 625.5 717.1 512S625.5 306.9 512 306.9zm0 338.4c-73.4 0-133.3-59.9-133.3-133.3S438.6 378.7 512 378.7S645.3 438.6 645.3 512S585.4 645.3 512 645.3zm213.5-394.6c-26.5 0-47.9 21.4-47.9 47.9s21.4 47.9 47.9 47.9s47.9-21.3 47.9-47.9a47.84 47.84 0 0 0-47.9-47.9zM911.8 512c0-55.2.5-109.9-2.6-165c-3.1-64-17.7-120.8-64.5-167.6c-46.9-46.9-103.6-61.4-167.6-64.5c-55.2-3.1-109.9-2.6-165-2.6c-55.2 0-109.9-.5-165 2.6c-64 3.1-120.8 17.7-167.6 64.5C132.6 226.3 118.1 283 115 347c-3.1 55.2-2.6 109.9-2.6 165s-.5 109.9 2.6 165c3.1 64 17.7 120.8 64.5 167.6c46.9 46.9 103.6 61.4 167.6 64.5c55.2 3.1 109.9 2.6 165 2.6c55.2 0 109.9.5 165-2.6c64-3.1 120.8-17.7 167.6-64.5c46.9-46.9 61.4-103.6 64.5-167.6c3.2-55.1 2.6-109.8 2.6-165zm-88 235.8c-7.3 18.2-16.1 31.8-30.2 45.8c-14.1 14.1-27.6 22.9-45.8 30.2C695.2 844.7 570.3 840 512 840c-58.3 0-183.3 4.7-235.9-16.1c-18.2-7.3-31.8-16.1-45.8-30.2c-14.1-14.1-22.9-27.6-30.2-45.8C179.3 695.2 184 570.3 184 512c0-58.3-4.7-183.3 16.1-235.9c7.3-18.2 16.1-31.8 30.2-45.8s27.6-22.9 45.8-30.2C328.7 179.3 453.7 184 512 184s183.3-4.7 235.9 16.1c18.2 7.3 31.8 16.1 45.8 30.2c14.1 14.1 22.9 27.6 30.2 45.8C844.7 328.7 840 453.7 840 512c0 58.3 4.7 183.2-16.2 235.8z"
                                                fill="currentColor" /></svg>
                                </a></li>
                                @endif
                                @if ($ytb)
                                 <li><a href="{{ $ytb }}">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                            width="1em" height="1em" preserveAspectRatio="xMidYMid meet"
                                            viewBox="0 0 1024 1024">
                                            <path
                                                d="M960 509.2c0-2.2 0-4.7-.1-7.6c-.1-8.1-.3-17.2-.5-26.9c-.8-27.9-2.2-55.7-4.4-81.9c-3-36.1-7.4-66.2-13.4-88.8a139.52 139.52 0 0 0-98.3-98.5c-28.3-7.6-83.7-12.3-161.7-15.2c-37.1-1.4-76.8-2.3-116.5-2.8c-13.9-.2-26.8-.3-38.4-.4h-29.4c-11.6.1-24.5.2-38.4.4c-39.7.5-79.4 1.4-116.5 2.8c-78 3-133.5 7.7-161.7 15.2A139.35 139.35 0 0 0 82.4 304C76.3 326.6 72 356.7 69 392.8c-2.2 26.2-3.6 54-4.4 81.9c-.3 9.7-.4 18.8-.5 26.9c0 2.9-.1 5.4-.1 7.6v5.6c0 2.2 0 4.7.1 7.6c.1 8.1.3 17.2.5 26.9c.8 27.9 2.2 55.7 4.4 81.9c3 36.1 7.4 66.2 13.4 88.8c12.8 47.9 50.4 85.7 98.3 98.5c28.2 7.6 83.7 12.3 161.7 15.2c37.1 1.4 76.8 2.3 116.5 2.8c13.9.2 26.8.3 38.4.4h29.4c11.6-.1 24.5-.2 38.4-.4c39.7-.5 79.4-1.4 116.5-2.8c78-3 133.5-7.7 161.7-15.2c47.9-12.8 85.5-50.5 98.3-98.5c6.1-22.6 10.4-52.7 13.4-88.8c2.2-26.2 3.6-54 4.4-81.9c.3-9.7.4-18.8.5-26.9c0-2.9.1-5.4.1-7.6v-5.6zm-72 5.2c0 2.1 0 4.4-.1 7.1c-.1 7.8-.3 16.4-.5 25.7c-.7 26.6-2.1 53.2-4.2 77.9c-2.7 32.2-6.5 58.6-11.2 76.3c-6.2 23.1-24.4 41.4-47.4 47.5c-21 5.6-73.9 10.1-145.8 12.8c-36.4 1.4-75.6 2.3-114.7 2.8c-13.7.2-26.4.3-37.8.3h-28.6l-37.8-.3c-39.1-.5-78.2-1.4-114.7-2.8c-71.9-2.8-124.9-7.2-145.8-12.8c-23-6.2-41.2-24.4-47.4-47.5c-4.7-17.7-8.5-44.1-11.2-76.3c-2.1-24.7-3.4-51.3-4.2-77.9c-.3-9.3-.4-18-.5-25.7c0-2.7-.1-5.1-.1-7.1v-4.8c0-2.1 0-4.4.1-7.1c.1-7.8.3-16.4.5-25.7c.7-26.6 2.1-53.2 4.2-77.9c2.7-32.2 6.5-58.6 11.2-76.3c6.2-23.1 24.4-41.4 47.4-47.5c21-5.6 73.9-10.1 145.8-12.8c36.4-1.4 75.6-2.3 114.7-2.8c13.7-.2 26.4-.3 37.8-.3h28.6l37.8.3c39.1.5 78.2 1.4 114.7 2.8c71.9 2.8 124.9 7.2 145.8 12.8c23 6.2 41.2 24.4 47.4 47.5c4.7 17.7 8.5 44.1 11.2 76.3c2.1 24.7 3.4 51.3 4.2 77.9c.3 9.3.4 18 .5 25.7c0 2.7.1 5.1.1 7.1v4.8zM423 646l232-135l-232-133z"
                                                fill="currentColor" /></svg>
                                </a></li>
                                @endif   
                            </ul>
                        </div>
                        <div class="cs-menus">
                            <ul>
                                <li><a href="#">Disclaimer</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.meanmenu.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</body> 
</html>