@extends('layouts.nav')
@section('content')
<!-- ======= hero Section ======= -->
<section id="hero">

  <div class="hero-content" data-aos="fade-up">
    <h2> {{__('main.hero-content')}} </h2>
    <div>
      <a href="#about" class="btn-get-started scrollto">{{__('main.about')}} </a>
      <a href="#portfolio" class="btn-projects scrollto">{{__('main.portfolio')}}</a>
    </div>
  </div>

  <div class="hero-slider swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/hero-01.jpg');"></div>
      <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/hero-02.jpg');"></div>
      <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/hero-03.jpg');"></div>
      <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/h9.jpg');"></div>
      <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/h4.jpg');"></div>
    </div>
  </div>

</section><!-- End Hero Section -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-6 about-img">
          <img src="assets/img/web4.svg" alt="">
        </div>

        <div class="col-lg-6 content">
          <h2> {{__('main.about')}}</h2>
          <h3> {{__('main.about-title')}}</h3>

          <p>{{__('main.about-text')}}</p>

        </div>
      </div>

    </div>
  </section><!-- End About Section -->


  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>{{__('main.services')}}</h2>
        <p>{{__('main.services-header')}}</p>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">

              <img src="assets/img/services/s5.svg" class="testimonial-img" alt="">
              <h3>{{__('main.services-title-1')}}</h3>

              <p>
                {{__('main.services-text-1')}}.

              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/services/s3.svg" class="testimonial-img" alt="">
              <h3>{{__('main.services-title-2')}}</h3>

              <p>
                {{__('main.services-text-2')}}.
              </p>

            </div>
          </div><!-- End testimonial item -->
          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/services/s4.svg" class="testimonial-img" alt="">
              <h3>{{__('main.services-title-3')}}</h3>

              <p>
                {{__('main.services-text-3')}}.
              </p>

            </div>
          </div><!-- End testimonial item -->
          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/web4.svg" class="testimonial-img" alt="">
              <h3>{{__('main.services-title-4')}}</h3>

              <p>
                {{__('main.services-text-4')}}.
              </p>

            </div>
          </div><!-- End testimonial item -->


        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->


  <!-- ======= Call To Action Section ======= -->
  <section id="about">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-6 about-img">
          <img src="assets/img/services/s6.svg" alt="">
        </div>

        <div class="col-lg-6 content">
          <h2>
            {{__('main.features')}} ؟
          </h2>
          <h3> {{__('main.features-title')}}.</h3>

          <ul>
            <li><i class="bi bi-check-circle"></i> {{__('main.features-1')}}.</li>
            <li><i class="bi bi-check-circle"></i> {{__('main.features-2')}}.</li>
            <li><i class="bi bi-check-circle"></i> {{__('main.features-3')}}.</li>
            <li><i class="bi bi-check-circle"></i> {{__('main.features-4')}}.</li>
            <li><i class="bi bi-check-circle"></i> {{__('main.features-5')}}.</li>
            <li><i class="bi bi-check-circle"></i> {{__('main.features-6')}}.</li>
          </ul>

        </div>
      </div>

    </div>
  </section><!-- End Call To Action Section -->

  <section id="servicess" dir="rtl">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2> {{__('main.whay-your-partner')}} ?</h2>
        <p>{{__('main.whay-partner-title')}} </p>
      </div>

      <div class="row gy-4">

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="box">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title"><a href="">{{__('main.Professionalism')}}</a></h4>
            <p class="description"> {{__('main.Professionalism-text')}}</p>
          </div>
        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="box">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="title"><a href=""> {{__('main.support')}} </a></h4>
            <p class="description">{{__('main.support-title')}}</p>
          </div>
        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
          <div class="box">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="">{{__('main.keeping')}}</a></h4>
            <p class="description">{{__('main.keeping-title')}}</p>
          </div>
        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <div class="box">
            <div class="icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="title"><a href=""> {{__('main.design')}} </a></h4>
            <p class="description">{{__('main.design-title')}}</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->


  <!-- ======= Clients Section ======= -->
  <section id="clients">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>{{__('main.clients')}} </h2>
        <p>{{__('main.client-title')}}</p>
      </div>

      <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="assets/img/logo.png" width="50px" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/logo.jpeg" width="50px" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/1.jpg" width="50px" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/2.jpg" width="50px" class="img-fluid" alt=""></div>

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Clients Section -->


  <!-- ======= Services Section ======= -->




  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>{{__('main.portfolio')}} </h2>
        <p> {{__('main.portfolio-title')}}</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">{{__('main.All')}}</li>
           
            <li data-filter=".filter-app">{{__('main.App')}}</li>
            <li data-filter=".filter-web">{{__('main.Web')}}</li>
            <li data-filter=".filter-card">{{__('main.Card')}}</li>
          
          </ul>
        </div>
    
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
         @foreach($work_app as $work)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="uploads/{{$work->img1}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>{{$work->name}}</h4>
            <p>{{$work->category->name}}</p>
            <a href="uploads/{{$work->img1}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{$work->name}}"><i class="bx bx-plus"></i></a>
            <a href="../work/{{$work->id}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
       
        @endforeach
        @foreach($work_web as $work)
        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <img src="uploads/{{$work->img1}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>{{$work->name}}</h4>
            <p>{{$work->category->name}}</p>
            <a href="uploads/{{$work->img1}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{$work->name}}"><i class="bx bx-plus"></i></a>
            <a href="../work/{{$work->id}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
        @endforeach

       
        @foreach($works_graphic as $work)
        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <img src="uploads/{{$work->img1}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>{{$work->name}}</h4>
            <p>{{$work->category->name}}</p>
            <a href="uploads/{{$work->img1}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
            <a href="../work/{{$work->id}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
        @endforeach

        


      </div>

    </div>
  </section><!-- End Portfolio Section -->





  <!-- ======= Team Section ======= -->
  <!-- <section id="team">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Our Team</h2>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="member">
            <div class="pic"><img src="assets/img/team-1.jpg" alt=""></div>
            <div class="details">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="member">
            <div class="pic"><img src="assets/img/team-2.jpg" alt=""></div>
            <div class="details">
              <h4>Sarah Jhinson</h4>
              <span>Product Manager</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="member">
            <div class="pic"><img src="assets/img/team-3.jpg" alt=""></div>
            <div class="details">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="member">
            <div class="pic"><img src="assets/img/team-4.jpg" alt=""></div>
            <div class="details">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>End Team Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>{{__('main.contact')}}</h2>
        <p></p>
      </div>

      <div class="row contact-info">

        <div class="col-md-4">
          <div class="contact-address">
            <i class="bi bi-geo-alt"></i>
            <h3>{{__('main.Address')}}</h3>
            <address>{{__('main.location')}}</address>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-phone">
            <i class="bi bi-phone"></i>
            <h3> {{__('main.Phone Number')}}</h3>
            <p><a href="tel:+155895548855">{{$abouts->phone ?? ''}}</a></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-email">
            <i class="bi bi-envelope"></i>
            <h3> {{__('main.Email')}}</h3>
            <p><a href="mailto:info@example.com">{{$abouts->email ?? ''}}</a></p>
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

</main><!-- End #main -->


</body>

</html>

@stop