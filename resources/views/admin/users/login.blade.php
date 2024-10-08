<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="متجر الكتروني" content="Ogani Template">
    <meta name="الكترونيك" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        تسجيل دخول
    </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;700&family=Tajawal&display=swap" rel="stylesheet">


    <!-- Css Styles -->
    <link rel="icon" type="image" href="{{asset('web-site/img/undraw_deliveries.svg')}}">
    <link rel="stylesheet" href="{{asset('web-site/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('web-site/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('web-site/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('web-site/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('web-site/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('web-site/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('web-site/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('web-site/css/style.css')}}" type="text/css">
    @toastr_css
</head>

<!-- Contact Form Begin -->
<div class="contact-form spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact__form__title">
                    <h2> تسجيل دخول</h2>
                </div>
            </div>
        </div>
        @if (count($errors) > 0)
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-danger" role="alert">
                    <strong>Errors</strong>
                    <ul>

                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @endif

        <form method="POST" action="{{route('login.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-lg-12 col-md-12 ">
                    <p> الايميل<span></span></p>
                    <input type="email" name="email" placeholder=" الايميل" required="">
                </div>
                <div class="col-lg-12 col-md-12 ">
                    <p> كلمة المرور<span></span></p>
                    <input type="password" name="password" placeholder=" كلمة المرور" required="">
                </div>

                <div class="col-lg-12 text-center">
                    <button type="submit" class="btn btn-info btn-block">دخول</button><br>
                    <a href="{{url('register')}}" style="color:blue;"> تسجيل </a>

                </div>
            </div>
        </form>
    </div>
</div>
<!-- Contact Form End -->

<!-- Js Plugins -->
<script src="{{asset('web-site/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('web-site/js/bootstrap.min.js')}}"></script>
<script src="{{asset('web-site/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('web-site/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('web-site/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('web-site/js/mixitup.min.js')}}"></script>
<script src="{{asset('web-site/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('web-site/js/main.js')}}"></script>
@toastr_js
@toastr_render