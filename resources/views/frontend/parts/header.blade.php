 <!--Site preloader-->
 <div class="vlt-site-preloader" data-animate-to="M0 0h277v56H0z">
     <div class="loader-content">
         <img width="100" src="{{ asset('assets/img/loader.gif') }}" class="logo-blink" alt="" />

         <div class="text-center">
             <div class="loader1">
                 <span></span>
                 <span></span>
                 <span></span>
                 <span></span>
                 <span></span>
             </div>
         </div>
     </div>
 </div>

 <!--Header-->

 <header class="vlt-header vlt-header--default vlt-header--dark">
     <div class="vlt-navbar vlt-navbar--main vlt-navbar--transparent vlt-navbar--sticky vlt-navbar--white-text-on-top">
         <nav class="navbar navbar-expand-lg ecommerce-navbar" id="navbar">
             <div class="container">
                 <a class="navbar-brand d-none d-lg-block" href="{{ route('home') }}">
                     <div class="logo-dark">
                         <img width="220" src="{{ asset('assets/img/logo.png') }}" alt="" />
                     </div>
                     <!-- <div class="logo-light">
        <img src="assets/img/logo-light.png" alt="" height="25">
    </div> -->
                 </a>
                 <button class="btn btn-soft-primary btn-icon d-lg-none" type="button" data-bs-toggle="collapse"
                     data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                     aria-expanded="false" aria-label="Toggle navigation">
                     <i class="bi bi-list fs-20"></i>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav mx-lg-auto mb-2 mb-lg-0" id="navigation-menu">
                         <!-- <li class="nav-item d-block d-lg-none">
    <a class="d-block p-3 h-auto text-center" href="{{ route('home') }}">
      <img src="../assets/images/logo-light.png" alt="" height="25" class="card-logo-dark mx-auto">
      <img src="../assets/images/logo-light.png" alt="" height="25" class="card-logo-light mx-auto">
    </a>
  </li> -->

                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('home') }}" data-key="t-contact">Home</a>
                         </li>

                         <li class="nav-item dropdown dropdown-hover dropdown-mega-full">
                             <a class="nav-link dropdown-toggle" data-key="t-catalog" href="#" role="button"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 Who We Are
                             </a>
                             <div class="dropdown-menu">
                                 <div class="container">
                                     <div class="row g-0 g-lg-4">
                                         <div class="col-lg-3">
                                             <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                                 <li>
                                                     <p class="text-uppercase fw-medium text-muted menu-title"
                                                         data-key="t-men">
                                                         Who We Are
                                                     </p>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="{{ route('about') }}" class="nav-link"
                                                         data-key="t-clothing">About
                                                         Al
                                                         Douri</a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="{{ route('missionVision') }}" class="nav-link"
                                                         data-key="t-watches">Mission &
                                                         Vision</a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="{{ route('our_heritage') }}" class="nav-link"
                                                         data-key="t-bags-Luggage">Our Heritage</a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="{{ route('leadership') }}" class="nav-link"
                                                         data-key="t-footwear">Leadership</a>
                                                 </li>

                                                 <li class="nav-item">
                                                     <a href="{{ route('chairmans_message') }}" class="nav-link"
                                                         data-key="t-footwear">Chairman's
                                                         message</a>
                                                 </li>
                                             </ul>
                                         </div>
                                         <div class="col-lg-6 d-none d-lg-block">
                                             <div class="card border-0 h-100 mb-0 overflow-hidden"
                                                 style="
                                                    background-image: url('{{ asset('assets/img/Support.jpg') }}');
                                                    background-size: cover;
                                                ">
                                                 <div class="bg-overlay bg-light bg-opacity-25"></div>
                                                 <div class="card-body d-flex align-items-end">
                                                     <div class="text-left">
                                                         <h3 class="a-title">
                                                             <a href="#">Crafting
                                                                 deliciousness
                                                                 since
                                                                 1979</a>
                                                         </h3>
                                                         <p>
                                                             Setting new
                                                             standards in
                                                             the food
                                                             industry,
                                                             through
                                                             offering
                                                             high quality
                                                             products
                                                         </p>

                                                         <a href="#" class="menu-btn"><i
                                                                 class="fa fa-arrow-right"></i></a>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-lg-3 d-none d-lg-block">
                                             <div class="card border-0 h-100 mb-0 overflow-hidden"
                                                 style="
                                                    background-color: #a62122;
                                                ">
                                                 <div class="bg-overlay bg-light bg-opacity-25"></div>
                                                 <div class="card-body d-flex align-items-end">
                                                     <div class="text-left">
                                                         <h3 class="a-title">
                                                             <a href="#">Al
                                                                 Douri
                                                                 Group’s
                                                                 offer
                                                                 the best
                                                                 and
                                                                 highest
                                                                 quality
                                                                 food
                                                                 products.
                                                             </a>
                                                         </h3>
                                                         <p>
                                                             Al Douri
                                                             Group is a
                                                             privately-owned
                                                             family
                                                             business
                                                             located in
                                                             the United
                                                             Arab
                                                             Emirates.
                                                         </p>
                                                         <a href="#" class="menu-btn"><i
                                                                 class="fa fa-arrow-right"></i></a>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </li>

                         <li class="nav-item dropdown dropdown-hover dropdown-mega-full">
                             <a class="nav-link dropdown-toggle" data-key="t-catalog" href="#" role="button"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 Products
                             </a>
                             <div class="dropdown-menu">
                                 <div class="container">
                                     <div class="row g-0 g-lg-4">
                                         @foreach (menuCategory(0) as $category)
                                             <div class="col-lg-3 d-none d-lg-block">
                                                 <div class="card border-0 h-100 mb-0 overflow-hidden"
                                                     style="
                                                   background-image: url('{{ $category->getImage('menu_image') }}');
                                                   background-size: cover;
                                               ">
                                                     <div class="bg-overlay bg-light bg-opacity-25"></div>
                                                     <div class="card-body d-flex align-items-end">
                                                         <div class="text-left">
                                                             <h3 class="a-title">
                                                                 <a href="{{ route('category', $category->slug) }}">
                                                                     {{ $category->getTranslation('title') }}
                                                                 </a>
                                                             </h3>
                                                             <p>
                                                                 {{ $category->getTranslation('menu_text') }}
                                                             </p>

                                                             <a href="{{ route('category', $category->slug) }}"
                                                                 class="menu-btn"><i
                                                                     class="fa fa-arrow-right"></i></a>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         @endforeach
                                     </div>
                                 </div>
                             </div>
                         </li>

                         <li class="nav-item dropdown dropdown-hover dropdown-mega-full">
                             <a class="nav-link dropdown-toggle" data-key="t-catalog" href="#" role="button"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 Divisions
                             </a>
                             <div class="dropdown-menu">
                                 <div class="container">
                                     <div class="row g-0 g-lg-4">

                                         @foreach (menuDivisions() as $division)
                                             <div class="col-lg-3 d-none d-lg-block">
                                                 <div class="card border-0 h-100 mb-0 overflow-hidden"
                                                     style="
                                                   background-image: url('{{ $division->getImage('menu_image') }}');
                                                   background-size: cover;
                                               ">
                                                     <div class="bg-overlay bg-light bg-opacity-25"></div>
                                                     <div class="card-body d-flex align-items-end">
                                                         <div class="text-left">
                                                             <h3 class="a-title">
                                                                 <a href="{{ route('divisions', $division->slug) }}">
                                                                     {{ $division->getTranslation('title') }}
                                                                 </a>
                                                             </h3>
                                                             <p>
                                                                 {{ $division->getTranslation('menu_text') }}
                                                             </p>

                                                             <a href="#" class="menu-btn">
                                                                 <i class="fa fa-arrow-right"></i></a>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         @endforeach
                                     </div>
                                 </div>
                             </div>
                         </li>

                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('news') }}" data-key="t-contact">News</a>
                         </li>

                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('contact_us') }}" data-key="t-contact">Contact</a>
                         </li>
                     </ul>
                 </div>

                 <div class="bg-overlay navbar-overlay" data-bs-toggle="collapse"
                     data-bs-target="#navbarSupportedContent.show"></div>

                 <div class="d-flex align-items-center">
                     <div class="dropdown header-item dropdown-hover-end">
                         <ul class="list-unstyled hstack gap-2 mb-0">
                             <li class="d-none d-md-block">
                                 <a href="#" class="vlt-btn-nav">AL DOURI ONLINE</a>
                             </li>

                             <li class="d-none d-md-block">

                                 @if (getActiveLanguage() == 'en')
                                     <a href="#" data-locale="ar" class="lang-swt" id="lang-change">
                                         <i class="fa-solid fa-language"></i>
                                         Arabic
                                     </a>
                                 @else
                                     <a href="#" data-locale="en" class="lang-swt" id="lang-change">
                                         <i class="fa-solid fa-language"></i>
                                         English
                                     </a>
                                 @endif


                             </li>
                             <li></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </nav>
     </div>
 </header>

 <!--Site overlay-->
 <div class="vlt-site-overlay"></div>

 <nav class="vlt-nav vlt-nav--fullscreen" data-submenu-effect="style-1">
     <div class="vlt-nav--fullscreen__mask">
         <svg xmlns="http://www.w3.org/2000/svg" width="895" height="267">
             <path fill="none" fill-rule="nonzero" stroke="currentColor" stroke-width="2"
                 d="M87.168 16.54L142.086 158.016C144.195 163.44 146.531 167.207 149.092 169.316C151.804 171.275 154.215 172.329 156.324 172.48V177C151.804 176.699 146.455 176.548 140.278 176.548C134.251 176.397 128.149 176.322 121.972 176.322C115.041 176.322 108.487 176.397 102.31 176.548C96.1327 176.548 91.236 176.699 87.62 177V172.48C95.304 172.179 100.125 170.898 102.084 168.638C104.193 166.227 103.741 161.18 100.728 153.496L62.308 48.406L66.376 42.53L32.024 132.026C28.7093 140.313 26.6753 147.093 25.922 152.366C25.3193 157.639 25.696 161.707 27.052 164.57C28.5587 167.433 30.894 169.467 34.058 170.672C37.3727 171.727 41.29 172.329 45.81 172.48V177C40.838 176.699 36.092 176.548 31.572 176.548C27.052 176.397 22.4567 176.322 17.786 176.322C14.4713 176.322 11.3073 176.397 8.294 176.548C5.43133 176.548 2.87 176.699 0.61 177V172.48C3.774 171.877 7.01333 169.843 10.328 166.378C13.6427 162.913 16.882 157.037 20.046 148.75L71.574 16.54C73.9847 16.6907 76.546 16.766 79.258 16.766C82.1207 16.766 84.7573 16.6907 87.168 16.54ZM102.988 111.912V116.432H35.64L37.9 111.912H102.988ZM206.268 0.0419883V155.982C206.268 162.31 207.323 166.604 209.432 168.864C211.692 171.124 215.459 172.254 220.732 172.254V177C217.87 176.849 213.576 176.699 207.85 176.548C202.125 176.247 196.324 176.096 190.448 176.096C184.572 176.096 178.621 176.247 172.594 176.548C166.718 176.699 162.274 176.849 159.26 177V172.254C164.534 172.254 168.225 171.124 170.334 168.864C172.594 166.604 173.724 162.31 173.724 155.982V27.162C173.724 20.382 172.67 15.41 170.56 12.246C168.602 8.93132 164.835 7.27399 159.26 7.27399V2.528C164.082 2.97999 168.752 3.20599 173.272 3.20599C179.45 3.20599 185.326 2.97999 190.9 2.528C196.475 1.92533 201.598 1.09666 206.268 0.0419883ZM355.19 16.992C384.871 16.992 406.944 23.772 421.408 37.332C435.872 50.7413 443.104 70.0267 443.104 95.188C443.104 111.611 439.563 125.999 432.482 138.354C425.401 150.558 415.08 160.05 401.52 166.83C388.111 173.61 371.989 177 353.156 177C350.745 177 347.581 176.925 343.664 176.774C339.747 176.623 335.679 176.548 331.46 176.548C327.241 176.397 323.475 176.322 320.16 176.322C313.531 176.322 306.977 176.397 300.498 176.548C294.17 176.548 289.123 176.699 285.356 177V172.48C290.177 172.179 293.793 171.576 296.204 170.672C298.615 169.768 300.197 167.96 300.95 165.248C301.854 162.536 302.306 158.468 302.306 153.044V40.948C302.306 35.3733 301.854 31.3053 300.95 28.744C300.197 26.032 298.539 24.224 295.978 23.32C293.567 22.2653 290.027 21.6627 285.356 21.512V16.992C289.123 17.1427 294.17 17.3687 300.498 17.67C306.977 17.8207 313.38 17.8207 319.708 17.67C325.132 17.5193 331.234 17.3687 338.014 17.218C344.945 17.0673 350.67 16.992 355.19 16.992ZM354.964 21.06C348.033 21.06 343.513 22.3407 341.404 24.902C339.295 27.4633 338.24 32.6613 338.24 40.496V153.496C338.24 161.331 339.295 166.529 341.404 169.09C343.664 171.651 348.259 172.932 355.19 172.932C367.846 172.932 377.79 169.994 385.022 164.118C392.405 158.091 397.678 149.353 400.842 137.902C404.006 126.451 405.588 112.515 405.588 96.092C405.588 79.2173 403.855 65.2807 400.39 54.282C397.075 43.1327 391.727 34.846 384.344 29.422C376.961 23.8473 367.168 21.06 354.964 21.06ZM516.863 56.994C527.862 56.994 537.504 59.028 545.791 63.096C554.078 67.164 560.556 73.718 565.227 82.758C569.898 91.798 572.233 103.776 572.233 118.692C572.233 133.608 569.898 145.586 565.227 154.626C560.556 163.515 554.078 169.994 545.791 174.062C537.504 178.13 527.862 180.164 516.863 180.164C506.166 180.164 496.598 178.13 488.161 174.062C479.874 169.994 473.32 163.515 468.499 154.626C463.828 145.586 461.493 133.608 461.493 118.692C461.493 103.776 463.828 91.798 468.499 82.758C473.32 73.718 479.874 67.164 488.161 63.096C496.598 59.028 506.166 56.994 516.863 56.994ZM516.863 61.514C510.836 61.514 505.789 66.034 501.721 75.074C497.653 83.9633 495.619 98.5027 495.619 118.692C495.619 138.881 497.653 153.421 501.721 162.31C505.789 171.199 510.836 175.644 516.863 175.644C523.04 175.644 528.088 171.199 532.005 162.31C536.073 153.421 538.107 138.881 538.107 118.692C538.107 98.5027 536.073 83.9633 532.005 75.074C528.088 66.034 523.04 61.514 516.863 61.514ZM698.89 57.672V152.366C698.89 159.146 699.945 164.193 702.054 167.508C704.163 170.672 707.93 172.254 713.354 172.254V177C708.683 176.548 704.013 176.322 699.342 176.322C693.014 176.322 687.138 176.548 681.714 177C676.29 177.452 671.167 178.281 666.346 179.486V159.146C662.73 166.679 657.683 172.103 651.204 175.418C644.876 178.582 637.795 180.164 629.96 180.164C623.632 180.164 618.509 179.335 614.592 177.678C610.675 176.021 607.586 173.911 605.326 171.35C602.765 168.487 600.957 164.721 599.902 160.05C598.847 155.379 598.32 149.353 598.32 141.97V84.792C598.32 78.012 597.265 73.04 595.156 69.876C593.197 66.5613 589.431 64.904 583.856 64.904V60.158C588.677 60.61 593.348 60.836 597.868 60.836C604.196 60.836 610.072 60.61 615.496 60.158C621.071 59.5553 626.193 58.7267 630.864 57.672V151.236C630.864 155.003 631.165 158.317 631.768 161.18C632.521 164.043 633.877 166.303 635.836 167.96C637.795 169.467 640.657 170.22 644.424 170.22C648.492 170.22 652.108 169.09 655.272 166.83C658.587 164.57 661.223 161.481 663.182 157.564C665.291 153.496 666.346 148.976 666.346 144.004V84.792C666.346 78.012 665.291 73.04 663.182 69.876C661.223 66.5613 657.457 64.904 651.882 64.904V60.158C656.703 60.61 661.374 60.836 665.894 60.836C672.222 60.836 678.098 60.61 683.522 60.158C689.097 59.5553 694.219 58.7267 698.89 57.672ZM801.143 56.994C805.964 56.994 809.881 58.0487 812.895 60.158C815.908 62.1167 818.093 64.678 819.449 67.842C820.955 71.006 821.709 74.3207 821.709 77.786C821.709 83.3607 820.051 87.956 816.737 91.572C813.573 95.0373 809.354 96.77 804.081 96.77C798.807 96.77 794.664 95.4893 791.651 92.928C788.788 90.216 787.357 86.6753 787.357 82.306C787.357 78.0873 788.261 74.622 790.069 71.91C792.027 69.0473 794.438 66.6367 797.301 64.678C795.191 64.0753 793.082 64.1507 790.973 64.904C788.11 65.356 785.398 66.5613 782.837 68.52C780.275 70.328 778.091 72.6633 776.283 75.526C774.475 78.238 773.043 81.2513 771.989 84.566C770.934 87.73 770.407 90.8187 770.407 93.832V153.722C770.407 160.954 772.139 165.851 775.605 168.412C779.221 170.973 784.569 172.254 791.651 172.254V177C788.185 176.849 783.138 176.699 776.509 176.548C769.879 176.247 762.949 176.096 755.717 176.096C749.69 176.096 743.588 176.247 737.411 176.548C731.233 176.699 726.563 176.849 723.399 177V172.254C728.672 172.254 732.363 171.124 734.473 168.864C736.733 166.604 737.863 162.31 737.863 155.982V84.792C737.863 78.012 736.808 73.04 734.699 69.876C732.74 66.5613 728.973 64.904 723.399 64.904V60.158C728.22 60.61 732.891 60.836 737.411 60.836C743.739 60.836 749.615 60.61 755.039 60.158C760.613 59.5553 765.736 58.7267 770.407 57.672V78.69C772.215 74.622 774.625 70.9307 777.639 67.616C780.652 64.3013 784.117 61.74 788.035 59.932C791.952 57.9733 796.321 56.994 801.143 56.994ZM858.275 1.84999C864.603 1.84999 869.575 3.43199 873.191 6.596C876.957 9.60933 878.841 13.828 878.841 19.252C878.841 24.676 876.957 28.97 873.191 32.134C869.575 35.1473 864.603 36.654 858.275 36.654C851.947 36.654 846.899 35.1473 843.133 32.134C839.517 28.97 837.709 24.676 837.709 19.252C837.709 13.828 839.517 9.60933 843.133 6.596C846.899 3.43199 851.947 1.84999 858.275 1.84999ZM875.903 57.672V155.982C875.903 162.31 876.957 166.604 879.067 168.864C881.327 171.124 885.093 172.254 890.367 172.254V177C887.655 176.849 883.436 176.699 877.711 176.548C871.985 176.247 866.185 176.096 860.309 176.096C854.433 176.096 848.481 176.247 842.455 176.548C836.428 176.699 831.908 176.849 828.895 177V172.254C834.168 172.254 837.859 171.124 839.969 168.864C842.229 166.604 843.359 162.31 843.359 155.982V84.792C843.359 78.012 842.304 73.04 840.195 69.876C838.236 66.5613 834.469 64.904 828.895 64.904V60.158C833.716 60.61 838.387 60.836 842.907 60.836C849.235 60.836 855.111 60.61 860.535 60.158C866.109 59.5553 871.232 58.7267 875.903 57.672Z"
                 fill="#EE1D52" />
         </svg>
     </div>
     <div class="vlt-nav-table">
         <div class="vlt-nav-row">
             <div class="vlt-nav--fullscreen__header">
                 <div class="container">
                     <div class="d-flex align-items-center justify-content-between">
                         <!--Logo--><a class="vlt-navbar-logo" href="{{ route('home') }}">
                             <img src="{{ asset('assets/img/logo.png') }}" alt="" style="height: 70px"
                                 loading="lazy" /></a>
                         <a class="vlt-menu-burger js-fullscreen-menu-toggle" href="#"><span
                                 class="line-one"></span><span class="line-two"></span></a>
                     </div>
                 </div>
             </div>
         </div>
         <div class="vlt-nav-row vlt-nav-row--full vlt-nav-row--center">
             <div class="container">
                 <div class="vlt-nav--fullscreen__navigation">
                     <!--Navigation-->
                     <!--Menu-->
                     <ul class="sf-menu" data-back-text="Back">
                         <li class="menu-item">
                             <a href="#"><span>Home</span></a>
                         </li>

                         <li class="menu-item-has-children">
                             <a href="#"><span>About us</span></a>
                             <ul class="sub-menu">
                                 <li class="menu-item left">
                                     <a href="#"><span>About Al Douri</span></a>
                                 </li>
                                 <li class="menu-item left">
                                     <a href="#"><span>Mission & Vision</span></a>
                                 </li>
                                 <li class="menu-item left">
                                     <a href="#"><span>Our Heritage</span></a>
                                 </li>
                                 <li class="menu-item left">
                                     <a href="#"><span>Leadership</span></a>
                                 </li>
                             </ul>
                         </li>

                         <li class="menu-item-has-children">
                             <a href="#"><span>Products</span></a>
                             <ul class="sub-menu">
                                 <li class="menu-item left">
                                     <a href="#"><span>Coffee</span></a>
                                 </li>
                                 <li class="menu-item left">
                                     <a href="#"><span>Nuts</span></a>
                                 </li>
                                 <li class="menu-item left">
                                     <a href="#"><span>Confectionery</span></a>
                                 </li>
                                 <li class="menu-item left">
                                     <a href="#"><span>Special Products</span></a>
                                 </li>
                             </ul>
                         </li>

                         <li class="menu-item-has-children">
                             <a href="#"><span>Divisions</span></a>
                             <ul class="sub-menu">
                                 <li class="menu-item left">
                                     <a href="#"><span>Distribution</span></a>
                                 </li>
                                 <li class="menu-item left">
                                     <a href="#"><span>Export/import</span></a>
                                 </li>
                                 <li class="menu-item left">
                                     <a href="#"><span>Factories and private
                                             labeling</span></a>
                                 </li>
                                 <li class="menu-item left">
                                     <a href="#"><span>Retail</span></a>
                                 </li>
                             </ul>
                         </li>
                         <li class="menu-item">
                             <a href="#"><span>News</span></a>
                         </li>
                         <li class="menu-item">
                             <a href="#"><span>Contact Us </span></a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
         <div class="vlt-nav-row">
             <div class="vlt-nav--fullscreen__footer">
                 <div class="container">
                     <div class="d-flex justify-content-between align-items-end">
                         <!--Widget-->
                         <div class="vlt-widget vlt-widget--socials">
                             <a class="vlt-social-icon vlt-social-icon--style-1" href="#">Fb.</a><a
                                 class="vlt-social-icon vlt-social-icon--style-1" href="#">Tw.</a><a
                                 class="vlt-social-icon vlt-social-icon--style-1" href="#">In.</a><a
                                 class="vlt-social-icon vlt-social-icon--style-1" href="#">Ln.</a>
                         </div>
                         <!--Widget-->
                         <div class="vlt-widget vlt-widget--html">
                             <div class="text-right">
                                 <!--Simple link--><a class="vlt-simple-link vlt-simple-link--sm"
                                     href="mailto:hello@aldouri.com" target="_self">hello@aldouri.com</a><br />
                                 <!--Simple link--><a class="vlt-simple-link vlt-simple-link--sm" href="tel:"
                                     target="_self">065348833</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </nav>

 <div class="d-lg-none d-sm-block">
     <header class="vlt-header vlt-header--fullscreen">
         <div
             class="vlt-navbar vlt-navbar--main vlt-navbar--transparent vlt-navbar--sticky vlt-navbar--white-text-on-top vlt-navbar--transparent vlt-navbar--sticky vlt-navbar--white-text-on-top">
             <div class="container">
                 <div class="vlt-navbar-inner">
                     <div class="vlt-navbar-inner--left">
                         <div class="d-flex align-items-center justify-content-center h-100">
                             <!--Logo--><a class="vlt-navbar-logo" href="{{ route('home') }}">
                                 <img class="black" src="{{ asset('assets/img/logo.png') }}" alt=""
                                     style="height: 70px" loading="lazy" />
                                 <img class="white" src="{{ asset('assets/img/logo.png') }}" alt=""
                                     style="height: 70px" loading="lazy" />
                             </a>
                         </div>
                     </div>
                     <div class="vlt-navbar-inner--right">
                         <div class="d-flex align-items-center justify-content-center h-100">
                             <!--Buttons-->
                             <div class="vlt-navbar-buttons d-flex align-items-center">
                                 <a class="vlt-menu-burger js-fullscreen-menu-toggle" href="#"><span
                                         class="line-one"></span><span class="line-two"></span></a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </header>
 </div>
 <!--Site overlay-->
 <div class="vlt-site-overlay"></div>
 <!--Main-->
