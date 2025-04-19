@section('title', $page->meta_title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_keywords)
@extends('frontend.layout.homepagenew')
@section('content')
<!-- ========== Start Customers section ========== -->
@php
use App\Models\Pages;
$page = Pages::where('slug', 'homepage')->first();
@endphp
<section class="root-customer" data-aos="zoom-in" data-aos-duration="1000">
   <div class="container">
      <div class="row">
         <div class="col-lg-5">
            <div class="left-bx">
               <figure><img src="../../../frontviewassest/images/banner.jfif" alt=""></figure>
            </div>
         </div>
         <div class="col-lg-5">
            <div class="right-text-bx">
               <div class="section-title">
                  <div class="sub-title"><img src="../../../frontviewassest/images/pet-love.png" alt="">New Customers</div>
                  <h2>New Customers</h2>
               </div>
               <p>Get your first service free of charge if they sign up for anyTier package for1 month. Monthly charges are based on Tier chosen. All charges subject to taxes. If no Tier is chosen the charge for a 1 me visit $45.50</p>
               <div class="btn-bx"><a class="common-button" href="#">Book Now! </a></div>
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
                  <h2>Tier 1 — Once a Week</h2>
                  <p>A classic go-to for small yards and low-traffic households. Perfect for staying on top of the mess without overthinking it.</p>
                  <div class="btn-bx"><a class="common-button" href="#">Learn more </a></div>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="root-card-bx">
               <div class="card-text">
                  <h2>Tier 2 — Twice a Week</h2>
                  <p>Double the visits means a fresher yard, always. Designed for homes with active pups or families who value cleanliness year-round.</p>
                  <div class="btn-bx"><a class="common-button" href="#">Learn more </a></div>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="root-card-bx">
               <div class="card-text">
                  <h2>Tier 3 — Three Times a Week</h2>
                  <p>No-nonsense, midweek freshness for households that need a little more attention. This tier keeps your outdoor space always ready for guests or backyard play.</p>
                  <div class="btn-bx"><a class="common-button" href="#">Learn more </a></div>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="root-card-bx">
               <div class="card-text">
                  <h2>Tier 4 — Once a Month</h2>
                  <p>The deep-clean option for the occasional scoop. Great for vacation homes, seasonal cleanups, or as a fresh start after a long winter.</p>
                  <div class="btn-bx"><a class="common-button" href="#">Learn more </a></div>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="root-card-bx">
               <div class="card-text">
                  <h2>VIP Tier 5 — Daily Service</h2>
                  <p>Luxury-level cleanup for the most discerning pet homes. Because every day should start with a clean slate — and a poop-free lawn.</p>
                  <div class="btn-bx"><a class="common-button" href="#">Learn more </a></div>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="root-card-bx">
               <div class="card-text">
                  <h2>OTS Tier 6 — One-Time Service</h2>
                  <p>Need a quick reset? Our one-time cleanups are perfect for move-outs, parties, or just getting caught up on the doodie you’ve been dodging.</p>
                  <div class="btn-bx"><a class="common-button" href="#">Learn more </a></div>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="root-card-bx">
               <div class="card-text">
                  <h2>MDP Hourly Plan — Multi-Dog Property</h2>
                  <p>Have a pack or a pasture? For large properties or dog-heavy households, we bill by time to give your land the attention it deserves.</p>
                  <div class="btn-bx"><a class="common-button" href="#">Learn more </a></div>
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
                  <div class="sub-title"><img src="../../../frontviewassest/images/pet-love.png" alt="">Clean no</div>
                  <h2>Clean No Poop Yard</h2>
               </div>
               <p><strong>your local dog waste removal service</strong></p>
               <p>NoPooop.com is Conway’s go-to pet waste removal service, proudly serving the Grand Strand and surrounding areas. We keep yards clean, safe, and stink-free—so families, pets, and guests can enjoy the outdoors without stepping into trouble. Our friendly technicians handle the dirty work on a schedule that fits your needs, whether it’s a one-time cleanup or regular visits. Every service is done with care, eco-friendly disposal, and no long-term contracts. We're locally owned, community-minded, and passionate about protecting paws and property alike.</p>
               <div class="btn-bx"><a class="common-button" href="#">Learn more </a></div>
            </div>
         </div>
         <div class="col-lg-5">
            <div class="left-bx">
               <figure><img src="../../../frontviewassest/images/pop.jfif" alt=""></figure>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="Root-Reviews" data-aos="zoom-in" data-aos-duration="1000">
   <div class="container">
      <div class="section-title text-center">
         <div class="sub-title"><img src="frontviewassest/images/pet-love.png" alt=""> Reviews</div>
         <h2>What Our Clients Say</h2>
      </div>
      <div class="row">
         <div class="testi_slider wow fadeInUp">
            <div>
               <div class="testi_txt">
                  <div class="texti_bx">
                     <figure><img src="frontviewassest/images/google-logo-icon.png" alt=""></figure>
                     <div class="star">&nbsp;</div>
                  </div>
                  <div class="des-text">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum numquam repudiandae molestias eos quae! Aliquid eum enim laborum ab cupiditate aperiam unde ullam? Repellat aperiam expedita a tempore inventore soluta.</p>
                     <h5>-lorem</h5>
                  </div>
               </div>
            </div>
            <div>
               <div class="testi_txt">
                  <div class="texti_bx">
                     <figure><img src="frontviewassest/images/google-logo-icon.png" alt=""></figure>
                     <div class="star">&nbsp;</div>
                  </div>
                  <div class="des-text">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum numquam repudiandae molestias eos quae! Aliquid eum enim laborum ab cupiditate aperiam unde ullam? Repellat aperiam expedita a tempore inventore soluta.</p>
                     <h5>-lorem</h5>
                  </div>
               </div>
            </div>
            <div>
               <div class="testi_txt">
                  <div class="texti_bx">
                     <figure><img src="frontviewassest/images/google-logo-icon.png" alt=""></figure>
                     <div class="star">&nbsp;</div>
                  </div>
                  <div class="des-text">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum numquam repudiandae molestias eos quae! Aliquid eum enim laborum ab cupiditate aperiam unde ullam? Repellat aperiam expedita a tempore inventore soluta.</p>
                     <h5>-lorem</h5>
                  </div>
               </div>
            </div>
            <div>
               <div class="testi_txt">
                  <div class="texti_bx">
                     <figure><img src="frontviewassest/images/google-logo-icon.png" alt=""></figure>
                     <div class="star">&nbsp;</div>
                  </div>
                  <div class="des-text">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum numquam repudiandae molestias eos quae! Aliquid eum enim laborum ab cupiditate aperiam unde ullam? Repellat aperiam expedita a tempore inventore soluta.</p>
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
         <div class="sub-title"><img src="../../../frontviewassest/images/pet-love.png" alt=""> Service Areas</div>
         <h2>Service Areas</h2>
      </div>
      <ul>
        @foreach(\App\Models\Services::all() as $row)
            <li><a href="/service/{{$row->slug}}">{{$row->title}}</a></li>
        @endforeach
      </ul>
   </div>
