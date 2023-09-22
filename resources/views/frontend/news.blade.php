@extends('layouts.app.app')
@section('content')
    <!--Page content-->
    <div class="vlt-page-content">
        <!--Page title-->
        <div class="vlt-page-title vlt-page-title--style-3 jarallax"><img class="jarallax-img"
                src="{{ asset($page->getImage1('image1')) }}" alt="" loading="lazy">
            <div class="vlt-page-title__overlay"></div>
            <a class="vlt-page-title__scroll-to vlt-scroll-to" href="#content">
                <i class="fa fa-arrow-down"></i>
            </a>
            <div class="container">
                <h1 class="vlt-page-title__title lax" data-lax-translate-y="0 0, vh (vw*0.25)"
                    data-lax-opacity="1 1, (vh*0.5) 0" data-lax-anchor=".vlt-page-title">{{ $page->getTranslation('title') }}
                </h1>
            </div>
        </div>
        <div id="content"></div>
        <!--Section-->

        <section>
            <div class="vlt-gap-120"></div>
            <div class="container">
                <div class="vlt-isotope-grid" data-columns="2" data-layout="masonry" data-x-gap="30|30" data-y-gap="30|30"
                    data-controls="#vlt-filter-blog-08" data-load-more-selector="#vlt-load-more-blog-08">
                    <div class="grid-sizer"></div>


                    @foreach ($blogs as $blog)
                        <div class=" grid-item filter-design">
                            <!--Blog item-->
                            <article class="vlt-post vlt-post--style-3">
                                <div class="vlt-post__media">
                                    <a class="vlt-post__link" href="{{ route('news.details', ['blog' => $blog->id]) }}"
                                        title="{{ $blog->getTranslation('title') }}"></a>
                                    <img src="{{ $blog->getImage() }}" alt="{{ $blog->getTranslation('title') }}"
                                        loading="lazy">
                                </div>
                                <div class="vlt-post__content">
                                    <header class="vlt-post__header">
                                        <div class="vlt-post-meta">
                                            <span>
                                                {{ $blog->getDate() }}
                                            </span>
                                        </div>
                                        <h3 class="vlt-post-title">
                                            <a href="{{ route('news.details', ['blog' => $blog->id]) }}"
                                                title="{{ $blog->getTranslation('title') }}">
                                                {{ $blog->getTranslation('title') }}
                                            </a>
                                        </h3>
                                    </header>
                                </div>
                            </article>
                        </div>
                    @endforeach

                </div>
                <div class="vlt-gap-100"></div>
                <div class="text-center">
                    <div id="vlt-load-more-blog-08"><a class="vlt-isotope-load-more" href="ajax/blog-08-load-more.html"><i
                                class="fa fa-arrow-down"></i></a></div>
                </div>
            </div>
            <div class="vlt-gap-120"></div>
        </section>


    </div>
@endsection
