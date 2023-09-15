@extends('layouts.app.app')
@section('content')
    <!--Page content-->
    <div class="vlt-page-content">
        <!--Page title-->
        <div class="vlt-page-title vlt-page-title--style-3 jarallax"><img class="jarallax-img"
                src="{{ asset('assets/img/banner01.webp') }}" alt="" loading="lazy">
            <div class="vlt-page-title__overlay"></div><a class="vlt-page-title__scroll-to vlt-scroll-to" href="#content"><i
                    class="fa fa-arrow-down"></i></a>
            <div class="container">
                <h1 class="vlt-page-title__title lax" data-lax-translate-y="0 0, vh (vw*0.25)"
                    data-lax-opacity="1 1, (vh*0.5) 0" data-lax-anchor=".vlt-page-title">About AL Douri
                </h1>
            </div>
        </div>
        <div id="content"></div>
        <!--Section-->
        <section>
            <div class="vlt-gap-50"></div>
            <div class="container">
                <div class="row">


                    <div class="col-md-11 offset-md-1">
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0"><span
                                class="vlt-display-1 has-primary-color">Al Douri Group is a privately-owned family
                                business located in the United Arab Emirates. Al Douri Group emerged in 1979 as a
                                food service market leader in the GCC region with a two-century old heritage and
                                exceptional experience that has grown through four generations of professional
                                family management.</span>
                        </div>
                        <div class="vlt-gap-30"></div>
                    </div>


                    <div class="col-md-11 offset-md-1">
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                            <p class="fz-3">Al Douri Group is a privately-owned family business located in the
                                United Arab Emirates. Al Douri Group emerged in 1979 as a food service market leader
                                in the GCC region with a two-century old heritage and exceptional experience that
                                has grown through four generations of professional family management.</p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="vlt-gap-50"></div>
        </section>
        <!--Section-->
        <section class="jarallax"><img class="jarallax-img" src="{{ asset('assets/img/banner02.webp') }}" alt=""
                loading="lazy">
            <div class="vlt-gap-120"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-11 offset-md-1">
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                            <!--Service-->
                            <div class="vlt-service vlt-service--style-1">

                                <div class="vlt-service__content">
                                    <h5 class="vlt-service__title" style=" color:#ffffff; text-align: center;"><a
                                            href="service-single.html">Our heritage</a>
                                    </h5>
                                    <p class="vlt-service__text" style=" color:#fff;">Al-Douri Group is one of the
                                        institutions that keep pace with the approach of modernity and technological
                                        development while preserving its identity and its ancient history, which dates back
                                        to the eighteenth century.

                                        The inspiring story of Al-Douri began in the United Arab Emirates in 1979 with the
                                        establishment of Al-Douri Company and Factory for Foodstuff Trading.

                                        Al Douri Group's first retail store was established in 1986 under the name Al Douri
                                        Roastery. After that in 2006, Al Douri Mart Roastery and Supermarket was
                                        established. In 2011, Al-Douri Group witnessed a major shift when it opened its
                                        fully automated factory equipped with the latest machines and modern technology. In
                                        2016, Al Douri factory in Dubai obtained HACCP and ISO 22000:2005 quality
                                        certifications.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="vlt-gap-120"></div>
        </section>



        <!--Section-->
        <section class="has-extra-light-gray-background-color brands">
            <div class="vlt-gap-50"></div>
            <div class="container">

                <div class="vlt-animated-block  text-center" data-aos="fade" data-aos-delay="0">
                    <!--Section title-->
                    <div class="vlt-section-title vlt-section-title--style-1"><span class="vlt-section-title__subtitle">Our
                            Brands</span>
                        <h2 class="vlt-section-title__title">Innovative food solutions for a healthier lifestyle</h2>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="vlt-gap-50"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                            <!--Partner-->
                            <div class="vlt-partner vlt-partner--center"><a href="#"><img
                                        src="{{ asset('assets/img/root/clients/client-logo-01.png') }}" alt=""
                                        loading="lazy"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3">
                        <div class="vlt-gap-50"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                            <!--Partner-->
                            <div class="vlt-partner vlt-partner--center"><a href="#"><img
                                        src="{{ asset('assets/img/root/clients/client-logo-02.png') }}" alt=""
                                        loading="lazy"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="vlt-gap-50"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
                            <!--Partner-->
                            <div class="vlt-partner vlt-partner--center"><a href="#"><img
                                        src="{{ asset('assets/img/root/clients/client-logo-03.png') }}" alt=""
                                        loading="lazy"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="vlt-gap-50"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="300">
                            <!--Partner-->
                            <div class="vlt-partner vlt-partner--center"><a href="#"><img
                                        src="{{ asset('assets/img/root/clients/client-logo-04.png') }}" alt=""
                                        loading="lazy"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="vlt-gap-50"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                            <!--Partner-->
                            <div class="vlt-partner vlt-partner--center"><a href="#"><img
                                        src="{{ asset('assets/img/root/clients/client-logo-05.png') }}" alt=""
                                        loading="lazy"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="vlt-gap-50"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                            <!--Partner-->
                            <div class="vlt-partner vlt-partner--center"><a href="#"><img
                                        src="{{ asset('assets/img/root/clients/client-logo-06.png') }}" alt=""
                                        loading="lazy"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="vlt-gap-50"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
                            <!--Partner-->
                            <div class="vlt-partner vlt-partner--center"><a href="#"><img
                                        src="{{ asset('assets/img/root/clients/client-logo-07.png') }}" alt=""
                                        loading="lazy"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="vlt-gap-50"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="300">
                            <!--Partner-->
                            <div class="vlt-partner vlt-partner--center"><a href="#"><img
                                        src="{{ asset('assets/img/root/clients/client-logo-08.png ') }}" alt=""
                                        loading="lazy"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vlt-gap-120"></div>
        </section>
        <!--Section-->
    </div>
@endsection
