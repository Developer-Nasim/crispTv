@extends('layouts.frontend')
@section('HeaderClasses')black-header-top-area @endsection
@section('projectMenu')active-menu @endsection
@section('page_title') - Projects @endsection
@section('frontend_content')
@php  
  $Project = App\Project::get()->all();  
  $Brands = App\Brands::get()->take(5);
  $HeroBackg = App\OtherMedia::where('position','project-hero')->get()->first(); 
@endphp
  <!-- hero-area-start-here -->
  @php
    $backg = "";
        
    if ($HeroBackg){
        $backg = $HeroBackg->img;
    }
   
  @endphp
  <!-- hero-area-start-here -->
  <section class="hero-area projects-hero-area" >
    <div class="container">
      <div class="row">
        <div class="col-lg-7 wow fadeInLeft" data-wow-delay=".3s">
          <div class="projects-hero-content">
            <h1>Every project is a launchpad for something amazing.</h1>
            <h3>Selected Media Projects </h3>
            <p>across Event Videography, Multimedia Campaign/PR, Advertising, Virtual experience/Conferencing etc.</p>
          </div>
        </div>
        <div class="col-lg-5 wow fadeInRight" data-wow-delay=".3s">
          <div class="projects-hero-content-right">
              @if ($backg)
                <img src="/{{$backg}}" alt="">
              @endif
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- projects-logo-area-start-here -->
  <section class="projects-logo-area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-11 wow fadeInUp" data-wow-delay=".3s">
          <div class="row">
            @if (count($Brands) > 0)
              @foreach ($Brands as $item) 
                <div class="col-lg-2 col-md-4 col-6">
                  <div class="driving-growth-single-logo">
                    <img src="/{{$item->logo}}" alt="">
                  </div>
                </div>
              @endforeach
            @endif 
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- projects-single-area-start-here -->
  <section class="projects-single-area">
    <div class="container">
      <div class="row">
        <div class="col">
          @if (count($Project) > 0)
              @foreach ($Project as $item) 
                <div class="projects-single-post">
                  <div class="row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                      <div class="project-single-post-img">
                        <img src="/{{$item->img}}" alt="">
                      </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                      <div class="project-single-post-text">
                        <h2>{{$item->title}}</h2>
                        {!! $item->content !!}
                        <a href="/projects/{{$item->id}}/{{$item->title}}" class="view-case-study-btn">view case study</a>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
          @endif
    
        </div>
      </div>
    </div>
  </section>
 
@endsection