@extends('layouts.app.app')
@section('content')
    <!--Section-->
    <section>
        <div class="vlt-post-media-title vlt-post-media-title--style-2 jarallax"><img class="jarallax-img"
                src="{{ asset('assets/img/Support.jpg') }}" alt="" loading="lazy">
            <div class="vlt-post-media-title__overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="lax" data-lax-translate-y="0 0, vh (vw*0.25)" data-lax-opacity="1 1, (vh*0.5) 0"
                            data-lax-anchor=".vlt-post-media-title">
                            <h1 class="vlt-post-title">
                                {{ $blog->getTranslation('title') }}
                            </h1>
                            <div class="vlt-post-meta"><span>{{ $blog->getDate() }}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Page content-->
    <div class="vlt-page-content vlt-page-content--padding">
        <!--Section-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <!--Single post-->
                        <article class="vlt-single-post vlt-single-post--style-3">
                            <div class="vlt-single-post__content">
                                <img class="w-100" src="{{ $blog->getImage() }}"
                                    alt="{{ $blog->getTranslation('title') }}">

                                <div class="vlt-gap-40"></div>

                                {!! $blog->getTranslation('content') !!}

                                <div class="vlt-gap-40"></div>

                            </div>

                        </article>
                        <!--Comments-->

                    </div>
                    <div class="col-lg-4">
                        <!--Sidebar-->
                        <div class="vlt-sidebar vlt-sidebar--right">
                            <!--Widget-->
                            <div class="vlt-widget vlt-widget--recent-posts">
                                <h5 class="vlt-widget__title">{{ __('Recent Posts') }}</h5>
                                @foreach ($latest_news as $item)
                                    <div class="vlt-widget-post">
                                        <div class="vlt-widget-post__thumbnail">
                                            <a href="{{ route('news.details', $item) }}">
                                                <img src="{{ $item->getImage() }}"
                                                    alt="{{ $item->getTranslation('title') }}" loading="lazy">
                                            </a>
                                        </div>
                                        <div class="vlt-widget-post__content"><span>{{ $item->getDate() }}</span>
                                            <h5>
                                                <a href="{{ route('news.details', $item) }}">
                                                    {{ $item->getTranslation('title') }}
                                                </a>
                                            </h5>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="vlt-page-navigation vlt-page-navigation--style-2">
            <div class="container">
                <div class="row no-gutters align-items-stretch">
                    <div class="col-5">

                        @if ($previous_post)
                            <div class="prev ">
                                <span class="label text-black">
                                    <i class="fa-solid fa-arrow-left"></i>{{ __('Previous') }}</span>
                                <h5>
                                    <a
                                        href="{{ route('news.details', $previous_post) }}">{{ $previous_post->getTranslation('title') }}</a>
                                </h5>
                            </div>
                        @endif

                    </div>
                    <div class="col-2 d-flex align-items-center justify-content-center">
                        <div class="all">
                            <a href="{{ route('news') }}">
                                <i class="fa-solid fa-grip"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-5">
                        @if ($next_post)
                            <div class="next">
                                <span class="label text-black"> {{ __('Next') }} <i class="fa-solid fa-arrow-right"></i>
                                </span>
                                <h5>
                                    <a
                                        href="{{ route('news.details', $next_post) }}">{{ $next_post->getTranslation('title') }}</a>
                                </h5>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
