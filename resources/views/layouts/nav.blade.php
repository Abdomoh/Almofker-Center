<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{__('main.title-app')}}</title>
  <meta content="  مركز المفكر " name="description">
  <meta content=" للاستشارات والبحوث" name="keywords">

  <!-- Favicons -->
  @if(empty($abouts->logo ))
  <link href="{{URL::asset('assets/img/logo/logo.jpg')}}" rel="icon">
  <link href="{{URL::asset('assets/img/logo/logo.jpg')}}" rel="apple-touch-icon">
  @else
  <link href="../uploads/abouts/{{$abouts->logo ?? ''}}" rel="icon">
  <link href="../uploads/abouts/{{$abouts->logo ?? ''}}" rel="apple-touch-icon">
  @endif

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{URL::asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->


  @if(App::getlocale()=='en')
  <link href="{{URL::asset('assets/css/en/style.css')}}" rel="stylesheet">
  @else
  <link href="{{URL::asset('assets/css/ar/style.css')}}" rel="stylesheet">
  @endif


</head>

<body>

  <!-- ======= Top Bar ======= -->
  {{-- <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:{{$abouts->email ?? '' }}">{{$abouts->email ?? '' }}</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{$abouts->phone ?? ''}}</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="{{$abouts->twitter ?? ''}}" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="{{$abouts->facebook ?? ''}}" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="{{$abouts->instagram ?? ''}}" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="{{$abouts->linkedin ?? ''}}" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar--> --}}

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">
      
      <div id="logo">
        @if(empty($abouts->logo ))
        <h1><a href="{{url('/')}}"><span> <img src="{{URL::asset('assets/img/logo/logo.jpg')}}" width="60px" alt="مركز المفكر "></span></a></h1>
        @else
        <h1><a href="{{url('/')}}"><span> <img src="../uploads/abouts/{{$abouts->logo ?? ''}}" width="60px" alt="مركز المفكر "></span></a></h1>
      @endif
      </div>
      

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('/')}}">{{__('main.home')}}</a></li>
          <li><a class="nav-link scrollto" href="#about">{{__('main.about')}}</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">{{__('main.Our-fields')}}</a></li>
          
          <li><a class="nav-link scrollto" href="#team">{{__('main.Expert-panel')}}</a></li>
          <li><a class="nav-link scrollto" href="#breadcrumbs">{{__('main.object')}}</a></li>

          <li><a class="nav-link scrollto" href="#contact">{{__('main.contact')}}</a></li>
          <li>
            @foreach (Config::get('languages') as $lang => $language)
            @if ($lang != App::getLocale())
            <a class="btn btn-outline my-2 rounded " href="{{ route('lang.switch', $lang) }}">
              <img src="{{asset($language['img'])}}" width="40px"><span class="text-dark mx-2 lang">{{$language['display']}}</span> </a>
            @endif
            @endforeach
          </li>
        </ul>



        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      {{-- <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:{{$abouts->email ?? 'mofher@gmail.cocm' }}">{{$abouts->email ?? 'mofher@gmail.cocm' }}</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{$abouts->phone ?? '09928522525'}}</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="{{$abouts->twitter ?? ''}}" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="{{$abouts->facebook ?? ''}}" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="{{$abouts->instagram ?? ''}}" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="{{$abouts->linkedin ?? ''}}" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>
      </div> --}}

    </div>
  </header><!-- End Header -->
  @yield('content')


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; <strong>{{__('main.footer')}}</strong>.
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{URL::asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{URL::asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{URL::asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{URL::asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{URL::asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{URL::asset('assets/js/main.js')}}"></script>

 