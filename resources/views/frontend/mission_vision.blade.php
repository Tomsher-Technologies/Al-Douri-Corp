@extends('layouts.app.app')
@section('content')
    <!--Page content-->
    <div class="vlt-page-content">
        <!--Page title-->
        <div class="vlt-page-title vlt-page-title--style-3 jarallax"><img class="jarallax-img" src="{{ asset($page->getImage1('image1')) }}"
                alt="" loading="lazy">
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
                            <h4 class="has-white-color negative-top-offset-lg">{!! $page->getTranslation('heading1') !!}</h4>
                            <div class="vlt-gap-40"></div>
                            <div style="max-width: 90%; color: #fff;">
                            {!! $page->getTranslation('content1') !!}
                            </div>
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
                            <h4 class="has-white-color negative-top-offset-lg"> {!! $page->getTranslation('heading2') !!}</h4>
                            <div class="vlt-gap-40"></div>
                            <div style="max-width: 90%; color: #fff;">
                                {!! $page->getTranslation('content2') !!}
                               
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
