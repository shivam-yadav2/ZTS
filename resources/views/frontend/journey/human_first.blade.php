@extends('master.frontmaster')

@section('css')
 <style>
        :root {
            --primary-yellow: rgb(255, 193, 7);
            --primary-green: rgb(115, 196, 143);
        }
        
        /* body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        } */
        
        .journey-section {
            padding: 4rem 0;
            color: #333;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }
        
        .section-intro {
            text-align: center;
            margin-bottom: 4rem;
        }
        
        .section-intro h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }
        
        .section-intro h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-yellow), var(--primary-green));
            border-radius: 2px;
        }
        
        .section-intro p {
            font-size: 1.1rem;
            color: #555;
            max-width: 800px;
            margin: 2rem auto 0;
        }
        
        .journey-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            height: 100%;
            border-top: 4px solid var(--primary-yellow);
        }
        
        .journey-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0,0,0,0.12);
        }
        
        .journey-card.green-accent {
            border-top-color: var(--primary-green);
        }
        
        .card-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-yellow), #ffb300);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            box-shadow: 0 5px 15px rgba(255, 193, 7, 0.3);
        }
        
        .card-icon.green {
            background: linear-gradient(135deg, var(--primary-green), #5fb878);
            box-shadow: 0 5px 15px rgba(115, 196, 143, 0.3);
        }
        
        .card-icon i {
            font-size: 2rem;
            color: white;
        }
        
        .journey-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 1rem;
            text-align: center;
        }
        
        .journey-card h5 {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--primary-green);
            margin-bottom: 0.8rem;
        }
        
        .journey-card p, .journey-card ul {
            color: #666;
            line-height: 1.7;
            font-size: 0.95rem;
        }
        
        .journey-card ul {
            list-style: none;
            padding-left: 0;
        }
        
        .journey-card ul li {
            padding: 0.4rem 0;
            position: relative;
            padding-left: 1.5rem;
        }
        
        .journey-card ul li::before {
            content: '•';
            color: var(--primary-yellow);
            font-weight: bold;
            position: absolute;
            left: 0;
            font-size: 1.2rem;
        }
        
        @media (max-width: 768px) {
            .section-intro h1 {
                font-size: 2rem;
            }
            
            .journey-card {
                padding: 1.5rem;
            }
            
            .card-icon {
                width: 70px;
                height: 70px;
            }
        }
    </style>
@endsection

@section('content')
    <!-- === Banner Section start === -->
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
                                 <span class="sub-title"><i class="icon-donation"></i>Start Contributing poor
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
                                 <span class="sub-title"><i class="icon-donation"></i>Start Contributing poor
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
                                 <span class="sub-title"><i class="icon-donation"></i>Start Contributing poor
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
                                 <span class="sub-title"><i class="icon-donation"></i>Start Contributing poor
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

 <!-- ==== commit section start ==== -->
        <section class="commit help-two ff-commit pt-120 pb-120">
            <div class="container">
                <div class="row gutter-40 align-items-center">
                    <div class="col-12 col-lg-5 col-xl-5">
                        <div class="commit__thumb">
                            <div class="thumb-lg">
                                <img src="{{asset('frontend_assets/images/journey/human_first.jpg')}}" alt="Image">

                            </div>
                            <div class="thumb-sm">
                                <img src="{{asset('frontend_assets/images/commit-shape.png')}}" alt="Image">
                            </div>
                            <div class="commit-count">
                                <h4><span class="odometer fw-7" data-odometer-final="20000"></span><span
                                        class="prefix fw-7">+</span>
                                </h4>
                                <p class="text-black">People have Contributed here</p>
                            </div>
                            <div class="vertical-text">
                                <h5>We Give <span>Donations</span> to Poor People </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7 col-xl-7">
                        <div class="help-two__content">
                            <div class="section__content">
                                <span class="sub-title">We are always open for children</span>
                                <h2 class="title mt-0">Helping each other can
                                    make world better
                                </h2>
                                <!-- <p class="text-gr-2">Volunteering offers opportunities to develop new skills and gain
                                    valuable experience. This can include leadership, communication, project
                                </p> -->
                                <p class="text-gr-2">I see human all around but with no humanity....Mahatma Gandhi
                                </p>
                                <p class="text-gr-2">Is it right???? Yes...up to some extent it is right because the race of Success, Money & Respect begins from the time when a child takes birth. We all start dreaming to make the child successful, rich individual who can take care of all the responsibilities.
                                </p>
                                <p class="text-gr-2">We start making them a robot who work for a master and in the present time The Master is Money. But we should never ever forget that we are Humans and the One Eternal thing is Humanity which we all carry in our heart by birth till death.
                                </p>
                                <p class="text-gr-2">Richness is not about the bank balance you carry...it's about your heart ...your feelings...right from family to this whole world... We all our striving hard for Success, Money & Respect but at the end of our life, it will not matter how much money you have made or how many degrees & diplomas you have taken, how much power you have enjoyed in your life. What matters will be, how many lives you have charged, how many naked people got clothes from your efforts, how many homeless people got shelter from you and how many people smiled because of you.
                                </p>
                                <p class="text-gr-2">Always remember "The one who have this wealth of Humanity...Have the meaning of life.”
                                </p>
                                <p class="text-gr-2">Human First is our Contribution raising wing where we provide the opportunity for privileged class to come along and do whatever they can do for this society. We know that one cannot do everything but whatever can do, should be contributed.
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
                                                <h6 class="fw-5">Start helping them</h6>
                                                <p>Raising awareness about the Contribution's mission and cause.</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="help__content-icon">
                                            <div class="thumb">
                                                <i class="icon-support-heart"></i>
                                            </div>
                                            <div class="content">
                                                <h6 class="fw-5">Make Donations</h6>
                                                <p>Raising awareness about the Contribution's mission and cause.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cta">
                                        <a href="our-causes.html" aria-label="check causes" title="check causes"
                                            class="btn--primary">Check
                                            Our Causes</a>
                                    </div>
                                </div>
                                <div class="help-two-card-wrapper">
                                    <div class="help-two__card van-tilt">
                                        <div class="help-card-thumb">
                                            <img src="assets/images/help/author.png" alt="Image">
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
            <div class="fc-two">
                <img src="{{asset('frontend_assets/images/fc-nine.png')}}" alt="Image">
            </div>
        </section>
        <!-- ==== / commit section end ==== -->

