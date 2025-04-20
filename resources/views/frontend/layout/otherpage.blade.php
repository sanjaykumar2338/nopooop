<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <title>{{ $page->meta_title ?? 'Default Title' }}</title>
      <meta name="description" content="{{ $page->meta_description ?? 'Default description' }}">
      <meta name="keywords" content="{{ $page->meta_keywords ?? 'default, keywords' }}">

      <link rel="stylesheet" href="{{url('/')}}/frontviewassest/css/style.css">
      <link rel="stylesheet" href="{{url('/')}}/frontviewassest/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
         integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
         crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <link rel="stylesheet" href="{{url('/')}}/frontviewassest/css/slick.css">
      <link rel="stylesheet" href="{{url('/')}}/frontviewassest/css/slick-theme.css">

      @php
         $logo = getSetting('logo');
         $faviconPath = $logo && file_exists(public_path('storage/' . $logo))
               ? asset('storage/' . $logo)
               : url('/frontviewassest/images/logo.png');
      @endphp

      <link rel="icon" type="image/png" href="{{ $faviconPath }}" />
   </head>
   <body>
      <div class="mobile-bar">
         <a href="/login">Sign In</a>
         <a href="#">Pay Bill</a>
      </div>
      <div class="top-head " data-aos="zoom-in" data-aos-duration="1000">
         <div class="container">
            <div class="main-bx">
               <div class="left-bx">
                  <a href="tel:{{ getSetting('phone') }}">
                     <i class="fa-solid fa-phone-volume"></i>
                     {{ getSetting('phone') }}
                  </a>
               </div>
               <div class="right-bx">
                  <div class="info-bx">
                     <a href="#">
                     <span><i class="fa-solid fa-hand-holding-dollar"></i></span>
                     Pay Bill
                     </a>
                     <a href="/login">
                     <span><i class="fa-solid fa-user"></i></span>
                     Sign In
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- ========== Start header ========== -->
      <header class="header" id="header" data-aos="zoom-in" data-aos-duration="1000">
         <div class="container">
            <nav>
            <div class="logo-bx">
                  @php
                     $logo = getSetting('logo');
                     $logoPath = $logo && file_exists(public_path('storage/' . $logo)) 
                           ? asset('storage/' . $logo) 
                           : url('/frontviewassest/images/logo.png');
                  @endphp

                  <a href="{{ url('/') }}">
                     <img src="{{ $logoPath }}" alt="Logo">
                  </a>
                  
                  <button class="mobile-menu" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                     <i class="fa-solid fa-bars"></i>
                  </button>
               </div>

               <div class="right-nav">
                  <div class="root-nav">
                  <ul>
                     @foreach(getMenuItems('header') as $item)
                        <li>
                              <a href="{{ $item->type === 'page' && $item->page ? url('/p/' . $item->page->slug) : $item->url }}">
                                 {{ $item->label }}
                              </a>
                        </li>
                     @endforeach
                  </ul>
                  </div>
                  <div class="get-btn text-center">
                     <a href="{{ route('quote.form') }}" class="common-button">Get a Quote!</a>
                  </div>

               </div>
            </nav>
         </div>
      </header>
      <!-- ========== End header ========== -->

      <!-- ========== Start mobile-menu ========== -->
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
         <div class="offcanvas-header">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <div class="offcanvas-body">
            <ul>
               @foreach(getMenuItems('header') as $item)
                  <li>
                        <a href="{{ $item->type === 'page' && $item->page ? url('/p/' . $item->page->slug) : $item->url }}">
                           {{ $item->label }}
                        </a>
                  </li>
               @endforeach
               <a href="#" class="common-button">Get a Quote!</a>
            </ul>
         </div>
      </div>
      
      <!-- ========== End mobile-menu ========== -->
      <!-- Success Message -->
      @if(session('success'))
         <div class="alert alert-success alert-dismissible fade show mt-4 ml-4" role="alert">
            <strong>Success!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
      @endif

      <!-- Validation Errors -->
      @if($errors->any())
         <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
            <strong>Whoops!</strong> There were some problems with your input.
            <ul class="mb-0 mt-2">
                  @foreach($errors->all() as $error)
                     <li>{{ $error }}</li>
                  @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
      @endif

      @yield('content')

      <footer>
         <div class="container">
            <div class="row">
               <div class="col-lg-3">
               <div class="footer-de-bx vibe-zone">
                     <div class="img-bx">
                        @php
                              $logo = getSetting('logo');
                        @endphp

                        @if($logo && file_exists(public_path('storage/' . $logo)))
                              <img src="{{ asset('storage/' . $logo) }}" alt="Logo">
                        @else
                              <img src="{{ url('/') }}/frontviewassest/images/logo.png" alt="Default Logo">
                        @endif
                     </div>

                     <div class="tex-bx">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad veritatis, earum sed labore non.</p>

                        @if(getSetting('phone'))
                        <div class="tel">
                              <a href="tel:{{ getSetting('phone') }}">
                                 <i class="fa-solid fa-phone-volume"></i>
                                 {{ getSetting('phone') }}
                              </a>
                        </div>
                        @endif
                     </div>
                  </div>
               </div>
               <div class="col-lg-2 ">
                  <div class="footer-de-bx ">
                     <div class="title">
                        <h2>Website Links</h2>
                     </div>
                     <ul>
                        @foreach(getMenuItems('website-links') as $item)
                           <li>
                                 <a href="{{ $item->type === 'page' && $item->page ? url('/p/' . $item->page->slug) : $item->url }}">
                                    <i class="fa-solid fa-angles-right"></i> {{ $item->label }}
                                 </a>
                           </li>
                        @endforeach
                     </ul>
                  </div>
               </div>
               <div class="col-lg-2 ">
                  <div class="footer-de-bx ">
                     <div class="title">
                        <h2>Support Links
                        </h2>
                     </div>
                     <ul>
                        @foreach(getMenuItems('support-links') as $item)
                           <li>
                                 <a href="{{ $item->type === 'page' && $item->page ? url('/p/' . $item->page->slug) : $item->url }}">
                                    {{ $item->label }}
                                 </a>
                           </li>
                        @endforeach
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 ">
                  <div class="footer-de-bx ">
                     <div class="title ">
                        <h2>Latest News
                        </h2>
                     </div>
                     <div class="text-bx title2">
                        <h2>Lorem ipsum dolor sit.</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum, provident!</p>
                     </div>
                     <div class="title mt-4">
                        <h2>social links
                        </h2>
                     </div>
                     <ul class="social-links">
                        @if(getSetting('facebook'))
                           <li><a href="{{ getSetting('facebook') }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        @endif

                        @if(getSetting('instagram'))
                           <li><a href="{{ getSetting('instagram') }}" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        @endif

                        @if(getSetting('twitter'))
                           <li><a href="{{ getSetting('twitter') }}" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                        @endif

                        @if(getSetting('linkedin'))
                           <li><a href="{{ getSetting('linkedin') }}" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        @endif

                        @if(getSetting('youtube'))
                           <li><a href="{{ getSetting('youtube') }}" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                        @endif
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <p>
               Copyright © {{ date('Y') }}, All Rights Reserved | 
               <a style="    text-decoration: none;
    color: #000000;
}" href="{{ url('/p/privacy-policy') }}">Privacy Policy</a>
            </p>
         </div>
      </footer>
      <script src="{{url('/')}}/frontviewassest/js/jquery-3.6.0.min.js"></script>
      <script src="{{url('/')}}/frontviewassest/js/slick.min.js"></script>
      <script src="{{url('/')}}/frontviewassest/js/bootstrap.bundle.js"></script>
      <script src="{{url('/')}}/frontviewassest/js/main.js"></script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
         AOS.init();
      </script>
   </body>
</html>