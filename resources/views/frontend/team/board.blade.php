@extends('master.frontmaster')
@section('css')
<style>
    .hero-board-section {
        background: linear-gradient(135deg, #0f4c75 0%, #3282b8 50%, #73c48f 100%);
        color: white;
        padding: 150px 0 100px;
        text-align: center;
        position: relative;
        overflow: hidden;
        margin-top: 80px;
        min-height: 400px;
        display: flex;
        align-items: center;
    }

    .hero-board-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="2" height="2" fill="rgba(255,255,255,0.15)"/></svg>') repeat;
        animation: movePattern 30s linear infinite;
        opacity: 0.3;
    }

    .hero-board-section::after {
        content: '';
        position: absolute;
        top: -20%;
        left: -5%;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(255,255,255,0.15) 0%, transparent 70%);
        border-radius: 50%;
        animation: pulse 6s ease-in-out infinite;
    }

    .board-decorations {
        position: absolute;
        opacity: 0.1;
        animation: floatBoard 18s ease-in-out infinite;
    }

    .bd-1 {
        width: 180px;
        height: 180px;
        background: rgb(253,195,65);
        top: 15%;
        left: 8%;
        clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
    }

    .bd-2 {
        width: 120px;
        height: 120px;
        background: white;
        bottom: 25%;
        right: 10%;
        border-radius: 50%;
        animation-delay: 3s;
    }

    .bd-3 {
        width: 140px;
        height: 140px;
        background: rgb(115,196,143);
        top: 55%;
        left: 10%;
        border-radius: 0%;
        clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
        animation-delay: 5s;
    }

    .hero-board-section .container {
        position: relative;
        z-index: 2;
    }

    .hero-board-section h2 {
        font-size: 3.5rem;
        font-weight: 800;
        margin-bottom: 20px;
        background: linear-gradient(135deg, #fff 0%, rgba(255,255,255,0.8) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        display: inline-block;
        position: relative;
        animation: fadeInDown 0.8s ease;
    }

    .hero-board-section h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 120px;
        height: 4px;
        background: linear-gradient(90deg, transparent, rgb(253,195,65), transparent);
        border-radius: 2px;
    }

    .hero-board-section .sub-title {
        font-size: 1.3rem;
        color: rgba(255,255,255,0.95);
        max-width: 800px;
        margin: 0 auto;
        line-height: 1.8;
        text-shadow: 0 2px 10px rgba(0,0,0,0.1);
        animation: fadeInUp 0.8s ease;
    }

    @keyframes movePattern {
        0% { transform: translate(0, 0); }
        100% { transform: translate(100px, 100px); }
    }

    @keyframes pulse {
        0%, 100% { transform: scale(1); opacity: 0.4; }
        50% { transform: scale(1.1); opacity: 0.2; }
    }

    @keyframes floatBoard {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-25px) rotate(180deg); }
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 768px) {
        .hero-board-section {
            padding: 120px 0 80px;
            min-height: 350px;
        }
        
        .hero-board-section h2 {
            font-size: 2.5rem;
        }
        
        .hero-board-section .sub-title {
            font-size: 1.1rem;
            padding: 0 20px;
        }

        .board-decorations {
            display: none;
        }
    }

    @media (max-width: 576px) {
        .hero-board-section {
            min-height: 300px;
            padding: 100px 0 60px;
        }

        .hero-board-section h2 {
            font-size: 2rem;
        }

        .hero-board-section .sub-title {
            font-size: 1rem;
        }
    }
</style>
@endsection

@section('content')
<!-- Hero Board Section -->
<div class="hero-board-section">
    <div class="board-decorations bd-1"></div>
    <div class="board-decorations bd-2"></div>
    <div class="board-decorations bd-3"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <h2>Advisory <span>Board</span></h2>
                <p class="sub-title">Meet our esteemed Standards Advisory Panel who review, inform and guide ZTS through the development of our standards.</p>
            </div>
        </div>
    </div>
</div>

<!-- Team Section -->
    <!-- === Advisory Board Start ===-->
    <div class="difference-two container mt-5">
        <section class="team ff-team pb-0">
            <div class="container">
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
    </div>
    <!-- === Advisory Board End ===-->
    @ensection
