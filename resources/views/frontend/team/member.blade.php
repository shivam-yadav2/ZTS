@extends('master.frontmaster')
@section('css')
<style>
    :root {
        --primary-yellow: #fdc341;
        --primary-green: #73c48f;
        --text-dark: #2c3e50;
        --text-light: #6c757d;
        --bg-light: #f8f9fa;
        --accent-purple: #9b59b6;
        --accent-blue: #3498db;
    }

    * {
        font-family: 'Inter', sans-serif;
    }

    body {
        background: linear-gradient(to bottom, #ffffff 0%, #f8f9fa 100%);
    }

    /* Header Section */
    .team-header {
        text-align: center;
        padding: 150px 0 100px;
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 50%, var(--primary-green) 100%);
        margin-top: 80px;
        min-height: 400px;
        display: flex;
        align-items: center;
    }

    .team-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg width="120" height="120" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="60" r="2" fill="rgba(255,255,255,0.15)"/></svg>') repeat;
        animation: rotate 20s linear infinite;
        opacity: 0.3;
    }

    .team-header::after {
        content: '';
        position: absolute;
        top: -30%;
        right: -10%;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(255,255,255,0.15) 0%, transparent 70%);
        border-radius: 50%;
        animation: pulse 5s ease-in-out infinite;
    }

    .team-header .decoration {
        position: absolute;
        opacity: 0.15;
        animation: floatSlow 20s ease-in-out infinite;
    }

    .dec-1 {
        width: 200px;
        height: 200px;
        background: var(--primary-yellow);
        top: 10%;
        left: 5%;
        clip-path: polygon(30% 0%, 70% 0%, 100% 30%, 70% 70%, 30% 70%, 0% 30%);
    }

    .dec-2 {
        width: 150px;
        height: 150px;
        background: white;
        bottom: 20%;
        right: 8%;
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        animation-delay: 2s;
    }

    .dec-3 {
        width: 100px;
        height: 100px;
        background: var(--primary-green);
        top: 50%;
        left: 12%;
        border-radius: 50%;
        animation-delay: 4s;
    }

    @keyframes rotate {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    @keyframes pulse {
        0%, 100% { transform: scale(1); opacity: 0.5; }
        50% { transform: scale(1.1); opacity: 0.3; }
    }

    @keyframes floatSlow {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-30px) rotate(180deg); }
    }

    .section-title {
        position: relative;
        z-index: 2;
        color: white;
        font-weight: 800;
        font-size: 3.5rem;
        margin-bottom: 25px;
        display: inline-block;
        background: linear-gradient(135deg, #fff 0%, rgba(255,255,255,0.8) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: fadeInDown 0.8s ease;
    }

    .section-title::after {
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

    .section-title span {
        background: linear-gradient(135deg, #fff, var(--primary-yellow));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .section-subtitle {
        color: rgba(255,255,255,0.95);
        font-size: 1.3rem;
        max-width: 700px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
        line-height: 1.8;
        text-shadow: 0 2px 10px rgba(0,0,0,0.1);
        animation: fadeInUp 0.8s ease;
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

    /* Grid Layout */
    .team-grid {
        padding: 60px 0;
    }

    .member-card {
        background: white;
        border-radius: 20px;
        padding: 0;
        margin-bottom: 40px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.08);
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .member-card::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, var(--primary-yellow), var(--primary-green));
        opacity: 0;
        transition: opacity 0.4s ease;
        z-index: 0;
    }

    .member-card:hover {
        transform: translateY(-15px) scale(1.03);
        box-shadow: 0 20px 40px rgba(0,0,0,0.2);
    }

    .member-card:hover::after {
        opacity: 0.05;
    }

    /* Image Container */
    .member-image-wrapper {
        position: relative;
        height: 280px;
        overflow: hidden;
        background: linear-gradient(135deg, var(--bg-light) 0%, #e8eef2 100%);
    }

    .member-photo {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .member-card:hover .member-photo {
        transform: scale(1.15) rotate(3deg);
    }

    .member-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.7) 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .member-card:hover .member-overlay {
        opacity: 1;
    }

    .member-number {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        background: rgba(255,255,255,0.95);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        font-size: 1.3rem;
        color: var(--primary-green);
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        z-index: 2;
        transition: all 0.4s ease;
    }

    .member-card:hover .member-number {
        background: var(--primary-yellow);
        color: white;
        transform: rotate(360deg) scale(1.1);
    }

    /* Content Section */
    .member-content {
        padding: 30px;
        position: relative;
        z-index: 1;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .member-name {
        color: var(--text-dark);
        font-weight: 700;
        font-size: 1.5rem;
        margin-bottom: 15px;
        transition: color 0.3s ease;
        position: relative;
        display: inline-block;
    }

    .member-card:hover .member-name {
        color: var(--primary-green);
    }

    .member-divider {
        width: 50px;
        height: 3px;
        background: linear-gradient(90deg, var(--primary-yellow), var(--primary-green));
        margin-bottom: 20px;
        border-radius: 2px;
        transition: width 0.4s ease;
    }

    .member-card:hover .member-divider {
        width: 100px;
    }

    .member-bio {
        color: var(--text-light);
        line-height: 1.8;
        font-size: 0.95rem;
        text-align: justify;
        flex: 1;
    }

    /* Quote Style */
    .member-bio::first-line {
        font-weight: 600;
        color: var(--text-dark);
    }

    /* Action Footer */
    .member-footer {
        padding: 0 30px 30px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
        z-index: 1;
    }

    .member-tag {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 16px;
        background: var(--bg-light);
        border-radius: 20px;
        font-size: 0.85rem;
        color: var(--text-light);
        transition: all 0.3s ease;
    }

    .member-tag i {
        color: var(--primary-green);
    }

    .member-card:hover .member-tag {
        background: var(--primary-green);
        color: white;
    }

    .member-card:hover .member-tag i {
        color: white;
    }

    .member-link {
        width: 40px;
        height: 40px;
        background: var(--primary-yellow);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 3px 10px rgba(253,195,65,0.3);
    }

    .member-link:hover {
        background: var(--primary-green);
        transform: scale(1.2) rotate(90deg);
        box-shadow: 0 5px 20px rgba(115,196,143,0.5);
    }

    /* Decorative Elements */
    .floating-icon {
        position: absolute;
        font-size: 3rem;
        opacity: 0.03;
        pointer-events: none;
    }

    .icon-1 {
        top: 10%;
        left: 5%;
        color: var(--primary-yellow);
        animation: float-1 8s ease-in-out infinite;
    }

    .icon-2 {
        top: 50%;
        right: 8%;
        color: var(--primary-green);
        animation: float-2 10s ease-in-out infinite;
    }

    .icon-3 {
        bottom: 15%;
        left: 10%;
        color: var(--primary-yellow);
        animation: float-3 12s ease-in-out infinite;
    }

    @keyframes float-1 {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-30px) rotate(180deg); }
    }

    @keyframes float-2 {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(40px) rotate(-180deg); }
    }

    @keyframes float-3 {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(90deg); }
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .section-title {
            font-size: 2.5rem;
        }

        .member-image-wrapper {
            height: 250px;
        }
    }

    @media (max-width: 768px) {
        .team-header {
            padding: 120px 0 80px;
            min-height: 350px;
        }

        .section-title {
            font-size: 2.5rem;
        }

        .section-subtitle {
            font-size: 1.1rem;
            padding: 0 20px;
        }

        .decoration {
            display: none;
        }
    }

    @media (max-width: 576px) {
        .team-header {
            min-height: 300px;
            padding: 100px 0 60px;
        }

        .section-title {
            font-size: 2rem;
        }

        .section-subtitle {
            font-size: 1rem;
        }
    }

        .member-image-wrapper {
            height: 300px;
        }

        .member-content {
            padding: 25px;
        }

        .member-footer {
            padding: 0 25px 25px;
        }
    }

    @media (max-width: 576px) {
        .member-card {
            margin-bottom: 30px;
        }

        .member-image-wrapper {
            height: 280px;
        }

        .member-name {
            font-size: 1.3rem;
        }

        .member-bio {
            font-size: 0.9rem;
        }
    }

    /* Alternative Layout for Variety */
    .row-custom {
        display: flex;
        align-items: flex-start;
        gap: 20px;
    }

    @media (min-width: 1200px) {
        .member-card.horizontal {
            flex-direction: row;
            align-items: stretch;
        }

        .member-card.horizontal .member-image-wrapper {
            width: 40%;
            height: auto;
            min-height: 350px;
        }

        .member-card.horizontal .member-content-wrapper {
            width: 60%;
            display: flex;
            flex-direction: column;
        }
    }

    /* Stats Counter */
    .stats-wrapper {
        background: linear-gradient(135deg, var(--primary-green) 0%, #5fb383 100%);
        padding: 60px 0;
        margin: 80px 0;
        position: relative;
        overflow: hidden;
    }

    .stats-wrapper::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
        background-size: 50px 50px;
    }

    .stat-item {
        text-align: center;
        color: white;
        position: relative;
        z-index: 1;
    }

    .stat-number {
        font-size: 3rem;
        font-weight: 800;
        margin-bottom: 10px;
        display: block;
    }

    .stat-label {
        font-size: 1.1rem;
        opacity: 0.9;
    }
</style>
@endsection

@section('content')
<!-- Team Header -->
<section class="team-header">
    <div class="decoration dec-1"></div>
    <div class="decoration dec-2"></div>
    <div class="decoration dec-3"></div>
    <div class="container">
        <h2 class="section-title">
            Meet Our <span>Team Members</span>
        </h2>
        <p class="section-subtitle">
            Passionate individuals dedicated to making a positive impact in our community
        </p>
    </div>
</section>

<!-- Team Grid -->
<section class="team-grid">
    <div class="container">
        <div class="row">
            <!-- Member 1 -->
            <div class="col-lg-4 col-md-6 p-4" data-aos="fade-up" data-aos-duration="600">
                <div class="member-card">
                    <div class="member-image-wrapper">
                        <img src="{{asset('frontend_assets/images/members/member1.png')}}" alt="Pooja Srivastav" class="member-photo">
                        <div class="member-overlay"></div>
                        <div class="member-number">01</div>
                    </div>
                    <div class="member-content">
                        <h3 class="member-name">Pooja Srivastav</h3>
                        <div class="member-divider"></div>
                        <p class="member-bio">
                            The situation and transforming it powerfully. Positive & negative both are part of our life and we cannot have one alone, but we can have the ability to handle both with a POWERFUL MINDSET. Spreading this energy to people I meet every day.
                        </p>
                    </div>
                    <div class="member-footer">
                        <span class="member-tag">
                            <i class="fas fa-briefcase"></i>
                            Team Member
                        </span>
                        <a href="#" class="member-link">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Member 2 -->
            <div class="col-lg-4 col-md-6 p-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                <div class="member-card">
                    <div class="member-image-wrapper">
                        <img src="{{asset('frontend_assets/images/members/member2.png')}}" alt="Sanjeev Mishra" class="member-photo">
                        <div class="member-overlay"></div>
                        <div class="member-number">02</div>
                    </div>
                    <div class="member-content">
                        <h3 class="member-name">Sanjeev Mishra</h3>
                        <div class="member-divider"></div>
                        <p class="member-bio">
                            Lots of privileged society who got ALFA, when times came to defend their society these ALFA never stood against wrong. This system runs for thousands of years and the habit of taking responsibility puts human civilization on top of the food chain.
                        </p>
                    </div>
                    <div class="member-footer">
                        <span class="member-tag">
                            <i class="fas fa-briefcase"></i>
                            Team Member
                        </span>
                        <a href="#" class="member-link">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Member 3 -->
            <div class="col-lg-4 col-md-6 p-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                <div class="member-card">
                    <div class="member-image-wrapper">
                        <img src="{{asset('frontend_assets/images/members/member3.png')}}" alt="Santhosh P.P" class="member-photo">
                        <div class="member-overlay"></div>
                        <div class="member-number">03</div>
                    </div>
                    <div class="member-content">
                        <h3 class="member-name">Santhosh P.P</h3>
                        <div class="member-divider"></div>
                        <p class="member-bio">
                            Togetherness is a beautiful word and emotionally connected is the best form of mind. It's not only children but adults who need emotional attachment. They need attention, care like siblings. Let us share love and beauty of life equally.
                        </p>
                    </div>
                    <div class="member-footer">
                        <span class="member-tag">
                            <i class="fas fa-briefcase"></i>
                            Team Member
                        </span>
                        <a href="#" class="member-link">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Member 4 -->
            <div class="col-lg-4 col-md-6 p-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
                <div class="member-card">
                    <div class="member-image-wrapper">
                        <img src="{{asset('frontend_assets/images/members/member4.png')}}" alt="Dr. Priyam Sameer Kamdar" class="member-photo">
                        <div class="member-overlay"></div>
                        <div class="member-number">04</div>
                    </div>
                    <div class="member-content">
                        <h3 class="member-name">Dr. Priyam Sameer Kamdar</h3>
                        <div class="member-divider"></div>
                        <p class="member-bio">
                            आदत रता है तैयारी, बदलो अपनी रोप... Change is inevitable, one who adapts it positively, wins the world. Having a positive attitude, thoughtfulness and mindset can really make a difference in life.
                        </p>
                    </div>
                    <div class="member-footer">
                        <span class="member-tag">
                            <i class="fas fa-briefcase"></i>
                            Team Member
                        </span>
                        <a href="#" class="member-link">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Member 5 -->
            <div class="col-lg-4 col-md-6 p-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="400">
                <div class="member-card">
                    <div class="member-image-wrapper">
                        <img src="{{asset('frontend_assets/images/members/member5.png')}}" alt="Chandra Shekhar Shukla" class="member-photo">
                        <div class="member-overlay"></div>
                        <div class="member-number">05</div>
                    </div>
                    <div class="member-content">
                        <h3 class="member-name">Chandra Shekhar Shukla</h3>
                        <div class="member-divider"></div>
                        <p class="member-bio">
                            कताल करता जीवे कर सहारा बनता है, बमता है खुशी या और सीमा है। जीवन पर काम हर किसी को करम, जिंदगी पूर्ण प्रवास। Life is about creating meaningful connections and spreading joy to everyone we meet.
                        </p>
                    </div>
                    <div class="member-footer">
                        <span class="member-tag">
                            <i class="fas fa-briefcase"></i>
                            Team Member
                        </span>
                        <a href="#" class="member-link">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Member 6 -->
            <div class="col-lg-4 col-md-6 p-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="500">
                <div class="member-card">
                    <div class="member-image-wrapper">
                        <img src="{{asset('frontend_assets/images/members/member6.png')}}" alt="Seema Yadav" class="member-photo">
                        <div class="member-overlay"></div>
                        <div class="member-number">06</div>
                    </div>
                    <div class="member-content">
                        <h3 class="member-name">Seema Yadav</h3>
                        <div class="member-divider"></div>
                        <p class="member-bio">
                            सब के दिलदार जब आती है, कार को की उदारता है। जिंदगी को जैसे प्रभावै है, छोटे में तकदीर बनते है। When we approach life with kindness and generosity, we create beautiful relationships and meaningful impacts.
                        </p>
                    </div>
                    <div class="member-footer">
                        <span class="member-tag">
                            <i class="fas fa-briefcase"></i>
                            Team Member
                        </span>
                        <a href="#" class="member-link">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection