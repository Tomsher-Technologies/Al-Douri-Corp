@extends('layouts.app.app', [
    'main_class' => 'bg-05',
])
@section('content')
    <div class="vlt-page-content">
        <!--Page title-->
        <div class="vlt-page-title vlt-page-title--style-2 jarallax"><img class="jarallax-img"
                src="{{ $category->getImage('banner_image') }}" alt="" loading="lazy">
            <div class="vlt-page-title__overlay"></div>
            <div class="container">
                <h1 class="vlt-page-title__title lax" data-lax-translate-y="0 0, vh (vw*0.25)"
                    data-lax-opacity="1 1, (vh*0.5) 0" data-lax-anchor=".vlt-page-title">
                    {{ $category->getTranslation('title') }}
                </h1>
            </div>
        </div>
        <div class="vlt-page-title vlt-page-title--style-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 vlt-page-title__subtitle  ">
                        {!! $category->getTranslation('description') !!}
                    </div>
                </div>
            </div>
            <div class="vlt-gap-50"></div>
        </div>
        <!--Page content-->
        <div class="vlt-page-content"style="">
            <section class="">
                <div class="vlt-gap-0"></div>
                <div class="container">
                    <div class="vlt-gap-50"></div>

                    <div class="vlt-isotope-grid" data-columns="3" data-layout="masonry" data-x-gap="30|30"
                        data-y-gap="60|60">
                        <div class="grid-sizer"></div>

                        @foreach ($sub_category as $item)
                            <div class=" grid-item filter-design">
                                <!--Portfolio item-->
                                <article class="vlt-work vlt-work--style-1">
                                    <div class="vlt-work__media">
                                        <a href="{{ route('sub_category', [
                                            'category' => $category->slug,
                                            'sub_category' => $item->slug,
                                        ]) }}"
                                            class="vlt-work__link has-cursor"> </a>
                                        <img src="{{ $item->getImage('menu_image') }}" alt="" loading="lazy">
                                    </div>
                                    <div class="vlt-work__meta">
                                        <h5 class="vlt-work__title text-black">
                                            <a
                                                href="{{ route('sub_category', [
                                                    'category' => $category->slug,
                                                    'sub_category' => $item->slug,
                                                ]) }}">
                                                {{ $item->getTranslation('title') }}
                                            </a>
                                        </h5>
                                        <a href="{{ route('sub_category', [
                                            'category' => $category->slug,
                                            'sub_category' => $item->slug,
                                        ]) }}"
                                            class="vlt-work__category text-white">
                                            View More
                                        </a>
                                    </div>
                                </article>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="vlt-gap-120"></div>
            </section>
        </div>

        @include('frontend.parts.mobile-section')
    </div>
@endsection
