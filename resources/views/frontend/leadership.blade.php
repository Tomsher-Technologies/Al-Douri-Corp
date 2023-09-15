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
                    data-lax-opacity="1 1, (vh*0.5) 0" data-lax-anchor=".vlt-page-title">Leadership
                </h1>
            </div>
        </div>
        <div id="content"></div>
        <!--Section-->

        <section>
            <div class="vlt-gap-120"></div>
            <div class="container position-relative">

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                            <!--Team member-->
                            <div class="vlt-team-member vlt-team-member--style-1">
                                <div class="vlt-team-member__avatar">
                                    <img src="{{ asset('assets/img/team4.jpg') }}" alt="" loading="lazy">

                                </div>
                                <div class="vlt-team-member__content">
                                    <h5 class="vlt-team-member__name">Amer Al Douri
                                    </h5>
                                    <p class="vlt-team-member__function">CEO
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vlt-gap-40--sm"></div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                            <!--Team member-->
                            <div class="vlt-team-member vlt-team-member--style-1">
                                <div class="vlt-team-member__avatar"><img src="{{ asset('assets/img/team2.jpg') }}"
                                        alt="" loading="lazy">

                                </div>
                                <div class="vlt-team-member__content">
                                    <h5 class="vlt-team-member__name"> Yasser Al Douri
                                    </h5>
                                    <p class="vlt-team-member__function">Manufacturing Manager
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vlt-gap-40--sm"></div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
                            <!--Team member-->
                            <div class="vlt-team-member vlt-team-member--style-1">
                                <div class="vlt-team-member__avatar"><img src="{{ asset('assets/img/team3.jpg') }}"
                                        alt="" loading="lazy">

                                </div>
                                <div class="vlt-team-member__content">
                                    <h5 class="vlt-team-member__name">Muhannad Al Khader
                                    </h5>
                                    <p class="vlt-team-member__function">Actions Director
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vlt-gap-40--sm"></div>
                    </div>
                </div>
            </div>
            <div class="vlt-gap-70"></div>
        </section>
    </div>
@endsection
