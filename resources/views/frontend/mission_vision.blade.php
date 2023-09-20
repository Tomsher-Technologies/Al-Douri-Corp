@extends('layouts.app.app')
@section('content')
    <!--Page content-->
    <div class="vlt-page-content">
        <!--Page title-->
        <div class="vlt-page-title vlt-page-title--style-3 jarallax"><img class="jarallax-img" src="{{ asset('assets/img/banner01.webp') }}"
                alt="" loading="lazy">
            <div class="vlt-page-title__overlay"></div><a class="vlt-page-title__scroll-to vlt-scroll-to" href="#content"><i
                    class="fa fa-arrow-down"></i></a>
            <div class="container">
                <h1 class="vlt-page-title__title lax" data-lax-translate-y="0 0, vh (vw*0.25)"
                    data-lax-opacity="1 1, (vh*0.5) 0" data-lax-anchor=".vlt-page-title">Mission Vision
                </h1>
            </div>
        </div>
        <div id="content"></div>


        <!--Section-->
        <section class="jarallax has-gray-color" style="background-color: #a41e36;">
            <div class="container">
                <div class="row">

                    <div class="col-md-5 offset-md-1">
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                            <div class="has-light-gray-color" style="opacity: .16;">
                                <!--Stroke text-->
                                <div class="vlt-stroke-text vlt-stroke-text--lg">01
                                </div>
                            </div>
                            <h4 class="has-white-color negative-top-offset-lg">Mission</h4>
                            <div class="vlt-gap-40"></div>
                            <p style="max-width: 90%; color: #fff;">Providing high-quality products that meet the
                                aspirations of our customers around the world, and allow them to enjoy the wonderful taste
                                while preserving the nutritional value of the product."

                                We believe that everyone deserves high quality products. Based on our experience and
                                passion, we are committed to achieving our vision through our relentless pursuit of
                                providing nutritional products that promote healthy lifestyles. We also believe in
                                innovation, continuous improvement, and providing high-quality services to ensure the best
                                experience for our customers</p>
                        </div>
                        <div class="vlt-gap-60--sm"></div>
                    </div>
                    <div class="col-md-5">
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
                            <div class="has-light-gray-color" style="opacity: .16;">
                                <!--Stroke text-->
                                <div class="vlt-stroke-text vlt-stroke-text--lg">02
                                </div>
                            </div>
                            <h4 class="has-white-color negative-top-offset-lg"> Vision</h4>
                            <div class="vlt-gap-40"></div>
                            <p style="max-width: 90%; color: #fff;">

                                We derive our vision from the importance of health and a correct lifestyle, and the line of
                                high-quality food products constitutes an extension of what the company provided in the
                                past, and the cornerstone of its approach and ambition.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vlt-gap-120"></div>
        </section>
        <!--Section-->
    </div>
@endsection