</section>

<section class="root-blog" data-aos="zoom-in" data-aos-duration="1000">
   <div class="container">
      <div class="section-title text-center">
         <div class="sub-title"><img src="../../../frontviewassest/images/pet-love.png" alt=""> Latest News</div>
         <h2>Pets Articles</h2>
      </div>
      <div class="row">
        @foreach(\App\Models\Blogs::latest()->take(6)->get() as $blog)
         <div class="col-lg-4">
            <div class="blog-card">
               <div class="pic-bx">
                  <img src="{{ fileToUrl($blog->feature_image) }}" alt="{{ $blog->title }}">
               </div>
               <div class="card-text">
                  <h2>{{ $blog->title }}</h2>
                  <p>{{ \Illuminate\Support\Str::words(strip_tags($blog->description), 20, '...') }}</p>
                  <a href="{{ url('blog/' . $blog->slug) }}">Read More</a>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</section>

<section class="Social-Network">
   <div class="container">
      <div class="section-title text-center">
         <div class="sub-title"><img src="../../../frontviewassest/images/pet-love.png" alt=""> Social Network</div>
         <h2>Social Network</h2>
      </div>
      <div class="grid-col">
         <div class="bx">
            <div class="text-bx">
               <h2>Lorem, ipsum dolor.</h2>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque, est? Dolorum, facilis, quidem earum provident tempore saepe repellat quo aut quas vero nihil eum expedita?</p>
            </div>
         </div>
         <div class="bx">
            <div class="text-bx">
               <h2>Lorem, ipsum dolor.</h2>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque, est? Dolorum, facilis, quidem earum provident tempore saepe repellat quo aut quas vero nihil eum expedita?</p>
            </div>
         </div>
         <div class="bx">
            <div class="text-bx">
               <h2>Lorem, ipsum dolor.</h2>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque, est? Dolorum, facilis, quidem earum provident tempore saepe repellat quo aut quas vero nihil eum expedita?</p>
            </div>
         </div>
         <div class="bx">
            <div class="text-bx">
               <h2>Lorem, ipsum dolor.</h2>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque, est? Dolorum, facilis, quidem earum provident tempore saepe repellat quo aut quas vero nihil eum expedita?</p>
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
                  <h2>Subscribe to our newsletter for the <br>latest discounts and savings!</h2>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="input-bx">
               <div class="main-bx">
                  <input type="email" id="newsletter-email" placeholder=" Enter Your Email Address...">
                  <a class="common-button" href="javascript:void(0);" id="subscribeBtn">Subscribe Now!</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById('subscribeBtn').addEventListener('click', function () {
        let email = document.getElementById('newsletter-email').value;
        if (!email) {
            alert("Please enter an email address.");
            return;
        }

        fetch("{{ route('subscribe.newsletter') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json", // Important to receive JSON validation response
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({ email: email })
        })
        .then(async response => {
            const data = await response.json();

            if (response.ok) {
                alert(data.message || "Thank you for subscribing!");
                document.getElementById('newsletter-email').value = '';
            } else {
                if (data.errors && data.errors.email) {
                    alert(data.errors.email[0]);
                } else {
                    alert(data.message || "Something went wrong.");
                }
            }
        })
        .catch(error => {
            console.error("Error:", error);
            alert("Failed to subscribe. Please try again later.");
        });
    });
});
</script>

@endsection