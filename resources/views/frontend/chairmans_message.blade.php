@extends('layouts.app.app')
@section('content')
    <!--Page content-->
    <div class="vlt-page-content">
        <!--Page title-->
        <div class="vlt-page-title vlt-page-title--style-3 jarallax"><img class="jarallax-img" src="{{ asset('assets/img/banner01.webp') }}"
                alt="" loading="lazy">
            <div class="vlt-page-title__overlay"></div><a class="vlt-page-title__scroll-to vlt-scroll-to" href="#content"><i
                    class="fa fa-arrow-down"></i></a>
            <div class="container">
                <h1 class="vlt-page-title__title lax" data-lax-translate-y="0 0, vh (vw*0.25)"
                    data-lax-opacity="1 1, (vh*0.5) 0" data-lax-anchor=".vlt-page-title">Chairmans Message
                </h1>
            </div>
        </div>
        <div id="content"></div>
        <!--Section-->


        <section class="has-black-color">
            <div class="vlt-gap-120"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                            <div class="position-relative text-center">
                                <div class="position-relative mx-auto" style="max-width: 420px;">
                                    <!--Simple image-->
                                    <div class="vlt-simple-image">
                                        <div class="vlt-simple-image__mask" data-aos="image-mask-animation"
                                            data-aos-delay="0">
                                            <div class="inside"></div>
                                        </div><img src="{{ asset('assets/img/team1.jpg') }}" alt="" loading="lazy">
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
                                <h1 class="fz-6 has-primary-color center-mode text-nowrap">Amer Al Douri</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 offset-md-2">
                        <div class="text-center">
                            <div class="vlt-gap-80"></div>
                            <!--Animated block-->
                            <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                                <p class="fz-4" style="padding: 0 30px; font-style: italic;"><strong>"</strong>Lorem ipsum
                                    dolor sit amet consectetur adipisicing elit. Aut tempora reprehenderit rerum temporibus!
                                    Eum corrupti incidunt dolore, quo et deleniti corporis maiores atque quas, quae non in
                                    pariatur laboriosam consequatur? Lorem ipsum dolor sit, amet consectetur adipisicing
                                    elit. Expedita, rem? Hic, libero! Vero omnis qui, nobis nisi laudantium totam. Ex libero
                                    magnam ab ullam tenetur optio. Minus facilis tempora facere.<strong>"</strong></p>
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
