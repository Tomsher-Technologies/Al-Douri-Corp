@extends('layouts.app.app')
@section('content')
    <!--Page content-->
    <div class="vlt-page-content">

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
        <section class="position-relative">
            <!--Particle image-->
            
           
            <!--<div class="vlt-gap-120"></div>-->
            <div class="vlt-gap-120"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-5">

                        <div class="position-relative">
                            <!--Particle image-->
                            <!--<img class="vlt-particle" src="{{ asset($page->getImage3()) }}"-->
                            <!--    data-animation-name="fadeInUp" alt=""-->
                            <!--    style="position: absolute; top: -120px; right: -100px; max-width: 263px; --animate-delay: 1s;"-->
                            <!--    loading="lazy">-->
                            <!--Simple image-->
                            <div class="vlt-simple-image">
                                <div class="vlt-simple-image__mask" data-aos="image-mask-animation" data-aos-delay="0">
                                    <div class="inside"></div>
                                </div><img src="{{ asset($page->getImage2()) }}" alt="" loading="lazy">
                            </div>
                        </div>
                        <div class="vlt-gap-60--sm"></div>
                    </div>
                    <div class="col-md-5 offset-md-1">
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">

                            <div class="vlt-gap-40"></div>
                            <p><strong>
                                {!! $page->getTranslation('content1') !!} </strong></p>
                            <div class="vlt-gap-40"></div>
                            <div class="has-black-color">
                                <!--Styled list-->
                                <ul class="vlt-styled-list vlt-styled-list--style-3">
                                    @if(!empty($heritageLists))
                                        @foreach($heritageLists as $list)


                                            <li>
                                            {!! $list->getTranslation('content') !!}
                                            </li>
                                        @endforeach
                                    @endif
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
