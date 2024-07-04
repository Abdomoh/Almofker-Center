@extends('layouts.nav')
@section('content')


<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{__('main.Project information')}}</h2>
                <ol>
                    <li><a href="{{url('/')}}">{{__('main.home')}}</a></li>
                    <li><a href="../#portfolio">{{__('main.portfolio')}}</a></li>
                    <li>{{__('main.Portfolio Details')}}</li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper" dir="ltr">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="../uploads/{{$work->img1}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="../uploads/{{$work->img2}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="../uploads/{{$work->img1}}" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>{{__('main.Project information')}}</h3>
                        <ul>
                            <li><strong>{{__('main.Category')}}</strong>: {{$work->category->name}}</li>
                            <li><strong>{{__('main.Client')}}</strong>:  {{$work->client}}</li>
                            <li><strong> {{__('main.Project date')}}</strong>:{{$work->date}}</li>
                            <li><strong> {{__('main.Project URL')}}</strong>: <a href="https:{{$work->url}}" target="_blank">{{$work->url}}</a></li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>{{__('main.Portfolio Details')}}</h2>
                        <p>
                        {{$work->description}}.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->


@stop