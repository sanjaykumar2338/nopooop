<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title></title>
      <link rel="stylesheet" href="{{url('/')}}/frontviewassest/css/style.css">
      <link rel="stylesheet" href="{{url('/')}}/frontviewassest/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
         integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
         crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <link rel="stylesheet" href="{{url('/')}}/frontviewassest/css/slick.css">
      <link rel="stylesheet" href="{{url('/')}}/frontviewassest/css/slick-theme.css">
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
                  <a href="tel:646-806-2511">
                  <span><i class="fa-solid fa-phone-volume"></i></span>
                  646-806-2511
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
                  <a href="/."><img src="{{url('/')}}/frontviewassest/images/logo.png" alt=""></a>
                  <button class="mobile-menu" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                     aria-controls="offcanvasRight"><i class="fa-solid fa-bars"></i></button>
               </div>
               <div class="right-nav">
                  <div class="root-nav">
                     <ul>
                        <li><a href="#"> Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Areas</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact Us </a></li>
                     </ul>
                  </div>
                  <div class="get-btn">
                     <a href="#" class="common-button">Get a Quote!</a>
                  </div>
               </div>
            </nav>
         </div>
      </header>
      @yield('content')
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-lg-3">
                  <div class="footer-de-bx vibe-zone">
                     <div class="img-bx">
                        <img src="{{url('/')}}/frontviewassest/images/logo.png" alt="">
                     </div>
                     <div class="tex-bx">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad veritatis, earum sed labore
                           non .
                        </p>
                        <div class="tel">
                           <a href="tel:646-806-2511">
                           <i class="fa-solid fa-phone-volume"></i>
                           646-806-2511
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-2 ">
                  <div class="footer-de-bx ">
                     <div class="title">
                        <h2>Website Links</h2>
                     </div>
                     <ul>
                        <li><a href="#"><i class="fa-solid fa-angles-right"></i>Home</a></li>
                        <li><a href="#"><i class="fa-solid fa-angles-right"></i>Residential Services</a></li>
                        <li><a href="#"><i class="fa-solid fa-angles-right"></i>Areas We Serve</a></li>
                        <li><a href="#"><i class="fa-solid fa-angles-right"></i>Pricing</a></li>
                        <li><a href="#"><i class="fa-solid fa-angles-right"></i>Gift Cards</a></li>
                        <li><a href="#"><i class="fa-solid fa-angles-right"></i>Our Story</a></li>
                        <li><a href="#"><i class="fa-solid fa-angles-right"></i>Contact Us</a></li>
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
                        <li><a href="#">Shop Page</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">Scooping Bag</a></li>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
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
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"> <i class="fa-brands fa-x-twitter"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <p>Copyright © {{date('Y')}}, All Rights Reserved | Privacy Policy</p>
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