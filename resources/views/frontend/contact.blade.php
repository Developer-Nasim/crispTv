@extends('layouts.frontend')
@section('HeaderClasses')contact-header-top-area @endsection
@section('contactMenu')active-menu @endsection
@section('page_title') - Contact @endsection
@section('frontend_content') 
@php  
  $genData = App\generalInfo::get()->first();   
@endphp
    <!-- contact-form-area-start-here -->
    <section class="contact-form-area">
        <div class="container">
            <div class="row">
                <div class="col wow fadeInLeft" data-wow-delay=".3s">
                    <div class="get-in-touch-title">
                        <h1>Get in touch!</h1>
                        <p>Contact us for a quote, help or to join the team </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        @if ($genData) 
                            @if ($genData->address) 
                                <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="single-getin-touch">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            aria-hidden="true" role="img" width="1em" height="1em"
                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                            <g fill="none">
                                                <path
                                                    d="M12 21a29.776 29.776 0 0 1-3.5-3.531C6.9 15.558 5 12.712 5 10a7 7 0 0 1 11.952-4.951A6.955 6.955 0 0 1 19 10c0 2.712-1.9 5.558-3.5 7.469A29.777 29.777 0 0 1 12 21zm0-14a3 3 0 1 0 0 6a3 3 0 0 0 0-6z"
                                                    fill="currentColor" />
                                            </g>
                                        </svg>
                                        <div class="single-getin-touch-text">
                                            <p>{{$genData->address}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            
                            @if ($genData->number) 
                                <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="single-getin-touch">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            aria-hidden="true" role="img" width="1em" height="1em"
                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                            <path
                                                d="M4.024 9L4 8.931C3.46 7.384 3 5.27 3 4c0-.55.45-1 1-1h3a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-.837A16.054 16.054 0 0 0 15 17.837V17a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v3c0 .45-.55 1-1 1c-1.725 0-3.44-.456-5-1c-5.114-1.832-9.168-5.886-10.976-11z"
                                                fill="currentColor" fill-rule="evenodd" /></svg>
                                        <div class="single-getin-touch-text">
                                            <a href="tel:{{$genData->number}}">{{$genData->number}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($genData->email) 
                                <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="single-getin-touch">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            aria-hidden="true" role="img" width="1em" height="1em"
                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 100 100">
                                            <g fill="currentColor">
                                                <path
                                                    d="M85.944 20.189H14.056a2.559 2.559 0 0 0-2.556 2.557v5.144c0 .237.257.509.467.619l37.786 21.583a.63.63 0 0 0 .318.083a.634.634 0 0 0 .324-.088L87.039 28.53c.206-.115.752-.419.957-.559c.248-.169.504-.322.504-.625v-4.601a2.559 2.559 0 0 0-2.556-2.556z" />
                                                <path
                                                    d="M88.181 35.646a.644.644 0 0 0-.645.004L66.799 47.851a.637.637 0 0 0-.145.985l20.74 22.357a.632.632 0 0 0 .467.204a.64.64 0 0 0 .639-.639V36.201a.638.638 0 0 0-.319-.555z" />
                                                <path
                                                    d="M60.823 51.948a.636.636 0 0 0-.791-.118l-8.312 4.891a3.243 3.243 0 0 1-3.208.021l-7.315-4.179a.64.64 0 0 0-.751.086L12.668 78.415a.64.64 0 0 0 .114 1.02c.432.254.849.375 1.273.375h71.153a.635.635 0 0 0 .585-.385a.635.635 0 0 0-.118-.689L60.823 51.948z" />
                                                <path
                                                    d="M34.334 49.601a.639.639 0 0 0-.115-1.023L12.453 36.146a.638.638 0 0 0-.953.556v32.62a.637.637 0 0 0 1.073.468l21.761-20.189z" />
                                            </g>
                                        </svg>
                                        <div class="single-getin-touch-text">
                                            <a href="mailto:{{$genData->email}}">{{$genData->email}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 wow fadeInUp" data-wow-delay=".3s">
                    <div class="contact-form">
                        <h3>Contact Form </h3>
                        @if ($message = Session::get('message') == "success") 
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ "Ah Successfully sent" }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @elseif ($message = Session::get('message') == "failed") 
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ "Sorry something wents wrong" }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <form action="/submit/contact" method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-form-element">
                                        <label for="name">Your Name</label>
                                        <input type="name" name="name" required>
                                    </div>
                                    <div class="single-form-element">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" required>
                                    </div>
                                    <div class="single-form-element">
                                        <label for="phone">Phone</label>
                                        <input type="tel" name="number" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-form-element">
                                        <label for="message">Message</label>
                                        <textarea name="message" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12"> 
                                    <div class="form-services-btn">
                                        <span>Services</span> 
                                        <div > 
                                            <label class="ckb">
                                                <input type="radio" checked="checked" name="services" value="Video production">
                                                <span class="checkmark">Video production</span>
                                            </label>
                                            <label class="ckb">
                                                <input type="radio" name="services" value="Advertising">
                                                <span class="checkmark">Advertising</span>
                                            </label>
                                            <label class="ckb">
                                                <input type="radio" name="services" value="Brand Activation">
                                                <span class="checkmark">Brand Activation</span>
                                            </label>
                                            <label class="ckb">
                                                <input type="radio" name="services" value="Other">
                                                <span class="checkmark">Other</span>
                                            </label>
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                            <input type="submit" value="Send message">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-page-social-follow-area-start-here -->
    <section class="contact-page-social-follow">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay=".3s">
                    <div class="contact-page-social-follow-content text-center">
                        <h3>Follow us on social media</h3>
                        <p>Stay updated with the latest on all things CrispTv</p>
                        @if ($genData) 
                            <ul>
                                @if ($genData->fb)
                                    <li><a href="{{$genData->fb}}"><img src="assets/img/social-icons/facebook.png" alt=""></a></li>
                                @endif
                                @if ($genData->tw)
                                    <li><a href="{{$genData->tw}}"><img src="assets/img/social-icons/twitter.png" alt=""></a></li>
                                @endif
                                @if ($genData->insta)
                                    <li><a href="{{$genData->insta}}"><img src="assets/img/social-icons/Instagram.png" alt=""></a></li>
                                @endif
                                @if ($genData->ytb)
                                    <li><a href="{{$genData->ytb}}"><img src="assets/img/social-icons/Youtube.png" alt=""></a></li>
                                @endif
                                @if ($genData->linkedin)
                                    <li><a href="{{$genData->linkedin}}"><img src="assets/img/social-icons/Linkedin.png" alt=""></a></li>
                                @endif
                                @if ($genData->mighty)
                                    <li><a href="{{$genData->mighty}}"><img src="assets/img/social-icons/1.png" alt=""></a></li>
                                @endif 
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection