@extends('master.frontmaster')
@section('content')
    <section class="banner-two">
         <div class="banner-two__slider swiper">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="banner-two__slider-single">
                     <div class="banner-two__slider-bg" data-background="frontend_assets/images/slide1.jpg">
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
                     <div class="banner-two__slider-bg" data-background="frontend_assets/images/slide2.jpg">
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
                     <div class="banner-two__slider-bg" data-background="frontend_assets/images/slide3.jpg">
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
                     <div class="banner-two__slider-bg" data-background="frontend_assets/images/slide4.jpg">
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
            <img src="frontend_assets/images/shape.png" alt="Image">
         </div>
         <div class="shape-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
            <img src="frontend_assets/images/banner/banner-two-shape.png" alt="Image">
         </div>
         <div class="sprade-shape">
            <img src="frontend_assets/images/sprade-base.png" alt="Image" class="base-img" data-aos="zoom-in"
               data-aos-duration="1000">
         </div>
         <div class="unity">
            <img src="frontend_assets/images/unity.png" alt="Image">
         </div>
      </section>

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
                                <!-- <div class="swiper-slide">
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
                                                       </div> -->
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
    </section>
    <!-- ==== difference section end ==== -->

    <!-- ==== blog section start ==== -->
    <section class="blog">
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
                                    <img src="{{ asset('frontend_assets/images/blog/one.png') }}" alt="Image">
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
                                    <img src="{{ asset('frontend_assets/images/blog/two.png') }}" alt="Image">
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
                                    <img src="{{ asset('frontend_assets/images/blog/three.png') }}" alt="Image">
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
    </section>
    <!-- ==== / blog section end ==== -->

    <section class="help-three">
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
    </section>

    <!-- ==== help section start ==== -->
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
                            <p>Zindagi tujhe salaam is formed by group of professional from various field in 2010 to bring
                                about positive changes in the society.
                                As it is well known that we are a biggest democracy and one of the oldest and competent
                                civilization in the world and
                                Still we are the best amongst other as far as our society is concern but in due course of
                                time ,
                                since its birth lot of thing has gone wrong and lot of complication has been surfaced due to
                                negligence by the individuals ,
                                authorities and education system of our society, like corruption, child labour, crime
                                against woman , crime against child , lack of compassion towards needy people,
                                lack of responsibility towards society though lot of work has been done by lot of
                                organizations and few individuals but
                                that is not adequate to create a society which can give social justice and environment to
                                grow to all their individuals irrespective of their financial status ,religion ,
                                geographical position and cast.
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
    </section>
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
                                <!-- <div class="swiper-slide">
                                                          <div class="cause-two__slider-single">
                                                             <div class="cause-thumb">
                                                                <img src="{{ asset('frontend_assets/images/cause/seven.png') }}" alt="Image">
                                                                <a href="cause-details.html">
                                                                   <i class="fa-solid fa-arrow-right"></i>
                                                                </a>
                                                             </div>
                                                          </div>
                                                       </div>
                                                       <div class="swiper-slide">
                                                          <div class="cause-two__slider-single">
                                                             <div class="cause-thumb">
                                                                <img src="{{ asset('frontend_assets/images/cause/seven.png') }}" alt="Image">
                                                                <a href="cause-details.html">
                                                                   <i class="fa-solid fa-arrow-right"></i>
                                                                </a>
                                                             </div>
                                                          </div>
                                                       </div> -->
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
                            <!-- <div class="swiper-slide">
                                                       <div class="cause-content">
                                                          <h4>old people & Child trouble</h4>
                                                          <p>Child & old care</p>
                                                       </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                       <div class="cause-content">
                                                          <h4>old people & Child trouble</h4>
                                                          <p>Child & old care</p>
                                                       </div>
                                                    </div> -->
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

    <section class="team ff-team pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title">We are always open for children</span>
                        <h2 class="title-animation mt-0 fw-7">Meat the Team <span>member</span>
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
                                    <img src="/frontend_assets/images/team/one.png" alt="Image">
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
                                <h6><a href="team-details.html">Michel Fokluz</a></h6>
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
                                    <img src="/frontend_assets/images/team/two.png" alt="Image">
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
                                <h6><a href="team-details.html">Arian Drobloas</a></h6>
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
                                    <img src="/frontend_assets/images/team/three.png" alt="Image">
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
                                <h6><a href="team-details.html">Jara Klintof</a></h6>
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
                                    <img src="/frontend_assets/images/team/four.png" alt="Image">
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
                                <h6><a href="team-details.html">Aiden Markram</a></h6>
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
@endsection
