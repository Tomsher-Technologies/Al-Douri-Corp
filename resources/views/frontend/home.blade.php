@extends('layouts.app.app')
@section('content')
    <div class="vlt-page-content">
        <!--Section-->
        <section class="position-relative" id="home-b">
            <!--Site fixed bar-->
            <div class="vlt-site-fixed-bar vlt-site-fixed-bar--right has-white-color position-absolute">
                <div class="flex-grow-0 flex-shrink-0"></div>
                <div class="d-flex flex-grow-1 flex-shrink-1 align-items-center justify-content-center">
                    <div class="vlt-swiper-progress vlt-homepage-12-anchor" data-direction="vertical">
                        <span class="current"></span>
                        <div class="bar"><span></span></div>
                        <span class="total"></span>
                    </div>
                </div>
                <div class="flex-grow-0 flex-shrink-0 text-center"></div>
            </div>
            <!--Project showcase-->
            <div class="vlt-project-showcase vlt-project-showcase--style-7"
                data-navigation-anchor=".vlt-homepage-12-anchor">
                <div class="vlt-project-showcase__footer">
                    <!-- <ul class="vlt-project-showcase__navigation">
              <li>01. Al Douri Passionate Experts</li>
              <li>02. Nourishing your family, every day</li>
              <li>03. Savor the moment with
                our food</li>
            </ul> -->
                    <!--Slider controls-->
                    @php  
                        $general = getSettings();
                    @endphp
                    <div class="vlt-slider-controls vlt-slider-controls--style-1 vlt-homepage-12-anchor has-white-color">
                        <div class="vlt-swiper-button-prev">{{ __('Prev') }}</div>
                        <span class="sep">|</span>
                        <div class="vlt-swiper-button-next">{{ __('Next') }}</div>
                    </div>
                    <div class="vlt-project-showcase__socials has-white-color">
                        <a class="vlt-social-icon vlt-social-icon--style-1"  target="_blank" href="{{ $general->facebook }}">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <!-- <a class="vlt-social-icon vlt-social-icon--style-1"
                        target="_blank" href="{{ $general->twitter }}"><i class="fa-brands fa-x-twitter"></i>
                        </a> -->
                        <a  class="vlt-social-icon vlt-social-icon--style-1" target="_blank" href="{{ $general->instagram }}"><i
                                class="fa-brands fa-instagram"></i>
                        </a>
                        <a class="vlt-social-icon vlt-social-icon--style-1"  target="_blank"
                            href="{{ $general->linkedin }}"><i class="fa-brands fa-linkedin"></i>
                        </a>
                    </div>
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @if($banners)
                            @foreach($banners as $ban)
                                <div class="swiper-slide">
                                    <div class="vlt-project-showcase__item">
                                        <div class="vlt-project-showcase__image"
                                            style="
                                            background-image: url({{ URL::to($ban->img) }});
                                        ">
                                        </div>
                                        <div class="d-flex flex-grow-1 flex-shrink-1 align-items-center">
                                            <div class="vlt-project-showcase__content">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-7">
                                                            <h1 class="vlt-project-showcase__title">
                                                                {{$ban->getTranslation('heading')}}
                                                            </h1>
                                                            <p class="vlt-project-showcase__text">
                                                                {!! $ban->getTranslation('content') !!}
                                                            </p>

                                                            <!--Button--><a class="vlt-btn vlt-btn--primary vlt-btn--md"
                                                                href="{{ $ban->btn_link }}" target="_self">{{$ban->getTranslation('btn_text')}}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class="logo-showcase__info">
                            <img src="{{ asset('assets/img/logo-outline.png') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Section-->
        <section class="jarallax">
            <img class="jarallax-img" src="{{ asset('assets/img/about-img1.png') }}" alt="" loading="lazy" />
            <div class="vlt-gap-120"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-11 offset-md-1">
                        <!--Animated block-->
                    </div>
                    <div class="col-md-5 offset-md-1">
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                            <!--Section title-->
                            <div class="vlt-section-title vlt-section-title--style-1">
                                <h2 class="vlt-section-title__title">
                                    {{ $page->getTranslation('title') }}
                                </h2>
                                <div class="vlt-gap-30"></div>
                                <p>
                                {{ $page->getTranslation('sub_title') }}
                                </p>
                            </div>
                        </div>

                        <div class="vlt-gap-40--sm"></div>
                    </div>
                    <div class="col-md-5">
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                            <p class="fz-2">
                            {!! $page->getTranslation('description') !!}
                            </p>
                            <div class="vlt-gap-50"></div>
                            <!--Button--><a class="vlt-btn vlt-btn--secondary vlt-btn--md" href="{!! $page->getTranslation('button_link_1') !!}"
                                target="_self">{!! $page->getTranslation('button_text_1') !!}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vlt-gap-120"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-7 pr-0">
                        <!--Simple image-->
                        <div class="vlt-simple-image">
                            <div class="vlt-simple-image__mask" data-aos="image-mask-animation" data-aos-delay="0">
                                <div class="inside"></div>
                            </div>
                            <img src="{{asset($page->getImage1('image1'))}}" alt="" loading="lazy" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="vlt-gap-80"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                            <h5 class="fz-7">
                            {!! $page->getTranslation('heading1') !!}
                            </h5>
                        </div>
                        <div class="vlt-gap-30"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                            <p class="fz-2">
                            {!! $page->getTranslation('content1') !!}
                            </p>
                        </div>
                        <div class="vlt-gap-40"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
                            <div class="has-black-color">
                                <!--Simple link--><a class="vlt-simple-link vlt-simple-link--md" href="{{ route('our_heritage') }}"
                                    target="_self">{{ __('Read more') }}
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="vlt-gap-80--sm"></div>
                    </div>
                    <div class="col-md-6 pl-0">
                        <!--Simple image-->
                        <div class="vlt-simple-image" style="padding-left: 86px">
                            <div class="vlt-simple-image__mask" data-aos="image-mask-animation" data-aos-delay="0">
                                <div class="inside"></div>
                            </div>
                            <img src="{{asset($page->getImage2('image2'))}}" alt="" loading="lazy" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="vlt-gap-120"></div>
        </section>
        <!--Section-->
        <section>
            <div class="container-fluid p-0">
                <div class="vlt-types">
                    <div class="vlt-types-background">
                        <div class="vlt-types-background__image">
                            <img src="{{ asset($page->getImage3('image3')) }}" alt="" loading="lazy" />
                        </div>
                        <div class="vlt-types-background__image">
                            <img src="{{ asset($page->getImage4('image4')) }}" alt="" loading="lazy" />
                        </div>
                        <div class="vlt-types-background__image">
                            <img src="{{ asset($page->getImage5('image5')) }}" alt="" loading="lazy" />
                        </div>
                    </div>
                    <div class="vlt-types-list">
                        <div class="vlt-types-list__item">
                            <a class="has-cursor" href="#"></a>
                            <div class="vlt-types-list__background">
                                <img src="{{ asset($page->getImage3('image3')) }}" alt="" loading="lazy" />
                            </div>
                            <div class="vlt-types-list__content">
                                <h4 class="vlt-types-list__title">
                                {!! $page->getTranslation('heading2') !!}
                                </h4>
                                <span class="vlt-types-list__category">
                                {!! $page->getTranslation('content2') !!}
                                </span>
                            </div>
                        </div>
                        <div class="vlt-types-list__item">
                            <a class="has-cursor" href="#"></a>
                            <div class="vlt-types-list__background">
                                <img src="{{ asset($page->getImage4('image4')) }}" alt="" loading="lazy" />
                            </div>
                            <div class="vlt-types-list__content">
                                <h4 class="vlt-types-list__title">
                                {!! $page->getTranslation('heading3') !!}
                                </h4>
                                <span class="vlt-types-list__category">
                                {!! $page->getTranslation('content3') !!}
                                </span>
                            </div>
                        </div>
                        <div class="vlt-types-list__item">
                            <a class="has-cursor" href="#"></a>
                            <div class="vlt-types-list__background">
                                <img src="{{ asset($page->getImage5('image5')) }}" alt="" loading="lazy" />
                            </div>
                            <div class="vlt-types-list__content">
                                <h4 class="vlt-types-list__title">
                                {!! $page->getTranslation('heading4') !!}
                                </h4>
                                <span class="vlt-types-list__category">
                                {!! $page->getTranslation('content4') !!}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Section-->

        <!--Section-->
        <section class="has-white-color jarallax vlt-custom--1681">
            <img class="jarallax-img" src="{{ asset('assets/img/service-bg-01.webp') }}" alt="" loading="lazy" />
            <div class="vlt-gap-120"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="vlt-stretch-block to-left">
                            <ul class="vlt-tabs-image">
                                @foreach (menuDivisions() as $keyY => $division)
                                    @php
                                        if($keyY == 0){
                                            $status = 'is-active';
                                        }else{
                                            $status = '';
                                        }
                                    @endphp
                                    <li class="{{$status}}">
                                        <img src="{{ asset($division->getImage('home_image')) }}" alt="" />
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="vlt-gap-60--md"></div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                            <!--Section title-->
                            <div class="vlt-section-title vlt-section-title--style-1">
                                <span class="vlt-section-title__subtitle">{!! $page->getTranslation('content5') !!}
                                </span>
                                <h2 class="vlt-section-title__title" style="color: #000">
                                {!! $page->getTranslation('content6') !!}
                                </h2>
                            </div>
                        </div>
                        <div class="vlt-gap-50"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                            <!--Tab image-->
                            <ul class="vlt-tabs">
                                @foreach (menuDivisions() as $keyY => $division)
                                    @php
                                        if($keyY == 0){
                                            $status = 'is-active';
                                        }else{
                                            $status = '';
                                        }
                                    @endphp
                                    <li class="{{$status}}">
                                        <a href="{{ route('divisions', $division->slug) }}">0{{$keyY+1}}. {{ $division->getTranslation('title') }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="vlt-gap-60"></div>
                        <!--Animated block-->
                    </div>
                </div>
            </div>
            <div class="vlt-gap-120"></div>
        </section>
        <!--Section-->

        <!--Section-->
        <section class="has-black-color">
            <div class="container">
                <div class="vlt-gap-50"></div>

                <div class="vlt-animated-block text-center" data-aos="fade" data-aos-delay="0">
                    <!--Section title-->
                    <div class="vlt-section-title vlt-section-title--style-1">
                        <span class="vlt-section-title__subtitle"> {!! $page->getTranslation('heading5') !!}</span>
                        <h2 class="vlt-section-title__title">
                        {!! $page->getTranslation('heading6') !!}
                        </h2>
                    </div>
                </div>

                <div class="vlt-gap-50"></div>
            </div>

            <div class="d-flex flex-column">
                <div class="d-flex flex-grow-1 flex-shrink-1">
                    <div class="container p-0 align-self-center">
                        <!--Content slider-->
                        <div class="vlt-content-slider" data-navigation-anchor=".vlt-work-carousel-grid" data-gap="30"
                            data-loop="" data-speed="" data-autoplay="" data-autoplay-speed=""
                            data-slides-centered=""
                            data-slide-settings='{"slides_to_show":4,"slides_to_show_tablet":2,"slides_to_show_mobile":1}'
                            data-free-mode="" data-slider-offset="enable" data-mousewheel="enable">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    @foreach (menuCategory(0) as $category)
                                    <div class="swiper-slide">
                                        <div>
                                            <!--Portfolio item-->
                                            <article class="vlt-work vlt-work--style-1">
                                                <div class="vlt-work__media">
                                                    <a class="vlt-work__link has-cursor" href="{{ route('category', $category->slug) }}"></a><img
                                                        src="{{ asset($category->getImage('home_image')) }}" alt="" loading="lazy" />
                                                </div>
                                                <div class="vlt-work__meta">
                                                    <h5 class="vlt-work__title">
                                                        <a href="{{ route('category', $category->slug) }}">{{ $category->getTranslation('title') }}</a>
                                                    </h5>
                                                    <!-- <span class="vlt-work__category">Coffee</span> -->
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="vlt-gap-30"></div>
                <div class="flex-grow-0 flex-shrink-0">
                    <div class="container">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-auto">
                                <!--Slider controls-->
                                <!-- <div class="vlt-slider-controls vlt-slider-controls--style-1 vlt-work-carousel-grid">
                                    <div class="vlt-swiper-button-prev">
                                    {{ __('Prev') }}
                                    </div>
                                    <span class="sep">|</span>
                                    <div class="vlt-swiper-button-next">
                                    {{ __('Next') }}
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="vlt-gap-50"></div>
                    </div>
                </div>
            </div>
        </section>

        <!--Section-->
        <section class="jarallax has-white-color">
            <img class="jarallax-img" src="{{ asset($page->image6) }}" alt="" loading="lazy" />
            <div class="vlt-gap-240"></div>
            <div class="text-center">
                <!--Video button-->
                <div class="vlt-video-button">
                    <a href="{{$page->video_link}}" data-fancybox data-small-btn="true" rel="nofollow"><i
                            class="fa-solid fa-play"></i></a>
                    <h6>{{ __('View Video') }}</h6>
                </div>
            </div>
            <div class="vlt-gap-240"></div>
        </section>
        <!--Section-->

        <!--Section-->
        <section class="has-extra-light-gray-background-color brands">
            <div class="vlt-gap-50"></div>
            <div class="container">
                <div class="vlt-animated-block text-center" data-aos="fade" data-aos-delay="0">
                    <!--Section title-->
                    <div class="vlt-section-title vlt-section-title--style-1">
                        <span class="vlt-section-title__subtitle"> {!! $page->getTranslation('heading7') !!}</span>
                        <h2 class="vlt-section-title__title">
                        {!! $page->getTranslation('heading8') !!}
                        </h2>
                    </div>
                </div>

                <div class="row">
                    @foreach (getBrands() as $brand )
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="vlt-gap-50"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                            <!--Partner-->
                            <div class="vlt-partner vlt-partner--center">
                                <a href="#"><img src="{{ asset($brand->getImage()) }}" alt=""
                                        loading="lazy" /></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="vlt-gap-120"></div>
        </section>
        <!--Section-->

        <!--Section-->
        <section class="blogs-home-1 has-theme1-background-color">
            <div class="container-fluid">
                <div class="vlt-gap-60"></div>
                <div class="vlt-animated-block text-center" data-aos="fade" data-aos-delay="0">
                    <!--Section title-->
                    <div class="vlt-section-title vlt-section-title--style-1">
                        <span class="vlt-section-title__subtitle text-white">  {!! $page->getTranslation('heading9') !!}</span>
                        <h2 class="vlt-section-title__title">
                        {!! $page->getTranslation('heading10') !!}
                        </h2>
                    </div>
                </div>

                <div class="vlt-gap-60"></div>

                <div class="row align-items-center">
                    @php 
                        $recentBlogs = getRecentBlogs();
                        $firstBlog = $recentBlogs[0] ?? []; 
                    @endphp
                    @if(!empty($firstBlog))
                        <div class="col-lg-3 p-0">
                            <div class="to-left h-100">
                                <div class="h-100">
                                    <img class="jarallax-img" src="{{ asset($firstBlog->getImage()) }}" alt=""
                                        loading="lazy" />
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 blog-item-content">
                            <!-- <div class="vlt-gap-130"></div> -->
                            <!--Animated block-->
                            <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                                <!--Section title-->
                                <div class="vlt-section-title vlt-section-title--style-1">
                                    <h3 class="vlt-section-title__title">
                                    {{ $firstBlog->getTranslation('title') }}
                                    </h3>
                                </div>
                            </div>
                            <div class="vlt-gap-20"></div>
                            <!--Animated block-->
                            <div class="vlt-animated-block blogs-description" data-aos="fade" data-aos-delay="100">
                                <p class="fz-1" style="max-width: 415px">
                                {{ mb_strimwidth(strip_tags($firstBlog->getTranslation('content')), 0, 200, '...') }}
                                </p>
                            </div>
                            <div class="vlt-gap-20"></div>
                            <!--Animated block-->
                            <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
                                <div class="has-black-color">
                                    <!--Simple link--><a class="vlt-simple-link vlt-simple-link--md" href="{{ route('news.details', ['blog' => $firstBlog->id]) }}"
                                        target="_self">{{ __('Read more') }}<i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endif

                    @php $secondBlog = $recentBlogs[1] ?? [];  @endphp

                    @if(!empty($secondBlog))
                        <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                            <div class="to-left h-100">
                                <div class="h-100">
                                    <img class="jarallax-img" src="{{ asset($secondBlog->getImage()) }}" alt=""
                                        loading="lazy" />
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 blog-item-content">
                            <!-- <div class="vlt-gap-130"></div> -->
                            <!--Animated block-->
                            <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                                <!--Section title-->
                                <div class="vlt-section-title vlt-section-title--style-1">
                                    <h3 class="vlt-section-title__title">
                                        {{ $secondBlog->getTranslation('title') }}
                                    </h3>
                                </div>
                            </div>
                            <div class="vlt-gap-20"></div>
                            <!--Animated block-->
                            <div class="vlt-animated-block blogs-description" data-aos="fade" data-aos-delay="100">
                                <p class="fz-1" style="max-width: 415px">
                                {{ mb_strimwidth(strip_tags($secondBlog->getTranslation('content')), 0, 200, '...') }}
                                </p>
                            </div>
                            <div class="vlt-gap-20"></div>
                            <!--Animated block-->
                            <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
                                <div class="has-black-color">
                                    <!--Simple link--><a class="vlt-simple-link vlt-simple-link--md" href="{{ route('news.details', ['blog' => $secondBlog->id ]) }}"
                                        target="_self">{{ __('Read more') }}<i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="row align-items-center flex-direction-column-reverse-in-mobile">
                    @php $thirdBlog = $recentBlogs[2] ?? []; @endphp

                    @if(!empty($thirdBlog))
                        <div class="col-lg-3 blog-item-content">
                            <!-- <div class="vlt-gap-130"></div> -->
                            <!--Animated block-->
                            <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                                <!--Section title-->
                                <div class="vlt-section-title vlt-section-title--style-1">
                                    <h3 class="vlt-section-title__title">
                                        {{ $thirdBlog->getTranslation('title') }}
                                    </h3>
                                </div>
                            </div>
                            <div class="vlt-gap-20"></div>
                            <!--Animated block-->
                            <div class="vlt-animated-block blogs-description" data-aos="fade" data-aos-delay="100">
                                <p class="fz-1" style="max-width: 415px">
                                    {{ mb_strimwidth(strip_tags($thirdBlog->getTranslation('content')), 0, 200, '...') }}
                                </p>
                            </div>
                            <div class="vlt-gap-20"></div>
                            <!--Animated block-->
                            <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
                                <div class="has-black-color">
                                    <!--Simple link--><a class="vlt-simple-link vlt-simple-link--md" href="{{ route('news.details', ['blog' => $thirdBlog->id]) }}"
                                        target="_self">{{ __('Read more') }}<i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 p-0">
                            <div class="to-left h-100">
                                <div class="h-100">
                                    <img class="jarallax-img" src="{{ asset($thirdBlog->getImage()) }}" alt=""
                                        loading="lazy" />
                                </div>
                            </div>
                        </div>
                    @endif

                    @php $forthBlog = $recentBlogs[3] ?? []; @endphp

                    @if(!empty($forthBlog))
                        <div class="col-lg-3 blog-item-content">
                            <!--Animated block-->
                            <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                                <!--Section title-->
                                <div class="vlt-section-title vlt-section-title--style-1">
                                    <h3 class="vlt-section-title__title">
                                    {{ $forthBlog->getTranslation('title') }}
                                    </h3>
                                </div>
                            </div>
                            <div class="vlt-gap-20"></div>
                            <!--Animated block-->
                            <div class="vlt-animated-block blogs-description" data-aos="fade" data-aos-delay="100">
                                <p class="fz-1" style="max-width: 415px">
                                {{ mb_strimwidth(strip_tags($forthBlog->getTranslation('content')), 0, 200, '...') }}
                                </p>
                            </div>
                            <div class="vlt-gap-20"></div>
                            <!--Animated block-->
                            <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
                                <div class="has-black-color">
                                    <!--Simple link--><a class="vlt-simple-link vlt-simple-link--md" href="{{ route('news.details', ['blog' => $forthBlog->id]) }}"
                                        target="_self">{{ __('Read more') }}<i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 p-0">
                            <div class="to-left h-100">
                                <div class="h-100">
                                    <img class="jarallax-img" src="{{ asset($forthBlog->getImage()) }}" alt=""
                                        loading="lazy" />
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
        <!--Section-->

       @include('frontend.parts.mobile-section')
    </div>
@endsection
