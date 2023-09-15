@extends('layouts.app.app')
@section('content')
    <!--Page content-->
    <div class="vlt-page-content">
        <!--Page title-->
        <div class="vlt-page-title vlt-page-title--style-3 jarallax"><img class="jarallax-img"
                src="{{ $division->getImage('banner_image') }}" alt="" loading="lazy">
            <div class="vlt-page-title__overlay"></div><a class="vlt-page-title__scroll-to vlt-scroll-to" href="#content"><i
                    class="fa fa-arrow-down"></i></a>
            <div class="container">
                <h1 class="vlt-page-title__title lax" data-lax-translate-y="0 0, vh (vw*0.25)"
                    data-lax-opacity="1 1, (vh*0.5) 0" data-lax-anchor=".vlt-page-title">
                    {{ $division->getTranslation('title') }}
                </h1>
            </div>
        </div>
        <div id="content"></div>


        <div class="vlt-gap-50"></div>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <!--Single post-->
                        <article class="vlt-single-post vlt-single-post--style-1">
                            <div class="vlt-single-post__content">
                                {!! $division->getTranslation('content_1') !!}
                                <div class="vlt-gap-20"></div>
                                <!--Simple image-->
                                <div class="vlt-simple-image alignfull">
                                    <div class="vlt-simple-image__mask" data-aos="image-mask-animation" data-aos-delay="0">
                                        <div class="inside"></div>
                                    </div>
                                    <img src="{{ $division->getImage('center_image') }}" alt="" loading="lazy">
                                </div>
                                <div class="vlt-gap-70"></div>

                                {!! $division->getTranslation('content_2') !!}

                                <div class="vlt-gap-60"></div>
                                <div class="vlt-gap-80"></div>
                                <!--Justified gallery-->
                                <div class="vlt-justified-gallery" data-row-height="360" data-margins="30">
                                    <!--Simple image-->
                                    <div class="vlt-simple-image">
                                        <div class="vlt-simple-image__mask" data-aos="image-mask-animation"
                                            data-aos-delay="0">
                                            <div class="inside"></div>
                                        </div>
                                        <img src="{{ $division->getImage('gallery_image') }}" alt="" loading="lazy">
                                    </div>
                                    <!--Simple image-->

                                </div>
                            </div>

                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!--Comments-->
    </div>
@endsection
