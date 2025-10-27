@extends('master.frontmaster')
@section('css')
<style>
    :root {
        --primary-yellow: #fdc341;
        --primary-green: #73c48f;
        --text-dark: #2c3e50;
        --text-light: #6c757d;
        --bg-light: #f8f9fa;
        --shadow-sm: 0 2px 8px rgba(0,0,0,0.08);
        --shadow-md: 0 8px 30px rgba(0,0,0,0.12);
        --shadow-lg: 0 15px 50px rgba(0,0,0,0.2);
    }

   

    /* Hero Section */
    .team-hero {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, var(--primary-green) 100%);
        padding: 150px 0 100px;
        margin-top: 80px;
        position: relative;
        overflow: hidden;
        min-height: 400px;
        display: flex;
        align-items: center;
    }

    .team-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg width="60" height="60" xmlns="http://www.w3.org/2000/svg"><circle cx="30" cy="30" r="1.5" fill="rgba(255,255,255,0.15)"/></svg>') repeat;
        animation: movePattern 20s linear infinite;
    }

    .team-hero::after {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        border-radius: 50%;
        animation: pulse 4s ease-in-out infinite;
    }

    .team-hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
        color: white;
    }

    .team-hero h1 {
        font-size: 3.5rem;
        font-weight: 800;
        margin-bottom: 25px;
        background: linear-gradient(135deg, #fff 0%, rgba(255,255,255,0.8) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: fadeInDown 0.8s ease;
        position: relative;
        display: inline-block;
    }

    .team-hero h1::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 4px;
        background: linear-gradient(90deg, transparent, var(--primary-yellow), transparent);
        border-radius: 2px;
    }

    .team-hero p {
        font-size: 1.3rem;
        max-width: 700px;
        margin: 0 auto;
        color: rgba(255,255,255,0.95);
        line-height: 1.8;
        animation: fadeInUp 0.8s ease;
        text-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    /* Decorative elements */
    .team-hero .decoration-circle {
        position: absolute;
        border-radius: 50%;
        opacity: 0.1;
        animation: float 15s ease-in-out infinite;
    }

    .decoration-circle-1 {
        width: 150px;
        height: 150px;
        background: var(--primary-yellow);
        top: 20%;
        left: 10%;
        animation-delay: 0s;
    }

    .decoration-circle-2 {
        width: 100px;
        height: 100px;
        background: var(--primary-green);
        bottom: 30%;
        right: 15%;
        animation-delay: 2s;
    }

    .decoration-circle-3 {
        width: 80px;
        height: 80px;
        background: white;
        top: 60%;
        left: 15%;
        animation-delay: 4s;
    }

    @keyframes movePattern {
        0% { transform: translate(0, 0); }
        100% { transform: translate(60px, 60px); }
    }

    @keyframes pulse {
        0%, 100% { transform: scale(1); opacity: 0.5; }
        50% { transform: scale(1.1); opacity: 0.3; }
    }

    /* Member Cards */
    .members-container {
        padding: 80px 0;
        position: relative;
    }

    .member-card-new {
        background: white;
        border-radius: 24px;
        margin-bottom: 50px;
        box-shadow: var(--shadow-sm);
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
    }

    .member-card-new::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 6px;
        background: linear-gradient(90deg, var(--primary-yellow) 0%, var(--primary-green) 100%);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.4s ease;
    }

    .member-card-new:hover::before {
        transform: scaleX(1);
    }

    .member-card-new:hover {
        transform: translateY(-12px) scale(1.02);
        box-shadow: var(--shadow-lg);
    }

    .member-card-inner {
        display: flex;
        align-items: center;
        padding: 40px;
        gap: 40px;
    }

    /* Image Section */
    .member-image-wrapper {
        flex-shrink: 0;
        position: relative;
    }

    .member-image-container {
        width: 220px;
        height: 220px;
        border-radius: 20px;
        overflow: hidden;
        position: relative;
        box-shadow: var(--shadow-md);
        transition: all 0.4s ease;
    }

    .member-card-new:hover .member-image-container {
        transform: scale(1.05) rotate(2deg);
        box-shadow: 0 20px 40px rgba(0,0,0,0.3);
    }

    .member-image-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, var(--primary-yellow) 0%, var(--primary-green) 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
        z-index: 1;
    }

    .member-card-new:hover .member-image-container::before {
        opacity: 0.2;
    }

    .member-photo-new {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .member-card-new:hover .member-photo-new {
        transform: scale(1.15);
    }

    .member-badge {
        position: absolute;
        bottom: -10px;
        right: -10px;
        background: var(--primary-yellow);
        color: white;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1.2rem;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        animation: pulse 2s infinite;
    }

    /* Content Section */
    .member-content-new {
        flex: 1;
        min-width: 0;
    }

    .member-name-new {
        color: var(--text-dark);
        font-weight: 700;
        font-size: 2rem;
        margin-bottom: 15px;
        position: relative;
        display: inline-block;
    }

    .member-name-new::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 0;
        height: 3px;
        background: var(--primary-yellow);
        transition: width 0.4s ease;
    }

    .member-card-new:hover .member-name-new::after {
        width: 100%;
    }

    .member-role {
        display: inline-block;
        background: linear-gradient(135deg, var(--primary-green), #5fb383);
        color: white;
        padding: 6px 18px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 600;
        margin-bottom: 20px;
        box-shadow: 0 2px 8px rgba(115,196,143,0.3);
    }

    .member-bio-new {
        color: var(--text-light);
        line-height: 1.8;
        font-size: 1.05rem;
        margin: 0;
        text-align: justify;
    }

    .member-stats {
        display: flex;
        gap: 30px;
        margin-top: 25px;
        padding-top: 25px;
        border-top: 1px solid #e0e0e0;
    }

    .stat-item {
        display: flex;
        align-items: center;
        gap: 10px;
        color: var(--text-light);
        font-size: 0.95rem;
    }

    .stat-icon {
        width: 32px;
        height: 32px;
        background: var(--bg-light);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-green);
        transition: all 0.3s ease;
    }

    .member-card-new:hover .stat-icon {
        background: var(--primary-green);
        color: white;
        transform: scale(1.1);
    }

    /* Animations */
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

    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.1);
        }
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .member-card-inner {
            padding: 30px;
            gap: 30px;
        }

        .member-image-container {
            width: 180px;
            height: 180px;
        }

        .member-name-new {
            font-size: 1.7rem;
        }

        .member-bio-new {
            font-size: 1rem;
        }
    }

    @media (max-width: 768px) {
        .team-hero {
            padding: 120px 0 80px;
            min-height: 350px;
        }

        .team-hero h1 {
            font-size: 2.5rem;
        }

        .team-hero p {
            font-size: 1.1rem;
            padding: 0 20px;
        }

        .decoration-circle {
            display: none;
        }

        .member-card-inner {
            flex-direction: column;
            padding: 30px 20px;
            gap: 25px;
            text-align: center;
        }

        .member-image-container {
            width: 200px;
            height: 200px;
        }

        .member-name-new {
            font-size: 1.6rem;
        }

        .member-bio-new {
            text-align: left;
        }

        .member-stats {
            flex-wrap: wrap;
            justify-content: center;
        }
    }

    @media (max-width: 576px) {
        .team-hero {
            min-height: 300px;
            padding: 100px 0 60px;
        }

        .team-hero h1 {
            font-size: 2rem;
        }

        .team-hero p {
            font-size: 1rem;
        }

        .member-card-inner {
            padding: 25px 15px;
        }

        .member-image-container {
            width: 160px;
            height: 160px;
        }

        .member-name-new {
            font-size: 1.4rem;
        }

        .member-bio-new {
            font-size: 0.95rem;
        }
    }

    /* Decorative Elements */
    .floating-shape {
        position: absolute;
        border-radius: 50%;
        opacity: 0.1;
        animation: float 6s ease-in-out infinite;
    }

    .shape-1 {
        width: 100px;
        height: 100px;
        background: var(--primary-yellow);
        top: 10%;
        left: 5%;
        animation-delay: 0s;
    }

    .shape-2 {
        width: 150px;
        height: 150px;
        background: var(--primary-green);
        top: 60%;
        right: 8%;
        animation-delay: 2s;
    }

    .shape-3 {
        width: 80px;
        height: 80px;
        background: var(--primary-yellow);
        bottom: 15%;
        left: 10%;
        animation-delay: 4s;
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0) rotate(0deg);
        }
        50% {
            transform: translateY(-20px) rotate(180deg);
        }
    }
</style>
@endsection

@section('content')
<!-- Team Hero Section -->
<section class="team-hero">
    <div class="decoration-circle decoration-circle-1"></div>
    <div class="decoration-circle decoration-circle-2"></div>
    <div class="decoration-circle decoration-circle-3"></div>
    <div class="container">
        <div class="team-hero-content">
            <h1>Core Team Members</h1>
            <p>Meet the passionate individuals driving our mission forward with dedication, innovation, and unwavering commitment to making a difference.</p>
        </div>
    </div>
</section>

<!-- Members Section -->
<section class="members-container">
    <div class="floating-shape shape-1"></div>
    <div class="floating-shape shape-2"></div>
    <div class="floating-shape shape-3"></div>
    
    <div class="container">
        <!-- Member 1 -->
        <div class="member-card-new" data-aos="fade-up" data-aos-duration="600">
            <div class="member-card-inner">
                <div class="member-image-wrapper">
                    <div class="member-image-container">
                        <img src="{{asset('frontend_assets/images/members/member1.png')}}" alt="Pooja Srivastav" class="member-photo-new">
                    </div>
                    <div class="member-badge">1</div>
                </div>
                <div class="member-content-new">
                    <h3 class="member-name-new">Pooja Srivastav</h3>
                    <span class="member-role">Core Team Member</span>
                    <p class="member-bio-new">
                        The situation and transforming it powerfully. Positive & negative both are part of our life and we cannot have one alone, but we can have the ability to handle both with a POWERFUL MINDSET. Spreading this energy to people I meet every day. Life is about embracing challenges and turning them into opportunities for growth and transformation.
                    </p>
                    <div class="member-stats">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <span>Mindset Coach</span>
                        </div>
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <span>People Connector</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Member 2 -->
        <div class="member-card-new" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
            <div class="member-card-inner">
                <div class="member-image-wrapper">
                    <div class="member-image-container">
                        <img src="{{asset('frontend_assets/images/members/member2.png')}}" alt="Sanjeev Mishra" class="member-photo-new">
                    </div>
                    <div class="member-badge">2</div>
                </div>
                <div class="member-content-new">
                    <h3 class="member-name-new">Sanjeev Mishra</h3>
                    <span class="member-role">Core Team Member</span>
                    <p class="member-bio-new">
                        Lots of privileged society who got ALFA, when times came to defend their society these ALFA never stood against wrong. This system runs for thousands of years and the habit of taking responsibility puts human civilization on top of the food chain. True leadership means standing up for what's right, even when it's difficult, and taking responsibility for the betterment of society.
                    </p>
                    <div class="member-stats">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <span>Social Advocate</span>
                        </div>
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            <span>Justice Seeker</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Member 3 -->
        <div class="member-card-new" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
            <div class="member-card-inner">
                <div class="member-image-wrapper">
                    <div class="member-image-container">
                        <img src="{{asset('frontend_assets/images/members/member3.png')}}" alt="Santhosh P.P" class="member-photo-new">
                    </div>
                    <div class="member-badge">3</div>
                </div>
                <div class="member-content-new">
                    <h3 class="member-name-new">Santhosh P.P</h3>
                    <span class="member-role">Core Team Member</span>
                    <p class="member-bio-new">
                        Togetherness is a beautiful word and emotionally connected is the best form of mind. It's not only children but adults who need emotional attachment. They need attention, care like siblings. Let us share love and beauty of life equally. Building strong emotional connections and fostering a sense of belonging creates a more compassionate and understanding world.
                    </p>
                    <div class="member-stats">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <span>Community Builder</span>
                        </div>
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="fas fa-hands-helping"></i>
                            </div>
                            <span>Care Advocate</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Member 4 -->
        <div class="member-card-new" data-aos="fade-up" data-aos-duration="600">
            <div class="member-card-inner">
                <div class="member-image-wrapper">
                    <div class="member-image-container">
                        <img src="{{asset('frontend_assets/images/members/member4.png')}}" alt="Dr. Priyam Sameer Kamdar" class="member-photo-new">
                    </div>
                    <div class="member-badge">4</div>
                </div>
                <div class="member-content-new">
                    <h3 class="member-name-new">Dr. Priyam Sameer Kamdar</h3>
                    <span class="member-role">Core Team Member</span>
                    <p class="member-bio-new">
                        आदत रता है तैयारी, बदलो अपनी रोप... Change is inevitable, one who adapts it positively, wins the world. Having a positive attitude, thoughtfulness and mindset can really make a difference in life. Embracing change with optimism and maintaining a growth mindset enables us to overcome any challenge and achieve extraordinary success.
                    </p>
                    <div class="member-stats">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="fas fa-brain"></i>
                            </div>
                            <span>Change Advocate</span>
                        </div>
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <span>Positive Thinker</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Member 5 -->
        <div class="member-card-new" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
            <div class="member-card-inner">
                <div class="member-image-wrapper">
                    <div class="member-image-container">
                        <img src="{{asset('frontend_assets/images/members/member5.png')}}" alt="Chandra Shekhar Shukla" class="member-photo-new">
                    </div>
                    <div class="member-badge">5</div>
                </div>
                <div class="member-content-new">
                    <h3 class="member-name-new">Chandra Shekhar Shukla</h3>
                    <span class="member-role">Core Team Member</span>
                    <p class="member-bio-new">
                        कताल करता जीवे कर सहारा बनता है, बमता है खुशी या और सीमा है। जीवन पर काम हर किसी को करम, जिंदगी पूर्ण प्रवास। Life is about creating meaningful connections and spreading joy to everyone we meet. Every interaction is an opportunity to make someone's day better and contribute to a more harmonious society.
                    </p>
                    <div class="member-stats">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="fas fa-smile"></i>
                            </div>
                            <span>Joy Spreader</span>
                        </div>
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="fas fa-link"></i>
                            </div>
                            <span>Connection Maker</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Member 6 -->
        <div class="member-card-new" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
            <div class="member-card-inner">
                <div class="member-image-wrapper">
                    <div class="member-image-container">
                        <img src="{{asset('frontend_assets/images/members/member6.png')}}" alt="Seema Yadav" class="member-photo-new">
                    </div>
                    <div class="member-badge">6</div>
                </div>
                <div class="member-content-new">
                    <h3 class="member-name-new">Seema Yadav</h3>
                    <span class="member-role">Core Team Member</span>
                    <p class="member-bio-new">
                        सब के दिलदार जब आती है, कार को की उदारता है। जिंदगी को जैसे प्रभावै है, छोटे में तकदीर बनते है। When we approach life with kindness and generosity, we create beautiful relationships and meaningful impacts. Small acts of kindness can transform lives and build bridges of understanding and compassion in our communities.
                    </p>
                    <div class="member-stats">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="fas fa-hand-holding-heart"></i>
                            </div>
                            <span>Kindness Ambassador</span>
                        </div>
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="fas fa-seedling"></i>
                            </div>
                            <span>Impact Creator</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection