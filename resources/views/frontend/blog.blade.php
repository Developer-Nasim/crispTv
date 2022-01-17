@extends('layouts.frontend')
@section('HeaderClasses')wh-header-top-area @endsection
@section('blogMenu')active-menu @endsection
@section('page_title') - Blogs @endsection
@section('frontend_content')

@php   
  $blogs = App\Blog::get()->all(); 
@endphp
  <!-- hero-area-start-here -->
  <section class="hero-area blog-hero-area">
    <div class="container">
      <div class="row">
        <div class="col wow fadeInLeft" data-wow-delay=".3s">
          <div class="blog-hero-content">
            <h1>Blog</h1>
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
            <h3>Latest</h3>
          </div>
        </div>
      </div>
      <div class="row">
        @if (count($blogs) > 0) 
          @foreach ($blogs as $item) 
            <div class="col-lg-4 wow fadeInUp" data-wow-delay=".3s">
              <div class="blog-single-latest-post">
                <a href="/blog/{{$item->id}}/{{$item->title}}" class="blog-single-latest-post-img">
                  <img src="/{{$item->img}}" alt="">
                </a>
                <span><a href="/blog/{{$item->id}}/{{$item->title}}">Read more</a>5 mins read</span>
                <h4>{{$item->title}}</h4>
              </div>
            </div>
          @endforeach
        @endif 
      </div>
    </div>
  </section>

@endsection