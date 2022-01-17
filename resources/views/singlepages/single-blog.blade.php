@extends('layouts.frontend')
@section('HeaderClasses')wh-header-top-area @endsection
@section('frontend_content')
 
@if ($getBlog)
  <!-- hero-area-start-here -->
 
  <!-- blog-latest-post-area-start-here -->
  <section class="blog-latest-post-area">
    <div class="container"> 
      <div class="row"> 
          <div class="col-lg-12 wow fadeInUp">
            <div class="blog-single-latest-post">
              <img src="/{{$getBlog->img}}" width="100%" alt="">
              <div class="mt-3" style="display: flex;justify-content:space-between;flex-wrap:wrap"><span>5 mins read</span> <span>{{date('M m Y, h:i:sa ', strtotime($getBlog->created_at))}}</span></div>
              <h4>{{$getBlog->title}}</h4>
              {!! $getBlog->content !!}
            </div>







              <div id="disqus_thread"></div>
              <script>
                  /**
                  *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                  *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                  /*
                  var disqus_config = function () {
                  this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                  this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                  };
                  */
                  (function() { // DON'T EDIT BELOW THIS LINE
                  var d = document, s = d.createElement('script');
                  s.src = 'https://crisptv.disqus.com/embed.js';
                  s.setAttribute('data-timestamp', +new Date());
                  (d.head || d.body).appendChild(s);
                  })();
              </script>
              <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
              <script id="dsq-count-scr" src="//crisptv.disqus.com/count.js" async></script>





          </div>   
      </div>
    </div>
  </section>
@endif

@endsection