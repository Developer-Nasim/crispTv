@extends('layouts.frontend')
@section('HeaderClasses')wh-header-top-area @endsection
@section('wedoMenu')active-menu @endsection
@section('page_title') - What we do @endsection
@section('frontend_content')

@php  
  $WhatWeDo = App\WhatWeDo::get()->first(); 
  $MoreInfo = App\MoreInfo::get()->first(); 
  $Services = App\Services::get()->all();  
@endphp
  <!-- hero-area-start-here -->
  <section class="what-we-do-hero-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 wow fadeInLeft" data-wow-delay=".3s">
          <div class="what-we-do-hero-left">
            <h1>What we do</h1>
            @if ($WhatWeDo) 
              {!! $WhatWeDo->content !!}
              @if ($WhatWeDo->another_img) 
                <img src="/{{$WhatWeDo->another_img}}" alt="">
              @endif
            @endif
          </div>
        </div>
        <div class="col-lg-7 wow fadeInRight" data-wow-delay=".3s">
          <div class="what-we-do-hero-right">
            <div class="what-we-do-hero-right-img">
              @if ($WhatWeDo->main_img) 
                <img src="/{{$WhatWeDo->main_img}}" alt="">
              @endif 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- our-services-area-start-here -->
  <section class="our-services-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
          <div class="our-services-title-content">
            <h1>Our services</h1>
            <p>With our following service, we provide you with
              everything you need to build a successful
              project in the virtual world</p>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="our-services-item">
            <div class="row">
              @if (count($Services) > 0)
                  @foreach ($Services as $item) 
                    <div class="col-md-6 wow fadeInUp" data-wow-delay=".3s">
                      <div class="our-services-single-item">
                        <div class="our-services-single-item-icon">
                          <img src="/{{$item->img}}" alt="">
                        </div>
                        <h3>{{$item->title}}</h3>
                        {!! $item->content !!}
                        <a href="/services/{{$item->id}}/{{$item->title}}" class="services-learn-more-btn">LEARN MORE</a>
                      </div>
                    </div>
                  @endforeach
              @endif 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- counter-area-start-here -->
  <section class="counter-area">
    <div class="container">
      @if ($MoreInfo) 
        <div class="row">
          <div class="col-md-4 wow fadeInUp" data-wow-delay=".3s">
            <div class="single-counter-box">
              <div class="counter-number">
                {{-- <span class="counter">98</span> --}}
                {{-- <span>%</span> --}}
                <span>{{$MoreInfo->feedbacks}}</span>
              </div>
              <p>Positive feedback</p>
            </div>
          </div>
          <div class="col-md-4 wow fadeInUp" data-wow-delay=".3s">
            <div class="single-counter-box">
              <div class="counter-number">
                {{-- <span class="counter">350</span>
                <span>+</span> --}}
                <span>{{$MoreInfo->projects}}</span>
              </div>
              <p>Finished projects</p>
            </div>
          </div>
          <div class="col-md-4 wow fadeInUp" data-wow-delay=".3s">
            <div class="single-counter-box">
              <div class="counter-number">
                {{-- <span class="counter">2002</span> --}}
                <span>{{$MoreInfo->we_are_since}}</span>
              </div>
              <p>We are here since</p>
            </div>
          </div>
        </div>
      @endif
    </div>
  </section>

@endsection