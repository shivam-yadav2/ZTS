@extends('master.frontmaster')
@section('content')

@section('content')
   @include('frontend.pages.component.banner', [
    'title' => 'Guiding Principles',
    'background' => 'https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=1600&h=800&fit=crop'
])

 <!-- ==== difference two section start ==== -->
      <section class="difference-two">
         <div class="container">
            <div class="row gutter-40 align-items-center">
               <div class="col-12 col-lg-4 col-xxl-5 d-none d-lg-block">
                  <div class="difference-two__thumb-wrapper">
                     <div class="difference-two__thumb">
                        <div class="thumb-lg" data-aos="fade-right" data-aos-duration="1000">
                           <img src="{{asset('frontend_assets/images/help/image2.png')}}" alt="Image">
                           <div class="grid-line">
                              <img src="{{asset('frontend_assets/images/help/grid.png')}}" alt="Image" class="base-img">
                           </div>
                           <!--<div class="video-btn-wrapper">-->
                           <!--   <a href="https://www.youtube.com/watch?v=RvreULjnzFo" target="_blank" title="video Player"-->
                           <!--      class="open-video-popup">-->
                           <!--      <i class="icon-play"></i>-->
                           <!--   </a>-->
                           <!--</div>-->
                        </div>
                        <div class="thumb-sm" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                           <img src="{{asset('frontend_assets/images/about1.jpeg')}}" alt="Image">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-lg-8 col-xxl-7">
                  <div class="difference-two__content">
                     <span class="sub-title"><i class="icon-donation"></i>Start Contributing poor
                        people</span>
                     <h2 class="title-animation">Contribute <span>Support</span> to Make
                        Difference way
                     </h2>
                     <p>Contribution is the voluntary act of giving help,
                        typically in the form of money, time, or resources, to those in need. Charitable
                        organizations aim to solve social, environmental, and economic challenges by addressing
                        issues like poverty,
                     </p>
                     <div class="difference-two__inner cta">
                        <div class="difference-two__inner-content">
                           <div class="difference-two__tab">
                              <div class="difference-two__tab-btns">
                                 <button class="difference-two__tab-btn active" data-target="#mission"
                                    aria-label="mission" title="mission">Our Mission</button>
                                 <button class="difference-two__tab-btn" data-target="#vision" aria-label="vision"
                                    title="vision">Our Vision</button>
                                 <button class="difference-two__tab-btn" data-target="#value"
                                    aria-label="value" title="value">Values</button>
                              </div>
                              <div class="difference-two__tab-content">
                                 <div class="difference-two__content-single" id="mission">
                                    <!-- <ul>
                                       <li><i class="fa-solid fa-check"></i>We help companies develop
                                          powerful corporate social
                                       </li>
                                       <li><i class="fa-solid fa-check"></i>Helped fund 3,265 Project
                                          powerful corporate poor
                                       </li>
                                       <li><i class="fa-solid fa-check"></i>Dedicated Tech Services</li>
                                    </ul> -->
                                    <p>
                                       Empower people to transform!!!! Creating the sense of RESPONSIBILITY!!!
                                    </p>
                                 </div>
                                 <div class="difference-two__content-single" id="vision">
                                    <!-- <ul>
                                       <li><i class="fa-solid fa-check"></i>We help companies develop
                                          powerful corporate social
                                       </li>
                                       <li><i class="fa-solid fa-check"></i>Helped fund 3,265 Project
                                          powerful corporate poor
                                       </li>
                                       <li><i class="fa-solid fa-check"></i>Dedicated Tech Services</li>
                                    </ul> -->
                                    <p>
                                       To create an environment where every individual is cared spiritually, morally, intellectually, physically, socially and emotionally
                                    </p>
                                 </div>
                                 <div class="difference-two__content-single" id="value">
                                    <!-- <ul>
                                       <li><i class="fa-solid fa-check"></i>We help companies develop
                                          powerful corporate social
                                       </li>
                                       <li><i class="fa-solid fa-check"></i>Helped fund 3,265 Project
                                          powerful corporate poor
                                       </li>
                                       <li><i class="fa-solid fa-check"></i>Dedicated Tech Services</li>
                                    </ul> -->
                                    <p>
                                       Be simple, Be powerful, Be responsible, Be kind & respectful, Go above & beyond, Add values, Inspire, Exhibit honesty & integrity, Encourage teamwork
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <!-- <div class="difference-two__progress">
                              <div class="difference-progress-single">
                                 <div class="progress-bar-single" data-percent="75%">
                                    <div class="circular-progress">
                                       <div class="percent-value">0%</div>
                                       <svg class="progress-circle" viewBox="0 0 36 36">
                                          <path class="circle-bg" d="M18 2.0845
                                                a 15.9155 15.9155 0 0 1 0 31.831
                                                a 15.9155 15.9155 0 0 1 0 -31.831" />
                                          <path class="circle-progress" d="M18 2.0845
                                                a 15.9155 15.9155 0 0 1 0 31.831
                                                a 15.9155 15.9155 0 0 1 0 -31.831" />
                                       </svg>
                                    </div>
                                 </div>
                                 <div class="content">
                                    <p>Treatment <br>
                                       Helping
                                    </p>
                                 </div>
                              </div>
                              <div class="difference-progress-single">
                                 <div class="progress-bar-single" data-percent="92%">
                                    <div class="circular-progress">
                                       <div class="percent-value">0%</div>
                                       <svg class="progress-circle" viewBox="0 0 36 36">
                                          <path class="circle-bg" d="M18 2.0845
                                                a 15.9155 15.9155 0 0 1 0 31.831
                                                a 15.9155 15.9155 0 0 1 0 -31.831" />
                                          <path class="circle-progress" d="M18 2.0845
                                                a 15.9155 15.9155 0 0 1 0 31.831
                                                a 15.9155 15.9155 0 0 1 0 -31.831" />
                                       </svg>
                                    </div>
                                 </div>
                                 <div class="content">
                                    <p>Highest <br>
                                       Fund Raised
                                    </p>
                                 </div>
                              </div>
                           </div> -->
                        </div>
                        <!-- <div class="difference-two__card">
                           <div class="card-group">
                              <div class="thumb">
                                 <i class="icon-donation-card"></i>
                              </div>
                              <div class="content">
                                 <h6>Contribute Now</h6>
                                 <p>$40,456</p>
                              </div>
                           </div>
                           <hr>
                           <div class="card-group card-group-alt">
                              <div class="thumb">
                                 <i class="icon-fund"></i>
                              </div>
                              <div class="content">
                                 <h6>Total Fundraised</h6>
                                 <p>$1,540,456</p>
                              </div>
                           </div>
                        </div> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="spade">
            <img src="{{asset('frontend_assets/images/spade-green-two.png')}}" alt="Image">
         </div>
      </section>
      <!-- ==== / difference two section end ==== -->

@endsection
