@extends('layouts.app.app')
@section('content')
    <!--Page content-->
    <div class="vlt-page-content">

        <div class="vlt-page-title vlt-page-title--style-3 jarallax"><img class="jarallax-img" src="{{ asset('assets/img/banner01.webp') }}"
                alt="" loading="lazy">
            <div class="vlt-page-title__overlay"></div><a class="vlt-page-title__scroll-to vlt-scroll-to" href="#content"><i
                    class="fa fa-arrow-down"></i></a>
            <div class="container">
                <h1 class="vlt-page-title__title lax" data-lax-translate-y="0 0, vh (vw*0.25)"
                    data-lax-opacity="1 1, (vh*0.5) 0" data-lax-anchor=".vlt-page-title">Our heritage
                </h1>
            </div>
        </div>

        <div id="content"></div>
        <!--Section-->
        <section class="position-relative">
            <!--Particle image--><img class="vlt-particle" src="{{ asset('assets/img/root/square-plus-pattern-long.png') }}"
                data-animation-name="fadeInRight" alt=""
                style="position: absolute; bottom: 0; right: 0; max-width: 210px; --animate-delay: .5s;" loading="lazy">
            <div class="vlt-gap-120"></div>
            <div class="vlt-gap-120"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-5">

                        <div class="position-relative">
                            <!--Particle image--><img class="vlt-particle" src="{{ asset('assets/img/h2.jpg') }}"
                                data-animation-name="fadeInUp" alt=""
                                style="position: absolute; top: -120px; right: -100px; max-width: 263px; --animate-delay: 1s;"
                                loading="lazy">
                            <!--Simple image-->
                            <div class="vlt-simple-image">
                                <div class="vlt-simple-image__mask" data-aos="image-mask-animation" data-aos-delay="0">
                                    <div class="inside"></div>
                                </div><img src="{{ asset('assets/img/h1.jpg') }}" alt="" loading="lazy">
                            </div>
                        </div>
                        <div class="vlt-gap-60--sm"></div>
                    </div>
                    <div class="col-md-5 offset-md-2">
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">

                            <div class="vlt-gap-40"></div>
                            <p>Al-Douri Group is one of the institutions that keep pace with the approach of modernity and
                                technological development while preserving its identity and its ancient history, which dates
                                back to the eighteenth century.</p>
                            <div class="vlt-gap-40"></div>
                            <div class="has-black-color">
                                <!--Styled list-->
                                <ul class="vlt-styled-list vlt-styled-list--style-3">
                                    <li>The inspiring story of Al-Douri began in the United Arab Emirates in 1979 with the
                                        establishment of Al-Douri Company and Factory for Foodstuff Trading.
                                    </li>
                                    <li>Al Douri Group's first retail store was established in 1986 under the name Al Douri
                                        Roastery. After that in 2006, Al Douri Mart Roastery and Supermarket was
                                        established. In 2011</li>
                                    <li> Al-Douri Group witnessed a major shift when it opened its fully automated factory
                                        equipped with the latest machines and modern technology. In 2016
                                    </li>
                                    <li>Al Douri factory in Dubai obtained HACCP and ISO 22000:2005 quality certifications.
                                    </li>
                                </ul>
                            </div>
                            <div class="vlt-gap-50"></div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="vlt-gap-120"></div>


        </section>
        <!--Section-->

    </div>
@endsection
