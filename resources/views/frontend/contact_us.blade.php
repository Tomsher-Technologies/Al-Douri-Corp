@extends('layouts.app.app')
@section('content')
    <!--Page content-->
    <div class="vlt-page-content">
        <!--Page title-->
        <div class="vlt-page-title vlt-page-title--style-3 jarallax"><img class="jarallax-img" src="{{ asset('assets/img/banner03.webp') }}"
                alt="" loading="lazy">
            <div class="vlt-page-title__overlay"></div><a class="vlt-page-title__scroll-to vlt-scroll-to" href="#content"><i
                    class="fa fa-arrow-down"></i></a>
            <div class="container">
                <h1 class="vlt-page-title__title lax" data-lax-translate-y="0 0, vh (vw*0.25)"
                    data-lax-opacity="1 1, (vh*0.5) 0" data-lax-anchor=".vlt-page-title">Contact
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
                            <h2>Get in Touch</h2>
                        </div>
                        <div class="vlt-gap-60"></div>
                    </div>
                    <div class="col-lg-8">
                        <!--Animated block-->
                        <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                            <!--Contact form-->
                            <form class="vlt-contact-form vlt-contact-form--style-2" novalidate="novalidate">
                                <div class="vlt-form-row two-col">
                                    <div class="vlt-form-group">
                                        <input class="vlt-form-control" type="text" name="name" required="required"
                                            placeholder=" ">
                                        <label class="vlt-form-label">Your name*</label>
                                    </div>
                                    <div class="vlt-form-group">
                                        <input class="vlt-form-control" type="email" name="email" required="required"
                                            placeholder=" ">
                                        <label class="vlt-form-label">Email address*</label>
                                    </div>
                                </div>
                                <div class="vlt-form-row two-col">
                                    <div class="vlt-form-group">
                                        <input class="vlt-form-control" type="tel" name="phone" placeholder=" ">
                                        <label class="vlt-form-label">Phone number</label>
                                    </div>
                                    <div class="vlt-form-group">
                                        <input class="vlt-form-control" type="text" name="company" placeholder=" ">
                                        <label class="vlt-form-label">Company</label>
                                    </div>
                                </div>
                                <div class="vlt-form-group">
                                    <input class="vlt-form-control" type="text" name="title" required="required"
                                        placeholder=" ">
                                    <label class="vlt-form-label">Title*</label>
                                </div>
                                <div class="vlt-form-group">
                                    <textarea class="vlt-form-control" name="message" rows="5" placeholder=" "></textarea>
                                    <label class="vlt-form-label">Message*</label>
                                </div>
                                <div class="message success">Your message is successfully sent...</div>
                                <div class="message danger">Sorry something went wrong!</div>
                                <div class="vlt-gap-40"></div>
                                <!--Button-->
                                <button class="vlt-btn vlt-btn--secondary vlt-btn--lg">Submit
                                </button>
                            </form>
                        </div>
                        <div class="vlt-gap-60--md"></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="vlt-pl-70 vlt-pl-0--md">
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <!--Animated block-->
                                    <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
                                        <h5>General Info</h5>
                                        <div class="vlt-gap-20"></div>
                                        <p class="lh-2">Al Douri Group <br>2 56 Street - Dubai Investments Park -
                                            Dubai <br>
                                            +971 6 534 8833
                                            <br>info@aldouri.com
                                        </p>
                                    </div>

                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <!--Animated block-->

                                    <div class="vlt-gap-20"></div>
                                    <!--Animated block-->


                                    <div class="vlt-animated-block" data-aos="fade" data-aos-delay="400">
                                        <div class="has-black-color">

                                            <a class="vlt-social-icon vlt-social-icon--style-1" href="#"> <i
                                                    class="fa-brands fa-facebook"></i></a><a
                                                class="vlt-social-icon vlt-social-icon--style-1" href="#"><i
                                                    class="fa-brands fa-twitter"></i></a><a
                                                class="vlt-social-icon vlt-social-icon--style-1" href="#"><i
                                                    class="fa-brands fa-instagram"></i></a><a
                                                class="vlt-social-icon vlt-social-icon--style-1" href="#"><i
                                                    class="fa-brands fa-linkedin"></i></a>

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
    </div>
@endsection
