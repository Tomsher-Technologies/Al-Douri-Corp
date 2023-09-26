 <!--Section-->
 <section class="mobile-app">
     <div class="container-fluid">
         <div class="position-relative vlt-custom--6188">
             <img class="vlt-particle mobile-app-image-ad" src="{{ asset($page->getImage8()) }}"
                 data-animation-name="fadeInUp" alt=""
                 style="
                position: absolute;
                right: 0%;
                left: 0%;
                z-index: 1000;
                max-width: 100%;
                --animate-delay: 0.5s;
                margin: auto;
                top: 10%;
                bottom: 10%;
                width: 300px;
            "
                 loading="lazy" />

             <div class="">
                 <!-- <img class="jarallax-img" src="assets/img/homepage-01-team-background.png" alt="" loading="lazy"> -->

                 <div class="row align-items-center">
                     <div class="col-md-6 left">
                         <!-- <div class="vlt-gap-60--sm"></div> -->
                         <div class="left-content">
                             <div class="row align-items-center">
                                 <div class="col-md-5">
                                     <div class="text-md-right">
                                         <!--Team list-->
                                         <div class="vlt-team-list">
                                             <a href="#" data-aos="fade" data-aos-delay="300">
                                                 <img src="{{ asset($page->getImage7()) }}" alt=""
                                                     loading="lazy" />
                                             </a>
                                             <!-- <a href="our-team.html"
                    data-aos="fade" data-aos-delay="200"><img src="assets/img/homepage-01-team-2.png" alt=""
                      loading="lazy"></a><a href="our-team.html" data-aos="fade" data-aos-delay="100"><img
                      src="assets/img/homepage-01-team-3.png" alt="" loading="lazy"></a> -->
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-md-7">
                                     <div class="left-content-area">
                                         <!--Animated block-->
                                         <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                                             <!--Section title-->
                                             <div class="vlt-section-title vlt-section-title--style-1">
                                                 <h2 class="vlt-section-title__title"
                                                     style="
                                                    color: #a62122;
                                                ">
                                                     {!! $page->getTranslation('heading11') !!}
                                                 </h2>
                                             </div>
                                         </div>

                                         <!-- <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                <p class="fz-3 has-white-color">Darkness they're, moved whales great or void great man one man from blessed so our good face.</p>
              </div> -->

                                         <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
                                             <!--Button-->
                                              <!-- <a class="vlt-btn vlt-btn--primary vlt-btn--md" href="#"
                                                 target="_self">{!! $page->getTranslation('button_text_2') !!}</a> -->

                                             <a class="app-download-image" href="{{ $general->play_store }}" target="_blank">
                                                 <img src="{{ asset('assets/img/store_play.png') }}" class="mt-0" alt=""
                                                     loading="lazy" />
                                            </a>
                                            <a class="app-download-image" href="{{ $general->app_store }}" target="_blank">
                                                 <img src="{{ asset('assets/img/store_app.png') }}" class="mt-0" alt=""
                                                     loading="lazy" />
                                            </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="col-md-6 right">
                         <div class="right-content">
                             <div class="row align-items-center">
                                 <div class="col-md-7">
                                     <div class="right-content-area">
                                         <!--Animated block-->
                                         <div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
                                             <!--Section title-->
                                             <div class="vlt-section-title vlt-section-title--style-1">
                                                 <h2 class="vlt-section-title__title"
                                                     style="
                                                    color: #a62122;
                                                ">
                                                     {!! $page->getTranslation('heading12') !!}
                                                 </h2>
                                             </div>
                                         </div>

                                         <!-- <div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
                <p class="fz-3 has-white-color">Shop smarter, not harder. Visit our website today!</p>
              </div> -->

                                         <div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
                                             <!--Button--><a class="vlt-btn vlt-btn--primary vlt-btn--md" target="_blank" href="{!! $page->button_link_3 !!}"
                                                 target="_self">{!! $page->getTranslation('button_text_3') !!}</a>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-md-5">
                                     <div class="">
                                         <!--Team list-->
                                         <div class="vlt-team-list">
                                             <a href="#" data-aos="fade" data-aos-delay="300">
                                                 <img src="{{ asset($page->getImage9()) }}" alt=""
                                                     loading="lazy" />
                                             </a>
                                             <!-- <a href="our-team.html"
                  data-aos="fade" data-aos-delay="200"><img src="assets/img/homepage-01-team-2.png" alt=""
                    loading="lazy"></a><a href="our-team.html" data-aos="fade" data-aos-delay="100"><img
                    src="assets/img/homepage-01-team-3.png" alt="" loading="lazy"></a> -->
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--Section-->
