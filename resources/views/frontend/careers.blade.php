@extends('layouts.frontend')
@section('HeaderClasses')contact-header-top-area @endsection
@section('careerMenu')active-menu @endsection
@section('page_title') - Careers @endsection
@section('frontend_content')

@php   
  $genData = App\generalInfo::get()->first(); 
  $avatersTribe = App\OtherMedia::where('position','avaters-tribe')->get()->all(); 
  $careerTribe  = App\OtherMedia::where('position','career-tribe')->get()->all();
  $coreVlu    = App\CoreValues::get()->all();
  $TeamReview = App\TeamReview::get()->all(); 

  $app_name = "";
  if ($genData && $genData->name) {
    $app_name = $genData->name;
  }

  $tribeAvater = ""; 
  $tribeAvater2 = "";
  $tribeAvater3 = "";
  $tribeAvater4 = "";
  $tribeAvater5 = "";
  $tribeAvater6 = "";
  $tribeAvater7 = "";
  if (count($avatersTribe) > 0) {
    $tribeAvater = $avatersTribe[0]->img;
  }
  if (count($avatersTribe) > 1) {
    $tribeAvater2 = $avatersTribe[1]->img;
  }
  if (count($avatersTribe) > 2) {
    $tribeAvater3 = $avatersTribe[2]->img;
  }
  if (count($avatersTribe) > 3) {
    $tribeAvater4 = $avatersTribe[3]->img;
  }
  if (count($avatersTribe) > 4) {
    $tribeAvater5 = $avatersTribe[4]->img;
  }
  if (count($avatersTribe) > 5) {
    $tribeAvater6 = $avatersTribe[5]->img;
  }
  if (count($avatersTribe) > 6) {
    $tribeAvater7 = $avatersTribe[6]->img;
  } 


  $careeTribeImg  = "";
  $careeTribeImg2 = "";
  $careeTribeImg3 = "";
  $careeTribeImg4 = "";
  $careeTribeImg5 = "";
  if (count($careerTribe) > 0) {
    $careeTribeImg = $careerTribe[0]->img; 
  }
  if (count($careerTribe) > 1) {
    $careeTribeImg2 = $careerTribe[1]->img; 
  }
  if (count($careerTribe) > 2) {
    $careeTribeImg3 = $careerTribe[2]->img; 
  }
  if (count($careerTribe) > 3) {
    $careeTribeImg4 = $careerTribe[3]->img; 
  }
  if (count($careerTribe) > 4) {
    $careeTribeImg5 = $careerTribe[4]->img; 
  }
  
