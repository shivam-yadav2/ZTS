@extends('master.frontmaster')
@section('css')
<style>

     :root {
            --color-yellow: rgb(255, 193, 7);
            --color-green: rgb(115, 196, 143);
            --color-dark-green: rgb(0, 113, 93);
        }
    /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--color-green) 0%, var(--color-dark-green) 100%);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: var(--color-yellow);
            opacity: 0.1;
            border-radius: 50%;
        }

        .hero-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .hero-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.25);
        }

        .hero-image-wrapper {
            position: relative;
            overflow: hidden;
            height: 100%;
        }

        .hero-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .hero-card:hover .hero-image-wrapper img {
            transform: scale(1.1);
        }

        .hero-badge {
            position: absolute;
            bottom: 20px;
            left: 20px;
            background: var(--color-yellow);
            color: var(--color-dark-green);
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: bold;
            font-size: 0.9rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .hero-content {
            padding: 40px;
        }

        .section-title {
            color: var(--color-dark-green);
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 15px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--color-yellow);
            border-radius: 2px;
        }

        .principle-text {
            color: #555;
            line-height: 1.8;
            font-size: 1rem;
            margin-bottom: 15px;
        }

        .highlight-quote {
            background: var(--color-green);
            color: white;
            padding: 20px 25px;
            border-radius: 12px;
            margin: 20px 0;
            border-left: 5px solid var(--color-yellow);
            font-style: italic;
            transition: transform 0.3s ease;
        }

        .highlight-quote:hover {
            transform: translateX(10px);
        }

        /* Piggy Bank Section */
        .piggy-section {
            background: #f8f9fa;
            padding: 80px 0;
        }

        .piggy-content-card {
            background: white;
            border-radius: 20px;
            padding: 45px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
            border: 3px solid transparent;
            transition: all 0.4s ease;
        }

        .piggy-content-card:hover {
            border-color: var(--color-green);
            transform: translateY(-5px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.12);
        }

        .piggy-title {
            color: var(--color-dark-green);
            font-size: 1.9rem;
            font-weight: 700;
            margin-bottom: 30px;
            text-align: center;
        }

        .piggy-image-card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            position: relative;
            overflow: hidden;
            transition: all 0.4s ease;
        }

        .piggy-image-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 193, 7, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .piggy-image-card:hover::before {
            left: 100%;
        }

        .piggy-image-card:hover {
            transform: scale(1.05);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        .piggy-image-card img {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease;
        }

        .quote-block {
            background: linear-gradient(135deg, var(--color-green) 0%, var(--color-dark-green) 100%);
            color: white;
            padding: 25px 30px;
            border-radius: 15px;
            margin: 25px 0;
            position: relative;
            overflow: hidden;
        }

        .quote-block::before {
            content: '"';
            position: absolute;
            top: -10px;
            left: 10px;
            font-size: 100px;
            opacity: 0.1;
            font-family: Georgia, serif;
        }

        /* CTA Section */
        .cta-section {
            background: var(--color-dark-green);
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -10%;
            width: 600px;
            height: 600px;
            background: var(--color-green);
            opacity: 0.1;
            border-radius: 50%;
        }

        .piggy-banks-wrapper {
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }

        .piggy-banks-wrapper img {
            max-width: 500px;
            width: 100%;
            height: auto;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .cta-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: white;
            margin-bottom: 20px;
            text-align: center;
        }

        .cta-subtitle {
            font-size: 1.3rem;
            color: var(--color-yellow);
            margin-bottom: 30px;
            text-align: center;
            font-weight: 600;
        }

        .you-text {
            font-size: 5rem;
            font-weight: 900;
            color: var(--color-yellow);
            text-align: center;
            margin: 40px 0;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.3);
            letter-spacing: 10px;
        }

        .cta-description {
            font-size: 1.4rem;
            color: white;
            text-align: center;
            margin-bottom: 40px;
            line-height: 1.8;
        }

        .cta-button {
            background: var(--color-yellow);
            color: var(--color-dark-green);
            padding: 18px 60px;
            border-radius: 50px;
            font-size: 1.2rem;
            font-weight: 700;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(255, 193, 7, 0.3);
            display: inline-block;
            text-decoration: none;
        }

        .cta-button:hover {
            background: white;
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(255, 193, 7, 0.5);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-content {
                padding: 30px 25px;
            }

            .section-title {
                font-size: 1.5rem;
            }

            .you-text {
                font-size: 3rem;
                letter-spacing: 5px;
            }

            .cta-title {
                font-size: 1.8rem;
            }

            .cta-description {
                font-size: 1.1rem;
            }
        }

          body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
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

     <! !-- Hero Section - Three Principles -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-card">
                <div class="row g-0">
                    <div class="col-lg-5">
                        <div class="hero-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1612835362596-4b0b2b6b0e0c?w=800" alt="Young Super Hero" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22800%22 height=%22600%22%3E%3Crect fill=%22%2373c48f%22 width=%22800%22 height=%22600%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 font-family=%22sans-serif%22 font-size=%2248%22 fill=%22white%22%3EYoung Super Hero%3C/text%3E%3C/svg%3E'">
                            <div class="hero-badge">YOUNG SUPER HEROES</div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="hero-content">
                            <h2 class="section-title">Preach the three principles: giving, saving and spending to our children</h2>
                            
                            <div class="highlight-quote">
                                "Giving is one of the most important of the three categories because you're teaching them to feel the impact of helping others at a young age. That's invaluable."
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Piggy Bank Section -->
    <section class="piggy-section">
        <div class="container">
            <h2 class="piggy-title">Have your child physically organize cash with three piggy banks</h2>
            
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="piggy-content-card">
                        <p class="principle-text">
                            Kids (especially young ones) need tangible ways to understand abstract concepts, so it's important to not just explain the three money principles, but give them concrete tools to practice them.
                        </p>
                        
                        <div class="quote-block">
                            "Instead of just having one piggy bank for your child, get three, and label one 'spend,' one 'save,' and one 'give'."
                        </div>
                        
                        <p class="principle-text">
                            "Any time your child gets money — allowance, payment for completing a task, birthday money, etc. — encourage them to split the money up between all three banks. The key to this being educational is to allow your child to choose how they split the money, as well as what they do with it."
                        </p>
                        
                        <p class="principle-text">
                            This exercise is not only helpful in getting kids confident in money matters, it provides an opportunity for parents to have meaningful conversations with their kids about money management.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="piggy-image-card">
                        <img src="https://images.unsplash.com/photo-1621264448270-9ef00e88a935?w=800" alt="Flying Super Hero" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22800%22 height=%22600%22%3E%3Crect fill=%22%2300715d%22 width=%22800%22 height=%22600%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 font-family=%22sans-serif%22 font-size=%2248%22 fill=%22white%22%3ESuper Hero Learning%3C/text%3E%3C/svg%3E'">
                    </div>
                    
                    <div class="quote-block mt-4">
                        "Talk with them about both what they will do with their money as well as how they could have split their money up differently if an appropriate situation arises. Ultimately, though, the decision should be up to your child."
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="piggy-banks-wrapper">
                <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=800" alt="Three Piggy Banks" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22800%22 height=%22400%22%3E%3Crect fill=%22%23ffc107%22 width=%22800%22 height=%22400%22/%3E%3Ccircle cx=%22200%22 cy=%22200%22 r=%2280%22 fill=%22%23ff6b9d%22/%3E%3Ccircle cx=%22400%22 cy=%22200%22 r=%22100%22 fill=%22%23ff6b9d%22/%3E%3Ccircle cx=%22600%22 cy=%22200%22 r=%2280%22 fill=%22%23ff6b9d%22/%3E%3Ctext x=%2250%25%22 y=%2290%25%22 text-anchor=%22middle%22 font-family=%22sans-serif%22 font-size=%2232%22 fill=%22%2300715d%22%3EThree Piggy Banks%3C/text%3E%3C/svg%3E'">
            </div>
            
            <h2 class="cta-title">Buying A set of three piggy banks</h2>
            <p class="cta-subtitle">Link to buy</p>
            
            <div class="you-text">YOU</div>
            
            <p class="cta-description">
                can help other children who are struggling for the basic needs
            </p>
            
            <div class="text-center">
                <a href="#" class="cta-button">GET YOUR SET NOW</a>
            </div>
        </div>
    </section>
@endsection