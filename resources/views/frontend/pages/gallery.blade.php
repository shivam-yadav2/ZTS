@extends('master.frontmaster')
@section('css')
<style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

        .gallery-section {
            padding: 60px 0;
        }

        .gallery-title {
            font-size: 2.5rem;
            font-weight: 600;
            color: rgb(2,114,94);
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .gallery-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: rgb(255,193,7);
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .gallery-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 20px rgba(2,114,94,0.3);
        }

        .gallery-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover .gallery-img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(2,114,94,0.85);
            opacity: 0;
            transition: opacity 0.4s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-caption {
            color: white;
            font-size: 1rem;
            font-weight: 500;
            text-align: center;
            transform: translateY(20px);
            transition: transform 0.4s ease;
        }

        .gallery-item:hover .gallery-caption {
            transform: translateY(0);
        }

        .gallery-location {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(255,193,7,0.95);
            color: rgb(2,114,94);
            padding: 10px 15px;
            font-size: 0.85rem;
            font-weight: 600;
            text-align: center;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .gallery-item:hover .gallery-location {
            transform: translateY(0);
        }

        @media (max-width: 768px) {
            .gallery-title {
                font-size: 2rem;
            }

            .gallery-img {
                height: 200px;
            }
        }

        @media (max-width: 576px) {
            .gallery-title {
                font-size: 1.75rem;
            }

            .gallery-img {
                height: 180px;
            }

            .gallery-caption {
                font-size: 0.9rem;
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
                     <div class="banner-two__slider-bg" data-background="{{asset('frontend_assets/images/slide1.jpg')}}">
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
                     <div class="banner-two__slider-bg" data-background="{{asset('frontend_assets/images/slide2.jpg')}}">
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
                     <div class="banner-two__slider-bg" data-background="{{asset('frontend_assets/images/slide3.jpg')}}">
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
                     <div class="banner-two__slider-bg" data-background="{{asset('frontend_assets/images/slide4.jpg')}}">
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

                        <!-- === Gallery Section Start===-->
                          <section class="gallery-section">
        <div class="container">
            <h2 class="gallery-title">Gallery</h2>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                         <a href="{{ url('/gallery-detail') }}">
                            <img src="https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=400&h=300&fit=crop" alt="Independence Day" class="gallery-img">
                            <div class="gallery-overlay">
                                <p class="gallery-caption">Celebrate our Independence Day</p>
                            </div>
                        </a>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                         <a href="{{ url('/gallery-detail') }}">
                            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&h=300&fit=crop" alt="Children Day" class="gallery-img">
                            <div class="gallery-overlay">
                                <p class="gallery-caption">Children Day Celebration</p>
                            </div>
                        </a>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                         <a href="{{ url('/gallery-detail') }}">
                            <img src="https://images.unsplash.com/photo-1497486751825-1233686d5d80?w=400&h=300&fit=crop" alt="Children Day Celebration" class="gallery-img">
                            <div class="gallery-overlay">
                                <p class="gallery-caption">Children Day celebration With Mc D</p>
                            </div>
                         </a>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                         <a href="{{ url('/gallery-detail') }}">
                            <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=400&h=300&fit=crop" alt="Dancing Workshop" class="gallery-img">
                            <div class="gallery-overlay">
                                <p class="gallery-caption">Dancing workshop for chetna sansthan</p>
                            </div>
                        </a>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <a href="{{ url('/gallery-detail') }}">
                            <img src="https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?w=400&h=300&fit=crop" alt="Medical Camp Day 1" class="gallery-img">
                            <div class="gallery-overlay">
                                <p class="gallery-caption">Day 1, Medical camp in chetna by ZTS</p>
                            </div>
                        </a>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <a href="{{ url('/gallery-detail') }}">
                            <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?w=400&h=300&fit=crop" alt="Medical Camp Day 2" class="gallery-img">
                            <div class="gallery-overlay">
                                <p class="gallery-caption">Day 2, Dental health-Medical Camp in chetna by ZTS</p>
                            </div>
                        </a>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=400&h=300&fit=crop" alt="Medical Health Counseling" class="gallery-img">
                        <div class="gallery-overlay">
                            <p class="gallery-caption">Day 3, Free Medical Health Counseling Camp(Girl)</p>
                        </div>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1551601651-09926051ea34?w=400&h=300&fit=crop" alt="Eye Checkup Camp" class="gallery-img">
                        <div class="gallery-overlay">
                            <p class="gallery-caption">Day 4, Free Eye Checkup Camp</p>
                        </div>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1606092195730-5d7b9af1efc5?w=400&h=300&fit=crop" alt="Chetna ke Sang Holi" class="gallery-img">
                        <div class="gallery-overlay">
                            <p class="gallery-caption">Day 5, Chetna ke Sang Holi ke Rang</p>
                        </div>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=400&h=300&fit=crop" alt="Kya Aapne Bharat Ko Dekha Hai" class="gallery-img">
                        <div class="gallery-overlay">
                            <p class="gallery-caption">Kya Aapne Bharat Ko Dekha Hai</p>
                        </div>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?w=400&h=300&fit=crop" alt="Lucky & Unlucky" class="gallery-img">
                        <div class="gallery-overlay">
                            <p class="gallery-caption">Lucky & Unlucky in RNS Public School</p>
                        </div>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=400&h=300&fit=crop" alt="Member's Meet" class="gallery-img">
                        <div class="gallery-overlay">
                            <p class="gallery-caption">Member's Meet</p>
                        </div>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=400&h=300&fit=crop" alt="Muskaan with Mc-D" class="gallery-img">
                        <div class="gallery-overlay">
                            <p class="gallery-caption">Muskaan(ZTS) with Mc-D</p>
                        </div>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=400&h=300&fit=crop" alt="Shiksha Ki Shurwat" class="gallery-img">
                        <div class="gallery-overlay">
                            <p class="gallery-caption">Shiksha Ki Shurwat</p>
                        </div>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?w=400&h=300&fit=crop" alt="Udaan" class="gallery-img">
                        <div class="gallery-overlay">
                            <p class="gallery-caption">Udaan</p>
                        </div>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?w=400&h=300&fit=crop" alt="Women Day" class="gallery-img">
                        <div class="gallery-overlay">
                            <p class="gallery-caption">Women day with Mc D & Chetna</p>
                        </div>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1503676382389-4809596d5290?w=400&h=300&fit=crop" alt="नगरीय शिक्षा अभियान" class="gallery-img">
                        <div class="gallery-overlay">
                            <p class="gallery-caption">नगरीय शिक्षा अभियान में राँची में काम करते कार्यकर्ता</p>
                        </div>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1497375587960-2b3e3e2b1a67?w=400&h=300&fit=crop" alt="प्री शूका शिक्षा केंद्र" class="gallery-img">
                        <div class="gallery-overlay">
                            <p class="gallery-caption">प्री शूका शिक्षा केंद्र -नगरीय शिक्षा अभियान</p>
                        </div>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1544717684-17f9aaa4b09f?w=400&h=300&fit=crop" alt="स्वास्थ्य शिविर" class="gallery-img">
                        <div class="gallery-overlay">
                            <p class="gallery-caption">स्वास्थ्य शिविर का आयोजन,क्वाड़ाटोली</p>
                        </div>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=400&h=300&fit=crop" alt="स्वास्थ्य शिविर का आयोजन" class="gallery-img">
                        <div class="gallery-overlay">
                            <p class="gallery-caption">स्वास्थ्य शिविर(सेवा) का आयोजन,पहरोली गोलपुर</p>
                        </div>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
                        <!-- === Gallery Section End ===-->
@endsection