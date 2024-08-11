@extends('layouts.nav')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" dir="ltr">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel" dir="ltr">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);   " dir="ltr">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2><span>{{ trans('main.mofker-center') }}</span></h2>
              <p>{{trans('main.hero-content')}}.</p>
              <div class="text-center"><a href="#about"    class="btn-get-started">{{trans('main.read-more')}}</a></div>
            </div>
          </div>
        </div>


      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
   
          <div class="col-lg-6 about-img">
            @if(empty($abouts->image))
            <img src="assets/img/services/ob-4.svg" alt="">
            @else
            <img src="uploads/abouts/{{$abouts->image ?? ''}}" alt="">
            @endif
          </div>
  
          <div class="col-lg-6 content">
            @if(App::getLocale()=='en')
            <h2> {{$abouts->title ?? ''}}</h2>
            <h3> {{$abouts->title ?? ''}}</h3>
            <p>{{$abouts->description ??''}}</p>
            @else
            <h2> {{$abouts->title_ar ?? ''}}</h2>
            <h3> {{$abouts->title_ar ??''}}</h3>
            <p>{{$abouts->description_ar ??''}}</p>
            @endif
  
          </div>
        </div>
  
      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bx bxl-dribbble"></i>
              </div>
              <h4><a href="">{{ trans('main.Vision') }}</a></h4>
              @if(App::getlocale()== 'en')
              <p>{{ $visions->vision ?? '' }}</p>
              @else
              <p>{{ $visions->vision_ar ?? '' }}</p>
              @endif
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bx-file"></i>
              </div>
              <h4><a href="">{{trans('main.message-center')}}</a></h4>
              @if(App::getlocale()== 'en')
              <p>{{$visions->message ?? '' }}</p>
              @else
              <p>{{$visions->message_ar ?? '' }}</p>
              @endif
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bx bx-tachometer"></i>
              </div>
              <h4><a href="">{{trans('main.values')}} </a></h4>
              @if(App::getlocale()== 'en')
              <p>{{$visions->values ?? '' }}</p>
              @else
              <p>{{$visions->values_ar ?? '' }}</p>
              @endif
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->




<!-- ======= Testimonials Section ======= -->
<section id="testimonials">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>{{__('main.Our-fields')}}</h2>
      <p>{{__('main.Our-fields-header')}}</p>
    </div>

    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

       @foreach($fields as $field)
       @if(App::getlocale()=='en')
        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="../uploads/fields/{{$field->image}}" class="testimonial-img" alt="">
            <h3>{{$field->title}}</h3>

            <p>
              {{$field->description}}
            </p>

          </div>
        </div><!-- End testimonial item -->
        @else
        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="../uploads/fields/{{$field->image}}" class="testimonial-img" alt="">
            <h3> {{$field->title_ar}}</h3>

            <p>
              {{$field->description_ar}}
            </p>

          </div>
        </div><!-- End testimonial item -->
        @endif

        @endforeach


      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Testimonials Section -->
    
   
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{trans('main.values')}}</h2>
          <p>{{trans('main.value-title')}}</p>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box">
              <i class="ri-store-line" style="color: #ffbb2c;"></i>
              <h3><a href="">{{trans('main.value-text1')}}</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
              <h3><a href="">{{trans('main.value-text2')}}</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
              <h3><a href="">{{trans('main.value-text3')}}</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
              <h3><a href="">{{trans('main.value-text4')}}</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #47aeff;"></i>
              <h3><a href="">{{trans('main.value-text5')}}</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
              <h3><a href="">{{trans('main.value-text6')}}</a></h3>
            </div>
          </div>
         
        </div>

      </div>
    </section><!-- End Features Section -->

<!-- ======= Call To Action Section ======= -->
<section id="about" >
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-lg-6 about-img">
        <img src="assets/img/services/ob-1.svg" alt="">
      </div>

      <div class="col-lg-6 content">
        <h2>
    {{trans('main.object')}}
        </h2>
        <h3> {{trans('main.object-header')}}</h3>

        <ul>
          <li><i class="bi bi-check-circle"></i> {{trans('main.object-1')}}</li>
          <li><i class="bi bi-check-circle"></i> {{trans('main.object-2')}}</li>
          <li><i class="bi bi-check-circle"></i> {{trans('main.object-3')}}</li>
          <li><i class="bi bi-check-circle"></i>{{trans('main.object-4')}}</li>
          <li><i class="bi bi-check-circle"></i>{{trans('main.object-5')}}</li>
          <li><i class="bi bi-check-circle"></i> {{trans('main.object-6')}}</li>
        </ul>

      </div>
    </div>

  </div>
</section><!-- End Call To Action Section -->


<section id="about">
  <div class="container" data-aos="fade-up">
    <div class="row">
     

      <div class="col-lg-6 content">
        <h2>
          {{trans('main.Implementation-mechanisms')}}
        </h2>

        <ul>
          <li><i class="bi bi-check-circle"></i> {{trans('main.Implementation-text-1')}}</li>
          <li><i class="bi bi-check-circle"></i>{{trans('main.Implementation-text-2')}}</li>
          <li><i class="bi bi-check-circle"></i> {{trans('main.Implementation-text-3')}}</li>
        
        </ul>

      </div>
      <div class="col-lg-6 about-img">
        <img src="assets/img/services/ob-2.svg" alt="">
      </div>
    </div>

  </div>
