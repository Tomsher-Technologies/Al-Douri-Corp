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
                <div class="col-md-10 offset-md-1">

                    <div class="text-center">
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                            <!--Section title-->
                            <div class="vlt-section-title vlt-section-title--style-2">
                                <h2 class="vlt-section-title__title">{{ $page->getTranslation('heading1') }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="vlt-gap-100"></div>

                    @if($careers)
                        @foreach($careers as $cr)
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                            <!--Wanted position-->
                            <div class="vlt-wanted-position"><a class="vlt-wanted-position__link" href="{{ route('career-details',['slug' => $cr->slug]) }}"></a>
                                <div class="vlt-wanted-position__position">{{ $cr->getTranslation('title') }}
                                </div>
                            
                                <div class="vlt-wanted-position__time">{{ ($cr->type == 'full') ? __('Full-Time') : __('Part-Time') }}
                                </div>
                                <div class="vlt-wanted-position__icon"><i class="fa fa-arrow-right"></i></div>
                            </div>
                        </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
        <div class="vlt-gap-50"></div>
    </section>
    <!--Section-->




</div>
@endsection

