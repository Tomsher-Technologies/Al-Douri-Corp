@extends('layouts.app.app')
@section('content')
    <div class="vlt-page-content">
        <!--Section-->
        <section class="position-relative">
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
                    <div class="vlt-slider-controls vlt-slider-controls--style-1 vlt-homepage-12-anchor has-white-color">
                        <div class="vlt-swiper-button-prev">Prev</div>
                        <span class="sep">|</span>
                        <div class="vlt-swiper-button-next">Next</div>
                    </div>
                    <div class="vlt-project-showcase__socials has-white-color">
                        <a class="vlt-social-icon vlt-social-icon--style-1" href="#">
                            <i class="fa-brands fa-facebook"></i></a><a class="vlt-social-icon vlt-social-icon--style-1"
                            href="#"><i class="fa-brands fa-twitter"></i></a><a
                            class="vlt-social-icon vlt-social-icon--style-1" href="#"><i
                                class="fa-brands fa-instagram"></i></a><a class="vlt-social-icon vlt-social-icon--style-1"
                            href="#"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="vlt-project-showcase__item">
                                <div class="vlt-project-showcase__image"
                                    style="
                                    background-image: url(assets/img/banner01.webp);
                                ">
                                </div>
                                <div class="d-flex flex-grow-1 flex-shrink-1 align-items-center">
                                    <div class="vlt-project-showcase__content">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <h1 class="vlt-project-showcase__title">
                                                        Al Douri
                                                        Passionate
                                                        Experts
                                                    </h1>
                                                    <p class="vlt-project-showcase__text">
                                                        Setting new
                                                        standards in the
                                                        food industry,
                                                        through offering
                                                        high quality
                                                        products that
                                                        have high
                                                        nutritional
                                                        value to help
                                                        our customers
                                                        enjoy healthier
                                                        lifestyle
                                                    </p>

                                                    <!--Button--><a class="vlt-btn vlt-btn--primary vlt-btn--md"
                                                        href="#" target="_self">Explore
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="vlt-project-showcase__item">
                                <div class="vlt-project-showcase__image"
                                    style="
                                    background-image: url(assets/img/banner02.webp);
                                ">
                                </div>
                                <div class="d-flex flex-grow-1 flex-shrink-1 align-items-center">
                                    <div class="vlt-project-showcase__content">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <h1 class="vlt-project-showcase__title">
                                                        Nourishing your
                                                        family, every
                                                        day
                                                    </h1>

                                                    <p class="vlt-project-showcase__text">
                                                        Setting new
                                                        standards in the
                                                        food industry,
                                                        through offering
                                                        high quality
                                                        products that
                                                        have high
                                                        nutritional
                                                        value to help
                                                        our customers
                                                        enjoy healthier
                                                        lifestyle
                                                    </p>

                                                    <!--Button--><a class="vlt-btn vlt-btn--primary vlt-btn--md"
                                                        href="#" target="_self">Explore
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="vlt-project-showcase__item">
                                <div class="vlt-project-showcase__image"
                                    style="
                                    background-image: url(assets/img/banner03.webp);
                                ">
                                </div>
                                <div class="d-flex flex-grow-1 flex-shrink-1 align-items-center">
                                    <div class="vlt-project-showcase__content">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <h1 class="vlt-project-showcase__title">
                                                        Savor the moment
                                                        with our food
                                                    </h1>

                                                    <p class="vlt-project-showcase__text">
                                                        Setting new
                                                        standards in the
                                                        food industry,
                                                        through offering
                                                        high quality
                                                        products that
                                                        have high
                                                        nutritional
                                                        value to help
                                                        our customers
                                                        enjoy healthier
                                                        lifestyle
                                                    </p>

                                                    <!--Button--><a class="vlt-btn vlt-btn--primary vlt-btn--md"
                                                        href="#" target="_self">Explore
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

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
                                    Crafting deliciousness since
                                    <span class="has-primary-color">1979</span>
                                </h2>
                                <div class="vlt-gap-30"></div>
                                <p>
                                    Setting new standards in the food
                                    industry, through offering high
                                    quality products that have high
                                    nutritional value to help our
                                    customers enjoy healthier lifestyle
                                </p>
                            </div>
                        </div>

                        <div class="vlt-gap-40--sm"></div>
                    </div>
                    <div class="col-md-5">
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                            <p class="fz-2">
                                Al Douri Group is a privately-owned
                                family business located in the United
                                Arab Emirates. Al Douri Group emerged in
                                1979 as a food service market leader in
                                the GCC region with a two-century old
                                heritage and exceptional experience that
                                has grown through four generations of
                                professional family management.
                            </p>
                            <div class="vlt-gap-50"></div>
                            <!--Button--><a class="vlt-btn vlt-btn--secondary vlt-btn--md" href="#"
                                target="_self">Who we are</a>
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
                            <img src="{{ asset('assets/img/about-img2.png') }}" alt="" loading="lazy" />
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
                                Al Douri Group’s top priority is to
                                offer the best and highest quality food
                                products.
                            </h5>
                        </div>
                        <div class="vlt-gap-30"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                            <p class="fz-2">
                                Al Douri Group’s top priority is to
                                offer the best and highest quality food
                                products. To start a successful journey,
                                you have to always prepare, innovate and
                                follow a clear strategy.
                            </p>
                        </div>
                        <div class="vlt-gap-40"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
                            <div class="has-black-color">
                                <!--Simple link--><a class="vlt-simple-link vlt-simple-link--md" href="#"
                                    target="_self">Read more
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
                            <img src="{{ asset('assets/img/about-img3.png') }}" alt="" loading="lazy" />
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
                            <img src="{{ asset('assets/img/our-heritage.webp') }}" alt="" loading="lazy" />
                        </div>
                        <div class="vlt-types-background__image">
                            <img src="{{ asset('assets/img/our-mission.webp') }}" alt="" loading="lazy" />
                        </div>
                        <div class="vlt-types-background__image">
                            <img src="{{ asset('assets/img/our-vision.webp') }}" alt="" loading="lazy" />
                        </div>
                    </div>
                    <div class="vlt-types-list">
                        <div class="vlt-types-list__item">
                            <a class="has-cursor" href="#"></a>
                            <div class="vlt-types-list__background">
                                <img src="{{ asset('assets/img/our-heritage.webp') }}" alt="" loading="lazy" />
                            </div>
                            <div class="vlt-types-list__content">
                                <h4 class="vlt-types-list__title">
                                    Our heritage
                                </h4>
                                <span class="vlt-types-list__category">Al Douri is a modern enterprise
                                    with an inspiring and proud heritage
                                    that goes back to the 18th
                                    century.The inspiring success story
                                    of Al Douri in the UAE commenced in
                                    1979 with the founding of the Al
                                    Douri Foodstuff Trading Company and
                                    Factory.</span>
                            </div>
                        </div>
                        <div class="vlt-types-list__item">
                            <a class="has-cursor" href="#"></a>
                            <div class="vlt-types-list__background">
                                <img src="{{ asset('assets/img/our-mission.webp') }}" alt="" loading="lazy" />
                            </div>
                            <div class="vlt-types-list__content">
                                <h4 class="vlt-types-list__title">
                                    Our Mission
                                </h4>
                                <span class="vlt-types-list__category">“Deliver premium quality food to
                                    our customers worldwide, which
                                    enables them to enjoy the great
                                    taste with the highest levels of
                                    freshness and nutritional
                                    value”.</span>
                            </div>
                        </div>
                        <div class="vlt-types-list__item">
                            <a class="has-cursor" href="#"></a>
                            <div class="vlt-types-list__background">
                                <img src="{{ asset('assets/img/our-vision.webp') }}" alt="" loading="lazy" />
                            </div>
                            <div class="vlt-types-list__content">
                                <h4 class="vlt-types-list__title">
                                    Our Vision
                                </h4>
                                <span class="vlt-types-list__category">“Setting new standards in the food
                                    industry, through offering high
                                    quality products that have high
                                    nutritional value to help our
                                    customers enjoy healthier
                                    lifestyle”.</span>
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
                                <li class="is-active">
                                    <img src="{{ asset('assets/img/distribution.webp') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('assets/img/export-and-import.webp') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('assets/img/factories-and-private-labeling.webp') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('assets/img/retail.webp') }}" alt="" />
                                </li>
                            </ul>
                        </div>
                        <div class="vlt-gap-60--md"></div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                            <!--Section title-->
                            <div class="vlt-section-title vlt-section-title--style-1">
                                <span class="vlt-section-title__subtitle">Our businesses
                                </span>
                                <h2 class="vlt-section-title__title" style="color: #000">
                                    Bringing Excellence <br />
                                    to Every Market.
                                </h2>
                            </div>
                        </div>
                        <div class="vlt-gap-50"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                            <!--Tab image-->
                            <ul class="vlt-tabs">
                                <li class="is-active">
                                    <a href="javascript:;">01. Distribution</a>
                                </li>
                                <li>
                                    <a href="javascript:;">02. Export/import</a>
                                </li>
                                <li>
                                    <a href="javascript:;">03. Factories and private
                                        labeling</a>
                                </li>
                                <li>
                                    <a href="javascript:;">04. Retail</a>
                                </li>
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
                        <span class="vlt-section-title__subtitle">Our product range</span>
                        <h2 class="vlt-section-title__title">
                            Innovative food solutions for a healthier
                            lifestyle
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
                                    <div class="swiper-slide">
                                        <div>
                                            <!--Portfolio item-->
                                            <article class="vlt-work vlt-work--style-1">
                                                <div class="vlt-work__media">
                                                    <a class="vlt-work__link has-cursor" href="#"></a><img
                                                        src="{{ asset('assets/img/coffee.png') }}" alt="" loading="lazy" />
                                                </div>
                                                <div class="vlt-work__meta">
                                                    <h5 class="vlt-work__title">
                                                        <a href="#">Coffee</a>
                                                    </h5>
                                                    <!-- <span class="vlt-work__category">Coffee</span> -->
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div>
                                            <!--Portfolio item-->
                                            <article class="vlt-work vlt-work--style-1">
                                                <div class="vlt-work__media">
                                                    <a class="vlt-work__link has-cursor" href="#"></a><img
                                                        src="{{ asset('assets/img/nuts.png') }}" alt="" loading="lazy" />
                                                </div>
                                                <div class="vlt-work__meta">
                                                    <h5 class="vlt-work__title">
                                                        <a href="#">Nuts</a>
                                                    </h5>
                                                    <!-- <span class="vlt-work__category">Coffe</span> -->
                                                </div>
                                            </article>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div>
                                            <!--Portfolio item-->
                                            <article class="vlt-work vlt-work--style-1">
                                                <div class="vlt-work__media">
                                                    <a class="vlt-work__link has-cursor"
                                                        href="product-detail.html"></a><img
                                                        src="{{ asset('assets/img/Confectionery.png') }}" alt=""
                                                        loading="lazy" />
                                                </div>
                                                <div class="vlt-work__meta">
                                                    <h5 class="vlt-work__title">
                                                        <a href="product-detail.html">Confectionery</a>
                                                    </h5>
                                                    <!--<span class="vlt-work__category">Cookies</span> -->
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div>
                                            <!--Portfolio item-->
                                            <article class="vlt-work vlt-work--style-1">
                                                <div class="vlt-work__media">
                                                    <a class="vlt-work__link has-cursor" href="#"></a><img
                                                        src="{{ asset('assets/img/special.png') }}" alt="" loading="lazy" />
                                                </div>
                                                <div class="vlt-work__meta">
                                                    <h5 class="vlt-work__title">
                                                        <a href="#">Special
                                                            Products</a>
                                                    </h5>
                                                    <!--<span class="vlt-work__category">Hershey's</span> -->
                                                </div>
                                            </article>
                                        </div>
                                    </div>
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
                                <div class="vlt-slider-controls vlt-slider-controls--style-1 vlt-work-carousel-grid">
                                    <div class="vlt-swiper-button-prev">
                                        Prev
                                    </div>
                                    <span class="sep">|</span>
                                    <div class="vlt-swiper-button-next">
                                        Next
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vlt-gap-50"></div>
                    </div>
                </div>
            </div>
        </section>

        <!--Section-->
        <section class="jarallax has-white-color">
            <img class="jarallax-img" src="{{ asset('assets/img/video-banner-01.webp') }}" alt="" loading="lazy" />
            <div class="vlt-gap-240"></div>
            <div class="text-center">
                <!--Video button-->
                <div class="vlt-video-button">
                    <a href="https://vimeo.com/367945766" data-fancybox data-small-btn="true" rel="nofollow"><i
                            class="fa-solid fa-play"></i></a>
                    <h6>View Video</h6>
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
                        <span class="vlt-section-title__subtitle">Our Brands</span>
                        <h2 class="vlt-section-title__title">
                            Innovative food solutions for a healthier
                            lifestyle
                        </h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="vlt-gap-50"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                            <!--Partner-->
                            <div class="vlt-partner vlt-partner--center">
                                <a href="#"><img src="{{ asset('assets/img/root/clients/client-logo-01.png') }}" alt=""
                                        loading="lazy" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3">
                        <div class="vlt-gap-50"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                            <!--Partner-->
                            <div class="vlt-partner vlt-partner--center">
                                <a href="#"><img src="{{ asset('assets/img/root/clients/client-logo-02.png') }}" alt=""
                                        loading="lazy" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="vlt-gap-50"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
                            <!--Partner-->
                            <div class="vlt-partner vlt-partner--center">
                                <a href="#"><img src="{{ asset('assets/img/root/clients/client-logo-03.png') }}" alt=""
                                        loading="lazy" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="vlt-gap-50"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="300">
                            <!--Partner-->
                            <div class="vlt-partner vlt-partner--center">
                                <a href="#"><img src="{{ asset('assets/img/root/clients/client-logo-04.png') }}" alt=""
                                        loading="lazy" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="vlt-gap-50"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                            <!--Partner-->
                            <div class="vlt-partner vlt-partner--center">
                                <a href="#"><img src="{{ asset('assets/img/root/clients/client-logo-05.png') }}" alt=""
                                        loading="lazy" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="vlt-gap-50"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                            <!--Partner-->
                            <div class="vlt-partner vlt-partner--center">
                                <a href="#"><img src="{{ asset('assets/img/root/clients/client-logo-06.png') }}" alt=""
                                        loading="lazy" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="vlt-gap-50"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
                            <!--Partner-->
                            <div class="vlt-partner vlt-partner--center">
                                <a href="#"><img src="{{ asset('assets/img/root/clients/client-logo-07.png') }}" alt=""
                                        loading="lazy" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="vlt-gap-50"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="300">
                            <!--Partner-->
                            <div class="vlt-partner vlt-partner--center">
                                <a href="#"><img src="{{ asset('assets/img/root/clients/client-logo-08.png') }}" alt=""
                                        loading="lazy" /></a>
                            </div>
                        </div>
                    </div>
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
                        <span class="vlt-section-title__subtitle text-white">Our Blogs</span>
                        <h2 class="vlt-section-title__title">
                            Innovative food solutions for a healthier
                            lifestyle
                        </h2>
                    </div>
                </div>

                <div class="vlt-gap-60"></div>

                <div class="row align-items-center">
                    <div class="col-lg-3 p-0">
                        <div class="to-left h-100">
                            <div class="h-100">
                                <img class="jarallax-img" src="{{ asset('assets/img//blog/blog-01.png') }}" alt=""
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
                                    How Food Manufacturing is Responding
                                    to the Plant-Based Revolution
                                </h3>
                            </div>
                        </div>
                        <div class="vlt-gap-20"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block blogs-description" data-aos="fade" data-aos-delay="100">
                            <p class="fz-1" style="max-width: 415px">
                                Darkness they're, moved whales great or
                                void great man one man from blessed so
                                our good face was fruitful sixth male
                                kind.
                            </p>
                        </div>
                        <div class="vlt-gap-20"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
                            <div class="has-black-color">
                                <!--Simple link--><a class="vlt-simple-link vlt-simple-link--md" href="#"
                                    target="_self">Read more<i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                        <div class="to-left h-100">
                            <div class="h-100">
                                <img class="jarallax-img" src="{{ asset('assets/img//blog/blog-02.png') }}" alt=""
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
                                    How Food Manufacturing is Responding
                                    to the Plant-Based Revolution
                                </h3>
                            </div>
                        </div>
                        <div class="vlt-gap-20"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block blogs-description" data-aos="fade" data-aos-delay="100">
                            <p class="fz-1" style="max-width: 415px">
                                Darkness they're, moved whales great or
                                void great man one man from blessed so
                                our good face was fruitful sixth male
                                kind.
                            </p>
                        </div>
                        <div class="vlt-gap-20"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
                            <div class="has-black-color">
                                <!--Simple link--><a class="vlt-simple-link vlt-simple-link--md" href="#"
                                    target="_self">Read more<i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center flex-direction-column-reverse-in-mobile">
                    <div class="col-lg-3 blog-item-content">
                        <!-- <div class="vlt-gap-130"></div> -->
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                            <!--Section title-->
                            <div class="vlt-section-title vlt-section-title--style-1">
                                <h3 class="vlt-section-title__title">
                                    How Food Manufacturing is Responding
                                    to the Plant-Based Revolution
                                </h3>
                            </div>
                        </div>
                        <div class="vlt-gap-20"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block blogs-description" data-aos="fade" data-aos-delay="100">
                            <p class="fz-1" style="max-width: 415px">
                                Darkness they're, moved whales great or
                                void great man one man from blessed so
                                our good face was fruitful sixth male
                                kind.
                            </p>
                        </div>
                        <div class="vlt-gap-20"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
                            <div class="has-black-color">
                                <!--Simple link--><a class="vlt-simple-link vlt-simple-link--md" href="#"
                                    target="_self">Read more<i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 p-0">
                        <div class="to-left h-100">
                            <div class="h-100">
                                <img class="jarallax-img" src="{{ asset('assets/img//blog/blog-03.png') }}" alt=""
                                    loading="lazy" />
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 blog-item-content">
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                            <!--Section title-->
                            <div class="vlt-section-title vlt-section-title--style-1">
                                <h3 class="vlt-section-title__title">
                                    How Food Manufacturing is Responding
                                    to the Plant-Based Revolution
                                </h3>
                            </div>
                        </div>
                        <div class="vlt-gap-20"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block blogs-description" data-aos="fade" data-aos-delay="100">
                            <p class="fz-1" style="max-width: 415px">
                                Darkness they're, moved whales great or
                                void great man one man from blessed so
                                our good face was fruitful sixth male
                                kind.
                            </p>
                        </div>
                        <div class="vlt-gap-20"></div>
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
                            <div class="has-black-color">
                                <!--Simple link--><a class="vlt-simple-link vlt-simple-link--md" href="#"
                                    target="_self">Download Al Douri App<i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 p-0">
                        <div class="to-left h-100">
                            <div class="h-100">
                                <img class="jarallax-img" src="{{ asset('assets/img//blog/blog-04.png') }}" alt=""
                                    loading="lazy" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Section-->

       @include('frontend.parts.mobile-section')
    </div>
@endsection
