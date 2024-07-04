@extends('layouts.nav')
@section('content')
<!-- ======= hero Section ======= -->
<section id="hero">

  <div class="hero-content" data-aos="fade-up">
    <h2> أفضل الخبراء لتطوير التطبيقات والمواقع الالكترونية</h2>
    <div>
      <a href="#about" class="btn-get-started scrollto">من نحن </a>
      <a href="#portfolio" class="btn-projects scrollto">اعمالنا</a>
    </div>
  </div>

  <div class="hero-slider swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image: url('assets/img/s1.jpg');"></div>
      <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/h11.jpg');"></div>
      <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/h12.jpg');"></div>
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
          <h3>ملتزمون بنجاح عملائنا من بداية الفكرة حتى نجاحها وجعلها علامة تجارية.</h3>

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


  <!-- ======= Clients Section ======= -->
  <section id="clients">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>{{__('main.clients')}} </h2>
        <p>{{__('main.client-title')}}</p>
      </div>

      <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Clients Section -->


  <!-- ======= Services Section ======= -->
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
            <li data-filter=".filter-card">{{__('main.Card')}}</li>
            <li data-filter=".filter-web">{{__('main.Web')}}</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="assets/img/portfolio/h4.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 1</h4>
            <p>App</p>
            <a href="assets/img/portfolio/h4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <img src="assets/img/portfolio/h5.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Web 3</h4>
            <p>Web</p>
            <a href="assets/img/portfolio/h5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="assets/img/portfolio/h6.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 2</h4>
            <p>App</p>
            <a href="assets/img/portfolio/h6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <img src="assets/img/portfolio/h7.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Card 2</h4>
            <p>Card</p>
            <a href="assets/img/portfolio/h7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <img src="assets/img/portfolio/h8.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Web 2</h4>
            <p>Web</p>
            <a href="assets/img/portfolio/h8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="assets/img/portfolio/h9.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 3</h4>
            <p>App</p>
            <a href="assets/img/portfolio/h9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <img src="assets/img/portfolio/h10.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Card 1</h4>
            <p>Card</p>
            <a href="assets/img/portfolio/h10.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <img src="assets/img/portfolio/h11.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Card 3</h4>
            <p>Card</p>
            <a href="assets/img/portfolio/h11.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Web 3</h4>
            <p>Web</p>
            <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

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
            <address>السعودية-الرياض</address>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-phone">
            <i class="bi bi-phone"></i>
            <h3> {{__('main.Phone Number')}}</h3>
            <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-email">
            <i class="bi bi-envelope"></i>
            <h3>   {{__('main.Email ')}}</h3>
            <p><a href="mailto:info@example.com">info@example.com</a></p>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="form">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="form-group col-md-6">
              <input type="text" name="name" class="form-control" id="name" placeholder="الاسم " required>
            </div>
            <div class="form-group col-md-6 mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="الايميل" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="الموضوع" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="الرسالة" required></textarea>
          </div>


          <div class="text-center"><button type="submit">ارسال </button></div>
        </form>
      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->


</body>

</html>

@stop