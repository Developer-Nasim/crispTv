@extends('layouts.frontend')
@section('homeMenu')active-menu @endsection
@section('frontend_content')
 
@php 
$Blogs = App\Blog::get()->take(4); 
$Brands = App\Brands::get()->all();
$homeHeroBackg = App\OtherMedia::where('position','home-hero')->get()->first();
$homeMeaningImg = App\OtherMedia::where('position','home-meaning')->get()->first();
$Tutorials = App\Tutorial::get()->take(5);
$backgs = "";
$Meaningbackg = "";
  if ($homeHeroBackg) {
    if ($homeHeroBackg->img) { 
      $backgs = $homeHeroBackg->img; 
    }
  }
  if ($homeMeaningImg) {
    if ($homeMeaningImg->img) { 
      $Meaningbackg = $homeMeaningImg->img; 
    }
  }
@endphp
 
 
  <!-- hero-area-start-here -->
  <section class="hero-area" style="background-image: url(/{{$backgs}})">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 offset-lg-1">
          <div class="hero-content-left wow fadeInLeft" data-wow-delay=".3s">
            <h1>Inspire</h1>
            <p>A New World is rising. <span>Let’s Discover it</span></p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="hero-content-right wow fadeInRight" data-wow-delay=".3s">
            <div class="hero-content-right-box">
              <h6>Award Winning </h6>
              <h2>Digital Creative Agency</h2>
              <p>We profer Video production, Tv commercials, Documentaries,
                Advertising, Marketing solutions within & outside Nigeria.</p>
              <p class="herop2">let's create something unusual.</p>
              <div class="subscription-form-1">
                <form action="/submit/subscribed" method="post">
                  @csrf
                  <input type="email" name="email" placeholder="Enter your email" required>
                  <input type="submit" value="get in touch">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- brand-voice-area-start-here -->
  <section class="brand-voice-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 order-lg-1 order-2">
          <div class="brand-voice-left wow fadeInUp" data-wow-delay=".3s">
            <h1>we give brands <br>
              <span>voice</span> & <br>
              meaning</h1>
            <p>creatively, we make it happen with an unusual
              mix of media marketing + business strategy.</p>
            <a href="/projects" class="button-explore">Explore all project <svg xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em"
                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                <g fill="none">
                  <path d="M4 12h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path d="M13 5l7 7l-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                </g>
              </svg>
            </a>
          </div>
        </div>
        <div class="col-lg-7 order-lg-2 order-1">
          <div class="brand-voice-right text-right wow fadeInUp" data-wow-delay=".5s">
            @if ($Meaningbackg) 
              <img src="/{{$Meaningbackg}}" width="100%" alt="Brand-voice-img">
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- we-help-area-start-here -->
  <section class="we-help-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
          <div class="we-help-title">
            <h1>So here's how we help
              your <span>business</span></h1>
          </div>
        </div>
      </div>
      @if (count($Tutorials) > 0)  
        <div class="row">
          <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
            <div class="we-help-step-1" style="background-image: url(/{{$Tutorials[0]->img}})">
              <div class="we-help-step-content">
                <h2>{{$Tutorials[0]->title}}</h2>
                <a href="javascript:void(0)" data-id="{{$Tutorials[0]->id}}" data-bs-toggle="modal" data-bs-target="#weHelp" class="we-help-step-btn">Learn more</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 wow fadeInUp" data-wow-delay=".4s">
            @if (count($Tutorials) > 1) 
              <div class="we-help-step-2">
                <div class="we-help-step-content">
                  <h2>{{$Tutorials[1]->title}}</h2>
                  <a href="javascript:void(0)" data-id="{{$Tutorials[1]->id}}" data-bs-toggle="modal" data-bs-target="#weHelp" class="we-help-step-btn">Learn more<svg xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em"
                      preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                      <path d="M4.8 21.57L7.222 24L19.2 12L7.222 0L4.8 2.43L14.347 12z" fill="currentColor" /></svg></a>
                </div>
              </div>
            @endif
            @if (count($Tutorials) > 2) 
              <div class="we-help-step-2 we-help-step-3">
                <div class="we-help-step-content">
                  <h2>{{$Tutorials[2]->title}}</h2>
                  <a href="javascript:void(0)" data-id="{{$Tutorials[2]->id}}" data-bs-toggle="modal" data-bs-target="#weHelp" class="we-help-step-btn">Learn more<svg xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em"
                      preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                      <path d="M4.8 21.57L7.222 24L19.2 12L7.222 0L4.8 2.43L14.347 12z" fill="currentColor" /></svg></a>
                </div>
              </div>
            @endif
          </div>
          <div class="col-lg-3 wow fadeInUp" data-wow-delay=".5s">
            @if (count($Tutorials) > 3) 
              <div class="we-help-step-2 we-help-step-4">
                <div class="we-help-step-content">
                  <h2>{{$Tutorials[3]->title}}</h2>
                  <a href="javascript:void(0)" data-id="{{$Tutorials[3]->id}}" data-bs-toggle="modal" data-bs-target="#weHelp" class="we-help-step-btn" >Learn more<svg xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em"
                      preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                      <path d="M4.8 21.57L7.222 24L19.2 12L7.222 0L4.8 2.43L14.347 12z" fill="currentColor" /></svg></a>
                </div>
              </div>
            @endif
            @if (count($Tutorials) > 4) 
              <div class="we-help-step-2 we-help-step-3 we-help-step-5">
                <div class="we-help-step-content">
                  <h2>{{$Tutorials[4]->title}}</h2>
                  <a href="javascript:void(0)" data-id="{{$Tutorials[4]->id}}" data-bs-toggle="modal" data-bs-target="#weHelp" class="we-help-step-btn" >Learn more<svg xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em"
                      preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                      <path d="M4.8 21.57L7.222 24L19.2 12L7.222 0L4.8 2.43L14.347 12z" fill="currentColor" /></svg></a>
                </div>
              </div>
            @endif
          </div>
        </div>
      @endif
    </div>
  </section>
  <!-- our-latest-post-area-start-here -->
  <section class="our-latest-post-area">
    <div class="container">
      <div class="row">
        <div class="col wow fadeInUp" data-wow-delay=".3s">
          <div class="latest-post-title">
            <span>from the blog</span>
            <h2>Check out our latest posts</h2>
          </div>
        </div>
      </div>
      <div class="row">
        @if (count($Blogs) > 0) 
          @foreach ($Blogs as $item) 
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".3s">
              <div class="single-latest-post">
                <span>{{date('d M Y ', strtotime($item->created_at))}}</span> 
                <h4>{{$item->title}}</h4>
                <a href="/blog/{{$item->id}}/{{$item->title}}" class="latest-post-read-more-btn">read more</a>
              </div>
            </div>
          @endforeach
        @endif 
      </div>
      <div class="row">
        <div class="col wow fadeInUp" data-wow-delay=".3s">
          <div class="latest-post-discover-button text-center">
            <a href="/blog" class="lp-discover-btn">Discover more <svg xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em"
                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                <g fill="none">
                  <path d="M4 12h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path d="M13 5l7 7l-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                </g>
              </svg></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- driving-growth-area-start-here -->
  <section class="driving-growth-area wow fadeInUp" data-wow-delay=".3s">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="driving-growth-title">
            <h2>Driving Growth For Businesses</h2>
            <p>We are proud to have deployed our media technology
              to help businesses/brands achieve growth</p>
          </div>
        </div>
      </div>
      <div class="row">
        @if (count($Brands) > 0) 
          @foreach ($Brands as $item) 
          <div class="col-lg-2 col-md-4 col-6">
            <div class="driving-growth-single-logo">
              <img src="{{$item->logo}}" alt="{{$item->name}}">
            </div>
          </div> 
          @endforeach 
        @endif
      </div>
    </div>
  </section> 

  
  <!-- Modal -->
  <div class="modal fade" id="weHelp" tabindex="-1" aria-labelledby="weHelpLabel" aria-hidden="true">
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
             
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024"><path fill="currentColor" d="M195.2 195.2a64 64 0 0 1 90.496 0L512 421.504L738.304 195.2a64 64 0 0 1 90.496 90.496L602.496 512L828.8 738.304a64 64 0 0 1-90.496 90.496L512 602.496L285.696 828.8a64 64 0 0 1-90.496-90.496L421.504 512L195.2 285.696a64 64 0 0 1 0-90.496z"/></svg>
        </button>
      </div>
    </div>
  </div>

  <script>

    window.addEventListener('load', () => { 
      let allBlk    = document.querySelectorAll('.we-help-area');
      let title     = document.querySelector('.modal-header-content-item h2');
      let subtitle  = document.querySelector('.modal-header-content-item p');
      let body      = document.querySelector('.modal-popup-content')
      allBlk.forEach(btn => {
        btn.addEventListener('click',(e) => {
          let id = e.target.dataset.id; 
          $.ajax({
              url: '/get/tutorial/'+id,
              type: 'GET', 
              success: function (data) {
                // console.log(data)
                title.innerHTML = data.title;
                subtitle.innerHTML = data.sub_title;
                body.innerHTML = data.content; 
              }
          }) 
        })
      });
    })
    

  </script>



@endsection