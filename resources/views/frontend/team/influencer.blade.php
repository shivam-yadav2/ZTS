@extends('master.frontmaster')
@section('css')
 <style>
        :root {
            --primary-yellow: #fdc341;
            --primary-green: #73c48f;
            --text-dark: #2c3e50;
            --text-light: #6c757d;
            --bg-light: #f8f9fa;
        }

        * {
            font-family: 'Inter', sans-serif;
        }

        /* body {
            background: var(--bg-light);
            padding: 40px 0;
            min-height: 100vh;
        } */

        .member-card {
            background: white;
            border-radius: 16px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            border: none;
            transition: all 0.3s ease;
            overflow: hidden;
            position: relative;
        }

        .member-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--primary-yellow);
        }

        .member-card:nth-child(even)::before {
            background: var(--primary-green);
        }

        .member-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0,0,0,0.15);
        }

        .member-photo {
            width: 80px;
            height: 80px;
            border-radius: 12px;
            object-fit: cover;
            border: 3px solid var(--primary-yellow);
            transition: all 0.3s ease;
        }

        .member-card:nth-child(even) .member-photo {
            border-color: var(--primary-green);
        }

        .member-card:hover .member-photo {
            transform: scale(1.05);
        }

        .member-name {
            color: var(--text-dark);
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 8px;
            line-height: 1.3;
        }

        .member-bio {
            color: var(--text-light);
            line-height: 1.6;
            font-size: 0.9rem;
            margin: 0;
        }

        .card-content {
            padding-left: 0;
        }

        .row-custom {
            display: flex;
            align-items: flex-start;
            gap: 20px;
        }

        .photo-col {
            flex-shrink: 0;
        }

        .content-col {
            flex: 1;
            min-width: 0;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .member-card {
                padding: 16px;
                margin-bottom: 16px;
            }
            
            .row-custom {
                gap: 15px;
            }
            
            .member-photo {
                width: 70px;
                height: 70px;
            }
            
            .member-name {
                font-size: 1rem;
            }
            
            .member-bio {
                font-size: 0.85rem;
            }
        }

        @media (max-width: 576px) {
            .row-custom {
                flex-direction: column;
                align-items: center;
                text-align: center;
                gap: 15px;
            }
            
            .member-photo {
                width: 80px;
                height: 80px;
            }
        }

        /* .container {
            max-width: 1000px;
        } */

        .section-title {
            text-align: center;
            color: var(--text-dark);
            font-weight: 700;
            font-size: 2rem;
            margin-bottom: 40px;
            position: relative;
            margin-top: 40px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: var(--primary-yellow);
        }
    </style>
@endsection
@section('content')
 <!-- ==== team section start ==== -->
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
     <div class="container">
        <h2 class="section-title">Core Team Members</h2>
        
        <div class="row" style="margin-top: 100px;">
            <!-- Member 1 -->
            <div class="col-lg-6">
                <div class="member-card">
                    <div class="row-custom">
                        <div class="photo-col">
                            <img src="{{asset('frontend_assets/images/members/member1.png')}}" alt="Pooja Srivastav" class="member-photo">
                        </div>
                        <div class="content-col">
                            <h3 class="member-name">Pooja Srivastav</h3>
                            <p class="member-bio">
                                The situation and transforming it powerfully. Positive & negative both are part of our life and we cannot have one alone, but we can have the ability to handle both with a POWERFUL MINDSET. Spreading this energy to people I meet every day.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Member 2 -->
            <div class="col-lg-6">
                <div class="member-card">
                    <div class="row-custom">
                        <div class="photo-col">
                            <img src="{{asset('frontend_assets/images/members/member2.png')}}" alt="Sanjeev Mishra" class="member-photo">
                        </div>
                        <div class="content-col">
                            <h3 class="member-name">Sanjeev Mishra</h3>
                            <p class="member-bio">
                                Lots of privileged society who got ALFA, when times came to defend their society these ALFA never stood against wrong. This system runs for thousands of years and the habit of taking responsibility puts human civilization on top of the food chain.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Member 3 -->
            <div class="col-lg-6">
                <div class="member-card">
                    <div class="row-custom">
                        <div class="photo-col">
                            <img src="{{asset('frontend_assets/images/members/member3.png')}}" alt="Santhosh P.P" class="member-photo">
                        </div>
                        <div class="content-col">
                            <h3 class="member-name">Santhosh P.P</h3>
                            <p class="member-bio">
                                Togetherness is a beautiful word and emotionally connected is the best form of mind. It's not only children but adults who need emotional attachment. They need attention, care like siblings. Let us share love and beauty of life equally.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Member 4 -->
            <div class="col-lg-6">
                <div class="member-card">
                    <div class="row-custom">
                        <div class="photo-col">
                            <img src="{{asset('frontend_assets/images/members/member4.png')}}" alt="Dr. Priyam Sameer Kamdar" class="member-photo">
                        </div>
                        <div class="content-col">
                            <h3 class="member-name">Dr. Priyam Sameer Kamdar</h3>
                            <p class="member-bio">
                                आदत रता है तैयारी, बदलो अपनी रोप... Change is inevitable, one who adapts it positively, wins the world. Having a positive attitude, thoughtfulness and mindset can really make a difference in life.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Member 5 -->
            <div class="col-lg-6">
                <div class="member-card">
                    <div class="row-custom">
                        <div class="photo-col">
                            <img src="{{asset('frontend_assets/images/members/member5.png')}}" alt="Chandra Shekhar Shukla" class="member-photo">
                        </div>
                        <div class="content-col">
                            <h3 class="member-name">Chandra Shekhar Shukla</h3>
                            <p class="member-bio">
                                कताल करता जीवे कर सहारा बनता है, बमता है खुशी या और सीमा है। जीवन पर काम हर किसी को करम, जिंदगी पूर्ण प्रवास। Life is about creating meaningful connections and spreading joy to everyone we meet.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Member 6 -->
            <div class="col-lg-6">
                <div class="member-card">
                    <div class="row-custom">
                        <div class="photo-col">
                            <img src="{{asset('frontend_assets/images/members/member6.png')}}" alt="Seema Yadav" class="member-photo">
                        </div>
                        <div class="content-col">
                            <h3 class="member-name">Seema Yadav</h3>
                            <p class="member-bio">
                                सब के दिलदार जब आती है, कार को की उदारता है। जिंदगी को जैसे प्रभावै है, छोटे में तकदीर बनते है। When we approach life with kindness and generosity, we create beautiful relationships and meaningful impacts.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==== / team section end ==== -->

@endsection