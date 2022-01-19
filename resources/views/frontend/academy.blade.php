@extends('layouts.frontend')
@section('HeaderClasses')events-header-top-area @endsection
@section('academyMenu')active-menu @endsection
@section('page_title') - Academy @endsection
@section('frontend_content')

@php   
  $Testimonial  = App\Testimonial::get()->all();
  $HeroBackg = App\OtherMedia::where('position','academy-hero')->get()->first();
@endphp
  <!-- hero-area-start-here -->
 
  <section class="academy-hero-area">
      <div class="container">
          <div class="row">
              <div class="col-lg-7 order-2 order-lg-1 wow fadeInLeft" data-wow-delay=".3s">
                  <div class="academy-hero-content-left">
                      <h1>Get the skills you need for the job you want</h1>
                      <p>CrispTv academy is a skills development and job placement platform 
                        that trains and connects young African talents with long-term employment.</p>
                        <div class="academy-hero-content-btns">
                            <a href="" class="take-course-btn">Take a course</a>
                            <a href="" class="enroll-btn">Enroll now</a>
                        </div>
                  </div>
              </div>
              @if ($HeroBackg) 
                <div class="col-lg-5 order-1 order-lg-2 wow fadeInRight" data-wow-delay=".3s">
                    <div class="academy-hero-content-right">
                        <img src="/{{$HeroBackg->img}}" alt="">
                    </div>
                </div>
              @endif
          </div>
      </div>
  </section>
  <!-- employable-area-start-here -->
  <section class="employable-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
          <div class="employable-content-left">
            <h1>Be employable in 
              6 <del>years</del> months</h1>
              <p>Tristique ut tristique eget lobortis. 
                Malesuada vel elit sed nibh fusce adipiscing nec eu.</p>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".6s">
          <div class="employable-content-right">
            <div class="employable-content-right-single">
              <div class="employable-user">
                <img src="assets/img/employable-user-1.png" alt="">
                <h3>Eniola Asamau</h3>
              </div>
              <span>Hired</span>
            </div>
            <div class="employable-content-right-single">
              <div class="employable-user">
                <img src="assets/img/employable-user-2.png" alt="">
                <h3>Charles Uwagwu</h3>
              </div>
              <span>Hired</span>
            </div>
            <div class="employable-content-right-single">
              <div class="employable-user">
                <img src="assets/img/employable-user-3.png" alt="">
                <h3>Juliana Nwosu</h3>
              </div>
              <span>Hired</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- testimonial-area-start-here -->
  <section class="testimonial-area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9 wow fadeInUp" data-wow-delay=".3s">
          <div class="testimonials owl-carousel">
            @if (count($Testimonial) > 0) 
              @foreach ($Testimonial as $item) 
                <div class="single-testimonial-item">
                  <p>“{{$item->content}}”</p> 
                    <div class="testimonial-user">
                      <img src="/{{$item->img}}" alt="">
                      <h4>{{$item->name}} <span>{{$item->title}}</span></h4>
                    </div>
                </div>
              @endforeach
            @endif 
          </div>
        </div>
      </div>
    </div>
  </section>
  
@endsection