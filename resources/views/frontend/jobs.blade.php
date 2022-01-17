@extends('layouts.frontend')
@section('HeaderClasses')wh-header-top-area @endsection
@section('careerMenu')active-menu @endsection
@section('page_title') - Jobs @endsection
@section('frontend_content')

@php   
  $Careers = App\Careers::get()->all();
@endphp
  <!-- hero-area-start-here -->
  <section class="hero-area blog-hero-area">
    <div class="container">
      <div class="row">
        <div class="col wow fadeInLeft" data-wow-delay=".3s">
          <div class="blog-hero-content">
            <h1>Jobs</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- blog-latest-post-area-start-here -->
  <section class="blog-latest-post-area">
    <div class="container">
      <div class="row">
        <div class="col wow fadeInUp" data-wow-delay=".3s">
          <div class="blog-leatest-post-sec-title">
            <h3>All Jobs</h3>
          </div>
        </div>
      </div>
      <div class="row">
        @if (count($Careers) > 0) 
          @foreach ($Careers as $item)
            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
              <div class="blog-single-latest-post"> 
                <h4>{{$item->title}}</h4>
                <span><a href="/career/job/{{$item->id}}/{{$item->title}}">Read more</a></span>
              </div>
            </div>
          @endforeach
        @endif 
      </div>
    </div>
  </section>

@endsection