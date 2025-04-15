@extends('frontend.layout.homepagenew')

@section('content')
     <!-- ========== End header ========== -->

    <!-- ========== Start mobile-menu ========== -->


    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul>
                    <li><a href="#"> Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Areas</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact Us </a></li>
                    <a href="#" class="common-button">Get a Quote!</a>
            </ul>
        </div>
    </div>
    <!-- ========== End mobile-menu ========== -->




    <!-- ========== Start Customers section ========== -->

    <section class="root-customer" data-aos="zoom-in" data-aos-duration="1000">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="left-bx">
                        <figure>
                            <img src="{{url('/')}}/frontviewassest/images/banner.jfif" alt="">
                        </figure>
                    </div>

                </div>
                <div class="col-lg-5">
                    <div class="right-text-bx">
                        <div class="section-title">
                            <div class="sub-title">
                                <span><img src="{{url('/')}}/frontviewassest/images/pet-love.png" alt="">New Customers</span>
                            </div>


                            <h2>New Customers</h2>
                        </div>
                        <p>Get your first service free of charge
                            if they sign up for anyTier package for1 month. Monthly charges
                            are based on Tier chosen. All charges subject to taxes.
                            If no Tier is chosen the charge for a 1 me visit $45.50</p>


                        <div class="btn-bx">
                            <a href="#" class="common-button">Book Now!
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <!-- ========== End Customers section ========== -->




    <section class="root-pricing" data-aos="zoom-in" data-aos-duration="1000">
        <div class="container">


            <div class="row">
                <div class="col-lg-4">
                    <div class="root-card-bx">
                        <div class="card-text">
                            <h2>Once a Week </h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores, quidem. Doloribus
                                dolore unde ad, molestias exercitationem nesciunt dolorum porro iusto cum est nulla
                                voluptate amet magnam. Voluptatum quae ipsum obcaecati nisi itaque, placeat provident
                                corrupti.</p>
                            <div class="btn-bx">
                                <a href="#" class="common-button">Learn more </a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4">
                    <div class="root-card-bx">
                        <div class="card-text">
                            <h2>Twice a Week </h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores, quidem. Doloribus
                                dolore unde ad, molestias exercitationem nesciunt dolorum porro iusto cum est nulla
                                voluptate amet magnam. Voluptatum quae ipsum obcaecati nisi itaque, placeat provident
                                corrupti.</p>
                            <div class="btn-bx">
                                <a href="#" class="common-button">Learn more </a>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-lg-4">
                    <div class="root-card-bx">
                        <div class="card-text">
                            <h2>Three Times a Week</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores, quidem. Doloribus
                                dolore unde ad, molestias exercitationem nesciunt dolorum porro iusto cum est nulla
                                voluptate amet magnam. Voluptatum quae ipsum obcaecati nisi itaque, placeat provident
                                corrupti.</p>
                            <div class="btn-bx">
                                <a href="#" class="common-button">Learn more </a>
                            </div>
                        </div>
                    </div>
                </div>





                <div class="col-lg-4">
                    <div class="root-card-bx">
                        <div class="card-text">
                            <h2>Once a Month</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores, quidem. Doloribus
                                dolore unde ad, molestias exercitationem nesciunt dolorum porro iusto cum est nulla
                                voluptate amet magnam. Voluptatum quae ipsum obcaecati nisi itaque, placeat provident
                                corrupti.</p>
                            <div class="btn-bx">
                                <a href="#" class="common-button">Learn more </a>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-lg-4">
                    <div class="root-card-bx">
                        <div class="card-text">
                            <h2>Daily Service</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores, quidem. Doloribus
                                dolore unde ad, molestias exercitationem nesciunt dolorum porro iusto cum est nulla
                                voluptate amet magnam. Voluptatum quae ipsum obcaecati nisi itaque, placeat provident
                                corrupti.</p>
                            <div class="btn-bx">
                                <a href="#" class="common-button">Learn more </a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4">
                    <div class="root-card-bx">
                        <div class="card-text">
                            <h2>One Time Service</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores, quidem. Doloribus
                                dolore unde ad, molestias exercitationem nesciunt dolorum porro iusto cum est nulla
                                voluptate amet magnam. Voluptatum quae ipsum obcaecati nisi itaque, placeat provident
                                corrupti.</p>
                            <div class="btn-bx">
                                <a href="#" class="common-button">Learn more </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>














    <section class="root-customer" data-aos="zoom-in" data-aos-duration="1000">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="right-text-bx">
                        <div class="section-title">
                            <div class="sub-title">
                                <span><img src="{{url('/')}}/frontviewassest/images/pet-love.png" alt="">Clean no</span>
                            </div>


                            <h2>Clean No Poop Yard</h2>
                        </div>
                        <p><b>your local dog waste removal service</b></p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum aspernatur repellat
                            architecto iste magni. Doloribus fugit perspiciatis reiciendis quisquam quo voluptate
                            dolorum maiores, explicabo vitae facere maxime in facilis a!</p>

                        <div class="btn-bx">
                            <a href="#" class="common-button">Learn more
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="left-bx">
                        <figure>
                            <img src="{{url('/')}}/frontviewassest/images/pop.jfif" alt="">
                        </figure>
                    </div>

                </div>

            </div>
        </div>

    </section>











    <section class="Root-Reviews" data-aos="zoom-in" data-aos-duration="1000">
        <div class="container">
            <div class="section-title text-center">
                <div class="sub-title">
                    <span><img src="images/pet-love.png" alt=""> Reviews </span>
                </div>
                <h2>What Our Clients Say
                </h2>
            </div>
            <div class="row">
                <div class="testi_slider wow fadeInUp">
                    <div>
                        <div class="testi_txt">
                            <div class="texti_bx">
                                <figure>
                                    <img src="images/google-logo-icon.png" alt="">
                                </figure>
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="des-text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum numquam repudiandae
                                    molestias eos quae! Aliquid eum enim laborum ab cupiditate aperiam unde ullam?
                                    Repellat aperiam expedita a tempore inventore soluta.</p>
                                <h5>-lorem</h5>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testi_txt">
                            <div class="texti_bx">
                                <figure>
                                    <img src="images/google-logo-icon.png" alt="">
                                </figure>
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="des-text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum numquam repudiandae
                                    molestias eos quae! Aliquid eum enim laborum ab cupiditate aperiam unde ullam?
                                    Repellat aperiam expedita a tempore inventore soluta.</p>
                                <h5>-lorem</h5>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testi_txt">
                            <div class="texti_bx">
                                <figure>
                                    <img src="images/google-logo-icon.png" alt="">
                                </figure>
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="des-text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum numquam repudiandae
                                    molestias eos quae! Aliquid eum enim laborum ab cupiditate aperiam unde ullam?
                                    Repellat aperiam expedita a tempore inventore soluta.</p>
                                <h5>-lorem</h5>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testi_txt">
                            <div class="texti_bx">
                                <figure>
                                    <img src="images/google-logo-icon.png" alt="">
                                </figure>
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="des-text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum numquam repudiandae
                                    molestias eos quae! Aliquid eum enim laborum ab cupiditate aperiam unde ullam?
                                    Repellat aperiam expedita a tempore inventore soluta.</p>
                                <h5>-lorem</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>



    <section class="Service-Areas" data-aos="zoom-in" data-aos-duration="1000">
        <div class="container">
            <div class="section-title text-center">
                <div class="sub-title">
                    <span><img src="{{url('/')}}/frontviewassest/images/pet-love.png" alt=""> Service Areas </span>
                </div>
                <h2>Service Areas
                </h2>
            </div>


            <ul>

                <li><a href="#"> CONWAY</a></li>
                <li><a href="#">HOMEWOOD</a></li>
                <li><a href="#">AYNORCCU AREA</a></li>
                <li><a href="#">WEST WOOD ESTATE</a></li>
                <li><a href="#">SPINE ISLAND</a></li>
                <li><a href="#">CAROLINA FOREST</a></li>
                <li><a href="#">MYRTLE BEACH
                    </a></li>
                <li><a href="#">SOCASTEE
                    </a></li>
                <li><a href="#">LORIS</a></li>
            </ul>
        </div>
    </section>





    <section class="root-blog" data-aos="zoom-in" data-aos-duration="1000">
        <div class="container">
            <div class="section-title text-center">
                <div class="sub-title">
                    <span><img src="{{url('/')}}/frontviewassest/images/pet-love.png" alt=""> Latest News
                    </span>
                </div>
                <h2>Pets Articles

                </h2>
            </div>



            <div class="row">

                <div class="col-lg-4">

                    <div class="blog-card">
                        <div class="pic-bx">
                            <img src="{{url('/')}}/frontviewassest/images/banner.jfif" alt="">
                        </div>
                        <div class="card-text">
                            <h2>Lorem ipsum dolor sit amet.</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, magnam magni? Nulla
                                ullam ut soluta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime?</p>
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>







                <div class="col-lg-4">

                    <div class="blog-card">
                        <div class="pic-bx">
                            <img src="{{url('/')}}/frontviewassest/images/pop.jfif" alt="">
                        </div>
                        <div class="card-text">
                            <h2>Lorem ipsum dolor sit amet.</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, magnam magni? Nulla
                                ullam ut soluta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime?</p>
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4">

                    <div class="blog-card">
                        <div class="pic-bx">
                            <img src="{{url('/')}}/frontviewassest/images/b.jpg" alt="">
                        </div>
                        <div class="card-text">
                            <h2>Lorem ipsum dolor sit amet.</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, magnam magni? Nulla
                                ullam ut soluta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime?</p>
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </section>





    <section class="Social-Network">
        <div class="container">
            <div class="section-title text-center">
                <div class="sub-title">
                    <span><img src="{{url('/')}}/frontviewassest/images/pet-love.png" alt=""> Social Network
                    </span>
                </div>
                <h2>Social Network

                </h2>
            </div>
            <div class="grid-col">

                <div class="bx">
                    <div class="text-bx">
                        <h2>Lorem, ipsum dolor.</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque, est? Dolorum, facilis,
                            quidem earum provident tempore saepe repellat quo aut quas vero nihil eum expedita?</p>
                    </div>
                </div>
                <div class="bx">
                    <div class="text-bx">
                        <h2>Lorem, ipsum dolor.</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque, est? Dolorum, facilis,
                            quidem earum provident tempore saepe repellat quo aut quas vero nihil eum expedita?</p>
                    </div>
                </div>
                <div class="bx">
                    <div class="text-bx">
                        <h2>Lorem, ipsum dolor.</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque, est? Dolorum, facilis,
                            quidem earum provident tempore saepe repellat quo aut quas vero nihil eum expedita?</p>
                    </div>
                </div>
                <div class="bx">
                    <div class="text-bx">
                        <h2>Lorem, ipsum dolor.</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque, est? Dolorum, facilis,
                            quidem earum provident tempore saepe repellat quo aut quas vero nihil eum expedita?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="newsletter">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <div class="left-text-bx">

                        <div class="section-title ">

                            <h2>Subscribe to our newsletter for
                                the <br>latest discounts and savings!</h2>
                        </div>



                    </div>
                </div>



                <div class="col-lg-6">
                    <div class="input-bx">
                        <div class="main-bx">
                            <input type="email" placeholder=" Enter Your Email Address...">
                            <a href="#" class="common-button">Subscribe Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
