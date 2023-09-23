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




    <section>
        <div class="vlt-gap-100"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-3 offset-md-1">
                    <!--Animated block-->
                    <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                        <!--Section title-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0"><span
                                class="vlt-display-1 has-primary-color"> {{ __('Position') }}</span>
                        </div>
                    </div>
                    <div class="vlt-gap-40--sm"></div>
                </div>
                <div class="col-md-8">
                    <!--Animated block-->
                    <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0"><span
                                class="vlt-display-1 has-black-color  f-24">{!! $career->getTranslation('title') !!}</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 offset-md-1 mt-3">
                    <!--Animated block-->
                    <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                        <!--Section title-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0"><span
                                class="vlt-display-1 has-primary-color">{{ __('Description') }}</span>
                        </div>
                    </div>
                    <div class="vlt-gap-40--sm"></div>
                </div>
                <div class="col-md-8 mt-3">
                    <!--Animated block-->
                    <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                        {!! $career->getTranslation('description') !!}
                        
                        <div class="vlt-gap-30"></div>
                        <div class="col-md-12">
                            <span class="vlt-display-1 has-black-color">
                                {{ __('Job Type') }} :
                            </span>
                            <span class="has-black-color ml-1">
                                {{ ($career->type == 'full') ? __('Full-Time') : __('Part-Time') }}
                            </span>
                        </div>

                        <div class="vlt-gap-20"></div>
                        <div class="col-md-12">
                            <span class="vlt-display-1 has-black-color">
                                {{ __('Last Date') }} :
                            </span>
                            <span class="has-black-color ml-1">
                                {{ date('d M,Y', strtotime($career->last_date)) }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vlt-gap-70"></div>
    </section>




    <!--Section-->
    <section>

        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="text-center">
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                            <!--Section title-->
                            <div class="vlt-section-title vlt-section-title--style-1">
                                <!-- <span class="vlt-section-title__subtitle">Send profile</span> -->
                                <h2 class="vlt-section-title__title"> {{ __('Apply Now') }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="vlt-gap-70"></div>
                    <!--Animated block-->
                    <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                        <!--Apply position form-->
                        <form  class="" method="POST" action="{{ route('apply.job') }}" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="vlt-form-row two-col">
                                <input class="vlt-form-control" type="hidden" name="career_id" 
                                        value="{{ $career->id }}">
                                <div class="vlt-form-group">
                                    
                                    <input class="vlt-form-control" type="text" name="first_name" 
                                        value="{{ old('first_name') }}">
                                    <x-input-error name='first_name' />
                                    <label class="vlt-form-label">{{ __('First Name') }}*</label>
                                </div>
                                <div class="vlt-form-group">
                                    <input class="vlt-form-control" type="text" name="last_name" 
                                        value="{{ old('last_name') }}">
                                        <x-input-error name='last_name' />
                                    <label class="vlt-form-label">{{ __('Last Name') }}*</label>
                                </div>
                            </div>
                            <div class="vlt-form-row two-col">
                                <div class="vlt-form-group">
                                    <input class="vlt-form-control" type="text" name="email" 
                                        value="{{ old('email') }}">
                                        <x-input-error name='email' />
                                    <label class="vlt-form-label">{{ __('Email') }}*</label>
                                </div>
                                <div class="vlt-form-group">
                                    <input class="vlt-form-control" type="tel" name="phone" value="{{ old('phone') }}">
                                    <x-input-error name='phone' />
                                    <label class="vlt-form-label">{{ __('Phone Number') }}</label>
                                </div>
                            </div>
                            <div class="vlt-form-row two-col">
                                <div class="vlt-form-group">
                                    <input class="vlt-form-control" type="text" name="linkedin" value="{{ old('linkedin') }}">
                                    
                                    <label class="vlt-form-label">{{ __('LinkedIn Profile') }}</label>
                                </div>
                                <div class="vlt-form-group">
                                    <input class="vlt-form-control mt-3" type="file" name="resume" accept=".pdf">
                                        <x-input-error name='resume' />
                                    <label class="vlt-form-label">{{ __('Resume') }}* ({{ __('Only PDF file is allowed') }})</label>
                                </div>
                            </div>
                        
                            <div class="vlt-gap-40"></div>
                            <div class="text-center">
                                <!--Button-->
                                <button type="submit" class="vlt-btn vlt-btn--secondary vlt-btn--lg mb-3">{{ __('Submit') }}
                                </button>
                            </div>
                        </form>

                        <x-status />
                    </div>
                </div>
            </div>
        </div>
        <div class="vlt-gap-120"></div>
    </section>




</div>
@endsection

@push('header')
<style>
    .f-24{
        font-size: 24px;   
    }
    .ml-1{
        margin-left : 1%;
    }
</style>
@endpush