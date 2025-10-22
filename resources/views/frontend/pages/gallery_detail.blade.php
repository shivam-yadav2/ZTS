@extends('master.frontmaster')
@section('css')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">
<style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

        .detail-section {
            padding: 60px 0;
        }

        .back-link {
            color: rgb(2,114,94);
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            display: inline-flex;
            align-items: center;
            margin-bottom: 30px;
            transition: color 0.3s ease;
        }

        .back-link:hover {
            color: rgb(255,193,7);
        }

        .back-link::before {
            content: '←';
            margin-right: 8px;
            font-size: 1.3rem;
        }

        .event-title {
            font-size: 2.5rem;
            font-weight: 600;
            color: rgb(2,114,94);
            margin-bottom: 15px;
        }

        .event-description {
            color: #6c757d;
            font-size: 1.1rem;
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .stats-bar {
            background-color: white;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 40px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 20px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: rgb(2,114,94);
        }

        .stat-label {
            color: #6c757d;
            font-size: 0.95rem;
            margin-top: 5px;
        }

        .photo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
            margin-bottom: 50px;
        }

        .photo-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: white;
        }

        .photo-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(2,114,94,0.25);
        }

        .photo-item a {
            display: block;
            position: relative;
        }

        .photo-item img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            display: block;
            transition: transform 0.5s ease, filter 0.3s ease;
        }

        .photo-item:hover img {
            transform: scale(1.1);
            filter: brightness(0.9);
        }

        .photo-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(2,114,94,0.75);
            opacity: 0;
            transition: opacity 0.4s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            pointer-events: none;
        }

        .photo-item:hover .photo-overlay {
            opacity: 1;
        }

        .view-icon {
            color: white;
            font-size: 3rem;
            font-weight: 300;
        }

        .view-text {
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 10px;
        }

        .overlay-content {
            text-align: center;
        }

        .pagination-custom {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-top: 40px;
        }

        .page-btn {
            width: 40px;
            height: 40px;
            border: none;
            border-radius: 5px;
            background-color: white;
            color: rgb(2,114,94);
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .page-btn:hover:not(:disabled) {
            background-color: rgb(132,204,157);
            color: white;
            transform: translateY(-2px);
        }

        .page-btn.active {
            background-color: rgb(2,114,94);
            color: white;
        }

        .page-btn:disabled {
            background-color: #e9ecef;
            color: #adb5bd;
            cursor: not-allowed;
        }

        /* Fancybox Custom Styling */
        .fancybox__backdrop {
            background: rgba(2,114,94,0.95);
        }

        .fancybox__nav .carousel__button.is-close {
            background: rgb(255,193,7);
            color: rgb(2,114,94);
        }

        .fancybox__nav .carousel__button.is-close:hover {
            background: rgb(132,204,157);
        }

        @media (max-width: 768px) {
            .event-title {
                font-size: 2rem;
            }

            .photo-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 15px;
            }

            .photo-item img {
                height: 250px;
            }

            .stats-bar {
                padding: 20px;
            }

            .stat-number {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 576px) {
            .event-title {
                font-size: 1.75rem;
            }

            .photo-grid {
                grid-template-columns: 1fr;
            }

            .photo-item img {
                height: 220px;
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


                    <!-- === Gallery - detail Page === -->
<section class="detail-section">
        <div class="container">
            <a href="{{ url('/gallery') }}" class="back-link">Back to Gallery</a>

            <h1 class="event-title">Children Day Celebration</h1>
            <p class="event-description">
                A joyful celebration of Children's Day featuring various outdoor activities, games, sports competitions, and creative activities. Children participated enthusiastically in races, drawing competitions, and team-building exercises, creating memorable moments filled with laughter and fun.
            </p>

            <!-- <div class="stats-bar">
                <div class="stat-item">
                    <div class="stat-number">18</div>
                    <div class="stat-label">Total Photos</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">150+</div>
                    <div class="stat-label">Children Participated</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">Nov 2024</div>
                    <div class="stat-label">Event Date</div>
                </div>
            </div> -->

            <div class="photo-grid">
                <div class="photo-item">
                    <a href="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=1200&h=900&fit=crop" data-fancybox="gallery" data-caption="Children Day Celebration - Outdoor Activities">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&h=300&fit=crop" alt="Children Day Event 1">
                        <div class="photo-overlay">
                            <div class="overlay-content">
                                <div class="view-icon">+</div>
                                <div class="view-text">View</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="photo-item">
                    <a href="https://images.unsplash.com/photo-1497486751825-1233686d5d80?w=1200&h=900&fit=crop" data-fancybox="gallery" data-caption="Students in Classroom Activities">
                        <img src="https://images.unsplash.com/photo-1497486751825-1233686d5d80?w=400&h=300&fit=crop" alt="Children Day Event 2">
                        <div class="photo-overlay">
                            <div class="overlay-content">
                                <div class="view-icon">+</div>
                                <div class="view-text">View</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="photo-item">
                    <a href="https://images.unsplash.com/photo-1544776193-352d25ca82cd?w=1200&h=900&fit=crop" data-fancybox="gallery" data-caption="Prize Distribution Ceremony">
                        <img src="https://images.unsplash.com/photo-1544776193-352d25ca82cd?w=400&h=300&fit=crop" alt="Children Day Event 3">
                        <div class="photo-overlay">
                            <div class="overlay-content">
                                <div class="view-icon">+</div>
                                <div class="view-text">View</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="photo-item">
                    <a href="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=1200&h=900&fit=crop" data-fancybox="gallery" data-caption="Children Drawing and Art Activities">
                        <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=400&h=300&fit=crop" alt="Children Drawing Activity">
                        <div class="photo-overlay">
                            <div class="overlay-content">
                                <div class="view-icon">+</div>
                                <div class="view-text">View</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="photo-item">
                    <a href="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=1200&h=900&fit=crop" data-fancybox="gallery" data-caption="Running Race Competition">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&h=300&fit=crop" alt="Children Running Race">
                        <div class="photo-overlay">
                            <div class="overlay-content">
                                <div class="view-icon">+</div>
                                <div class="view-text">View</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="photo-item">
                    <a href="https://images.unsplash.com/photo-1544776193-352d25ca82cd?w=1200&h=900&fit=crop" data-fancybox="gallery" data-caption="Winners Receiving Awards">
                        <img src="https://images.unsplash.com/photo-1544776193-352d25ca82cd?w=400&h=300&fit=crop" alt="Prize Distribution">
                        <div class="photo-overlay">
                            <div class="overlay-content">
                                <div class="view-icon">+</div>
                                <div class="view-text">View</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="photo-item">
                    <a href="https://images.unsplash.com/photo-1497486751825-1233686d5d80?w=1200&h=900&fit=crop" data-fancybox="gallery" data-caption="Group Games and Team Activities">
                        <img src="https://images.unsplash.com/photo-1497486751825-1233686d5d80?w=400&h=300&fit=crop" alt="Children Playing Games">
                        <div class="photo-overlay">
                            <div class="overlay-content">
                                <div class="view-icon">+</div>
                                <div class="view-text">View</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="photo-item">
                    <a href="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=1200&h=900&fit=crop" data-fancybox="gallery" data-caption="Dance Performance by Students">
                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=400&h=300&fit=crop" alt="Group Dance Performance">
                        <div class="photo-overlay">
                            <div class="overlay-content">
                                <div class="view-icon">+</div>
                                <div class="view-text">View</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="photo-item">
                    <a href="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=1200&h=900&fit=crop" data-fancybox="gallery" data-caption="Sports and Athletic Events">
                        <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=400&h=300&fit=crop" alt="Sports Competition">
                        <div class="photo-overlay">
                            <div class="overlay-content">
                                <div class="view-icon">+</div>
                                <div class="view-text">View</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="photo-item">
                    <a href="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=1200&h=900&fit=crop" data-fancybox="gallery" data-caption="Team Building Exercises">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&h=300&fit=crop" alt="Team Building Activity">
                        <div class="photo-overlay">
                            <div class="overlay-content">
                                <div class="view-icon">+</div>
                                <div class="view-text">View</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="photo-item">
                    <a href="https://images.unsplash.com/photo-1544776193-352d25ca82cd?w=1200&h=900&fit=crop" data-fancybox="gallery" data-caption="Volunteers with Children">
                        <img src="https://images.unsplash.com/photo-1544776193-352d25ca82cd?w=400&h=300&fit=crop" alt="Children with Volunteers">
                        <div class="photo-overlay">
                            <div class="overlay-content">
                                <div class="view-icon">+</div>
                                <div class="view-text">View</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="photo-item">
                    <a href="https://images.unsplash.com/photo-1497486751825-1233686d5d80?w=1200&h=900&fit=crop" data-fancybox="gallery" data-caption="Creative Arts and Crafts Session">
                        <img src="https://images.unsplash.com/photo-1497486751825-1233686d5d80?w=400&h=300&fit=crop" alt="Creative Art Session">
                        <div class="photo-overlay">
                            <div class="overlay-content">
                                <div class="view-icon">+</div>
                                <div class="view-text">View</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="photo-item">
                    <a href="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=1200&h=900&fit=crop" data-fancybox="gallery" data-caption="Musical Chairs Game">
                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=400&h=300&fit=crop" alt="Musical Chairs">
                        <div class="photo-overlay">
                            <div class="overlay-content">
                                <div class="view-icon">+</div>
                                <div class="view-text">View</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="photo-item">
                    <a href="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=1200&h=900&fit=crop" data-fancybox="gallery" data-caption="Relay Race Event">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&h=300&fit=crop" alt="Relay Race">
                        <div class="photo-overlay">
                            <div class="overlay-content">
                                <div class="view-icon">+</div>
                                <div class="view-text">View</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="photo-item">
                    <a href="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=1200&h=900&fit=crop" data-fancybox="gallery" data-caption="Group Photo with All Participants">
                        <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=400&h=300&fit=crop" alt="Group Photo Session">
                        <div class="photo-overlay">
                            <div class="overlay-content">
                                <div class="view-icon">+</div>
                                <div class="view-text">View</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="photo-item">
                    <a href="https://images.unsplash.com/photo-1544776193-352d25ca82cd?w=1200&h=900&fit=crop" data-fancybox="gallery" data-caption="Victory Celebration of Winners">
                        <img src="https://images.unsplash.com/photo-1544776193-352d25ca82cd?w=400&h=300&fit=crop" alt="Winners Celebration">
                        <div class="photo-overlay">
                            <div class="overlay-content">
                                <div class="view-icon">+</div>
                                <div class="view-text">View</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="photo-item">
                    <a href="https://images.unsplash.com/photo-1497486751825-1233686d5d80?w=1200&h=900&fit=crop" data-fancybox="gallery" data-caption="Fun Activities and Entertainment">
                        <img src="https://images.unsplash.com/photo-1497486751825-1233686d5d80?w=400&h=300&fit=crop" alt="Fun Activities">
                        <div class="photo-overlay">
                            <div class="overlay-content">
                                <div class="view-icon">+</div>
                                <div class="view-text">View</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="photo-item">
                    <a href="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=1200&h=900&fit=crop" data-fancybox="gallery" data-caption="Closing Ceremony and Farewell">
                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=400&h=300&fit=crop" alt="Closing Ceremony">
                        <div class="photo-overlay">
                            <div class="overlay-content">
                                <div class="view-icon">+</div>
                                <div class="view-text">View</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="pagination-custom">
                <button class="page-btn" disabled>‹</button>
                <button class="page-btn active">1</button>
                <button class="page-btn">2</button>
                <button class="page-btn">3</button>
                <button class="page-btn">›</button>
            </div>
        </div>
    </section>
@endscetion

@section('script')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
     <!-- Fancybox JS -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
        // Initialize Fancybox
        Fancybox.bind("[data-fancybox='gallery']", {
            Toolbar: {
                display: {
                    left: [],
                    middle: [],
                    right: ["close"],
                },
            },
            Images: {
                zoom: true,
            },
            Thumbs: {
                autoStart: true,
            },
            animated: true,
            hideScrollbar: true,
        });

        // Pagination functionality
        const pageButtons = document.querySelectorAll('.page-btn');
        pageButtons.forEach(button => {
            button.addEventListener('click', function() {
                if (!this.disabled && !this.textContent.includes('‹') && !this.textContent.includes('›')) {
                    pageButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                }
            });
        });
    </script>
@endsection