@extends('layouts.app.app', [
    'main_class' => 'bg-05',
])
@section('content')
    <div class="vlt-gap-150"></div>
    <!--Page content-->
    <!--Page content-->
    <div class="vlt-page-content">
        <!--Page title-->
        <div class="vlt-page-title vlt-page-title--style-4 pb-5">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="vlt-page-title__title ">
                            {{ $category->getTranslation('title') }}
                        </h1>
                    </div>
                    <div class="col-md-12 vlt-page-title__subtitle m-auto">
                        {!! $category->getTranslation('description') !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- <section> -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="vlt-simple-image__mask" data-aos="image-mask-animation" data-aos-delay="0">
                        <div class="inside"></div>
                    </div>
                    <img src="{{ $category->getImage('banner_image') }}" alt="" loading="lazy">
                </div>
            </div>
        </div>

        <div class="container-fluid position-relative g-0">
            <div class="row">
                <div class="col-md-6 g-0">
                    <div class="vlt-simple-image">
                        <img class="w-100" src="{{ $category->getImage('image_1') }}" alt="" loading="lazy">
                    </div>
                </div>
                <div class="col-md-6 g-0">
                    <div class="vlt-simple-image">
                        <img src="{{ $category->getImage('image_2') }}" alt="" loading="lazy">
                    </div>
                </div>
            </div>
        </div>

        <!--Section-->
        <section class="bg-white">
            <div class="container-fluid p-0">
                <div class="vlt-gap-20"></div>
                <!--Animated block-->
                <div class="vlt-animated-block" data-aos="fade" data-aos-delay="300">
                    <!--Content slider-->
                    <div class="vlt-content-slider " data-navigation-anchor=".vlt-work-carousel-grid" data-gap="10"
                        data-loop="enable" data-speed="" data-autoplay="true" data-autoplay-speed="2000"
                        data-slides-centered=""
                        data-slide-settings="{&quot;slides_to_show&quot;:5,&quot;slides_to_show_tablet&quot;:3,&quot;slides_to_show_mobile&quot;:2}"
                        data-free-mode="" data-slider-offset="" data-mousewheel="">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @foreach ($products as $product)
                                    <div class="swiper-slide">
                                        <div>
                                            <!--Portfolio item-->
                                            <article class="vlt-work vlt-work--style-3">
                                                <div class="vlt-work__media">
                                                    <a class="vlt-work__link has-cursor" href="#"></a>
                                                    <img src="{{ $product->getImage('image') }}" alt="" loading="lazy">
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="vlt-gap-20"></div>
                <div class="m-auto text-center">
                    <div class="vlt-slider-controls vlt-slider-controls--style-1 vlt-work-carousel-grid">
                        <div class="vlt-swiper-button-prev"><i class="fa fa-arrow-left"></i>
                        </div>
                        <div class="vlt-swiper-pagination"></div>
                        <div class="vlt-swiper-button-next"><i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </div>

                <div class="vlt-gap-20"></div>
            </div>
        </section>
        <!--Section-->


        <!--Page navigation-->
        {{-- <section class="vlt-page-navigation vlt-page-navigation--style-2">
            <div class="container">
                <div class="row no-gutters align-items-stretch">
                    <div class="col-5">
                        <div class="prev"><span class="label"><i class="fa-solid fa-arrow-left"></i> Previous</span>
                            <h5><a href="single-work-03.html">Malban</a></h5>
                        </div>
                    </div>
                    <div class="col-2 d-flex align-items-center justify-content-center">
                        <div class="all"><a href="#"><i class="fa-solid fa-grip"></i></a></div>
                    </div>
                    <div class="col-5">
                        <div class="next"><span class="label">Next <i class="fa-solid fa-arrow-right"></i></span>
                            <h5><a href="single-work-01.html">Marzipan</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    </div>
    @php  
        $general = getSettings();
    @endphp
    @include('frontend.parts.mobile-section')
@endsection
