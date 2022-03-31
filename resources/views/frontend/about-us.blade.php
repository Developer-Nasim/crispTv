@extends('layouts.frontend')
@section('HeaderClasses')about-header-top-area @endsection
@section('aboutMenu')active-menu @endsection
@section('page_title') - About Us @endsection
@section('frontend_content')

@php  
  $genData = App\generalInfo::get()->first(); 
  $abouTribe = App\OtherMedia::where('position','about-tribe')->get()->take(5); 
  $HeroBackg = App\OtherMedia::where('position','about-hero')->get()->first();
  $mission = App\MissionVision::where('type','mission')->get()->first();
  $vision = App\MissionVision::where('type','vision')->get()->first();
  $about = App\About::get()->first();
@endphp
  <!-- hero-area-start-here -->
  @php
    $backg = "";
        
    if ($HeroBackg){
        $backg = $HeroBackg->img;
    }
   
  @endphp
  <section class="hero-area about-hero-area" style="background-image: url(/{{$backg}})">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="about-hero-content wow fadeInLeft" data-wow-delay=".3s">
            <h1>Who we are</h1>
            <p>We build creative assets that stand out and break creative barriers</p>
            <span>#ThCrispTvHQ</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- work-with-us-area-tart-here -->
  <section class="work-with-us-area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <div class="row">
            <div class="col-lg-6 order-lg-1 order-2 wow fadeInUp" data-wow-delay=".3s">
              <div class="work-with-us-left-content">
                @if ($about) 
                  <span>#TheCrispTvHQ</span>
                  <h3>{{$about->title}} </h3>
                  {!! $about->content !!}
                  <a href="/contact" class="work-with-us-btn">Work with us</a>
                @endif
              </div>
            </div>
            @if ($about) 
              <div class="col-lg-6 order-lg-2 order-1 wow fadeInUp" data-wow-delay=".5s">
                <div class="work-with-us-right-content">
                  <img src="/{{$about->img}}" alt="">
                </div>
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- crisptv-media-area-start-here -->
  <section class="crisptv-media-area">
    <div class="container">
      <div class="row">
        <div class="col wow fadeInUp" data-wow-delay=".3s">
          <div class="crisptv-media-title">
            @if ($genData && $genData->name) 
              <span>{{$genData->name}} media</span>
            @endif
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="crisptv-media-content">
            @if ($vision) 
              <div class="crisptv-media-single-content wow fadeInUp" data-wow-delay=".3s">
                <h2>Vision</h2>
                {!! $vision->content !!}
              </div>
              <hr>
            @endif
            @if ($mission) 
            <div class="crisptv-media-single-content wow fadeInUp" data-wow-delay=".5s">
              <h2>Mission</h2>
              {!! $mission->content !!}
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- tribe-area-start-here -->
  <section class="tribe-area">
    <div class="container">
      <div class="row">
        <div class="col wow fadeInUp" data-wow-delay=".3s">
          <div class="tribe-title">
            <h2>The Tribe</h2>
          </div>
        </div>
      </div>
      @if (count($abouTribe) > 0) 
        <div class="row">
          <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
            <div class="single-tribe-content single-featured-tribe-content">
              <img src="/{{$abouTribe[0]->img}}" alt="">
            </div>
          </div>
          <div class="col-lg-7">
            <div class="row">
              @php
                  $tribe_2 = "";
                  $tribe_3 = "";
                  $tribe_4 = "";
                  $tribe_5 = "";
                  if (count($abouTribe) > 1) {
                    $tribe_2 = $abouTribe[1]->img;
                  }
                  if (count($abouTribe) > 2) {
                    $tribe_3 = $abouTribe[2]->img;
                  }
                  if (count($abouTribe) > 3) {
                    $tribe_4 = $abouTribe[3]->img;
                  }
                  if (count($abouTribe) > 4) {
                    $tribe_5 = $abouTribe[4]->img;
                  }
              @endphp
              <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                @if ($tribe_2) 
                  <div class="single-tribe-content">
                    <img src="/{{$tribe_2}}" alt="">
                  </div>
                @endif
                @if ($tribe_3) 
                  <div class="single-tribe-content">
                    <img src="/{{$tribe_3}}" alt="">
                  </div>
                @endif
              </div>
              <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                @if ($tribe_4) 
                  <div class="single-tribe-content">
                    <img src="/{{$tribe_4}}" alt="">
                  </div>
                @endif
                @if ($tribe_5) 
                  <div class="single-tribe-content">
                    <img src="/{{$tribe_5}}" alt="">
                  </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      @endif
    </div>
  </section>

@endsection