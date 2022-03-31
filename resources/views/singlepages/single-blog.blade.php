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






{{-- 
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
              <script id="dsq-count-scr" src="//crisptv.disqus.com/count.js" async></script> --}}

              @php  
                $slug=$getBlog->title;
                $articleIdc=$getBlog->title;
                $base_url = ( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on' ? 'https' : 'http' ) . '://' .  $_SERVER['HTTP_HOST'];
                $url = $base_url . $_SERVER["REQUEST_URI"]; 
              @endphp          

              <div class="social_media_share"> 
                <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo $url; ?>">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/1024px-Facebook_Logo_%282019%29.png" >
                </a> 
                <a target="_blank" href="http://twitter.com/share?text=Visit the link &url=<?php echo $url; ?>&hashtags=blog,technosmarter,programming,tutorials,codes,examples,language,development">
                  <img src="http://assets.stickpng.com/images/5a2fe3efcc45e43754640848.png" >
                </a> 
                <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url; ?>"> 
                  <img src="https://www.freepnglogos.com/uploads/linkedin-basic-round-social-logo-png-13.png" >
                </a> 
                  <a target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php echo $url; ?>">
                  <img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-svg-vector.svg" >
                </a>
              </ul> 


          </div>   
      </div>
    </div>
  </section>
@endif

@endsection