 <!--Footer-->
 <footer class="vlt-footer vlt-footer--style-1">
     <div class="cta-area">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-12">
                     <div class="rts-cta-wrapper">
                         <div class="background-cta">
                             <div class="row align-items-center">
                                 <!-- cta-left -->
                                 <div class="col-lg-6">
                                     <div class="cta-left-wrapepr">
                                         <h3 class="title animated fadeIn">
                                             Planning to something?
                                             <br />
                                             Let's discuss.
                                         </h3>
                                     </div>
                                 </div>
                                 <!-- cta left end -->
                                 <div class="col-lg-3">
                                     <!-- cta right -->
                                     <img class="cta-img-fot" src="{{ asset('assets/img/cta-image-02.png') }}"
                                         alt="" />
                                     <!-- cta right End -->
                                 </div>

                                 <div class="col-lg-3 m-auto">
                                     <!-- cta right -->

                                     <a class="vlt-btn vlt-btn--primary vlt-btn--md" href="#" target="_self">
                                         {{ __('Get in touch') }}
                                     </a>

                                     <!-- cta right End -->
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div class="container">
         <div class="row">
             <div class="col-lg-3 col-sm-6 footer-col-st">
                 <!--Widget-->
                 <div class="vlt-widget vlt-widget--text vlt-widget--">
                     <p class="footer-content">{{ __('About') }}</p>

                     <ul>
                         <li><a href="#"> {{ __('Our story') }} </a></li>
                         <li><a href="#">{{ __('Who we are') }} </a></li>
                         <li><a href="#"> {{ __('Mission & Vision') }} </a></li>
                         <li><a href="#"> {{ __('Chairman Messages') }} </a></li>
                         <li><a href="#"> {{ __('Our Team') }} </a></li>
                         <li><a href="#"> {{ __('Contact Us') }} </a></li>
                     </ul>
                 </div>
             </div>

             <div class="col-lg-3 col-sm-6 footer-col-st">
                 <!--Widget-->
                 <div class="vlt-widget vlt-widget--text vlt-widget--">
                     <p class="footer-content">{{ __('Our Products range') }}</p>
                     <ul>
                        @foreach (menuCategory(0) as $category)
                            <li><a href="{{ route('category', $category->slug) }}">{{ $category->getTranslation('title') }}</a></li>
                        @endforeach
                     </ul>
                 </div>
             </div>

             <div class="col-lg-3 col-sm-6 footer-col-st">
                 <!--Widget-->
                 <div class="vlt-widget vlt-widget--text vlt-widget--">
                     <p class="footer-content">{{ __('Our Division') }}</p>
                     <ul>
                        @foreach (menuDivisions() as $division)
                            <li><a href="{{ route('divisions', $division->slug) }}"> {{ $division->getTranslation('title') }}</a></li>
                        @endforeach
                     </ul>
                 </div>
             </div>

             <div class="col-lg-3 col-sm-6 footer-col-st">
                 <!--Widget-->
                 <div class="vlt-widget vlt-widget--text vlt-widget--">
                     <p class="footer-content">{{ __('Company') }}</p>
                     <ul>
                         <li><a href="#"> {{ __('News') }}</a></li>
                         <li><a href="#"> {{ __('Our recipes') }}</a></li>
                         <li><a href="#"> {{ __('Career') }}</a></li>
                         <li><a href="#"> {{ __('Find Us') }}</a></li>
                         <li><a href="#"> {{ __('Contact Us') }}</a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <div class="copyright-area">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="text-center">
                     <p>
                         © {{ date('Y') }} {{ __('Al Douri. All Rights Reserved') }} <span
                             style="font-size:80%">{{ __('Designed By Tomsher') }}</span>
                     </p>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <!--Cursor-->
 <div class="vlt-cursor">
     <div class="outer">
         <div class="circle"></div>
     </div>
     <div class="inner">
         <div class="icon"><i class="fa-solid fa-arrow-right"></i></div>
     </div>
 </div>
 <!--Libs-->
