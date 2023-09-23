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
                data-lax-opacity="1 1, (vh*0.5) 0" data-lax-anchor=".vlt-page-title">
                {{ $page->getTranslation('title') }}
            </h1>
        </div>
    </div>
    <div id="content"></div>
    <!--Section-->
    <section>
        <div class="vlt-gap-120"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--Animated block-->
                    <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                        <h2>{!! $page->getTranslation('heading1') !!}</h2>
                    </div>
                    <div class="vlt-gap-60"></div>
                </div>
                <div class="col-lg-8">
                    <!--Animated block-->
                    <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                        <!--Contact form-->
                        @livewire('frontend.contact-form')
                    </div>
                    <div class="vlt-gap-60--md"></div>
                </div>
                <div class="col-lg-4">
                    <div class="vlt-pl-70 vlt-pl-0--md">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <!--Animated block-->
                                <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
                                    <h5>{!! $page->getTranslation('heading2') !!}</h5>
                                    @php
                                    $general = getSettings();
                                    @endphp
                                    <div class="vlt-gap-20"></div>
                                    <p class="lh-2">
                                        {{ $general->address }}
                                        <br>
                                        {{ $general->phone }}
                                        <br>{{ $general->email }}
                                    </p>
                                </div>

                            </div>
                            <div class="col-lg-12 col-md-6">
                                <!--Animated block-->

                                <div class="vlt-gap-20"></div>
                                <!--Animated block-->


                                <div class="vlt-animated-block" data-aos="fade" data-aos-delay="400">
                                    <div class="has-black-color">

                                        <a class="vlt-social-icon vlt-social-icon--style-1" target="_blank"
                                            href="{{ $general->facebook }}"> <i class="fa-brands fa-facebook"></i></a><a
                                            class="vlt-social-icon vlt-social-icon--style-1" target="_blank"
                                            href="{{ $general->twitter }}"><i class="fa-brands fa-twitter"></i></a><a
                                            class="vlt-social-icon vlt-social-icon--style-1" target="_blank"
                                            href="{{ $general->instagram }}"><i
                                                class="fa-brands fa-instagram"></i></a><a
                                            class="vlt-social-icon vlt-social-icon--style-1" target="_blank"
                                            href="{{ $general->linkedin }}"><i class="fa-brands fa-linkedin"></i></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vlt-gap-120"></div>
        <div class="container position-relative">
            <!--Particle image--><img class="vlt-particle" src="{{ asset('assets/img/root/square-plus-pattern.png') }}"
                data-animation-name="fadeInUp" alt=""
                style="position: absolute; top: -140px; right: -120px; max-width: 232px; --animate-delay: .5s;"
                loading="lazy">
            <!--Animated block-->
            <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                <!--Google map-->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7233.780876092923!2d55.198307!3d24.969842!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5ef22e0c860f%3A0x78fa143949d14f29!2sAl%20Douri%20Group%20-%20DIP%20(Head%20Office%20%26%20Distribution%20Center)!5e0!3m2!1sen!2sae!4v1693982085826!5m2!1sen!2sae"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="vlt-gap-120"></div>
    </section>






    <!--Section-->
    <section>

        <div class="container">
            <div class="text-center">
                <ul class="vlt-isotope-filters" id="vlt-filter-blog-03">
                    @php  
                        $location = '';  
                                    
                    @endphp
                    @foreach($branches as $key => $branch)
                        @php      
                            $slug = Str::slug(trim($branch->name));

                            $locations =  $branch->locations;

                            if(!empty($locations)){
                                foreach($locations as $loc){
                                    $location_name = $loc->getTranslation('location');
                                    $phone = $loc->phone;
                                    $work = $loc->working_hours; 
                                    $viewLoc = $loc->link;

                                    $location .= ' <div class=" grid-item '.$slug.'">
                                                <article class="vlt-post vlt-post--style-5">
                                                    <div class="vlt-post__content">
                                                        <h3 class="vlt-post-title has-cursor">
                                                            <i class="fa-solid fa-building"></i> '.$location_name.'
                                                        </h3>
                                                        <h3 class="vlt-post-title has-cursor">
                                                            <i class="fa fa-phone"></i><a href="#"> '.$phone.'</a>
                                                        </h3>
                                                        <div class="vlt-post-date"><i class="fa-regular fa-clock"></i>
                                                            <span>'.$work.'</span>
                                                        </div>
                                                        <div class="vlt-post-category"><a target="_blank" href="'.$viewLoc.'">
                                                        '.trans("View Location").'
                                                      </a> 
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>';
                                }
                            }
                            $active = ($key == 0) ? 'active' : '';
                        @endphp

                        <li class="{{ $active }}" data-filter=".{{$slug}}"><span>{{ $branch->getTranslation('name') }}</span></li>
                    @endforeach
                </ul>
            </div>
            <div class="vlt-gap-90"></div>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="vlt-isotope-grid" data-columns="1" data-layout="masonry" data-x-gap="0|0"
                        data-y-gap="0|0" data-controls="#vlt-filter-blog-03"
                        data-load-more-selector="#vlt-load-more-blog-03">
                        <div class="grid-sizer"></div>
                        {!! $location !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="vlt-gap-50"></div>
    </section>






</div>
@endsection

@push('header')
@livewireScripts
@livewireStyles
@endpush