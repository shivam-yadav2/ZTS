@extends('master.frontmaster')
@section('css')
    <style>
        :root {
            --color-yellow: rgb(255, 193, 7);
            --color-green: rgb(115, 196, 143);
            --color-dark-green: rgb(0, 113, 93);
        }

        /* * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        } */

        /* Animated Background Icons */
        .floating-icons {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            overflow: hidden;
            z-index: 0;
            pointer-events: none;
        }

        .floating-icons i {
            position: absolute;
            opacity: 0.08;
            animation: float-up 15s infinite ease-in-out;
        }

        @keyframes float-up {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 0.08;
            }
            90% {
                opacity: 0.08;
            }
            100% {
                transform: translateY(-100vh) rotate(360deg);
                opacity: 0;
            }
        }

        /* Header Section */
        .header-section {
            background: white;
            padding: 80px 0 60px;
            position: relative;
        }

        .header-title {
            color: var(--color-dark-green);
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 20px;
        }

        .header-subtitle {
            color: #666;
            text-align: center;
            font-size: 1.1rem;
            line-height: 1.8;
            max-width: 900px;
            margin: 0 auto;
        }

        /* Big Questions Section */
        .questions-section {
            background: #f8f9fa;
            padding: 80px 0;
            position: relative;
        }

        .section-heading {
            color: var(--color-dark-green);
            font-size: 2.2rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 60px;
        }

        .question-card {
            background: white;
            border-radius: 15px;
            padding: 30px 20px;
            text-align: center;
            transition: all 0.4s ease;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .question-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .question-card:hover::before {
            left: 100%;
        }

        .question-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            background: var(--color-green);
        }

        .question-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: var(--color-dark-green);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            transition: all 0.4s ease;
        }

        .question-card:hover .question-icon {
            background: white;
            transform: rotate(360deg);
        }

        .question-icon i {
            font-size: 2rem;
            color: white;
            transition: all 0.4s ease;
        }

        .question-card:hover .question-icon i {
            color: var(--color-dark-green);
        }

        .question-text {
            font-size: 0.95rem;
            line-height: 1.6;
            color: #555;
            transition: color 0.4s ease;
        }

        .question-card:hover .question-text {
            color: var(--color-dark-green);
        }

        /* CTA Section */
        .cta-section {
            background: var(--color-dark-green);
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .cta-title {
            color: white;
            font-size: 2.8rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 30px;
        }

        .yes-text {
            font-size: 6rem;
            font-weight: 900;
            color: var(--color-yellow);
            text-align: center;
            text-shadow: 4px 4px 8px rgba(0, 0, 0, 0.3);
            margin: 30px 0;
            letter-spacing: 15px;
        }

        .cta-description {
            color: white;
            font-size: 1.2rem;
            text-align: center;
            margin-bottom: 40px;
        }

        .cta-badge {
            background: var(--color-yellow);
            color: var(--color-dark-green);
            padding: 15px 50px;
            border-radius: 50px;
            font-size: 1.3rem;
            font-weight: 700;
            display: inline-block;
            margin-bottom: 30px;
            transition: all 0.3s ease;
        }

        .cta-badge:hover {
            background: white;
            color: var(--color-dark-green);
            transform: scale(1.1);
        }

        /* Info Cards Section */
        .info-cards-section {
            padding: 80px 0;
            background: white;
            position: relative;
        }

        .info-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            height: 100%;
        }

        .info-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
        }

        .info-card-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .info-card:hover .info-card-img {
            transform: scale(1.1);
        }

        .info-card-body {
            padding: 30px;
        }

        .info-card-title {
            color: var(--color-dark-green);
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .info-card-text {
            color: #666;
            line-height: 1.7;
            font-size: 0.95rem;
        }

        /* Campaign Section */
        .campaign-section {
            background: #f8f9fa;
            padding: 80px 0;
            position: relative;
        }

        .campaign-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .campaign-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--color-yellow);
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }

        .campaign-card:hover::after {
            transform: scaleX(1);
        }

        .campaign-card:hover {
            transform: translateY(-10px);
            background: var(--color-green);
        }
        
        .campaign-card:hover .campaign-title,
        .campaign-card:hover .campaign-text {
            color: var(--color-dark-green);
        }

        .campaign-icon {
            width: 100px;
            height: 100px;
            margin: 0 auto 25px;
            transition: transform 0.4s ease;
        }

        .campaign-card:hover .campaign-icon {
            transform: scale(1.2) rotate(10deg);
        }

        .campaign-title {
            color: var(--color-dark-green);
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            transition: color 0.4s ease;
        }


        .campaign-text {
            color: #666;
            line-height: 1.7;
            transition: color 0.4s ease;
        }

        .campaign-btn {
            background: var(--color-dark-green);
            color: white;
            padding: 12px 40px;
            border-radius: 50px;
            border: none;
            font-weight: 600;
            margin-top: 20px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .campaign-btn:hover {
            background: var(--color-yellow);
            color: var(--color-dark-green);
            transform: scale(1.1);
        }

        /* Features Grid */
        .features-section {
            background: white;
            padding: 80px 0;
            position: relative;
        }

        .feature-box {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 40px 30px;
            text-align: center;
            transition: all 0.4s ease;
            height: 100%;
            border: 3px solid transparent;
        }

        .feature-box:hover {
            background: white;
            border-color: var(--color-green);
            transform: scale(1.05);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .feature-icon {
            font-size: 3rem;
            color: var(--color-dark-green);
            margin-bottom: 20px;
            transition: all 0.4s ease;
        }

        .feature-box:hover .feature-icon {
            color: var(--color-yellow);
            transform: scale(1.2) rotateY(360deg);
        }

        .feature-title {
            color: var(--color-dark-green);
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .feature-text {
            color: #666;
            font-size: 0.9rem;
            line-height: 1.6;
        }

        /* Dark Section */
        .dark-section {
            background: #1a1a1a;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .dark-section-title {
            color: white;
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 30px;
        }

        .dark-section-text {
            color: #ccc;
            font-size: 1.1rem;
            text-align: center;
            line-height: 1.8;
            max-width: 800px;
            margin: 0 auto 50px;
        }

        /* Challenge Grid */
        .challenge-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .challenge-item {
            background: white;
            border-radius: 15px;
            padding: 35px 25px;
            text-align: center;
            transition: all 0.4s ease;
        }

        .challenge-item:hover {
            background: var(--color-yellow);
            transform: translateY(-10px);
        }
        
        .challenge-item:hover .challenge-title,
        .challenge-item:hover .challenge-text {
            color: var(--color-dark-green);
        }

        .challenge-item i {
            font-size: 3rem;
            color: var(--color-dark-green);
            margin-bottom: 20px;
            transition: all 0.4s ease;
        }

        .challenge-item:hover i {
            transform: scale(1.3) rotate(360deg);
            color: var(--color-dark-green);
        }

        .challenge-title {
            color: var(--color-dark-green);
            font-weight: 700;
            margin-bottom: 10px;
            transition: color 0.4s ease;
        }

        .challenge-text {
            color: #666;
            font-size: 0.9rem;
            line-height: 1.6;
            transition: color 0.4s ease;
        }

        /* Team Section */
        .team-section {
            background: white;
            padding: 80px 0;
            position: relative;
        }

        .team-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            position: relative;
        }

        .team-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--color-dark-green);
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: 1;
        }

        .team-card:hover::before {
            opacity: 0.9;
        }

        .team-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
        }

        .team-img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .team-content {
            padding: 30px;
            position: relative;
            z-index: 2;
        }

        .team-title {
            color: var(--color-dark-green);
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 10px;
            transition: color 0.4s ease;
        }

        .team-card:hover .team-title,
        .team-card:hover .team-text {
            color: white;
        }

        .team-text {
            color: #666;
            line-height: 1.7;
            transition: color 0.4s ease;
        }

        .team-btn {
            background: var(--color-dark-green);
            color: white;
            padding: 10px 30px;
            border-radius: 50px;
            border: none;
            font-weight: 600;
            margin-top: 20px;
            transition: all 0.3s ease;
        }

        .team-btn:hover {
            background: var(--color-yellow);
            color: var(--color-dark-green);
        }

        /* Hero CTA */
        .hero-cta {
            background: var(--color-dark-green);
            padding: 120px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-cta-title {
            color: white;
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .hero-cta-btn {
            background: var(--color-yellow);
            color: var(--color-dark-green);
            padding: 20px 60px;
            border-radius: 50px;
            font-size: 1.3rem;
            font-weight: 700;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(255, 193, 7, 0.4);
        }

        .hero-cta-btn:hover {
            background: white;
            color: var(--color-dark-green);
            transform: scale(1.1);
            box-shadow: 0 15px 40px rgba(255, 193, 7, 0.6);
        }

        /* Facilitating Section */
        .facilitating-section {
            background: #f8f9fa;
            padding: 80px 0;
            position: relative;
        }

        .facilitating-content {
            display: flex;
            align-items: center;
            gap: 40px;
            margin-bottom: 60px;
        }
        
        .facilitating-content.flex-row-reverse {
            flex-direction: row-reverse;
        }
        
        @media (max-width: 768px) {
            .facilitating-content.flex-row-reverse {
                flex-direction: column;
            }
        }

        .facilitating-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.4s ease;
        }

        .facilitating-img:hover {
            transform: scale(1.1) rotate(5deg);
        }

        .facilitating-text {
            flex: 1;
        }

        .facilitating-title {
            color: var(--color-dark-green);
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .facilitating-desc {
            color: #666;
            line-height: 1.8;
            font-size: 1.05rem;
        }

        /* Responsible Team */
        .responsible-section {
            background: white;
            padding: 100px 0;
            text-align: center;
            position: relative;
        }

        .responsible-badge {
            color: var(--color-dark-green);
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .responsible-title {
            color: var(--color-dark-green);
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 40px;
        }

        .responsible-subtitle {
            color: #666;
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 40px;
        }

        .responsible-btn {
            background: var(--color-dark-green);
            color: white;
            padding: 18px 60px;
            border-radius: 50px;
            font-size: 1.2rem;
            font-weight: 700;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .responsible-btn:hover {
            background: var(--color-yellow);
            color: var(--color-dark-green);
            transform: scale(1.1);
        }

        @media (max-width: 768px) {
            .header-title, .section-heading {
                font-size: 1.8rem;
            }

            .yes-text {
                font-size: 3.5rem;
                letter-spacing: 5px;
            }

            .challenge-grid {
                grid-template-columns: 1fr;
            }

            .facilitating-content {
                flex-direction: column;
                text-align: center;
            }

            .hero-cta-title {
                font-size: 2rem;
            }
        }
    </style>
@endsection

@section('content')

<!-- === Banner Section start === -->
   @include('frontend.pages.component.banner', [
      'title' => 'Responsible India, Possible India',
      'description' => 'We are creating a movement where education becomes accessible to all children, breaking barriers and building futures. Together, we can transform lives through knowledge, compassion, and collective action.',
      'background' => asset('frontend_assets/images/slide1.jpg')
   ])
      <!-- ===  Banner Section End === -->
    <!-- Header Section -->
    <section class="header-section">
        <div class="floating-icons">
            <i class="fas fa-graduation-cap" style="left: 10%; font-size: 40px; animation-delay: 0s; color: var(--color-dark-green);"></i>
            <i class="fas fa-book" style="left: 70%; font-size: 50px; animation-delay: 2s; color: var(--color-green);"></i>
            <i class="fas fa-heart" style="left: 30%; font-size: 35px; animation-delay: 4s; color: var(--color-yellow);"></i>
            <i class="fas fa-users" style="left: 85%; font-size: 45px; animation-delay: 1s; color: var(--color-dark-green);"></i>
            <i class="fas fa-lightbulb" style="left: 50%; font-size: 40px; animation-delay: 3s; color: var(--color-green);"></i>
            <i class="fas fa-hands-helping" style="left: 15%; font-size: 38px; animation-delay: 5s; color: var(--color-yellow);"></i>
        </div>
        <div class="container position-relative">
            <h1 class="header-title">Responsible India, Possible India</h1>
            <p class="header-subtitle">
                We are creating a movement where education becomes accessible to all children, breaking barriers and building futures. Together, we can transform lives through knowledge, compassion, and collective action. Join us in making India a nation where every child has the opportunity to learn, grow, and succeed.
            </p>
        </div>
    </section>

    <!-- Big Questions Section -->
    <section class="questions-section">
        <div class="floating-icons">
            <i class="fas fa-pencil-alt" style="left: 20%; font-size: 35px; animation-delay: 1s; color: var(--color-green);"></i>
            <i class="fas fa-apple-alt" style="left: 60%; font-size: 40px; animation-delay: 3s; color: var(--color-yellow);"></i>
            <i class="fas fa-school" style="left: 80%; font-size: 45px; animation-delay: 0s; color: var(--color-dark-green);"></i>
        </div>
        <div class="container position-relative">
            <h2 class="section-heading">The Big Questions</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="question-card">
                        <div class="question-icon">
                            <i class="fas fa-question"></i>
                        </div>
                        <p class="question-text">How do we ensure quality education reaches every corner of our nation?</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="question-card">
                        <div class="question-icon">
                            <i class="fas fa-question"></i>
                        </div>
                        <p class="question-text">What can we do to break the cycle of poverty through education?</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="question-card">
                        <div class="question-icon">
                            <i class="fas fa-question"></i>
                        </div>
                        <p class="question-text">How can we inspire communities to invest in their children's future?</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="question-card">
                        <div class="question-icon">
                            <i class="fas fa-question"></i>
                        </div>
                        <p class="question-text">What role does technology play in democratizing education?</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="question-card">
                        <div class="question-icon">
                            <i class="fas fa-question"></i>
                        </div>
                        <p class="question-text">How can we create sustainable educational programs for marginalized communities?</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="question-card">
                        <div class="question-icon">
                            <i class="fas fa-question"></i>
                        </div>
                        <p class="question-text">What impact can one person make in transforming education?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="floating-icons">
            <i class="fas fa-star" style="left: 25%; font-size: 50px; animation-delay: 0s; color: var(--color-yellow);"></i>
            <i class="fas fa-rocket" style="left: 75%; font-size: 45px; animation-delay: 2s; color: var(--color-green);"></i>
            <i class="fas fa-trophy" style="left: 50%; font-size: 40px; animation-delay: 4s; color: var(--color-yellow);"></i>
        </div>
        <div class="container position-relative text-center">
            <h2 class="cta-title">Do YOU Think It Is Possible?</h2>
            <div class="yes-text my-5">YES</div>
            <p class="cta-description">We build the possible by providing education that breaks barriers and creates opportunities</p>
            <div>
                <span class="cta-badge">RESPONSIBLE INDIA, POSSIBLE INDIA</span>
            </div>
            <p class="text-white mt-4" style="font-size: 1.1rem; max-width: 800px; margin: 0 auto;">
                Through collective action, innovative programs, and unwavering commitment, we are creating a future where education is a right, not a privilege. Join us in this transformative journey.
            </p>
        </div>
    </section>

    <!-- Info Cards Section -->
    <section class="info-cards-section">
        <div class="floating-icons">
            <i class="fas fa-globe" style="left: 15%; font-size: 40px; animation-delay: 1s; color: var(--color-green);"></i>
            <i class="fas fa-hands-helping" style="left: 85%; font-size: 45px; animation-delay: 3s; color: var(--color-dark-green);"></i>
        </div>
        <div class="container position-relative">
            <h2 class="section-heading">Responsible India With Civic Instance For A Cause</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="info-card">
                        <img src="https://images.unsplash.com/photo-1497486751825-1233686d5d80?w=800" alt="Education" class="info-card-img" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22800%22 height=%22400%22%3E%3Crect fill=%22%2373c48f%22 width=%22800%22 height=%22400%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 font-family=%22sans-serif%22 font-size=%2240%22 fill=%22white%22%3EEducation Access%3C/text%3E%3C/svg%3E'">
                        <div class="info-card-body">
                            <h3 class="info-card-title">Marginalization</h3>
                            <p class="info-card-text">Breaking down barriers that prevent children from accessing quality education. We work directly with marginalized communities to ensure every child has the resources, support, and opportunities they deserve to succeed academically and personally.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-card">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=800" alt="Community" class="info-card-img" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22800%22 height=%22400%22%3E%3Crect fill=%22%23ffc107%22 width=%22800%22 height=%22400%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 font-family=%22sans-serif%22 font-size=%2240%22 fill=%22%2300715d%22%3ECommunity Impact%3C/text%3E%3C/svg%3E'">
                        <div class="info-card-body">
                            <h3 class="info-card-title">Self-Reliance</h3>
                            <p class="info-card-text">Empowering communities to become self-sufficient through education and skill development. Our programs focus on building sustainable solutions that enable families to support their children's education and create lasting positive change in their communities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Campaign Section -->
    <section class="campaign-section">
        <div class="floating-icons">
            <i class="fas fa-child" style="left: 10%; font-size: 35px; animation-delay: 0s; color: var(--color-yellow);"></i>
            <i class="fas fa-book-reader" style="left: 90%; font-size: 40px; animation-delay: 2s; color: var(--color-green);"></i>
        </div>
        <div class="container position-relative">
            <div class="row g-4 mb-5">
                <div class="col-lg-6">
                    <div class="campaign-card">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100'%3E%3Ccircle cx='50' cy='50' r='45' fill='%2373c48f'/%3E%3Cpath d='M30 45 L45 60 L70 35' stroke='white' stroke-width='6' fill='none'/%3E%3C/svg%3E" alt="Campaign Icon" class="campaign-icon">
                        <h3 class="campaign-title">What Will This Campaign Achieve?</h3>
                        <p class="campaign-text">
                            Our campaign will provide educational resources, scholarships, and mentorship to underprivileged children across India. We aim to impact 10,000+ students in the next year, creating pathways to brighter futures through comprehensive support systems.
                        </p>
                        <button class="campaign-btn">Learn More</button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="campaign-card">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100'%3E%3Ccircle cx='50' cy='50' r='45' fill='%23ffc107'/%3E%3Cpath d='M35 55 C35 35, 65 35, 65 55' stroke='%2300715d' stroke-width='4' fill='none'/%3E%3Ccircle cx='40' cy='40' r='3' fill='%2300715d'/%3E%3Ccircle cx='60' cy='40' r='3' fill='%2300715d'/%3E%3C/svg%3E" alt="Need Icon" class="campaign-icon">
                        <h3 class="campaign-title">Why Do We Need This Campaign?</h3>
                        <p class="campaign-text">
                            Millions of children in India lack access to basic education due to poverty, geographical barriers, and social inequalities. This campaign bridges that gap, ensuring no child is left behind in their educational journey and life aspirations.
                        </p>
                        <button class="campaign-btn">Join Us</button>
                    </div>
                </div>
            </div>

            <!-- Additional Campaign Cards -->
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="campaign-card">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100'%3E%3Crect x='20' y='30' width='60' height='50' rx='5' fill='%2300715d'/%3E%3Crect x='30' y='40' width='40' height='30' fill='white'/%3E%3Crect x='20' y='25' width='60' height='8' fill='%2373c48f'/%3E%3C/svg%3E" alt="Students" class="campaign-icon">
                        <h3 class="campaign-title">For Students</h3>
                        <p class="campaign-text">
                            We provide scholarships, learning materials, and digital access to quality education for students from disadvantaged backgrounds.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="campaign-card">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100'%3E%3Ccircle cx='50' cy='40' r='15' fill='%23ffc107'/%3E%3Cpath d='M30 55 L50 65 L70 55 L70 85 L30 85 Z' fill='%2373c48f'/%3E%3C/svg%3E" alt="Teachers" class="campaign-icon">
                        <h3 class="campaign-title">For Teachers</h3>
                        <p class="campaign-text">
                            Training programs and resources for educators to enhance teaching methods and reach more students effectively.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="campaign-card">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100'%3E%3Ccircle cx='35' cy='35' r='12' fill='%2300715d'/%3E%3Ccircle cx='65' cy='35' r='12' fill='%2373c48f'/%3E%3Cpath d='M20 55 Q35 70 50 55 Q65 70 80 55' stroke='%23ffc107' stroke-width='4' fill='none'/%3E%3C/svg%3E" alt="Communities" class="campaign-icon">
                        <h3 class="campaign-title">For Communities</h3>
                        <p class="campaign-text">
                            Building sustainable educational infrastructure and awareness programs that involve entire communities in the learning process.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="floating-icons">
            <i class="fas fa-chalkboard-teacher" style="left: 5%; font-size: 45px; animation-delay: 1s; color: var(--color-green);"></i>
            <i class="fas fa-laptop" style="left: 95%; font-size: 40px; animation-delay: 3s; color: var(--color-yellow);"></i>
        </div>
        <div class="container position-relative">
            <h2 class="section-heading">Our Approach To Education</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <h4 class="feature-title">Quality Content</h4>
                        <p class="feature-text">Curriculum designed by experts ensuring comprehensive learning experiences</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <h4 class="feature-title">Mentorship</h4>
                        <p class="feature-text">One-on-one guidance from experienced mentors for personalized growth</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h4 class="feature-title">Digital Access</h4>
                        <p class="feature-text">Technology-enabled learning platforms accessible to remote areas</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h4 class="feature-title">Community Support</h4>
                        <p class="feature-text">Building networks of support within communities for sustained impact</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dark Section - Challenges -->
    <section class="dark-section">
        <div class="floating-icons">
            <i class="fas fa-sun" style="left: 20%; font-size: 50px; animation-delay: 0s; color: var(--color-yellow);"></i>
            <i class="fas fa-meteor" style="left: 80%; font-size: 45px; animation-delay: 2s; color: var(--color-green);"></i>
        </div>
        <div class="container position-relative">
            <h2 class="dark-section-title">What's Ailing India's Education System?</h2>
            <p class="dark-section-text">
                Despite progress, India's education system faces significant challenges that prevent millions of children from accessing quality education. Understanding these issues is the first step toward creating meaningful change.
            </p>

            <div class="challenge-grid">
                <div class="challenge-item">
                    <i class="fas fa-graduation-cap"></i>
                    <h5 class="challenge-title">Quality Gap</h5>
                    <p class="challenge-text">Significant disparity in education quality between urban and rural areas affects learning outcomes</p>
                </div>
                <div class="challenge-item">
                    <i class="fas fa-money-bill-wave"></i>
                    <h5 class="challenge-title">Financial Barriers</h5>
                    <p class="challenge-text">Many families cannot afford basic educational expenses, forcing children to work instead</p>
                </div>
                <div class="challenge-item">
                    <i class="fas fa-tools"></i>
                    <h5 class="challenge-title">Infrastructure Deficit</h5>
                    <p class="challenge-text">Lack of proper school buildings, libraries, and learning materials in underserved areas</p>
                </div>
                <div class="challenge-item">
                    <i class="fas fa-users"></i>
                    <h5 class="challenge-title">Teacher Shortage</h5>
                    <p class="challenge-text">Insufficient number of qualified teachers, especially in rural and remote regions</p>
                </div>
                <div class="challenge-item">
                    <i class="fas fa-female"></i>
                    <h5 class="challenge-title">Gender Inequality</h5>
                    <p class="challenge-text">Girls face additional barriers including safety concerns and cultural biases against education</p>
                </div>
                <div class="challenge-item">
                    <i class="fas fa-wifi"></i>
                    <h5 class="challenge-title">Digital Divide</h5>
                    <p class="challenge-text">Limited access to internet and technology widens the gap in modern education</p>
                </div>
                <div class="challenge-item">
                    <i class="fas fa-home"></i>
                    <h5 class="challenge-title">Home Environment</h5>
                    <p class="challenge-text">Lack of educated family members to support children's learning journey</p>
                </div>
                <div class="challenge-item">
                    <i class="fas fa-heartbeat"></i>
                    <h5 class="challenge-title">Health Issues</h5>
                    <p class="challenge-text">Malnutrition and health problems affect children's ability to focus and learn effectively</p>
                </div>
            </div>
        </div>
    </section>





    <!-- Who's Handling Section -->
    <section class="facilitating-section">
        <div class="floating-icons">
            <i class="fas fa-users-cog" style="left: 25%; font-size: 40px; animation-delay: 1s; color: var(--color-dark-green);"></i>
            <i class="fas fa-chart-line" style="left: 75%; font-size: 45px; animation-delay: 3s; color: var(--color-green);"></i>
        </div>
        <div class="container position-relative">
            <div class="facilitating-content">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300" alt="Team Leader" class="facilitating-img" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22300%22 height=%22300%22%3E%3Ccircle cx=%22150%22 cy=%22150%22 r=%22145%22 fill=%22%2300715d%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 font-family=%22sans-serif%22 font-size=%2224%22 fill=%22white%22%3ELeadership%3C/text%3E%3C/svg%3E'">
                <div class="facilitating-text">
                    <h3 class="facilitating-title">Who's Handling The Campaign?</h3>
                    <p class="facilitating-desc">
                        Our campaign is led by a dedicated team of education experts, social workers, and volunteers who have decades of combined experience in grassroots education initiatives. We work closely with local communities, government bodies, and international organizations to ensure maximum impact and transparency in all our efforts.
                    </p>
                </div>
            </div>

            <div class="facilitating-content flex-row-reverse">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=300" alt="Facilitator" class="facilitating-img" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22300%22 height=%22300%22%3E%3Ccircle cx=%22150%22 cy=%22150%22 r=%22145%22 fill=%22%2373c48f%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 font-family=%22sans-serif%22 font-size=%2224%22 fill=%22white%22%3EFacilitator%3C/text%3E%3C/svg%3E'">
                <div class="facilitating-text">
                    <h3 class="facilitating-title">Who's Facilitating The Campaign?</h3>
                    <p class="facilitating-desc">
                        We partner with schools, NGOs, corporate sponsors, and government agencies to facilitate our programs. Our network of volunteers includes teachers, professionals, and community leaders who are passionate about education. Together, we create a support ecosystem that ensures every child receives the attention and resources they need to thrive academically.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Responsible Team Final CTA -->
    <section class="responsible-section">
        <div class="floating-icons">
            <i class="fas fa-flag" style="left: 30%; font-size: 50px; animation-delay: 0s; color: var(--color-yellow);"></i>
            <i class="fas fa-bullseye" style="left: 70%; font-size: 45px; animation-delay: 2s; color: var(--color-green);"></i>
        </div>
        <div class="container position-relative">
            <p class="responsible-badge">BE A RESPONSIBLE INDIAN TODAY</p>
            <h2 class="responsible-title">Responsible Indian,</h2>
            <h3 class="responsible-subtitle">Become Responsible India & make it Possible.</h3>
            <button class="responsible-btn">JOIN THE MOVEMENT</button>
        </div>
    </section>
@endsection

@section('script')
    <script>
        // Generate random floating icons dynamically
        function createFloatingIcon() {
            const icons = ['fa-book', 'fa-graduation-cap', 'fa-heart', 'fa-users', 'fa-lightbulb', 'fa-star', 'fa-pencil-alt'];
            const colors = ['var(--color-yellow)', 'var(--color-green)', 'var(--color-dark-green)'];
            
            document.querySelectorAll('.floating-icons').forEach(container => {
                if (container.children.length < 6) {
                    for (let i = 0; i < 3; i++) {
                        const icon = document.createElement('i');
                        icon.className = `fas ${icons[Math.floor(Math.random() * icons.length)]}`;
                        icon.style.left = Math.random() * 100 + '%';
                        icon.style.fontSize = (30 + Math.random() * 20) + 'px';
                        icon.style.animationDelay = Math.random() * 5 + 's';
                        icon.style.color = colors[Math.floor(Math.random() * colors.length)];
                        container.appendChild(icon);
                    }
                }
            });
        }

        createFloatingIcon();
    </script>
@endsection