</section><!-- End Call To Action Section -->

<section id="team" class="testimonials section-bg">
  <div class="container">
    <div class="section-title">
      <h2>{{trans('main.Expert-panel')}}</h2>
     
    </div>

  <div class="row">
@foreach ($experts as $expert)
@if(App::getlocale()=='en')
      <div class="col-lg-6" data-aos="fade-up">
        <div class="testimonial-item">
          <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
          <h3>{{$expert->name}}</h3>
          <h4>Ceo &amp; {{$expert->job}}</h4>
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            {{$expert->brief}}.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>

            
          </p>&nbsp;
          <a href="{{ URL::asset('assets/img/cv/hassin_cv.pdf') }}" download="hassin_cv"><h3 class="text-primary"><i class="bi bi-download"> {{trans('main.cv')}}</i></h3></a>
         
        </div>
      </div>
      @else
      <div class="col-lg-6" data-aos="fade-up">
        <div class="testimonial-item">
          <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
          <h3>{{$expert->name_ar}}</h3>
          <h4>Ceo &amp; {{$expert->job_ar}}</h4>
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            {{$expert->brief_ar}}.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>

            
          </p>&nbsp;
          <a href="/uploads/experts/{{ $expert->cv}}" download="hassin_cv"><h3 class="text-primary"><i class="bi bi-download"> {{trans('main.cv')}}</i></h3></a>
         
        </div>
      </div>
      @endif

@endforeach
      


    </div>

  </div>
</section><!-- End Testimonials Section -->






 <!-- ======= Contact Section ======= -->
 <section id="contact">
  <div class="container" data-aos="fade-up">
    
    <div class="section-title">
      <h2>{{trans('main.info-call')}}</h2>
    </div>

    <div class="row contact-info">

      <div class="col-md-4">
        <div class="contact-address">
          <i class="bi bi-geo-alt"></i>
          <h3>{{trans('main.Address')}}</h3>
          <address>sudan-portsudan</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-phone">
          <i class="bi bi-phone"></i>
          <h3> {{trans('main.Phone Number')}}</h3>
          <p><a href="tel:{{$abouts->phone ?? ''}}">{{$abouts->phone ?? ''}}</a></p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
          <i class="bi bi-envelope"></i>
          <h3> {{trans('main.Email')}}</h3>
          <p><a href="mailto:{{$abouts->email ?? ''}}">{{$abouts->email ?? ''}}</a></p>
        </div>
      </div>

    </div>
  </div>

  <div class="container">
    <div class="form">
      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
        <div class="row">
          <div class="form-group col-md-6">
            <input type="text" name="name" class="form-control" id="name" placeholder="{{__('main.name')}} " required>
          </div>
          <div class="form-group col-md-6 mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="{{__('main.Email')}}" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="{{__('main.subject')}}" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="{{__('main.message')}}" required></textarea>
        </div>

        <br>
        <div class="text-center"><button type="submit">ارسال </button></div>
      </form>
    </div>

  </div>
</section><!-- End Contact Section -->
<div class="whatsapp-icon">
        
     @if(empty($abouts->whatsapp))   
  <a href="https://wa.link/klzlry"><span class="ico-circle"><i class="bi bi-whatsapp"style="bottom: 20px;
  right: 20px;
   left: 20px;
position: fixed;
width: 100px;height:100px;color:#1bbd36;   font-size: 32px;"></i></span></a>
  @else
  <a href="{{$abouts->whatsapp}}"><span class="ico-circle"><i class="bi bi-whatsapp"style="bottom: 20px;
    right: 20px;
     left: 20px;
  position: fixed;
  width: 100px;height:100px;color:#1bbd36;   font-size: 32px;"></i></span></a>
  @endif

</div> 


 </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>{{trans('main.center')}}</h3>
            <p>
             sudan-portsudan
              <strong> {{trans('main.Phone Number')}}:</strong> {{$abouts->phone ?? ''}}<br>
              <strong>{{trans('main.Email')}}:</strong> {{$abouts->email ?? ''}}<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>{{trans('main.Useful-Links')}}</h4>
            <ul>
              
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/')}}">{{__('main.home')}}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">{{__('main.about')}}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">{{__('main.Expert-panel')}}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#breadcrumbs">{{__('main.object')}}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">{{__('main.contact')}}y</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>{{trans('main.Our-Services')}}</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/')}}">{{__('main.home')}}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">{{__('main.about')}}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">{{__('main.Expert-panel')}}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#breadcrumbs">{{__('main.object')}}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">{{__('main.contact')}}y</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>{{trans('main.footer')}}</p>
          
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>{{trans('main.center')}}</span></strong>{{trans('main.footer')}}
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
          Designed by <a href="https://abdosh.softteech.com/">abdalmajed</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="{{$abouts->tweeter ?? ''}}" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="{{$abouts->facebook ?? ''}}" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="{{$abouts->Instagram ?? ''}}" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="{{$abouts->whatsapp ?? ''}}" class="google-plus"><i class="bx bxl-whatsapp"></i></a>
        <a href="" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 

</body>

</html>


@stop