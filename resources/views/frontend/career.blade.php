@extends('layouts.app.app')
@section('content')
<!--Page content-->
<div class="vlt-page-content">
    <!--Page title-->
    <div class="vlt-page-title vlt-page-title--style-3 jarallax"><img class="jarallax-img"
            src="https://tomsher.net/aldouri/storage/pages/about/1695383497About%20page.jpg" alt="" loading="lazy">
        <div class="vlt-page-title__overlay"></div><a class="vlt-page-title__scroll-to vlt-scroll-to" href="#content"><i
                class="fa fa-arrow-down"></i></a>
        <div class="container">
            <h1 class="vlt-page-title__title lax" data-lax-translate-y="0 0, vh (vw*0.25)"
                data-lax-opacity="1 1, (vh*0.5) 0" data-lax-anchor=".vlt-page-title">Career
            </h1>
        </div>
    </div>
    <div id="content"></div>


    <!--Section-->
    <section>
        <div class="vlt-gap-50"></div>
        <div class="container">
            <div class="row">



                <div class="col-md-10 offset-md-1">

                    <div class="text-center">
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                            <!--Section title-->
                            <div class="vlt-section-title vlt-section-title--style-2">
                                <h2 class="vlt-section-title__title">Positions</h2>
                            </div>
                        </div>
                    </div>
                    <div class="vlt-gap-100"></div>








                    <!--Animated block-->
                    <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                        <!--Wanted position-->
                        <div class="vlt-wanted-position"><a class="vlt-wanted-position__link" href="{{ route('career-details') }}"></a>

                            <div class="vlt-wanted-position__position">Back-End Developer
                            </div>



                            <div class="vlt-wanted-position__time">Full-time
                            </div>
                            <div class="vlt-wanted-position__icon"><i class="fa fa-arrow-right"></i></div>
                        </div>
                    </div>





                    <!--Animated block-->
                    <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                        <!--Wanted position-->
                        <div class="vlt-wanted-position"><a class="vlt-wanted-position__link" href="#"></a>

                            <div class="vlt-wanted-position__position">UX Designer
                            </div>
                            <div class="vlt-wanted-position__time">Full-time
                            </div>
                            <div class="vlt-wanted-position__icon"><i class="fa fa-arrow-right"></i></div>
                        </div>
                    </div>
                    <!--Animated block-->
                    <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                        <!--Wanted position-->
                        <div class="vlt-wanted-position"><a class="vlt-wanted-position__link" href="#"></a>

                            <div class="vlt-wanted-position__position">Software Developer
                            </div>
                            <div class="vlt-wanted-position__time">Full-time
                            </div>
                            <div class="vlt-wanted-position__icon"><i class="fa fa-arrow-right"></i></div>
                        </div>
                    </div>
                    <!--Animated block-->
                    <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                        <!--Wanted position-->
                        <div class="vlt-wanted-position"><a class="vlt-wanted-position__link" href="#"></a>

                            <div class="vlt-wanted-position__position">Senior Manager
                            </div>
                            <div class="vlt-wanted-position__time">Full-time
                            </div>
                            <div class="vlt-wanted-position__icon"><i class="fa fa-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vlt-gap-50"></div>
    </section>
    <!--Section-->




</div>
@endsection