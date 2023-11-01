@extends('layouts.app.app')
@section('content')
    <!--Page content-->
    <div class="vlt-page-content">
        <!--Page title-->
        <div class="vlt-page-title vlt-page-title--style-3 jarallax"><img class="jarallax-img"
                src="{{ asset($page->getImage1('image1')) }}" alt="" loading="lazy">
            <div class="vlt-page-title__overlay"></div><a class="vlt-page-title__scroll-to vlt-scroll-to" href="#content"><i
                    class="fa fa-arrow-down"></i></a>
            <div class="container">
                <h1 class="vlt-page-title__title lax" data-lax-translate-y="0 0, vh (vw*0.25)"
                    data-lax-opacity="1 1, (vh*0.5) 0" data-lax-anchor=".vlt-page-title">{{ $page->getTranslation('title') }}
                </h1>
            </div>
        </div>
        <div id="content"></div>
        <!--Section-->
        <section>
            <div class="vlt-gap-50"></div>
            <div class="container">
                <div class="row">


                    <div class="col-md-12">
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0"><span
                                class="vlt-display-1 has-primary-color">{!! $page->getTranslation('description') !!}</span>
                        </div>
                        <div class="vlt-gap-30"></div>
                    </div>


                    <div class="col-md-12">
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                            <p class="fz-3">{!! $page->getTranslation('content1') !!}</p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="vlt-gap-50"></div>
        </section>
        <!--Section-->
        <section class="jarallax"><img class="jarallax-img" src="{{ asset($page->getImage2('image2')) }}" alt=""
                loading="lazy">
            <div class="vlt-gap-120"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                            <!--Service-->
                            <div class="vlt-service vlt-service--style-1">

                                <div class="vlt-service__content">
                                    <h5 class="vlt-service__title" style=" color:#ffffff; text-align: center;"><a
                                            href="service-single.html">{!! $page->getTranslation('heading1') !!}</a>
                                    </h5>
                                    <div class="vlt-service__text" style=" color:#fff;">
                                    {!! $page->getTranslation('content2') !!}
                                    </div>
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
                    <div class="vlt-section-title vlt-section-title--style-1"><span class="vlt-section-title__subtitle">
                    {!! $page->getTranslation('heading2') !!}
                    </span>
                        <h2 class="vlt-section-title__title">{!! $page->getTranslation('heading3') !!}</h2>
                    </div>
                </div>


                <div class="row">
                    @foreach (getBrands() as $brand )
                        <div class="col-xl-3 col-lg-3  col-md-3 col-sm-3 col-xs-6 col-6">
                            <div class="vlt-gap-50"></div>
                            <!--Animated block-->
                            <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                                <!--Partner-->
                                <div class="vlt-partner vlt-partner--center"><a href="#"><img
                                            src="{{ asset(asset($brand->getImage())) }}" alt=""
                                            loading="lazy"></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="vlt-gap-120"></div>
        </section>
        <!--Section-->
    </div>
@endsection
