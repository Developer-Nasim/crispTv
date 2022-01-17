@extends('layouts.frontend')
@section('HeaderClasses')wh-header-top-area @endsection
@section('frontend_content')
 
@if ($getDatas)
  <!-- hero-area-start-here -->
 
  <!-- blog-latest-post-area-start-here -->
  <section class="blog-latest-post-area">
    <div class="container"> 
      <div class="row"> 
          <div class="col-lg-12 wow fadeInUp">
            <div class="blog-single-latest-post"> 
              <div class="mt-3" style="display: flex;justify-content:space-between;flex-wrap:wrap"><span>{{date('M m Y, h:i:sa ', strtotime($getDatas->created_at))}}</span></div>
              <h4>{{$getDatas->title}}</h4>
              {!! $getDatas->content !!}
 
            </div> 
          </div>   
      </div>
    </div>
  </section>
@endif

@endsection