<!-- ==== service section start ==== -->
        <section class="ff-service py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-7">
                        <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                            <span class="sub-title">We are always open for children</span>
                            <h2 class="title-animation mt-0 fw-6 text-white">Helping each other can
                                make world better

                            </h2>
        <!-- === Service Section start === -->
    <section class="journey-section">
        <div class="container">
            <div class="section-intro">
                <h1>Our Journey of Impact</h1>
                <p>You can associate with Human First wing in various ways. Join us in making a difference through multiple pathways of contribution and support.</p>
            </div>

            <div class="row g-4">
                <!-- Direct Donations -->
                <div class="col-lg-6 col-md-6">
                    <div class="journey-card">
                        <div class="card-icon">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <h3>Direct Donations</h3>
                        <p><strong>Online Donation (Through DD/Cheque)</strong></p>
                    </div>
                </div>

                <!-- Corporates -->
                <div class="col-lg-6 col-md-6">
                    <div class="journey-card green-accent">
                        <div class="card-icon green">
                            <i class="fas fa-building"></i>
                        </div>
                        <h3>Corporates</h3>
                        <p>Support us through our:</p>
                        <ul>
                            <li>Pay Roll Giving programme</li>
                            <li>Employee Engagement</li>
                            <li>Cause Related Marketing</li>
                            <li>Direct Child Support</li>
                            <li>Youth Support</li>
                        </ul>
                    </div>
                </div>

                <!-- Development Agencies -->
                <div class="col-lg-6 col-md-6">
                    <div class="journey-card">
                        <div class="card-icon">
                            <i class="fas fa-globe-asia"></i>
                        </div>
                        <h3>Development Agencies</h3>
                        <p>National and international organisations (Educational institutions, donor organisations etc) can partner with Zindagi Tujhe Salaam under Alliances to further the development initiatives at grassroots level.</p>
                    </div>
                </div>

                <!-- Schools -->
                <div class="col-lg-6 col-md-6">
                    <div class="journey-card green-accent">
                        <div class="card-icon green">
                            <i class="fas fa-school"></i>
                        </div>
                        <h3>Schools</h3>
                        <p>ZTS believe that schools by virtue of their reach are greatly instrumental in providing the much needed impetus to our movement for the development of underprivileged children and youth.</p>
                    </div>
                </div>

                <!-- Individuals -->
                <div class="col-lg-6 col-md-6">
                    <div class="journey-card">
                        <div class="card-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Individuals</h3>
                        <p>In our journey so far, we have received immense support from numerous individuals across all ages and segments.</p>
                    </div>
                </div>

                <!-- Celebrities -->
                <div class="col-lg-6 col-md-6">
                    <div class="journey-card green-accent">
                        <div class="card-icon green">
                            <i class="fas fa-star"></i>
                        </div>
                        <h3>Celebrities</h3>
                        <p>ZTS has received immense support from many celebrities of the state and appreciate their big contribution in bringing the organization to this height.</p>
                    </div>
                </div>

                <!-- Colleges, Students Associations -->
                <div class="col-lg-6 col-md-6">
                    <div class="journey-card">
                        <div class="card-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3>Colleges, Students Associations</h3>
                        <p>We at ZTS in our journey so far, worked in association with the youth for our welfare initiatives and have received remarkable support.</p>
                        <p>We beckon your valuable support for our innovative initiatives</p>
                    </div>
                </div>

                <!-- Media House -->
                <div class="col-lg-6 col-md-6">
                    <div class="journey-card green-accent">
                        <div class="card-icon green">
                            <i class="fas fa-video"></i>
                        </div>
                        <h3>Media House</h3>
                        <p>The media fraternity has given, Zindagi Tujhe Salaam overwhelming support so far.</p>
                    </div>
                </div>

                <!-- Grassroots NGOs -->
                <div class="col-lg-6 col-md-6">
                    <div class="journey-card">
                        <div class="card-icon">
                            <i class="fas fa-people-group"></i>
                        </div>
                        <h3>Grassroots NGOs</h3>
                        <p>You can partner with Zindagi Tujhe Salaam under different programs:</p>
                        <ul>
                            <li>Jagrati - Educational Program</li>
                            <li>Muslim Awareness Program</li>
                            <li>Sneh- Mental & Physical Health</li>
                            <li>Muskaan- Spreading Happiness</li>
                        </ul>
                    </div>
                </div>

                <!-- Products -->
                <div class="col-lg-6 col-md-6">
                    <div class="journey-card green-accent">
                        <div class="card-icon green">
                            <i class="fas fa-gift"></i>
                        </div>
                        <h3>Products</h3>
                        <p>This is a unique mode of participation promoted by Zindagi Tujhe Salaam an innovative series of Gifts conceptualised, designed and produced by Human First Department, with an intention to provide people across the nation an opportunity to acknowledge their relatives, loved ones, employees, clients and associates for their contribution by gifting them something unique from an array of the choicest of items. The product range of products assure you of the highest quality and finishes, with loads of options to choose from. This is an opportunity to be a part of this program and bring a smile in the lives of thousands of destitute children and youth. All proceeds will be utilized towards funding Zindagi Tujhe Salaam various development projects.</p>
                    </div>
                </div>

                <!-- Events -->
                <div class="col-lg-6 col-md-6">
                    <div class="journey-card">
                        <div class="card-icon">
                            <i class="fas fa-calendar-days"></i>
                        </div>
                        <h3>Events</h3>
                        <p>This is a department where we organize different Contribution raising events. We have decided to celebrate a day as a Contribution DAY with all the schools and institution.</p>
                    </div>
                </div>

                <!-- Volunteers -->
                <div class="col-lg-6 col-md-6">
                    <div class="journey-card green-accent">
                        <div class="card-icon green">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h3>Volunteers</h3>
                        <p>Volunteerism or volunteer services have been part of virtually every civilization and society. Defined in broad terms it is the contribution made by individuals in terms of quality time, specialized skills, fiscal support, etc. This entails varied shades and actions ranging from well-being of the neighbours, the community or the society at large.</p>
                        <p>It is also the basis for a load of activities of development organizations and institutions alike Zindagi Tujhe Salaam also intimately links a number of activities in its operational areas depending upon volunteer efforts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- === Service Section end === -->


@endsection