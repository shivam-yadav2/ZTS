@extends('master.frontmaster')
@section('content')
    <!-- === Banner Section start === -->
    <section class="banner-two">
         <div class="banner-two__slider swiper">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="banner-two__slider-single">
                     <div class="banner-two__slider-bg" data-background="{{asset('frontend_assets/images/slide1.jpg')}}">
                     </div>
                     <div class="container">
                        <div class="row">
                           <div class="col-12 col-md-9 col-lg-7 col-xxl-6">
                              <div class="banner-two__slider-content">
                                 <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                                    people</span>
                                 <h1>Giving help <br>
                                    To Those <span class="bottom-line">peoples</span>
                                    Who Need It.
                                 </h1>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="banner-two__slider-single">
                     <div class="banner-two__slider-bg" data-background="{{asset('frontend_assets/images/slide2.jpg')}}">
                     </div>
                     <div class="container">
                        <div class="row">
                           <div class="col-12 col-md-9  col-lg-7 col-xxl-6">
                              <div class="banner-two__slider-content">
                                 <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                                    people</span>
                                 <h1>Giving help <br>
                                    To Those <span class="bottom-line">peoples</span>
                                    Who Need It.
                                 </h1>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="banner-two__slider-single">
                     <div class="banner-two__slider-bg" data-background="{{asset('frontend_assets/images/slide3.jpg')}}">
                     </div>
                     <div class="container">
                        <div class="row">
                           <div class="col-12 col-md-9 col-lg-7 col-xxl-6">
                              <div class="banner-two__slider-content">
                                 <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                                    people</span>
                                 <h1>Giving help <br>
                                    To Those <span class="bottom-line">peoples</span>
                                    Who Need It.
                                 </h1>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="banner-two__slider-single">
                     <div class="banner-two__slider-bg" data-background="{{asset('frontend_assets/images/slide4.jpg')}}">
                     </div>
                     <div class="container">
                        <div class="row">
                           <div class="col-12 col-md-9 col-lg-7 col-xxl-6">
                              <div class="banner-two__slider-content">
                                 <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                                    people</span>
                                 <h1>Giving help <br>
                                    To Those <span class="bottom-line">peoples</span>
                                    Who Need It.
                                 </h1>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="slider-navigation d-none d-md-flex">
            <button type="button" aria-label="prev slide" title="prev slide" class="prev-banner slider-btn">
               <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button type="button" aria-label="next slide" title="next slide"
               class="next-banner slider-btn slider-btn-next">
               <i class="fa-solid fa-arrow-right"></i>
            </button>
         </div>
         <div class="shape">
            <img src="{{asset('frontend_assets/images/shape.png')}}" alt="Image">
         </div>
         <div class="shape-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
            <img src="{{asset('frontend_assets/images/banner/banner-two-shape.png')}}" alt="Image">
         </div>
         <div class="sprade-shape">
            <img src="{{asset('frontend_assets/images/sprade-base.png')}}" alt="Image" class="base-img" data-aos="zoom-in"
               data-aos-duration="1000">
         </div>
         <div class="unity">
            <img src="{{asset('frontend_assets/images/unity.png')}}" alt="Image">
         </div>
    </section>
      <!-- ===  Banner Section End === -->

    <!-- ==== difference section start ==== -->
    <!-- <section class="difference">
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
                                            data-background="{{ asset('frontend_assets/images/difference/bg-one.png') }}">
                                            <div class="difference__single-thumb">
                                                <i class="icon-education"></i>
                                            </div>
                                            <div class="difference__single-content">
                                                <h5><a href="cause-details.html">Participations</a></h5>
                                                <p>Words have a great impact in our mind so firstly we have to change our
                                                    mindset for the new beginning.
                                                    For this just switching is required for some words...
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="difference__single-wrapper">
                                        <div class="difference__single difference__single-second"
                                            data-background="{{ asset('frontend_assets/images/difference/bg-two.png') }}">
                                            <div class="difference__single-thumb">
                                                <i class="icon-food"></i>
                                            </div>
                                            <div class="difference__single-content">
                                                <h5><a href="cause-details.html">Become Volunteer</a></h5>
                                                <p>oin Our Volunteer Programme. Help Our Organisation Make an Impact in the
                                                    Community.
                                                    If you have have the skills we need, and some time to spare, we would
                                                    love to hear from you. .
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="difference__single-wrapper">
                                        <div class="difference__single difference__single-third "
                                            data-background="{{ asset('frontend_assets/images/difference/bg-three.png') }}">
                                            <div class="difference__single-thumb">
                                                <i class="icon-health"></i>
                                            </div>
                                            <div class="difference__single-content">
                                                <h5><a href="cause-details.html">Give Inspiration</a></h5>
                                                <p>Let us hope it doesn't take another 22 years for us to acknowledge these
                                                    10 unsung heroes that
                                                    have worked hard to inspire people around them and selflessly devoted
                                                    their lives to a cause:
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                                          <div class="difference__single-wrapper">
                                                             <div class="difference__single difference__single-first"
                                                                data-background="{{ asset('frontend_assets/images/difference/bg-one.png') }}">
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
                                                                data-background="{{ asset('frontend_assets/images/difference/bg-two.png') }}">
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
                                                                data-background="{{ asset('frontend_assets/images/difference/bg-three.png') }}">
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
                                                       </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-navigation d-flex d-lg-none">
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
            <img src="{{ asset('frontend_assets/images/difference/shape-hand.png') }}" alt="Image">
        </div>
    </section> -->
    <!-- ==== difference section end ==== -->

    <!-- ==== blog section start ==== -->
    <!-- <section class="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-xl-7">
                    <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title"><i class="icon-donation"></i>Together For A Better Tomorrow</span>
                        <h2 class="title-animation">Our <span> Campaigns</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row gutter-40">
                <div class="col-12 col-lg-6 col-xl-4">
                    <div class="blog__single-wrapper" data-aos="fade-up" data-aos-duration="1000">
                        <div class="blog__single van-tilt">
                            <div class="blog__single-thumb">
                                <a href="blog-details.html">
                                    <img src="{{ asset('frontend_assets/images/campaign/campaign1.jpg') }}" alt="Image">
                                </a>
                                <div class="tag">
                                    <a href="blog-list.html"><i class="fa-solid fa-tags"></i>Health</a>
                                </div>
                            </div>
                            <div class="blog__single-inner">
                                <div class="blog__single-meta">
                                    <p><i class="icon-user"></i>Robert Fox</p>
                                    <p><i class="icon-message"></i>Comments (03)</p>
                                </div>
                                <div class="blog__single-content">
                                    <h5><a href="blog-details.html">IT Service Case Studies Accelerate
                                            Business Fly Success Tech</a>
                                    </h5>
                                </div>
                                <div class="blog__single-cta">
                                    <a href="blog-details.html" aria-label="blog details" title="blog details">Read
                                        More<i class="fa-solid fa-circle-arrow-right"></i></a>
                                </div>
                            </div>
                            <img src="{{ asset('frontend_assets/images/blog/spade.png') }}" alt="Image"
                                class="spade-two">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-4">
                    <div class="blog__single-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <div class="blog__single van-tilt">
                            <div class="blog__single-thumb">
                                <a href="blog-details.html">
                                    <img src="{{ asset('frontend_assets/images/campaign/campaign2.jpg') }}" alt="Image">
                                </a>
                                <div class="tag">
                                    <a href="blog-list.html"><i class="fa-solid fa-tags"></i>Education</a>
                                </div>
                            </div>
                            <div class="blog__single-inner">
                                <div class="blog__single-meta">
                                    <p><i class="icon-user"></i>Robert Fox</p>
                                    <p><i class="icon-message"></i>Comments (08)</p>
                                </div>
                                <div class="blog__single-content">
                                    <h5><a href="blog-details.html">IT Service Case Studies Accelerate
                                            Business Fly Success Tech</a>
                                    </h5>
                                </div>
                                <div class="blog__single-cta">
                                    <a href="blog-details.html" aria-label="blog details" title="blog details">Read
                                        More<i class="fa-solid fa-circle-arrow-right"></i></a>
                                </div>
                            </div>
                            <img src="{{ asset('frontend_assets/images/blog/spade.png') }}" alt="Image"
                                class="spade-two">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-4">
                    <div class="blog__single-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <div class="blog__single van-tilt">
                            <div class="blog__single-thumb">
                                <a href="blog-details.html">
                                    <img src="{{ asset('frontend_assets/images/campaign/campaign3.jpg') }}" alt="Image">
                                </a>
                                <div class="tag">
                                    <a href="blog-list.html"><i class="fa-solid fa-tags"></i>Food</a>
                                </div>
                            </div>
                            <div class="blog__single-inner">
                                <div class="blog__single-meta">
                                    <p><i class="icon-user"></i>Robert Fox</p>
                                    <p><i class="icon-message"></i>Comments (13)</p>
                                </div>
                                <div class="blog__single-content">
                                    <h5><a href="blog-details.html">IT Service Case Studies Accelerate
                                            Business Fly Success Tech</a>
                                    </h5>
                                </div>
                                <div class="blog__single-cta">
                                    <a href="blog-details.html" aria-label="blog details" title="blog details">Read
                                        More<i class="fa-solid fa-circle-arrow-right"></i></a>
                                </div>
                            </div>
                            <img src="{{ asset('frontend_assets/images/blog/spade.png') }}" alt="Image"
                                class="spade-two">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="section__cta cta text-center">
                        <a href="blog-list.html" aria-label="our blog" title="our blog" class="btn--primary">View
                            All <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-bg">
            <img src="{{ asset('frontend_assets/images/blog/blog-bg.png') }}" alt="Image">
        </div>
        <div class="spade">
            <img src="{{ asset('frontend_assets/images/blog/spade-base.png') }}" alt="Image" class="base-img">
        </div>
    </section> -->
    <!-- ==== / blog section end ==== -->

    <!-- <section class="help-three">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="help-three__inner">
                        <div class="section__header-secondary" data-aos="fade-up" data-aos-duration="1000">
                            <div class="row gutter-30 align-items-center">
                                <div class="col-12 col-lg-8 col-xxl-7">
                                    <div class="section__header mb-0">
                                        <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                                            people</span>
                                        <h2 class="title-animation">Helping each other can
                                            make <span>world</span> better
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 col-xxl-5">
                                    <div class="help-cta">
                                        <a href="about-us.html" aria-label="our team" title="our team"
                                            class="btn--primary">More About Us<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="help-three__wrapper">
                            <div class="row gutter-60">
                                <div class="col-12 col-md-6 col-xxl-3">
                                    <div class="help-three__single" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="help-three__thumb">
                                            <div class="thumb">
                                                <i class="icon-pack"></i>
                                            </div>
                                            <div class="help-three__tag">
                                                <h6>Step - 01</h6>
                                            </div>
                                        </div>
                                        <div class="help-three__content">
                                            <h6>Select Services</h6>
                                            <p>Pellentesque habitant morbi trist
                                                fames ac turp egestas. Aliquam
                                                enim feugiat mattis.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xxl-3">
                                    <div class="help-three__single" data-aos="fade-up" data-aos-duration="1000"
                                        data-aos-delay="300">
                                        <div class="help-three__thumb">
                                            <div class="thumb">
                                                <i class="icon-credit-card"></i>
                                            </div>
                                            <div class="help-three__tag">
                                                <h6>Step - 02</h6>
                                            </div>
                                        </div>
                                        <div class="help-three__content">
                                            <h6>Percel Information</h6>
                                            <p>Pellentesque habitant morbi trist
                                                fames ac turp egestas. Aliquam
                                                enim feugiat mattis.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xxl-3">
                                    <div class="help-three__single" data-aos="fade-up" data-aos-duration="1000"
                                        data-aos-delay="600">
                                        <div class="help-three__thumb">
                                            <div class="thumb">
                                                <i class="icon-ship"></i>
                                            </div>
                                            <div class="help-three__tag">
                                                <h6>Step - 03</h6>
                                            </div>
                                        </div>
                                        <div class="help-three__content">
                                            <h6>Transportation</h6>
                                            <p>Pellentesque habitant morbi trist
                                                fames ac turp egestas. Aliquam
                                                enim feugiat mattis.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xxl-3">
                                    <div class="help-three__single" data-aos="fade-up" data-aos-duration="1000"
                                        data-aos-delay="900">
                                        <div class="help-three__thumb">
                                            <div class="thumb">
                                                <i class="icon-truck"></i>
                                            </div>
                                            <div class="help-three__tag">
                                                <h6>Step - 04</h6>
                                            </div>
                                        </div>
                                        <div class="help-three__content">
                                            <h6>Takeover Products</h6>
                                            <p>Pellentesque habitant morbi trist
                                                fames ac turp egestas. Aliquam
                                                enim feugiat mattis.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img src="/frontend_assets/images/v-line.png" alt="Image"
                                class="v-line d-none d-xxl-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="help-three-bg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <img src="/frontend_assets/images/bg-one.png" alt="Image" class="bg-help">
            <div class="poor-boy">
                <img src="/frontend_assets/images/poor-boy.png" alt="Image" class="poor">
                <img src="/frontend_assets/images/shape-three.png" alt="Image" class="shape">
            </div>
            <div class="parasuit">
                <img src="/frontend_assets/images/parasuit.png" alt="Image">
            </div>
        </div>
    </section> -->

    <!-- ==== Earlier help now About section start ==== -->
    <section class="help-two">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5 col-xxl-6 ">
                    <div class="help-two__thumb d-none d-lg-block">
                        <div class="help-two__thumb-inner">
                            <div class="thumb-lg" data-aos="fade-up" data-aos-duration="1000">
                                <img src="{{ asset('frontend_assets/images/help/three.png') }}" alt="Image">
                            </div>
                            <div class="thumb-sm" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                                <img src="{{ asset('frontend_assets/images/help/two.png') }}" alt="Image">
                            </div>
                            <div class="thumb-md" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                                <img src="{{ asset('frontend_assets/images/help/one.png') }}" alt="Image">
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
                            <span class="sub-title"><i class="icon-donation"></i>Make a Difference with Your
                                Donation</span>
                            <h2 class="title-animation">Welcome to
                                Zindagi Tujhe <span> Salaam</span>
                            </h2>
                            <p>
                                Zindagi Tujhe Salaam (ZTS) is a mission-driven social organization dedicated to promoting mental health and emotional well-being. We support individuals, families, and communities through counseling, workshops, outreach, and digital tools. Our goal is to create a stigma-free environment where everyone feels empowered to seek help and lead a balanced, healthy life.
                            </p>
                        </div>
                        <div class="help-two__inner cta">
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
                                                             <img src="{{ asset('frontend_assets/images/help/author.png') }}" alt="Image">
                                                             <i class="icon-star"></i>
                                                          </div>
                                                          <div class="help-card-content">
                                                             <h4>35,734</h4>
                                                             <h6>Helped Fund</h6>
                                                             <p>Quisque dignissim enim diam</p>
                                                          </div>
                                                       </div>
                                                    </div>
                                                 </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== About  section end ==== -->

    <!-- Our Journey- Past Achievement -->
     <!-- ==== profit section start ==== -->
      <!-- <section class="fc-profit pt-120 pb-120 bg-fc">
         <div class="container">
            <div class="row gutter-30 align-items-center">
               <div class="col-12 col-md-8 col-xl-7">
                  <div class="section__header mb-0">
                     <span class="sub-title">We are always open for children</span>
                     <h2 class="title-animation mt-0 fw-7 hb">our non-profit services
                        you must love
                     </h2>
                  </div>
               </div>
               <div class="col-12 col-md-4 col-xl-5">
                  <div class="text-start text-xl-end">
                     <a href="our-causes.html" aria-label="check causes" title="check causes" class="btn--primary">Check
                        Our Services</a>
                  </div>
               </div>
            </div>
            <div class="row gutter-40 mt-60">
               <div class="col-12 col-lg-5 col-xl-5">
                  <div class="fc-profit__tab-btns">
                     <button class="profit__tab-btn active" data-target="#profit-one"
                        aria-label="fund raised & donations" title="fund raised & donations"><svg
                           xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 32 31" fill="none">
                           <path
                              d="M31.5852 22.2394C30.3189 19.036 25.3417 13.457 22.9332 10.9036H23.0471C23.5648 10.9036 23.9844 10.5076 23.9844 10.0191C23.9844 9.5306 23.5648 9.13462 23.0471 9.13462H22.8914C24.3674 7.5712 26.5823 5.21724 27.2042 4.51327C28.4895 3.05826 28.0501 1.75654 27.2834 1.08395C26.1522 0.0917443 23.9656 3.21567e-05 21.9421 1.35625C20.4541 0.0137153 17.5128 0.0164284 16.0279 1.35625C14.0044 0.000150174 11.8178 0.0917443 10.6866 1.08395C9.91981 1.75654 9.4805 3.05826 10.7658 4.51327C11.3878 5.2173 13.6026 7.5712 15.0786 9.13462H14.9229C14.4053 9.13462 13.9856 9.53066 13.9856 10.0191C13.9856 10.5076 14.4053 10.9036 14.9229 10.9036H15.0368C13.7491 12.2688 12.5469 13.6027 11.2114 15.1979C11.0988 14.8287 10.7388 14.5583 10.3113 14.5583H0.937375C0.419688 14.5584 0 14.9544 0 15.4429V29.6508C0 30.1392 0.419688 30.5353 0.937375 30.5353H25.4144C29.9036 30.5353 33.1953 26.3128 31.5852 22.2394ZM11.9631 2.37959C12.4114 1.98626 13.9803 1.84365 15.5749 3.29624C16.0806 3.75675 16.9257 3.54672 17.1249 2.91046C17.2287 2.57882 17.9329 2.11944 18.985 2.11944C20.0371 2.11944 20.7413 2.57882 20.8451 2.91046C21.0441 3.54637 21.8892 3.7571 22.3951 3.29624C23.9898 1.84359 25.5584 1.9862 26.0069 2.37959C26.3213 2.65538 25.9897 3.12508 25.7641 3.38052C24.9726 4.27653 21.3754 8.08184 20.3791 9.13462H17.5908C16.5946 8.08184 12.9974 4.27653 12.2059 3.38052C11.9803 3.12508 11.6487 2.65538 11.9631 2.37959ZM6.71306 25.17H1.87481V23.4018H7.58075C7.16306 23.9148 6.86138 24.5158 6.71306 25.17ZM9.37394 21.6328H1.87481V19.8646H9.37394V21.6328ZM9.37394 16.3274V18.0956H1.87481V16.3274H9.37394ZM1.87481 26.939H6.69431C6.83225 27.6148 7.13244 28.2366 7.55613 28.7662H1.87481V26.939ZM8.48338 26.0988C8.48338 24.6279 9.7515 23.4313 11.3121 23.4313C12.8708 23.4313 14.1389 24.6279 14.1389 26.0988C14.1389 27.5696 12.8708 28.7662 11.3121 28.7662C9.74638 28.7662 8.48338 27.5654 8.48338 26.0988ZM25.4144 28.7662H15.0663C15.6606 28.0232 16.0138 27.0993 16.0138 26.0988C16.0138 23.6482 13.8898 21.6323 11.2487 21.6637V18.0617C13.7594 14.856 16.3041 12.221 17.5467 10.9036H20.4233L22.0344 12.6116C22.0988 12.68 28.4948 19.4835 29.8286 22.8577C30.9578 25.7143 28.6749 28.7662 25.4144 28.7662Z" />
                        </svg> fund raised & donations <i class="fa-solid fa-arrow-right"></i></button>
                     <button class="profit__tab-btn " data-target="#profit-two" aria-label="medical treatment &  help"
                        title="medical treatment &  help"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="29"
                           viewBox="0 0 30 29" fill="none">
                           <path
                              d="M17.8125 13.5237V11.7543C17.8125 11.5197 17.7137 11.2947 17.5379 11.1287C17.3621 10.9628 17.1236 10.8696 16.875 10.8696H13.125C12.8764 10.8696 12.6379 10.9628 12.4621 11.1287C12.2863 11.2947 12.1875 11.5197 12.1875 11.7543V13.5237H10.3125C10.0639 13.5237 9.8254 13.6169 9.64959 13.7828C9.47377 13.9487 9.375 14.1737 9.375 14.4084V17.9471C9.375 18.1817 9.47377 18.4067 9.64959 18.5727C9.8254 18.7386 10.0639 18.8318 10.3125 18.8318H12.1875V20.6011C12.1875 20.8358 12.2863 21.0608 12.4621 21.2267C12.6379 21.3926 12.8764 21.4858 13.125 21.4858H16.875C17.1236 21.4858 17.3621 21.3926 17.5379 21.2267C17.7137 21.0608 17.8125 20.8358 17.8125 20.6011V18.8318H19.6875C19.9361 18.8318 20.1746 18.7386 20.3504 18.5727C20.5262 18.4067 20.625 18.1817 20.625 17.9471V14.4084C20.625 14.1737 20.5262 13.9487 20.3504 13.7828C20.1746 13.6169 19.9361 13.5237 19.6875 13.5237H17.8125ZM18.75 17.0624H16.875C16.6264 17.0624 16.3879 17.1556 16.2121 17.3215C16.0363 17.4874 15.9375 17.7125 15.9375 17.9471V19.7165H14.0625V17.9471C14.0625 17.7125 13.9637 17.4874 13.7879 17.3215C13.6121 17.1556 13.3736 17.0624 13.125 17.0624H11.25V15.293H13.125C13.3736 15.293 13.6121 15.1998 13.7879 15.0339C13.9637 14.868 14.0625 14.643 14.0625 14.4084V12.639H15.9375V14.4084C15.9375 14.643 16.0363 14.868 16.2121 15.0339C16.3879 15.1998 16.6264 15.293 16.875 15.293H18.75V17.0624Z" />
                           <path
                              d="M27.1875 7.33097H20.625V4.67692C20.625 4.44229 20.5262 4.21726 20.3504 4.05135C20.1746 3.88544 19.9361 3.79224 19.6875 3.79224H10.3125C10.0639 3.79224 9.8254 3.88544 9.64959 4.05135C9.47377 4.21726 9.375 4.44229 9.375 4.67692V7.33097H2.8125C2.56386 7.33097 2.3254 7.42418 2.14959 7.59009C1.97377 7.756 1.875 7.98102 1.875 8.21565V24.1399C1.875 24.3746 1.97377 24.5996 2.14959 24.7655C2.3254 24.9314 2.56386 25.0246 2.8125 25.0246H27.1875C27.4361 25.0246 27.6746 24.9314 27.8504 24.7655C28.0262 24.5996 28.125 24.3746 28.125 24.1399V8.21565C28.125 7.98102 28.0262 7.756 27.8504 7.59009C27.6746 7.42418 27.4361 7.33097 27.1875 7.33097ZM11.25 5.5616H18.75V7.33097H11.25V5.5616ZM26.25 23.2553H3.75V9.10033H26.25V23.2553Z" />
                        </svg> medical treatment & help <i class="fa-solid fa-arrow-right"></i></button>
                     <button class="profit__tab-btn " data-target="#profit-three" aria-label="development programs"
                        title="development programs"><svg xmlns="http://www.w3.org/2000/svg" width="33" height="32"
                           viewBox="0 0 33 32" fill="none">
                           <g clip-path="url(#clip0_51_376)">
                              <path
                                 d="M16.6428 15.8756C14.8971 17.276 13.1729 18.1807 13.1004 18.2185C12.8095 18.3702 12.4562 18.3703 12.1652 18.2185C12.0927 18.1807 10.3684 17.276 8.6228 15.8756C6.15147 13.893 4.89844 11.9465 4.89844 10.0902C4.89844 6.16856 9.78643 4.08419 12.6328 6.76881C15.4843 4.07963 20.3672 6.17701 20.3672 10.0902C20.3671 11.9465 19.1141 13.893 16.6428 15.8756ZM16.3131 7.46212C15.1118 7.1709 14.0745 7.69969 13.4799 8.71998C13.1132 9.3493 12.1523 9.3493 11.7856 8.71998C11.1639 7.65304 10.1048 7.18282 8.95241 7.46212C7.89699 7.71794 6.83203 8.62972 6.83203 10.0902C6.83203 12.545 10.658 15.2371 12.6291 16.363C14.7982 15.1101 18.4335 12.4919 18.4335 10.0902C18.4335 8.62978 17.3686 7.71794 16.3131 7.46212Z" />
                              <path
                                 d="M12.6328 3.73507C12.0989 3.73507 11.666 3.32659 11.666 2.82274V1.84959C11.666 1.34574 12.0989 0.937256 12.6328 0.937256C13.1667 0.937256 13.5996 1.34574 13.5996 1.84959V2.82274C13.5996 3.32659 13.1667 3.73507 12.6328 3.73507Z" />
                              <path
                                 d="M21.4808 5.19089C21.1033 5.54719 20.4911 5.54725 20.1135 5.19089C19.736 4.8346 19.736 4.25697 20.1135 3.90067L20.8427 3.21253C21.2202 2.85624 21.8324 2.85624 22.21 3.21253C22.5876 3.56883 22.5876 4.14646 22.21 4.50275L21.4808 5.19089Z" />
                              <path
                                 d="M24.2988 11.946H23.2676C22.7336 11.946 22.3008 11.5375 22.3008 11.0337C22.3008 10.5298 22.7336 10.1213 23.2676 10.1213H24.2988C24.8328 10.1213 25.2656 10.5298 25.2656 11.0337C25.2656 11.5375 24.8328 11.946 24.2988 11.946Z" />
                              <path
                                 d="M3.78464 5.19083L3.05548 4.50275C2.67791 4.14645 2.67791 3.56883 3.05548 3.21253C3.43298 2.85624 4.04516 2.85624 4.42273 3.21253L5.15188 3.90061C5.52945 4.25691 5.52945 4.83453 5.15188 5.19083C4.77438 5.54706 4.16214 5.54712 3.78464 5.19083Z" />
                              <path
                                 d="M0.966797 10.1213H1.99805C2.53198 10.1213 2.96484 10.5298 2.96484 11.0337C2.96484 11.5375 2.53198 11.946 1.99805 11.946H0.966797C0.432867 11.946 0 11.5375 0 11.0337C0 10.5298 0.432867 10.1213 0.966797 10.1213Z" />
                              <path
                                 d="M5.47852 25.6309H12.1363C11.6567 24.4323 12.0934 23.0522 13.261 22.3072L19.2456 18.4888C19.4055 18.3867 19.5941 18.3322 19.7871 18.3322H25.2012V17.4199C25.2012 16.916 25.634 16.5076 26.168 16.5076H32.0332C32.5671 16.5076 33 16.916 33 17.4199V29.2802C33 29.784 32.5671 30.1925 32.0332 30.1925H26.168C25.634 30.1925 25.2012 29.784 25.2012 29.2802V28.3679H23.7974L17.5413 31.0245C17.4165 31.0775 17.2813 31.1048 17.1445 31.1048H5.47852C3.87924 31.1048 2.57812 29.877 2.57812 28.3679C2.57812 26.8587 3.87924 25.6309 5.47852 25.6309ZM27.1348 28.3679H31.0664V18.3322H27.1348V28.3679ZM5.47852 29.2802H16.937L23.1931 26.6235C23.3179 26.5706 23.4531 26.5432 23.5898 26.5432H25.2012V20.1569H20.0833L14.3441 23.8187C13.8743 24.1185 13.7401 24.7098 14.0385 25.1648C14.2343 25.4635 14.5745 25.6309 14.8886 25.6309C14.9203 25.6309 14.9516 25.6325 14.9826 25.6354C15.1444 25.628 15.307 25.5856 15.4577 25.504L18.5972 23.8054C19.0604 23.5548 19.6512 23.706 19.9168 24.1431C20.1823 24.5802 20.0221 25.1378 19.5589 25.3884L16.4194 27.0869C15.9473 27.3423 15.4345 27.4642 14.929 27.4642C14.929 27.4642 15.3796 27.4555 5.47852 27.4555C4.94542 27.4555 4.51172 27.8647 4.51172 28.3678C4.51172 28.8708 4.94542 29.2802 5.47852 29.2802Z" />
                           </g>
                           <defs>
                              <clipPath id="clip0_51_376">
                                 <rect width="33" height="31.1408" fill="white"
                                    transform="matrix(-1 0 0 1 33 0.450684)" />
                              </clipPath>
                           </defs>
                        </svg> development programs <i class="fa-solid fa-arrow-right"></i></button>
                     <button class="profit__tab-btn " data-target="#profit-four" aria-label="Child medical research"
                        title="Child medical research"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="34"
                           viewBox="0 0 35 34" fill="none">
                           <path
                              d="M26.0616 4.35485C23.005 3.76874 19.8614 4.61426 17.6505 6.60664C17.5587 6.68912 17.4405 6.68958 17.3497 6.6071C15.1383 4.61334 11.9942 3.76966 8.93806 4.35485C4.73738 5.15705 1.68172 8.5723 1.50691 12.6603C1.41124 14.8893 2.38521 17.3386 4.36971 19.2032C4.37019 19.2042 4.37117 19.2042 4.37215 19.2051C4.3741 19.2069 4.37654 19.2088 4.37849 19.2115C4.54597 19.3682 5.97615 20.7081 14.6866 28.8408C16.236 30.2882 18.7612 30.2886 20.314 28.8398C22.209 27.0714 28.6135 21.095 30.6275 19.2051C32.4642 17.4811 33.5968 15.0719 33.4928 12.6603C33.3179 8.5723 30.2618 5.15705 26.0616 4.35485ZM18.9224 27.5137L18.9068 27.499C18.1314 28.2233 16.8702 28.2242 16.0928 27.499C6.91853 18.9332 5.82381 17.9057 5.77156 17.8569C5.77058 17.8559 5.76961 17.855 5.76912 17.8541C5.34096 17.4505 4.97469 17.0096 4.66151 16.5473H11.5665L14.3438 20.3828C14.5308 20.6409 14.8399 20.7938 15.1695 20.7938C15.1803 20.7938 15.191 20.7938 15.2017 20.7929C15.5435 20.7828 15.856 20.6086 16.0299 20.3312L20.5054 13.1994L22.3472 16.0903C22.5279 16.3741 22.8531 16.5473 23.2042 16.5473H30.338C30.0216 17.0143 29.6511 17.4597 29.2174 17.867C25.8045 21.0696 19.1615 27.2377 18.9224 27.5137ZM31.4947 12.7368C31.5224 13.3798 31.4316 14.0273 31.2435 14.66H23.7696L21.356 10.8711C21.1754 10.5873 20.8502 10.4135 20.4991 10.4135C20.1431 10.4407 19.8184 10.5896 19.6387 10.8762L15.109 18.0946L12.92 15.071C12.7335 14.8139 12.4244 14.66 12.0943 14.66H3.75624C3.56807 14.027 3.47737 13.3792 3.50496 12.7358C3.64265 9.51964 6.03963 6.8338 9.33455 6.20439C11.7857 5.7367 14.2032 6.3804 15.9683 7.97237C16.8277 8.74555 18.1724 8.74416 19.0318 7.97191C20.796 6.38132 23.2139 5.73855 25.6651 6.20439C28.9595 6.8338 31.3565 9.52057 31.4947 12.7368C31.4947 12.7368 31.4947 12.7358 31.4947 12.7368Z" />
                        </svg> Child medical research <i class="fa-solid fa-arrow-right"></i></button>
                     <button class="profit__tab-btn " data-target="#profit-five" aria-label="Corporate Gifts donate"
                        title="Corporate Gifts donate"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="29"
                           viewBox="0 0 30 29" fill="none">
                           <g clip-path="url(#clip0_51_388)">
                              <path
                                 d="M26.3438 10.338L23.4031 9.32797C24.4663 8.49891 24.9203 7.18389 24.5948 5.93427C23.9551 3.47911 20.7829 2.54709 18.7788 4.21898L16.7484 5.91271L16.3467 3.37256C15.9496 0.871725 12.8814 -0.331445 10.723 1.15869C9.64378 1.90376 9.06968 3.18816 9.32427 4.49229L6.55173 3.54004C5.18767 3.07143 3.67367 3.7376 3.17708 5.02498L1.9765 8.1378C1.81074 8.56759 2.04558 9.04288 2.50109 9.19925C2.68583 9.26267 16.0211 13.8429 16.2169 13.9101C15.6619 13.9101 3.50779 13.9101 2.97306 13.9101C2.48837 13.9101 2.09544 14.2809 2.09544 14.7383V26.3325C2.09544 27.7025 3.27652 28.817 4.72824 28.817H11.7491H15.2595H22.2803C23.732 28.817 24.9131 27.7025 24.9131 26.3325V16.897L25.592 17.1302C26.0453 17.286 26.5503 17.0668 26.7168 16.6352L27.9175 13.5224C28.4139 12.235 27.708 10.8066 26.3438 10.338ZM10.8714 27.1607H4.72818C4.24425 27.1607 3.85056 26.7892 3.85056 26.3325V15.5665H10.8714V27.1607ZM14.3818 27.1607H12.6266V15.5665H14.3818V27.1607ZM19.9412 5.45997C20.9593 4.61062 22.5665 5.08708 22.8903 6.32978C23.2356 7.65476 21.8785 8.80363 20.5201 8.33784C19.3648 7.94101 18.8234 7.75506 17.6664 7.35767L19.9412 5.45997ZM11.7593 2.49556C12.8562 1.73838 14.4099 2.3528 14.611 3.61817L15.061 6.4627C14.737 6.35145 12.5261 5.59201 12.2075 5.48264C10.8491 5.0158 10.5925 3.30096 11.7593 2.49556ZM12.1727 10.7585L3.92603 7.92602L4.8265 5.59146C4.99202 5.16233 5.49669 4.94038 5.95138 5.09648C6.87423 5.41341 13.0887 7.54788 13.3733 7.64564L12.1727 10.7585ZM15.4715 11.8916L13.8221 11.325L15.0227 8.21222L16.6721 8.77875L15.4715 11.8916ZM23.1578 26.3325C23.1578 26.7892 22.7641 27.1607 22.2802 27.1607H16.137V15.5665H21.0393L23.1578 16.2941V26.3325H23.1578ZM26.2679 12.9558L25.3675 15.2905L17.1208 12.458L18.3215 9.34517L25.7435 11.8943C26.1982 12.0505 26.4335 12.5268 26.2679 12.9558Z" />
                           </g>
                           <defs>
                              <clipPath id="clip0_51_388">
                                 <rect width="30" height="28.3099" fill="white" transform="translate(0 0.50708)" />
                              </clipPath>
                           </defs>
                        </svg> Corporate Gifts donate <i class="fa-solid fa-arrow-right"></i></button>
                     <div class="text-center mt-30 more-txt">
                        <a href="our-causes.html" title="view all services" aria-label="view all services"
                           class="fw-8">More Services</a>
                        <img src="{{asset('frontend_assets/images/arrow.png')}}" alt="Image">
                     </div>
                  </div>
               </div>
               <div class="col-12 col-lg-7 col-xl-7">
                  <div class="fc-profit__content">
                     <div class="fc-profit-single" id="profit-one">
                        <div class="thumb thumb-lg">
                           <img src="{{asset('frontend_assets/images/porfit-lg.png')}}" alt="Image">
                           <div class="video-btn-wrapper">
                              <a href="https://www.youtube.com/watch?v=RvreULjnzFo" target="_blank" title="video Player"
                                 class="open-video-popup">
                                 <i class="icon-play"></i>
                              </a>
                           </div>
                           <img src="{{asset('frontend_assets/images/profit-shape.png')}}" alt="Image" class="base-img">
                        </div>

                        <div class="fc-profit-group">
                           <div class="thumb thumb-sm">
                              <img src="{{asset('frontend_assets/images/profit-sm.jpg')}}" alt="Image">
                              <div class="video-btn-wrapper">
                                 <a href="https://www.youtube.com/watch?v=RvreULjnzFo" target="_blank"
                                    title="video Player" class="open-video-popup">
                                    <i class="icon-play"></i>
                                 </a>
                              </div>
                           </div>
                           <ul>
                              <li><i class="fa-solid fa-check"></i>People's Growth</li>
                              <li><i class="fa-solid fa-check"></i>Helped fund 3,265 Project powerful</li>
                              <li><i class="fa-solid fa-check"></i>Awards Winning nonprofit company</li>
                           </ul>
                        </div>
                     </div>
                     <div class="fc-profit-single" id="profit-two">
                        <div class="thumb thumb-lg">
                           <img src="{{asset('frontend_assets/images/porfit-lg.png')}}" alt="Image">
                           <div class="video-btn-wrapper">
                              <a href="https://www.youtube.com/watch?v=RvreULjnzFo" target="_blank" title="video Player"
                                 class="open-video-popup">
                                 <i class="icon-play"></i>
                              </a>
                           </div>
                           <img src="{{asset('frontend_assets/images/profit-shape.png')}}" alt="Image" class="base-img">
                        </div>

                        <div class="fc-profit-group">
                           <div class="thumb thumb-sm">
                              <img src="{{asset('frontend_assets/images/profit-sm.jpg')}}" alt="Image">
                              <div class="video-btn-wrapper">
                                 <a href="https://www.youtube.com/watch?v=RvreULjnzFo" target="_blank"
                                    title="video Player" class="open-video-popup">
                                    <i class="icon-play"></i>
                                 </a>
                              </div>
                           </div>
                           <ul>
                              <li><i class="fa-solid fa-check"></i>People's Growth</li>
                              <li><i class="fa-solid fa-check"></i>Helped fund 3,265 Project powerful</li>
                              <li><i class="fa-solid fa-check"></i>Awards Winning nonprofit company</li>
                           </ul>
                        </div>
                     </div>
                     <div class="fc-profit-single" id="profit-three">
                        <div class="thumb thumb-lg">
                           <img src="{{asset('frontend_assets/images/porfit-lg.png')}}" alt="Image">
                           <div class="video-btn-wrapper">
                              <a href="https://www.youtube.com/watch?v=RvreULjnzFo" target="_blank" title="video Player"
                                 class="open-video-popup">
                                 <i class="icon-play"></i>
                              </a>
                           </div>
                           <img src="{{asset('frontend_assets/images/profit-shape.png')}}" alt="Image" class="base-img">
                        </div>

                        <div class="fc-profit-group">
                           <div class="thumb thumb-sm">
                              <img src="{{asset('frontend_assets/images/profit-sm.jpg')}}" alt="Image">
                              <div class="video-btn-wrapper">
                                 <a href="https://www.youtube.com/watch?v=RvreULjnzFo" target="_blank"
                                    title="video Player" class="open-video-popup">
                                    <i class="icon-play"></i>
                                 </a>
                              </div>
                           </div>
                           <ul>
                              <li><i class="fa-solid fa-check"></i>People's Growth</li>
                              <li><i class="fa-solid fa-check"></i>Helped fund 3,265 Project powerful</li>
                              <li><i class="fa-solid fa-check"></i>Awards Winning nonprofit company</li>
                           </ul>
                        </div>
                     </div>
                     <div class="fc-profit-single" id="profit-four">
                        <div class="thumb thumb-lg">
                           <img src="{{asset('frontend_assets/images/porfit-lg.png')}}" alt="Image">
                           <div class="video-btn-wrapper">
                              <a href="https://www.youtube.com/watch?v=RvreULjnzFo" target="_blank" title="video Player"
                                 class="open-video-popup">
                                 <i class="icon-play"></i>
                              </a>
                           </div>
                           <img src="{{asset('frontend_assets/images/profit-shape.png')}}" alt="Image" class="base-img">
                        </div>

                        <div class="fc-profit-group">
                           <div class="thumb thumb-sm">
                              <img src="{{asset('frontend_assets/images/profit-sm.jpg')}}" alt="Image">
                              <div class="video-btn-wrapper">
                                 <a href="https://www.youtube.com/watch?v=RvreULjnzFo" target="_blank"
                                    title="video Player" class="open-video-popup">
                                    <i class="icon-play"></i>
                                 </a>
                              </div>
                           </div>
                           <ul>
                              <li><i class="fa-solid fa-check"></i>People's Growth</li>
                              <li><i class="fa-solid fa-check"></i>Helped fund 3,265 Project powerful</li>
                              <li><i class="fa-solid fa-check"></i>Awards Winning nonprofit company</li>
                           </ul>
                        </div>
                     </div>
                     <div class="fc-profit-single" id="profit-five">
                        <div class="thumb thumb-lg">
                           <img src="{{asset('frontend_assets/images/porfit-lg.png')}}" alt="Image">
                           <div class="video-btn-wrapper">
                              <a href="https://www.youtube.com/watch?v=RvreULjnzFo" target="_blank" title="video Player"
                                 class="open-video-popup">
                                 <i class="icon-play"></i>
                              </a>
                           </div>
                           <img src="{{asset('frontend_assets/images/profit-shape.png')}}" alt="Image" class="base-img">
                        </div>

                        <div class="fc-profit-group">
                           <div class="thumb thumb-sm">
                              <img src="{{asset('frontend_assets/images/profit-sm.jpg')}}" alt="Image">
                              <div class="video-btn-wrapper">
                                 <a href="https://www.youtube.com/watch?v=RvreULjnzFo" target="_blank"
                                    title="video Player" class="open-video-popup">
                                    <i class="icon-play"></i>
                                 </a>
                              </div>
                           </div>
                           <ul>
                              <li><i class="fa-solid fa-check"></i>People's Growth</li>
                              <li><i class="fa-solid fa-check"></i>Helped fund 3,265 Project powerful</li>
                              <li><i class="fa-solid fa-check"></i>Awards Winning nonprofit company</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="shape-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
            <img src="{{asset('frontend_assets/images/profit-vector.png')}}" alt="Image" class="base-img">
         </div>

         <div class="shape-right" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
            <img src="{{asset('frontend_assets/images/fc-eleven.png')}}" alt="Image">
         </div>
      </section> -->
      <!-- ==== / profit section end ==== -->


  <!-- ==== Core Member start ==== -->
    <!-- <section class="team">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-6">
                    <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                            people</span>
                        <h2 class="title-animation">Meet Our
                            <span>Core Team</span> members
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
                                    <img src="{{ asset('frontend_assets/images/members/member1.png') }}" alt="Image">
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
                                    <img src="{{ asset('frontend_assets/images/members/member2.png') }}" alt="Image">
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
                                    <img src="{{ asset('frontend_assets/images/members/member3.png') }}" alt="Image">
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
                                    <img src="{{ asset('frontend_assets/images/members/member4.png') }}" alt="Image">
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
            <img src="{{ asset('frontend_assets/images/sprade-green.png') }}" alt="Image">
        </div>
    </section> -->
    <!-- ==== / team section end ==== -->


    <!-- ==== cause slider two section start ==== -->
    <section class="cause-two">
        <div class="container-fluid">
            <!-- 🔹 Add the heading row here -->
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title">Our Mission</span>
                        <h2 class="title-animation mt-0 fw-7">
                            Empowering lives with <span>hope</span>
                        </h2>
                    </div>
                </div>
            </div>
            <!-- 🔹 Heading row ends -->
            <div class="row">
                <div class="col-12">
                    <div class="cause-two__inner">
                        <div class="slider-navigation">
                            <button type="button" aria-label="prev slide" title="prev slide"
                                class="prev-cause-two slider-btn">
                                <i class="fa-solid fa-arrow-left"></i>
                            </button>
                            <button type="button" aria-label="next slide" title="next slide"
                                class="next-cause-two slider-btn slider-btn-next">
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>

                        <div class="cause-two__slider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="cause-two__slider-single">
                                        <div class="cause-thumb">
                                            <img src="{{ asset('frontend_assets/images/mission/mission1.jpg') }}"
                                                alt="Image">
                                            <a href="cause-details.html">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cause-two__slider-single">
                                        <div class="cause-thumb">
                                            <img src="{{ asset('frontend_assets/images/mission/mission2.jpg') }}"
                                                alt="Image">
                                            <a href="cause-details.html">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cause-two__slider-single">
                                        <div class="cause-thumb">
                                            <img src="{{ asset('frontend_assets/images/mission/mission3.jpg') }}"
                                                alt="Image">
                                            <a href="cause-details.html">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cause-two__slider-single">
                                        <div class="cause-thumb">
                                            <img src="{{ asset('frontend_assets/images/mission/mission4.jpg') }}"
                                                alt="Image">
                                            <a href="cause-details.html">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cause-two__slider-single">
                                        <div class="cause-thumb">
                                            <img src="{{ asset('frontend_assets/images/mission/mission1.jpg') }}"
                                                alt="Image">
                                            <a href="cause-details.html">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cause-two__slider-single">
                                        <div class="cause-thumb">
                                            <img src="{{ asset('frontend_assets/images/mission/mission2.jpg') }}"
                                                alt="Image">
                                            <a href="cause-details.html">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="cause-two__content-slider swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="cause-content">
                                    <h4>Swasthya</h4>
                                    <!-- <p>Child & old care</p> -->
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="cause-content">
                                    <h4>Shisksha</h4>
                                    <!-- <p>Child & old care</p> -->
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="cause-content">
                                    <h4>Swarozgar</h4>
                                    <!-- <p>Child & old care</p> -->
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="cause-content">
                                    <h4>Soch</h4>
                                    <!-- <p>Child & old care</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / cause slider two section end ==== -->

     <!-- ==== / team section end ==== -->
    <section class="testimonial-seven-area project-panel-area position-relative z-1">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-4">
                    <div class="testimonial-seven-thumb position-relative z-1">
                        <img src="https://imgs.search.brave.com/-SzudOilDhbmuKs6aatJIOgIcgyinLbAMRvZgTFlnBI/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pLnBp/bmltZy5jb20vb3Jp/Z2luYWxzL2Y3L2I5/L2UyL2Y3YjllMmQ1/NmFkOWJiNTA1MjFl/Yzk3NzIxZjNhMWQ1/LmpwZw" alt="thumb">
                        <div class="testimonial-seven-thumb-quate">
                            <a href="#"><span><img src="frontend_assets/images/icon/testimonial-seven-quate.svg"
                                        alt="quate"></span></a>
                        </div>
                    </div>
                    <div class="testimonial-seven-thumb position-relative z-1">
                        <img src="https://imgs.search.brave.com/96a9n9i9rR1k6k6vY0NZKfNjsNr6BnRRqco6H-eC0Y8/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/c2lraGl3aWtpLm9y/Zy9pbWFnZXMvYi9i/OC9CaGFnYXQtUHVy/YW4tU2luZ2gtYXcu/anBn" alt="thumb">
                        <div class="testimonial-seven-thumb-quate">
                            <a href="#"><span><img src="frontend_assets/images/icon/testimonial-seven-quate.svg"
                                        alt="quate"></span></a>
                        </div>
                    </div>
                    <div class="testimonial-seven-thumb position-relative z-1">
                        <img src="https://imgs.search.brave.com/JeW05RO0LKydV7bTvEJLr6RhRg1yOW8qa3Rs_2yiEXU/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9yZW5k/ZXIuZmluZWFydGFt/ZXJpY2EuY29tL2lt/YWdlcy9pbWFnZXMt/cHJvZmlsZS1mbG93/LzQwMC9pbWFnZXMv/YXJ0d29ya2ltYWdl/cy9tZWRpdW1sYXJn/ZS8xL2dhbmRoaS1p/bmRpYW4tc2Nob29s/LmpwZw" alt="thumb">
                        <div class="testimonial-seven-thumb-quate">
                            <a href="#"><span><img src="frontend_assets/images/icon/testimonial-seven-quate.svg"
                                        alt="quate"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-8">
                    <div class="row">
                        <div class="col-xl-12 project-panel">
                            <div class="testimonial-seven-wrapper">
                                <h4 class="testimonial-seven-title">“Great Services”</h4>
                                <p class="testimonial-seven-paragraph">Sadhguru is a Yogi, Mystic and Visionary. Named one of India’s 50 most influential people, Sadhguru’s work has touched the lives of millions worldwide through his transformational programs... </p>
                                <div class="testimonial-seven-wrap">
                                    <div class="testimonial-seven-left">
                                        <div class="testimonial-seven-icon">
                                            <span><img src="frontend_assets/images/icon/testimonial-seven-quate-yellow.svg"
                                                    alt="quate"></span>
                                        </div>
                                        <h6 class="testimonial-seven-name">Sadhguru 
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 project-panel">
                            <div class="testimonial-seven-wrapper">
                                <h4 class="testimonial-seven-title">“Great Services”</h4>
                                <p class="testimonial-seven-paragraph">Bhagat Puran Singh was no ordinary human but definitely one of the most loved and admired men in the world. Many people describe him as the bearded Mother Teresa of Punjab. </p>
                                <div class="testimonial-seven-wrap">
                                    <div class="testimonial-seven-left">
                                        <div class="testimonial-seven-icon">
                                            <span><img src="frontend_assets/images/icon/testimonial-seven-quate-yellow.svg"
                                                    alt="quate"></span>
                                        </div>
                                        <h6 class="testimonial-seven-name">Bhagat Puran Singh </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 project-panel">
                            <div class="testimonial-seven-wrapper">
                                <h4 class="testimonial-seven-title">“Great Services”</h4>
                                <p class="testimonial-seven-paragraph">hthere is not a single country in the whole world where the name of Mahatma Gandhi is not known. Do you know why Gandhi became so famous?</p>
                                <div class="testimonial-seven-wrap">
                                    <div class="testimonial-seven-left">
                                        <div class="testimonial-seven-icon">
                                            <span><img src="frontend_assets/images/icon/testimonial-seven-quate-yellow.svg"
                                                    alt="quate"></span>
                                        </div>
                                        <h6 class="testimonial-seven-name">Mahatma Gandhi </h6>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-seven-shape">
            <img src="frontend_assets/images/testimonial/testimonail-seven-shape.png" alt="shape">
        </div>
    </section>

    <!-- === Advisory Board Start ===-->
    <section class="team ff-team pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title">Meet our esteemed Standards Advisory Panel who review, inform and guide ZTS through the development of our standards.</span>
                        <h2 class="title-animation mt-0 fw-7"> Advisory <span>Board</span>
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
                                    <img src="/frontend_assets/images/board/1.png" alt="Image">
                                </a>
                                <div class="team__icons">
                                    <div class="team__single-content__icon">
                                        <i class="icon-share"></i>
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
                                <h6><a href="team-details.html">Dr. Rajeev Mishra</a></h6>
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
                                    <img src="/frontend_assets/images/board/2.png" alt="Image">
                                </a>
                                <div class="team__icons">
                                    <div class="team__single-content__icon">
                                        <i class="icon-share"></i>
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
                                <h6><a href="team-details.html">Mr. Ashvin Deshpande</a></h6>
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
                                    <img src="/frontend_assets/images/board/3.png" alt="Image">
                                </a>
                                <div class="team__icons">
                                    <div class="team__single-content__icon">
                                        <i class="icon-share"></i>
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
                                <h6><a href="team-details.html">Mr. Anshuman Prasad</a></h6>
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
                                    <img src="/frontend_assets/images/board/4.png" alt="Image">
                                </a>
                                <div class="team__icons">
                                    <div class="team__single-content__icon">
                                        <i class="icon-share"></i>
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
                                <h6><a href="team-details.html">Mr. Siddhant Kumar</a></h6>
                                <p>Volunteer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="section__cta cta text-center">
                        <a href="our-team.html" aria-label="our team" title="our team" class="btn--primary"> View
                            All Team
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shp"></div>
    </section>
    <!-- === Advisory Board End ===-->

    <section class="blog ff-blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title">We are always open for children</span>
                        <h2 class="title-animation mt-0 fw-7">our latest article news &
                            blogs you need
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row gutter-40">
                <div class="col-4">
                    <div class="blog__single-wrapper">
                        <div class="blog__single">
                            <div class="blog__single-thumb">
                                <a href="blog-details.html">
                                    <img src="/frontend_assets/images/tanmay.png" alt="Image">
                                </a>
                            </div>
                            <div class="blog__single-inner">

                                <div class="blog__single-content">
                                    <h6><a href="blog-details.html">Tamnay</a>
                                    </h6>
                                </div>
                                <div class="blog__single-meta mb-3">
                                    <p><i class="icon-user"></i>The Runner Up of SRGMA Lil Champs
                                    </p>

                                </div>
                                <div class="blog__single-meta">
                                    <p>
                                        "I am performing because I support its ideology and expect that every one should
                                        stand to support Zindagi Tujhe Salaam"
                                    </p>
                                </div </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="blog__single-wrapper">
                        <div class="blog__single">
                            <div class="blog__single-thumb">
                                <a href="blog-details.html">
                                    <img src="/frontend_assets/images/pankaj.png" alt="Image">
                                </a>
                            </div>
                            <div class="blog__single-inner">

                                <div class="blog__single-content">
                                    <h6><a href="blog-details.html">Pankaj Bhadouria</a>
                                    </h6>
                                </div>
                                <div class="blog__single-meta mb-3">
                                    <p><i class="icon-user"></i>The Master Chef Winner</p>

                                </div>
                                <div class="blog__single-meta">
                                    <p>
                                        "Zindagi Tujhe Salaama is acting for a unique cause, they are sensitizing for our
                                        society, therefore, its our duty also to take out some time from our hectic schedule
                                        & act for society".
                                    </p>
                                </div </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="blog__single-wrapper">
                        <div class="blog__single">
                            <div class="blog__single-thumb">
                                <a href="blog-details.html">
                                    <img src="/frontend_assets/images/harsh.png" alt="Image">
                                </a>
                            </div>
                            <div class="blog__single-inner">

                                <div class="blog__single-content">
                                    <h6><a href="blog-details.html">Harsh</a>
                                    </h6>
                                </div>
                                <div class="blog__single-meta mb-3">
                                    <p><i class="icon-user"></i>The Vocalist of Band Highway</p>

                                </div>
                                <div class="blog__single-meta">
                                    <p>
                                        "Pleasure of doing the rock night awakening with them, through Zindagi Tujhe Salaam
                                        people can connect easily & stand for their society".
                                    </p>
                                    </div< /div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="ff-pagination pagination-one mt-40"></div>
                        </div>
                    </div>

                </div>
    </section>

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
                                <h2><span class="odometer" data-odometer-final="100"></span>K<span
                                        class="prefix">+</span>
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
            <img src="{{ asset('frontend_assets/images/poor-two.png') }}" alt="Image" class="parallax-image">
        </div>
        <div class="shape-left" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
            <img src="{{ asset('frontend_assets/images/cta/shape-left.png') }}" alt="Image" class="base-img">
        </div>
    </section>
    <!-- ==== / counter section end ==== -->

       <!-- ====  Our Counsellors Panel Start ==== -->
      <section class="team-seven-area">
         <div class="container">
            <div class="row">
               <div class="col-xl-8 col-lg-7">
                  <div class="section-seven-wrapper mb-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                     <h2 class="section-seven-title char-animation">Our counsellors panel</h2>
                     <p class="section-seven-paragraph">communication and utilizes cutting edge logistic planning to get your shipment completed
                        on time. itself founded of backgrounds, which simply.</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4">
                  <div class="team-seven-button d-flex justify-content-end mt-40" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                     <a href="contact-us.html" class="btn-seven-primary btn--primary btn-six-primary d-none d-md-flex fw-medium rounded-5">Check your causes <span><img src="{{asset('frontend_assets/images/icon/arrow-btn-seven.svg')}}" alt="arrow"></span></a>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="team-seven-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                     <div class="team-seven-thumb position-relative z-1">
                        <a href="team-details.html"><img src="{{asset('frontend_assets/images/team/team-seven-thumb1.jpg')}}" alt="thumb"></a>
                        <div class="team-seven-wrap">
                           <h4 class="team-seven-title"><a href="team-details.html">Estamina Cordix</a></h4>
                           <div class="team-seven-social">
                              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                              <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                              <a href="#"><i class="fa-brands fa-twitter"></i></a>
                              <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="team-seven-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                     <div class="team-seven-thumb position-relative z-1">
                        <a href="team-details.html"><img src="{{asset('frontend_assets/images/team/team-seven-thumb2.jpg')}}" alt="thumb"></a>
                        <div class="team-seven-wrap">
                           <h4 class="team-seven-title"><a href="team-details.html">Estamina Cordix</a></h4>
                           <div class="team-seven-social">
                              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                              <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                              <a href="#"><i class="fa-brands fa-twitter"></i></a>
                              <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="team-seven-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                     <div class="team-seven-thumb position-relative z-1">
                        <a href="team-details.html"><img src="{{asset('frontend_assets/images/team/team-seven-thumb3.jpg')}}" alt="thumb"></a>
                        <div class="team-seven-wrap">
                           <h4 class="team-seven-title"><a href="team-details.html">Estamina Cordix</a></h4>
                           <div class="team-seven-social">
                              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                              <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                              <a href="#"><i class="fa-brands fa-twitter"></i></a>
                              <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ====  Our Counsellors Panel end ==== -->
@endsection