@endphp

  <!-- careers-hero-area-start-here -->
  <section class="careers-hero-area">
    <div class="container">
      <div class="row wow fadeInUp" data-wow-delay=".3s">
        <div class="col-lg-3">
          <div class="careers-hero-content-left text-right">
            <div class="careers-hero-content-left-single">
              @if ($tribeAvater)
                <img src="/{{$tribeAvater}}" alt="">
              @endif
            </div>
            <div class="careers-hero-content-left-single careers-hero-content-left-single-2">
              @if ($tribeAvater2)
                <img src="/{{$tribeAvater2}}" alt="">
              @endif
            </div>
            <div class="careers-hero-content-left-single careers-hero-content-left-single-3">
              @if ($tribeAvater3)
                <img src="/{{$tribeAvater3}}" alt="">
              @endif
            </div>
            <div class="careers-hero-content-left-single careers-hero-content-left-single-4">
              @if ($tribeAvater4)
                <img src="/{{$tribeAvater4}}" alt="">
              @endif
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="careers-hero-area-content text-center">
            <h2>Are you ready
              for the Challenge?</h2>
              <h1>Join the Tribe</h1>
              <p>Malesuada vitae habitant ipsum neque. 
                Commodo justo accumsan turpis quis ut mauris nunc.</p>
                <a href="/career/jobs" class="careers-explore-btn">Explore open roles</a>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="careers-hero-content-left text-left">
            <div class="careers-hero-content-left-single careers-hero-content-left-single-6">
              @if ($tribeAvater5)
                <img src="/{{$tribeAvater5}}" alt="">
              @endif 
            </div>
            <div class="careers-hero-content-left-single careers-hero-content-left-single-7">
              @if ($tribeAvater6)
                <img src="/{{$tribeAvater6}}" alt="">
              @endif 
            </div>
            <div class="careers-hero-content-left-single careers-hero-content-left-single-5">
              @if ($tribeAvater7)
                <img src="/{{$tribeAvater7}}" alt="">
              @endif 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- careers-gallery-area-start-here -->
  <section class="careers-gallery-area">
    <div class="container">
      @if (count($careerTribe) > 0) 
        <div class="row">
          <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
            <div class="careers-single-gallery-item careers-single-gallery-item-featured">
              <img src="/{{$careeTribeImg}}" alt="">
            </div>
          </div>
          <div class="col-lg-7">
            <div class="row">
              <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                @if ($careeTribeImg2) 
                  <div class="careers-single-gallery-item">
                    <img src="/{{$careeTribeImg2}}" alt="">
                  </div>
                @endif
                @if ($careeTribeImg3) 
                  <div class="careers-single-gallery-item">
                    <img src="/{{$careeTribeImg3}}" alt="">
                  </div>
                @endif 
              </div>
              <div class="col-lg-6 wow fadeInUp" data-wow-delay=".6s">
                @if ($careeTribeImg4) 
                  <div class="careers-single-gallery-item">
                    <img src="/{{$careeTribeImg2}}" alt="">
                  </div>
                @endif
                @if ($careeTribeImg5) 
                  <div class="careers-single-gallery-item">
                    <img src="/{{$careeTribeImg3}}" alt="">
                  </div>
                @endif 
              </div>
            </div>
          </div>
        </div>
      @endif
    </div>
  </section>
  <!-- our-core-values-area-start-here -->
  <section class="our-core-values-area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
          <div class="why-crisptv-title text-center">
            <h2>Why CrispTv?</h2>
            <p>Malesuada vitae habitant ipsum neque.
              Commodo justo accumsan turpis quis ut mauris nunc.</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
          <div class="why-crisptv-title core-values-title text-center">
            <h2>Our core values</h2>
            <p>Commodo justo accumsan turpis quis ut mauris nunc.</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <div class="row">
            @if (count($coreVlu) > 0) 
              @foreach ($coreVlu as $item) 
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".3s">
                  <div class="single-core-values-item">
                    <div class="single-core-values-item-icon">
                      <img src="/{{$item->img}}" alt="">
                    </div>
                    <h3>{{$item->title}}</h3>
                    {!! $item->content !!}
                  </div>
                </div>
              @endforeach
            @endif 
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- team-say-about-crisptv-area -->
  <section class="team-say-about-crisptv">
    <div class="container">
      <div class="row">
        <div class="col wow fadeInUp" data-wow-delay=".3s">
          <div class="team-say-about-crisptv-title text-center">
            <h2>What our team say about {{$app_name}}</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col wow fadeInUp" data-wow-delay=".3s">
          <div class="team-say-about-crisptv-slides owl-carousel">
            @if (count($TeamReview) > 0) 
              @foreach ($TeamReview as $item) 
                <div class="team-say-about-crisptv-single-slide">
                  {!! $item->content !!}
                  <div class="team-user-details">
                    <img src="/{{$item->img}}" alt="">
                    <h3>{{$item->name}} <span>{{$item->title}}</span></h3>
                  </div>
                </div>
              @endforeach
            @endif 
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- boundaries-area-start-here -->
  <section class="boundaries-area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
        <div class="boundaries-content text-center">
          <h1>Ready to break boundaries with us?</h1>
          <a href="/career/jobs" class="boundaries-explore-btn">Explore open roles</a>
        </div>
      </div>
    </div>
    </div>
  </section>

@endsection