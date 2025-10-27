@extends('master.frontmaster')
@section('css')
<style>
        :root {
            --primary-yellow: rgb(255,193,7);
            --primary-green: rgb(115,196,143);
        }
        
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }
        
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, var(--primary-green) 100%);
            color: white;
            padding: 150px 0 100px;
            text-align: center;
            position: relative;
            overflow: hidden;
            min-height: 400px;
            display: flex;
            align-items: center;
            margin-top: 80px;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="80" height="80" xmlns="http://www.w3.org/2000/svg"><polygon points="40,10 50,35 25,35" fill="rgba(255,255,255,0.1)"/></svg>') repeat;
            animation: movePattern 25s linear infinite;
            opacity: 0.3;
        }

        .hero-section::after {
            content: '';
            position: absolute;
            top: -40%;
            left: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, transparent 70%);
            border-radius: 50%;
            animation: pulse 4s ease-in-out infinite;
        }
        
        .hero-section .container {
            position: relative;
            z-index: 2;
        }

        .hero-section .decoration-pattern {
            position: absolute;
            width: 100px;
            height: 100px;
            opacity: 0.1;
            animation: float 12s ease-in-out infinite;
        }

        .pattern-1 {
            top: 15%;
            left: 10%;
            background: var(--primary-yellow);
            clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
        }

        .pattern-2 {
            bottom: 25%;
            right: 12%;
            background: white;
            border-radius: 50%;
        }

        .pattern-3 {
            top: 60%;
            left: 15%;
            background: var(--primary-yellow);
            border-radius: 50%;
            animation-delay: 3s;
        }
        
        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 25px;
            background: linear-gradient(135deg, #fff 0%, rgba(255,255,255,0.8) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            position: relative;
            display: inline-block;
            animation: fadeInDown 0.8s ease;
        }

        .hero-section h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 120px;
            height: 4px;
            background: linear-gradient(90deg, transparent, var(--primary-yellow), transparent);
            border-radius: 2px;
        }
        
        .hero-section p {
            font-size: 1.3rem;
            max-width: 800px;
            margin: 0 auto;
            color: rgba(255,255,255,0.95);
            line-height: 1.8;
            text-shadow: 0 2px 10px rgba(0,0,0,0.1);
            animation: fadeInUp 0.8s ease;
        }

        @keyframes movePattern {
            0% { transform: translate(0, 0); }
            100% { transform: translate(80px, 80px); }
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.4; }
            50% { transform: scale(1.1); opacity: 0.2; }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
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
            .hero-section {
                padding: 120px 0 80px;
                min-height: 350px;
            }
            
            .hero-section h1 {
                font-size: 2.5rem;
            }
            
            .hero-section p {
                font-size: 1.1rem;
                padding: 0 20px;
            }

            .decoration-pattern {
                display: none;
            }
        }

        @media (max-width: 576px) {
            .hero-section {
                min-height: 300px;
                padding: 100px 0 60px;
            }

            .hero-section h1 {
                font-size: 2rem;
            }

            .hero-section p {
                font-size: 1rem;
            }
        }
        
        .profile-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }
        
        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        
        .profile-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid var(--primary-yellow);
            margin: 0 auto 20px;
            display: block;
        }
        
        .profile-name {
            color: var(--primary-green);
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 15px;
            text-align: center;
        }
        
        .profile-description {
            text-align: justify;
            color: #666;
            font-size: 0.95rem;
        }
        
        .qualities-section {
            background: #f8f9fa;
            padding: 60px 0;
        }
        
        .section-title {
            color: var(--primary-green);
            font-size: 2.2rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 50px;
        }
        
        .quality-item {
            background: white;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 20px;
            border-left: 5px solid var(--primary-yellow);
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        }
        
        .quality-number {
            background: var(--primary-yellow);
            color: white;
            width:30px;
            height: 30px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 15px;
        }
        
        .quality-title {
            color: var(--primary-green);
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .quality-description {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.6;
        }
        
        .intro-section {
            padding: 50px 0;
            background: white;
        }
        
        .intro-text1 {
            font-size: 1.1rem;
            color: #555;
            text-align: justify;
            background: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            border-left: 5px solid var(--primary-green);
        }
    </style>
@endsection
@section('content')
 
<!-- Hero Section -->
    <section class="hero-section">
        <div class="decoration-pattern pattern-1"></div>
        <div class="decoration-pattern pattern-2"></div>
        <div class="decoration-pattern pattern-3"></div>
        <div class="container">
            <h1><i class="fas fa-users me-3"></i>Influential People</h1>
            <p>Discover the stories of remarkable individuals who have shaped our world through their wisdom, dedication, and transformative impact on society.</p>
        </div>
    </section>

    

    <!-- Profiles Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Sadhguru -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="profile-card">
                        <img src="{{asset('frontend_assets/images/board/1.png')}}" alt="Sadhguru" class="profile-image">
                        <h3 class="profile-name">Sadhguru</h3>
                        <p class="profile-description">
                            Sadhguru is a Yogi, Mystic, and Visionary. Named one of India's 50 most influential people, Sadhguru's work has touched the lives of millions worldwide through his transformational programs. Sadhguru has a unique ability to make the ancient yogic sciences relevant to contemporary minds. He does not ascribe to any belief system, but offers powerful and proven methods for self-transformation.
                        </p>
                    </div>
                </div>

                <!-- Bhagat Puran Singh -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="profile-card">
                        <img src="{{asset('frontend_assets/images/board/2.png')}}" alt="Bhagat Puran Singh" class="profile-image">
                        <h3 class="profile-name">Bhagat Puran Singh</h3>
                        <p class="profile-description">
                            Bhagat Puran Singh was one of India's finest humanitarians and definitely one of the most loved and esteemed names in the world. Many people describe him as the beautiful Mother Teresa of Punjab. Bhagat Ji had nothing except his single-minded dedication to serve the poor and sick. He was totally oblivious to the consideration of mentally and physically handicapped and the dying. His name has been written in letters of gold in the history of the world.
                        </p>
                    </div>
                </div>

                <!-- Mahatma Gandhi -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="profile-card">
                        <img src="{{asset('frontend_assets/images/board/3.png')}}" alt="Mahatma Gandhi" class="profile-image">
                        <h3 class="profile-name">Mahatma Gandhi</h3>
                        <p class="profile-description">
                            There is not a single country in the whole world where the name of Mahatma Gandhi is not known. Do you know why Gandhi became so famous? It was because he dedicated his whole life to the service of the motherland, and service of humanity a real Mahatma. Gandhi was a great leader of India. He loved humanity and had taught the importance of truth, brotherhood, peace, non-violence, equality & simplicity.
                        </p>
                    </div>
                </div>

                <!-- Siddhartha Sinha -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="profile-card">
                        <img src="{{asset('frontend_assets/images/board/4.png')}}" alt="Siddhartha Sinha" class="profile-image">
                        <h3 class="profile-name">Siddhartha Sinha</h3>
                        <p class="profile-description">
                            It is very painful to see that a person is changing the way life has changed in just 2-3 hours. Same thing happened with Siddhartha Sinha. It was just at the age of 22, he had a paralysis stroke, while driving back to his home and since then his left hand and leg stopped working. But with his courage, bravery and dedication, he is fulfilling his professional and personal responsibilities. Salute to his spirit and he is a good example of our youth and for society.
                        </p>
                    </div>
                </div>

                <!-- Manika Mazumdar -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="profile-card">
                        <img src="{{asset('frontend_assets/images/board/1.png')}}" alt="Manika Mazumdar" class="profile-image">
                        <h3 class="profile-name">Manika Mazumdar</h3>
                        <p class="profile-description">
                            Meet A School Dropout & Barefoot Soldier Who Has Helped Over 5500 People Battling Depression and Suicidal Thoughts. There is a lot one can learn from Manika. Few get traumatised from their struggles, and few learn. Manika is now using her experiences of childhood, the abuse she suffered, violence she saw in her neighbourhood. She has helped people understand and counsel other patients of mental health and be empathetic about them.
                        </p>
                    </div>
                </div>

                <!-- Kalawati Devi -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="profile-card">
                        <img src="{{asset('frontend_assets/images/board/2.png')}}" alt="Kalawati Devi" class="profile-image">
                        <h3 class="profile-name">Kalawati Devi</h3>
                        <p class="profile-description">
                            The life story of Kalawati Devi of Uttar Pradesh's Kanpur is extraordinary. She is an inspiration for thousands of people. At the age of 95, she is in the media accounts today and shared her inspiring story of budding toilets for those who can't afford them. She raised money from her village and mobilised people about importance of cleanliness. Through her strong determination, she has connected thousands of toilets and encouraged people to use them.
                        </p>
                    </div>
                </div>

                <!-- Arunima Sinha -->
                <div class="col-lg-12 mb-4">
                    <div class="profile-card">
                        <div class="row align-items-center">
                            <div class="col-md-3 text-center">
                                <img src="{{asset('frontend_assets/images/board/3.png')}}" alt="Arunima Sinha" class="profile-image">
                            </div>
                            <div class="col-md-9">
                                <h3 class="profile-name text-start">Arunima Sinha</h3>
                                <p class="profile-description">
                                    Arunima Sinha, the national level volleyball player has become world's first Indian female amputee to climb Mount Everest even after going through a tragedy in which I lost my one leg. I had serious leg and pelvic injuries, and to save my life, doctors amputated my left leg. At hospital I lost my leg but didn't lose my confidence. Now I want to live my life with dignity and self-respect so that people don't look at me with pity.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Qualities Section -->
    <section class="qualities-section">
        <div class="container">
            <h2 class="section-title">Five Core Qualities of Being an Influencer</h2>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="quality-item">
                        <div class="d-flex align-items-start">
                            <div class="quality-number">1</div>
                            <div>
                                <h4 class="quality-title">Inspiring others to be more</h4>
                                <p class="quality-description">
                                    People who have influence that succeed isn't just about what they accomplish themselves, it's about how they inspire others to accomplish more. Show are a great influencer and I can promise they will be focused on inspiring those around them.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="quality-item">
                        <div class="d-flex align-items-start">
                            <div class="quality-number">2</div>
                            <div>
                                <h4 class="quality-title">Gritical part of how the influence succeed</h4>
                                <p class="quality-description">
                                    Influencers are always looking for opportunities to help others. They don't wonder "what's in it for me", they're creators who focus on making a difference in others lives in a positive way by supporting them, helping them, and guiding them. Influencers know that the value in helping others succeed is priceless.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="quality-item">
                        <div class="d-flex align-items-start">
                            <div class="quality-number">3</div>
                            <div>
                                <h4 class="quality-title">Refusing to keep score</h4>
                                <p class="quality-description">
                                    I once overheard someone who's considered a very important influencer say "I only give to those who have something to give me." No matter how important an influencer, Nothing destroys relationships quicker than scorekeeping, and influence is built only on relationships.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="quality-item">
                        <div class="d-flex align-items-start">
                            <div class="quality-number">4</div>
                            <div>
                                <h4 class="quality-title">Connecting people</h4>
                                <p class="quality-description">
                                    Influence comes from connecting people with one another not only enriches their lives and helps them succeed, it enriches our own lives and helps us succeed. Only through connections and relationships are influencers really able to know and enhance themselves, and only through working within themselves can they begin to truly understand others.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mb-4">
                    <div class="quality-item">
                        <div class="d-flex align-items-start">
                            <div class="quality-number">5</div>
                            <div>
                                <h4 class="quality-title">Additional Qualities</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="quality-description mb-3">
                                            <strong>Bringing value:</strong> The very presence of an influencer brings value to wherever they do or support. The best influencers show up with ideas, insight, energy, and optimism at every opportunity to add value, and they make it a point to add more than expected. Otherwise, what's the point?
                                        </p>
                                        <p class="quality-description mb-3">
                                            <strong>Earning trust and respect:</strong> Influencers know the importance of being someone who is trusted and respected, and they do whatever it takes to earn respect and trust. This commitment makes them a powerful advocate for doing the right things the right way. Trust and respect are the cornerstones of any relationship; you can't influence others without a strong and deep personal foundation.
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="quality-description mb-3">
                                            <strong>Celebrating diversity and inclusion:</strong> The moment you shut yourself off from others is the moment you stop having any impact. If you think only certain people can make a difference while others cannot, that same old influence that others are used. then your influence has far less significant than you think it is. The moment you feel superior to the moment you made, yourself inferior. True influencers see diversity as a strength and inclusion creates value.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection