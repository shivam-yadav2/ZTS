@extends('master.frontmaster')
@section('content')
  <!-- ==== banner start ==== -->
      <section class="banner">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12 col-xl-10">
                  <div class="banner__slider swiper">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="banner__content text-center">
                              <span class="sub-title"><i class="icon-donation"></i>Start donating poor people</span>
                              <h1>Helping Each Other Make
                                 <span>Better</span> today
                              </h1>
                              <p>Join our monthly giving
                                 program to provide consistent support to our initiatives. Regular
                                 contributions, no matter the size, help us plan and sustain long-term projects.
                              </p>
                              <div class="banner__content-cta cta">
                                 <a href="our-causes.html" aria-label="about us" title="about us"
                                    class="btn--tertiary">Discover More <i class="fa-solid fa-arrow-right"></i></a>
                                 <a href="contact-us.html" aria-label="contact us" title="contact us"
                                    class="btn--primary">Get A Quote <i class="fa-solid fa-arrow-right"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="banner__content text-center">
                              <span class="sub-title"><i class="icon-donation"></i>Start donating poor people</span>
                              <h1>Helping Each Other Make
                                 <span>Better</span> today
                              </h1>
                              <p>Join our monthly giving
                                 program to provide consistent support to our initiatives. Regular
                                 contributions, no matter the size, help us plan and sustain long-term projects.
                              </p>
                              <div class="banner__content-cta cta">
                                 <a href="our-causes.html" aria-label="about us" title="about us"
                                    class="btn--tertiary">Discover More <i class="fa-solid fa-arrow-right"></i></a>
                                 <a href="contact-us.html" aria-label="contact us" title="contact us"
                                    class="btn--primary">Get A Quote <i class="fa-solid fa-arrow-right"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="banner__content text-center">
                              <span class="sub-title"><i class="icon-donation"></i>Start donating poor people</span>
                              <h1>Helping Each Other Make
                                 <span>Better</span> today
                              </h1>
                              <p>Join our monthly giving
                                 program to provide consistent support to our initiatives. Regular
                                 contributions, no matter the size, help us plan and sustain long-term projects.
                              </p>
                              <div class="banner__content-cta cta">
                                 <a href="our-causes.html" aria-label="about us" title="about us"
                                    class="btn--tertiary">Discover More <i class="fa-solid fa-arrow-right"></i></a>
                                 <a href="contact-us.html" aria-label="contact us" title="contact us"
                                    class="btn--primary">Get A Quote <i class="fa-solid fa-arrow-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="banner-bg">
            <img src="{{asset('frontend_assets/images/banner/banner-one-bg.png')}}" alt="Image" class="parallax-image">
         </div>
         <div class="bottom-shape">
            <img src="{{asset('frontend_assets/images/banner/banner-one-shape.png')}}" alt="Image">
         </div>
         <div class="alter-shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
         <div class="circle-shape"></div>
      </section>
      <!-- ==== / banner end ==== -->
        <!-- ==== difference section start ==== -->
      <section class="difference">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12 col-lg-10 col-xl-8">
                  <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                     <span class="sub-title"><i class="icon-donation"></i>Be the Change</span>
                     <h2 class="title-animation">Transform Lives Through Charity</h2>
                     <p>Your donation creates opportunities — from education to healthcare — 
                        helping underprivileged families rise above poverty and build a better future.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="difference__inner">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="difference__slider swiper">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="difference__single-wrapper">
                                 <div class="difference__single difference__single-first"
                                    data-background="{{asset('frontend_assets/images/difference/bg-one.png')}}">
                                    <div class="difference__single-thumb">
                                       <i class="icon-education"></i>
                                    </div>
                                    <div class="difference__single-content">
                                       <h5><a href="cause-details.html">Participations</a></h5>
                                       <p>Words have a great impact in our mind so firstly we have to change our mindset for the new beginning.
                                           For this just switching is required for some words...
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="difference__single-wrapper">
                                 <div class="difference__single difference__single-second"
                                    data-background="{{asset('frontend_assets/images/difference/bg-two.png')}}">
                                    <div class="difference__single-thumb">
                                       <i class="icon-food"></i>
                                    </div>
                                    <div class="difference__single-content">
                                       <h5><a href="cause-details.html">Become Volunteer</a></h5>
                                       <p>oin Our Volunteer Programme. Help Our Organisation Make an Impact in the Community. 
                                          If you have have the skills we need, and some time to spare, we would love to hear from you. .
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="difference__single-wrapper">
                                 <div class="difference__single difference__single-third "
                                    data-background="{{asset('frontend_assets/images/difference/bg-three.png')}}">
                                    <div class="difference__single-thumb">
                                       <i class="icon-health"></i>
                                    </div>
                                    <div class="difference__single-content">
                                       <h5><a href="cause-details.html">Give Inspiration</a></h5>
                                       <p>Let us hope it doesn't take another 22 years for us to acknowledge these 10 unsung heroes that 
                                          have worked hard to inspire people around them and selflessly devoted their lives to a cause:
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- <div class="swiper-slide">
                              <div class="difference__single-wrapper">
                                 <div class="difference__single difference__single-first"
                                    data-background="{{asset('frontend_assets/images/difference/bg-one.png')}}">
                                    <div class="difference__single-thumb">
                                       <i class="icon-education"></i>
                                    </div>
                                    <div class="difference__single-content">
                                       <h5><a href="cause-details.html">Child Education</a></h5>
                                       <p>Set up a secure and user-friendly online donation platform that accepts
                                          multiple
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="difference__single-wrapper">
                                 <div class="difference__single difference__single-second"
                                    data-background="{{asset('frontend_assets/images/difference/bg-two.png')}}">
                                    <div class="difference__single-thumb">
                                       <i class="icon-food"></i>
                                    </div>
                                    <div class="difference__single-content">
                                       <h5><a href="cause-details.html">Healthy Food</a></h5>
                                       <p>Set up a secure and user-friendly online donation platform that accepts
                                          multiple
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="difference__single-wrapper">
                                 <div class="difference__single difference__single-third "
                                    data-background="{{asset('frontend_assets/images/difference/bg-three.png')}}">
                                    <div class="difference__single-thumb">
                                       <i class="icon-health"></i>
                                    </div>
                                    <div class="difference__single-content">
                                       <h5><a href="cause-details.html">Medical Care</a></h5>
                                       <p>Set up a secure and user-friendly online donation platform that accepts
                                          multiple
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div> -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="slider-navigation">
               <button type="button" aria-label="prev slide" title="prev slide" class="prev-difference slider-btn">
                  <i class="fa-solid fa-arrow-left"></i>
               </button>
               <button type="button" aria-label="next slide" title="next slide"
                  class="next-difference slider-btn slider-btn-next">
                  <i class="fa-solid fa-arrow-right"></i>
               </button>
            </div>
         </div>
         <div class="shape-hand" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
            <img src="{{asset('frontend_assets/images/difference/shape-hand.png')}}" alt="Image">
         </div>
      </section>
      <!-- ==== help section start ==== -->
      <section class="help-two">
         <div class="container">
            <div class="row">
               <div class="col-12 col-lg-5 col-xxl-6 ">
                  <div class="help-two__thumb d-none d-lg-block">
                     <div class="help-two__thumb-inner">
                        <div class="thumb-lg" data-aos="fade-up" data-aos-duration="1000">
                           <img src="{{asset('frontend_assets/images/help/three.png')}}" alt="Image">
                        </div>
                        <div class="thumb-sm" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                           <img src="{{asset('frontend_assets/images/help/two.png')}}" alt="Image">
                        </div>
                        <div class="thumb-md" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                           <img src="{{asset('frontend_assets/images/help/one.png')}}" alt="Image">
                        </div>
                        <div class="help-two__thumb-content">
                           <div class="thumb">
                              <i class="icon-donation"></i>
                           </div>
                           <div class="content">
                              <h2><span class="odometer" data-odometer-final="250"></span><span>+</span>
                              </h2>
                              <p>Services we Provide</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-lg-7 col-xxl-6">
                  <div class="help-two__content">
                     <div class="section__content">
                        <span class="sub-title"><i class="icon-donation"></i>Make a Difference with Your Donation</span>
                        <h2 class="title-animation">Welcome to 
                         Zindagi Tujhe  <span> Salaam</span>
                        </h2>
                        <p>Zindagi tujhe salaam is formed by group of professional from various field in 2010 to bring about positive changes in the society. 
                           As it is well known that we are a biggest democracy and one of the oldest and competent civilization in the world and 
                           Still we are the best amongst other as far as our society is concern but in due course of time ,
                           since its birth lot of thing has gone wrong and lot of complication has been surfaced due to negligence by the individuals , 
                           authorities and education system of our society, like corruption, child labour, crime against woman , crime against child , lack of compassion towards needy people, 
                           lack of responsibility towards society though lot of work has been done by lot of organizations and few individuals but 
                           that is not adequate to create a society which can give social justice and environment to grow to all their individuals irrespective of their financial status ,religion , geographical position and cast.
                        </p>
                     </div>
                     <!-- <div class="help-two__inner cta">
                        <div class="help-two__inner-content">
                           <div class="help__content-icon-group">
                              <div class="help__content-icon">
                                 <div class="thumb">
                                    <i class="icon-make-donation"></i>
                                 </div>
                                 <div class="content">
                                    <h6>Start helping them</h6>
                                    <p>Raising awareness about the charity's mission and cause.</p>
                                 </div>
                              </div>
                              <hr>
                              <div class="help__content-icon">
                                 <div class="thumb">
                                    <i class="icon-support-heart"></i>
                                 </div>
                                 <div class="content">
                                    <h6>Make Donations</h6>
                                    <p>Raising awareness about the charity's mission and cause.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="help__content-list">
                              <ul>
                                 <li><i class="fa-solid fa-circle-check"></i> Helped fund 3,265 Project
                                    powerfull
                                 </li>
                                 <li><i class="fa-solid fa-circle-check"></i> We give child a gift of a
                                    education
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="help-two-card-wrapper">
                           <div class="help-two__card van-tilt">
                              <div class="help-card-thumb">
                                 <img src="{{asset('frontend_assets/images/help/author.png')}}" alt="Image">
                                 <i class="icon-star"></i>
                              </div>
                              <div class="help-card-content">
                                 <h4>35,734</h4>
                                 <h6>Helped Fund</h6>
                                 <p>Quisque dignissim enim diam</p>
                              </div>
                           </div>
                        </div>
                     </div> -->
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ==== / help section end ==== -->
       <!-- ==== team section start ==== -->
      <section class="team">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12 col-lg-10 col-xl-6">
                  <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                     <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                        people</span>
                     <h2 class="title-animation">Meet Our Volunteer
                        <span>Team</span> members
                     </h2>
                  </div>
               </div>
            </div>
            <div class="row gutter-40">
               <div class="col-12 col-sm-6 col-xl-3">
                  <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000">
                     <div class="team__single van-tilt">
                        <div class="team__single-thumb">
                           <a href="team-details.html">
                              <img src="{{asset('frontend_assets/images/members/member1.png')}}" alt="Image">
                           </a>
                           <div class="team__icons">
                              <div class="team__single-content__icon">
                                 <i class="fa-solid fa-plus"></i>
                              </div>
                              <div class="team__single__thumb-social">
                                 <ul>
                                    <li>
                                       <a href="index.html">
                                          <i class="fa-brands fa-facebook-f"></i>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="index.html">
                                          <i class="fa-brands fa-twitter"></i>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="index.html">
                                          <i class="fa-brands fa-instagram"></i>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="index.html">
                                          <i class="fa-brands fa-behance"></i>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="team__single-content">
                           <h6><a href="team-details.html">Pooja Srivastav</a></h6>
                           <p>Volunteer</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-xl-3">
                  <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                     <div class="team__single van-tilt">
                        <div class="team__single-thumb">
                           <a href="team-details.html">
                              <img src="{{asset('frontend_assets/images/members/member2.png')}}" alt="Image">
                           </a>
                           <div class="team__icons">
                              <div class="team__single-content__icon">
                                 <i class="fa-solid fa-plus"></i>
                              </div>
                              <div class="team__single__thumb-social">
                                 <ul>
                                    <li>
                                       <a href="index.html">
                                          <i class="fa-brands fa-facebook-f"></i>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="index.html">
                                          <i class="fa-brands fa-twitter"></i>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="index.html">
                                          <i class="fa-brands fa-instagram"></i>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="index.html">
                                          <i class="fa-brands fa-behance"></i>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="team__single-content">
                           <h6><a href="team-details.html">Sanjeev Mishra</a></h6>
                           <p>Volunteer</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-xl-3">
                  <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                     <div class="team__single van-tilt">
                        <div class="team__single-thumb">
                           <a href="team-details.html">
                              <img src="{{asset('frontend_assets/images/members/member3.png')}}" alt="Image">
                           </a>
                           <div class="team__icons">
                              <div class="team__single-content__icon">
                                 <i class="fa-solid fa-plus"></i>
                              </div>
                              <div class="team__single__thumb-social">
                                 <ul>
                                    <li>
                                       <a href="index.html">
                                          <i class="fa-brands fa-facebook-f"></i>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="index.html">
                                          <i class="fa-brands fa-twitter"></i>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="index.html">
                                          <i class="fa-brands fa-instagram"></i>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="index.html">
                                          <i class="fa-brands fa-behance"></i>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="team__single-content">
                           <h6><a href="team-details.html">Santhosh PP</a></h6>
                           <p>Volunteer</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-xl-3">
                  <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900">
                     <div class="team__single van-tilt">
                        <div class="team__single-thumb">
                           <a href="team-details.html">
                              <img src="{{asset('frontend_assets/images/members/member4.png')}}" alt="Image">
                           </a>
                           <div class="team__icons">
                              <div class="team__single-content__icon">
                                 <i class="fa-solid fa-plus"></i>
                              </div>
                              <div class="team__single__thumb-social">
                                 <ul>
                                    <li>
                                       <a href="index.html">
                                          <i class="fa-brands fa-facebook-f"></i>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="index.html">
                                          <i class="fa-brands fa-twitter"></i>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="index.html">
                                          <i class="fa-brands fa-instagram"></i>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="index.html">
                                          <i class="fa-brands fa-behance"></i>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="team__single-content">
                           <h6><a href="team-details.html">Dr. Priyam Sameer Kamdar</a></h6>
                           <p>Volunteer</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <div class="section__cta cta text-center">
                     <a href="our-team.html" aria-label="our team" title="our team" class="btn--primary">View All
                        <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="spade">
            <img src="{{asset('frontend_assets/images/sprade-green.png')}}" alt="Image">
         </div>
      </section>
      <!-- ==== / team section end ==== -->
         <!-- ==== counter section start ==== -->
      <section class="counter">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="counter__inner">
                     <div class="counter__single" data-aos="fade-up" data-aos-duration="1000">
                        <div class="thumb">
                           <i class="icon-support-hand"></i>
                        </div>
                        <div class="counter__content">
                           <h2><span class="odometer" data-odometer-final="400"></span><span class="prefix">+</span>
                           </h2>
                           <h5>Team member</h5>
                        </div>
                     </div>
                     <div class="divider"></div>
                     <div class="counter__single" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <div class="thumb">
                           <i class="icon-review"></i>
                        </div>
                        <div class="counter__content">
                           <h2><span class="odometer" data-odometer-final="80"></span>K<span class="prefix">+</span>
                           </h2>
                           <h5>Client's review</h5>
                        </div>
                     </div>
                     <div class="divider"></div>
                     <div class="counter__single" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <div class="thumb">
                           <i class="icon-documents"></i>
                        </div>
                        <div class="counter__content">
                           <h2><span class="odometer" data-odometer-final="100"></span>K<span class="prefix">+</span>
                           </h2>
                           <h5>Completed projects</h5>
                        </div>
                     </div>
                     <div class="divider"></div>
                     <div class="counter__single" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900">
                        <div class="thumb">
                           <i class="icon-award"></i>
                        </div>
                        <div class="counter__content">
                           <h2><span class="odometer" data-odometer-final="40"></span>K<span class="prefix">+</span>
                           </h2>
                           <h5>Winning award</h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="poor">
            <img src="assets/images/poor-two.png" alt="Image" class="parallax-image">
         </div>
         <div class="shape-left" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
            <img src="assets/images/cta/shape-left.png" alt="Image" class="base-img">
         </div>
      </section>
      <!-- ==== / counter section end ==== -->
@endsection