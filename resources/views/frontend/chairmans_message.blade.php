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
        
        <style>
            .vlt-page-title--style-3 {

    padding: 150px 0;
    text-align: center;
}
        </style>
        
        
        <div id="content"></div>
        <!--Section-->
        
        


        <section class="has-black-color">
            <div class="vlt-gap-120"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                            <div class="position-relative text-center">
                                <div class="position-relative">
                                    <!--Simple image-->
                                    <div class="vlt-simple-image">
                                        <div class="vlt-simple-image__mask" data-aos="image-mask-animation"
                                            data-aos-delay="0">
                                            <div class="inside"></div>
                                        </div><img src="{{ asset($page->getImage2('image2')) }}" alt="" loading="lazy">
                                    </div>
                                    <!--Particle image--><img class="vlt-particle" src="{{ asset('assets/img/emoji.png') }}"
                                        data-animation-name="none" alt=""
                                        style="position: absolute; top: -65px; right: -100px; max-width: 130px; z-index: 1;"
                                        loading="lazy">
                                    <!--Particle image--><img class="vlt-particle spin" src="{{ asset('assets/img/text-circle.png') }}"
                                        data-animation-name="none" alt=""
                                        style="position: absolute; top: -65px; right: -100px; max-width: 130px; z-index: 1;"
                                        loading="lazy">
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center">
                            <div class="vlt-gap-40"></div>
                            <!--Animated block-->
                             <h1 class="fz-6 has-primary-color center-mode">{!! $page->getTranslation('heading1') !!}</h1>
                             
                                <div class="vlt-gap-40"></div>
                             
                            <div class="vlt-animated-block fz-3"  style="padding: 0 30px; font-style: italic;" data-aos="fade" data-aos-delay="100">
                                
                                {!! $page->getTranslation('content1') !!}
                            
                            </div>
                            <div class="vlt-gap-50"></div>
                            <!--Animated block-->

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
