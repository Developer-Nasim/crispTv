@extends('layouts.frontend')
@section('HeaderClasses')events-header-top-area @endsection
@section('eventMenu')active-menu @endsection
@section('page_title') - Event @endsection
@section('frontend_content')

@php   
  $eventBackg = App\OtherMedia::where('position','event-background')->get()->first();
  $bkg = "";
  if ($eventBackg) {
    $bkg = $eventBackg->img;
  }
@endphp


  <!-- crisptv-events-area-start-here -->
  <section class="crisptv-events-area" style="background-image: url(/{{$bkg}})">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <div class="crisptv-events-content">
            <h1>Reliable Event <br>
              Video Production Support</h1>
            <h3>Video coverage, LIVE STREAMING & WEBCAST</h3>
            <a href="#" class="premimum-viewer-btn">Become a premium viewer</a>
            <p><a href="#" class="what-does-mean-btn">What does this mean?</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection