@extends('master.frontmaster')
@section('css')
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
            background: #f8f9fa;
        }

        /* Animated Background Icons */
        .bg-icons {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            pointer-events: none;
            overflow: hidden;
        }

        .floating-icon {
            position: absolute;
            font-size: 2.5rem;
            opacity: 0.06;
            animation: float 20s infinite ease-in-out;
        }

        .floating-icon:nth-child(1) { left: 5%; top: 15%; animation-delay: 0s; color: rgb(255,193,7); }
        .floating-icon:nth-child(2) { left: 85%; top: 25%; animation-delay: 3s; color: rgb(115,196,143); }
        .floating-icon:nth-child(3) { left: 25%; top: 45%; animation-delay: 6s; color: rgb(0,113,93); }
        .floating-icon:nth-child(4) { left: 75%; top: 65%; animation-delay: 9s; color: rgb(255,193,7); }
        .floating-icon:nth-child(5) { left: 45%; top: 85%; animation-delay: 12s; color: rgb(115,196,143); }
        .floating-icon:nth-child(6) { left: 15%; top: 75%; animation-delay: 15s; color: rgb(0,113,93); }
        .floating-icon:nth-child(7) { left: 60%; top: 35%; animation-delay: 18s; color: rgb(255,193,7); }

        @keyframes float {
            0%, 100% { transform: translateY(0) translateX(0); }
            25% { transform: translateY(-40px) translateX(25px); }
            50% { transform: translateY(-80px) translateX(-25px); }
            75% { transform: translateY(-40px) translateX(35px); }
        }

        /* Header Section with Emoji */
        .header-section {
            position: relative;
            padding: 60px 0 40px;
            background: white;
            z-index: 1;
        }

        .emoji-header {
            font-size: 5rem;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .intro-text {
            color: #666;
            line-height: 1.8;
            text-align: justify;
        }

        /* Our Founder Section */
        .founder-section {
            position: relative;
            padding: 60px 0;
            background: white;
            z-index: 1;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: rgb(0,113,93);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: rgb(255,193,7);
        }

        .founder-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: 30px;
            transition: all 0.4s ease;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            position: relative;
        }

        .founder-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,113,93,0.15);
            background: rgba(115,196,143,0.03);
        }

        .founder-img-wrapper {
            position: relative;
            overflow: hidden;
            border-radius: 50%;
            width: 180px;
            height: 180px;
            margin: 30px auto 20px;
            border: 5px solid rgb(255,193,7);
            transition: all 0.4s ease;
        }

        .founder-card:hover .founder-img-wrapper {
            border-color: rgb(115,196,143);
        }

        .founder-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.4s ease;
        }

        .founder-card:hover .founder-img-wrapper img {
            transform: scale(1.1);
        }

        .founder-info {
            padding: 0 30px 30px;
            text-align: center;
        }

        .founder-info h4 {
            font-size: 1.3rem;
            font-weight: 600;
            color: rgb(0,113,93);
            margin-bottom: 8px;
        }

        .founder-info p {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 5px;
        }

        /* Photos Section */
        .photos-section {
            position: relative;
            padding: 60px 0;
            background: rgba(115,196,143,0.05);
            z-index: 1;
        }

        .photo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }

        .photo-item {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            height: 250px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: all 0.4s ease;
        }

        .photo-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0,113,93,0.2);
        }

        .photo-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.5s ease;
        }

        .photo-item:hover img {
            transform: scale(1.15);
        }

        .photo-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,113,93,0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.4s ease;
        }

        .photo-item:hover .photo-overlay {
            opacity: 1;
        }

        .photo-overlay i {
            font-size: 3rem;
            color: rgb(255,193,7);
        }

        .pagination-dots {
            text-align: center;
            margin-top: 30px;
        }

        .pagination-dots span {
            display: inline-block;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #ccc;
            margin: 0 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .pagination-dots span.active,
        .pagination-dots span:hover {
            background: rgb(255,193,7);
            transform: scale(1.3);
        }

        /* Content Sections */
        .content-section {
            position: relative;
            padding: 60px 0;
            background: white;
            z-index: 1;
        }

        .content-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            transition: all 0.4s ease;
            box-shadow: 0 5px 20px rgba(0,0,0,0.06);
            border-left: 5px solid rgb(255,193,7);
        }

        .content-card:hover {
            transform: translateX(10px);
            box-shadow: 0 10px 30px rgba(0,113,93,0.12);
            background: rgba(255,193,7,0.03);
            border-left-color: rgb(0,113,93);
        }

        .content-card h4 {
            font-size: 1.3rem;
            font-weight: 600;
            color: rgb(0,113,93);
            margin-bottom: 15px;
        }

        .content-card p,
        .content-card ul {
            color: #666;
            line-height: 1.8;
        }

        .content-card ul {
            padding-left: 20px;
        }

        .content-card ul li {
            margin-bottom: 10px;
        }

        .illustration-img {
            width: 100%;
            height: auto;
            border-radius: 15px;
            transition: all 0.4s ease;
        }

        .illustration-img:hover {
            transform: scale(1.05);
        }

        /* Info Cards with Icons */
        .info-cards-section {
            position: relative;
            padding: 60px 0;
            background: rgba(255,193,7,0.05);
            z-index: 1;
        }

        .info-card {
            background: white;
            border-radius: 15px;
            padding: 35px 25px;
            margin-bottom: 30px;
            transition: all 0.4s ease;
            box-shadow: 0 5px 20px rgba(0,0,0,0.06);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .info-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: rgb(115,196,143);
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }

        .info-card:hover::before {
            transform: scaleX(1);
        }

        .info-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,113,93,0.15);
            background: rgba(115,196,143,0.05);
        }

        .info-icon {
            font-size: 3rem;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .info-card:hover .info-icon {
            transform: scale(1.1);
        }

        .icon-yellow { color: rgb(255,193,7); }
        .icon-green { color: rgb(115,196,143); }
        .icon-dark-green { color: rgb(0,113,93); }

        .info-card h4 {
            font-size: 1.4rem;
            font-weight: 600;
            color: rgb(0,113,93);
            margin-bottom: 15px;
        }

        .info-card p {
            color: #666;
            line-height: 1.7;
        }

        /* Two Column Layout */
        .two-col-section {
            position: relative;
            padding: 60px 0;
            background: white;
            z-index: 1;
        }

        .text-content h3 {
            font-size: 2rem;
            font-weight: 700;
            color: rgb(0,113,93);
            margin-bottom: 20px;
        }

        .text-content p {
            color: #666;
            line-height: 1.8;
            margin-bottom: 15px;
        }

        .text-content ul {
            list-style: none;
            padding: 0;
        }

        .text-content ul li {
            color: #666;
            line-height: 1.8;
            margin-bottom: 12px;
            padding-left: 30px;
            position: relative;
        }

        .text-content ul li::before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: rgb(115,196,143);
            font-size: 1.1rem;
        }

        .side-image {
            width: 100%;
            height: 100%;
            min-height: 300px;
            object-fit: cover;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.4s ease;
        }

        .side-image:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 40px rgba(0,113,93,0.2);
        }

        /* Footer CTA */
        .footer-cta {
            position: relative;
            padding: 80px 0;
            background: rgb(0,113,93);
            text-align: center;
            z-index: 1;
        }

        .footer-cta h2 {
            font-size: 2.8rem;
            font-weight: 700;
            color: white;
            margin-bottom: 20px;
        }

        .footer-cta p {
            font-size: 1.2rem;
            color: rgba(255,255,255,0.9);
            margin-bottom: 35px;
        }

        .btn-custom {
            padding: 15px 45px;
            font-size: 1.1rem;
            border-radius: 50px;
            transition: all 0.3s ease;
            border: none;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-yellow {
            background: rgb(255,193,7);
            color: #333;
        }

        .btn-yellow:hover {
            background: rgb(235,173,0);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(255,193,7,0.4);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .emoji-header {
                font-size: 3.5rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .photo-grid {
                grid-template-columns: 1fr;
            }

            .footer-cta h2 {
                font-size: 2rem;
            }
        }
    </style>
@endsection

@section('content')
    <!-- Animated Background Icons -->
    <div class="bg-icons">
        <i class="fas fa-heart floating-icon"></i>
        <i class="fas fa-hands-helping floating-icon"></i>
        <i class="fas fa-hand-holding-heart floating-icon"></i>
        <i class="fas fa-donate floating-icon"></i>
        <i class="fas fa-users floating-icon"></i>
        <i class="fas fa-globe floating-icon"></i>
        <i class="fas fa-handshake floating-icon"></i>
    </div>

    <!-- Header with Emoji -->
    <section class="header-section help-two " style="margin-top: 100px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 text-center mb-4 mb-lg-0">
                    <div class="emoji-header">🤔</div>
                </div>
                <div class="col-lg-9">
                    <h2 style="color: rgb(0,113,93); font-weight: 700; margin-bottom: 20px;">WHO WE HELP TO CONNECT</h2>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <p class="intro-text">We connect compassionate donors with verified NGOs and charitable organizations working tirelessly to create positive change in communities across the globe. Our platform bridges the gap between those who want to help and those who need support.</p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <p class="intro-text">Through our comprehensive network, we facilitate meaningful partnerships between volunteers, corporate sponsors, and grassroots organizations. Every connection we make has the potential to transform lives and build stronger, more resilient communities.</p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <p class="intro-text">Whether you're an individual looking to make a difference, a company seeking CSR opportunities, or an organization needing resources, we provide the tools and transparency to ensure your contributions create lasting impact where it's needed most.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Founders Section -->
    <!--<section class="founder-section">-->
    <!--    <div class="container">-->
    <!--        <div class="section-title">-->
    <!--            <h2>Our Founder's Team</h2>-->
    <!--        </div>-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">-->
    <!--                <div class="founder-card">-->
    <!--                    <div class="founder-img-wrapper">-->
    <!--                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=300&h=300&fit=crop" alt="Founder">-->
    <!--                    </div>-->
    <!--                    <div class="founder-info">-->
    <!--                        <h4>Sarah Mitchell</h4>-->
    <!--                        <p><strong>Founder & CEO</strong></p>-->
    <!--                        <p>Leading with vision and compassion for 15 years</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">-->
    <!--                <div class="founder-card">-->
    <!--                    <div class="founder-img-wrapper">-->
    <!--                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=300&fit=crop" alt="Founder">-->
    <!--                    </div>-->
    <!--                    <div class="founder-info">-->
    <!--                        <h4>Michael Rodriguez</h4>-->
    <!--                        <p><strong>Co-Founder</strong></p>-->
    <!--                        <p>Operations Director driving impact worldwide</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">-->
    <!--                <div class="founder-card">-->
    <!--                    <div class="founder-img-wrapper">-->
    <!--                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=300&h=300&fit=crop" alt="Founder">-->
    <!--                    </div>-->
    <!--                    <div class="founder-info">-->
    <!--                        <h4>Priya Sharma</h4>-->
    <!--                        <p><strong>Program Director</strong></p>-->
    <!--                        <p>Managing global initiatives and partnerships</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">-->
    <!--                <div class="founder-card">-->
    <!--                    <div class="founder-img-wrapper">-->
    <!--                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=300&h=300&fit=crop" alt="Founder">-->
    <!--                    </div>-->
    <!--                    <div class="founder-info">-->
    <!--                        <h4>David Chen</h4>-->
    <!--                        <p><strong>Finance Head</strong></p>-->
    <!--                        <p>Ensuring transparency and accountability</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">-->
    <!--                <div class="founder-card">-->
    <!--                    <div class="founder-img-wrapper">-->
    <!--                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=300&h=300&fit=crop" alt="Founder">-->
    <!--                    </div>-->
    <!--                    <div class="founder-info">-->
    <!--                        <h4>Emily Thompson</h4>-->
    <!--                        <p><strong>Outreach Coordinator</strong></p>-->
    <!--                        <p>Building community connections daily</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">-->
    <!--                <div class="founder-card">-->
    <!--                    <div class="founder-img-wrapper">-->
    <!--                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=300&h=300&fit=crop" alt="Founder">-->
    <!--                    </div>-->
    <!--                    <div class="founder-info">-->
    <!--                        <h4>James Wilson</h4>-->
    <!--                        <p><strong>Technology Lead</strong></p>-->
    <!--                        <p>Innovating digital solutions for impact</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">-->
    <!--                <div class="founder-card">-->
    <!--                    <div class="founder-img-wrapper">-->
    <!--                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=300&h=300&fit=crop" alt="Founder">-->
    <!--                    </div>-->
    <!--                    <div class="founder-info">-->
    <!--                        <h4>Aisha Patel</h4>-->
    <!--                        <p><strong>Communications</strong></p>-->
    <!--                        <p>Sharing stories that inspire change</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">-->
    <!--                <div class="founder-card">-->
    <!--                    <div class="founder-img-wrapper">-->
    <!--                        <img src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?w=300&h=300&fit=crop" alt="Founder">-->
    <!--                    </div>-->
    <!--                    <div class="founder-info">-->
    <!--                        <h4>Robert Kim</h4>-->
    <!--                        <p><strong>Legal Advisor</strong></p>-->
    <!--                        <p>Protecting rights and ensuring compliance</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">-->
    <!--                <div class="founder-card">-->
    <!--                    <div class="founder-img-wrapper">-->
    <!--                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=300&h=300&fit=crop" alt="Founder">-->
    <!--                    </div>-->
    <!--                    <div class="founder-info">-->
    <!--                        <h4>Maria Garcia</h4>-->
    <!--                        <p><strong>Volunteer Manager</strong></p>-->
    <!--                        <p>Empowering volunteers to make impact</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">-->
    <!--                <div class="founder-card">-->
    <!--                    <div class="founder-img-wrapper">-->
    <!--                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=300&h=300&fit=crop" alt="Founder">-->
    <!--                    </div>-->
    <!--                    <div class="founder-info">-->
    <!--                        <h4>Thomas Anderson</h4>-->
    <!--                        <p><strong>Research Director</strong></p>-->
    <!--                        <p>Data-driven insights for better outcomes</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

    <!-- Photos Section -->
    <section class="photos-section">
        <div class="container">
            <div class="section-title">
                <h2>Photos / Official occasions activities</h2>
            </div>
            <div class="photo-grid">
                <div class="photo-item">
                    <img src="/frontend_assets/images/1.jpg" alt="Activity">
                    <div class="photo-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="photo-item">
                    <img src="/frontend_assets/images/12.jpg" alt="Activity">
                    <div class="photo-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="photo-item">
                    <img src="/frontend_assets/images/14.jpg" alt="Activity">
                    <div class="photo-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="photo-item">
                    <img src="/frontend_assets/images/18.jpg" alt="Activity">
                    <div class="photo-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="photo-item">
                    <img src="/frontend_assets/images/3.jpg" alt="Activity">
                    <div class="photo-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="photo-item">
                    <img src="/frontend_assets/images/6.jpg" alt="Activity">
                    <div class="photo-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="photo-item">
                    <img src="/frontend_assets/images/20.jpg" alt="Activity">
                    <div class="photo-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="photo-item">
                    <img src="/frontend_assets/images/21.jpg" alt="Activity">
                    <div class="photo-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="photo-item">
                    <img src="/frontend_assets/images/23.jpg" alt="Activity">
                    <div class="photo-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="photo-item">
                    <img src="/frontend_assets/images/24.jpg" alt="Activity">
                    <div class="photo-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="photo-item">
                    <img src="/frontend_assets/images/25.jpg" alt="Activity">
                    <div class="photo-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="photo-item">
                    <img src="/frontend_assets/images/21.jpg" alt="Activity">
                    <div class="photo-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Content Section with Lists -->
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="content-card">
                        <h4>General Public Need</h4>
                        <ul>
                            <li>Access to clean drinking water and sanitation facilities</li>
                            <li>Affordable healthcare and medical services for all</li>
                            <li>Quality education and skill development programs</li>
                            <li>Safe and affordable housing for vulnerable families</li>
                            <li>Food security and nutritional support systems</li>
                            <li>Employment opportunities and livelihood programs</li>
                            <li>Protection of human rights and social justice</li>
                        </ul>
                    </div>
                    <div class="content-card">
                        <h4>Specialized Support Services</h4>
                        <ul>
                            <li>Mental health counseling and psychological support</li>
                            <li>Disability-inclusive programs and accessibility services</li>
                            <li>Elderly care and senior citizen welfare programs</li>
                            <li>Women empowerment and gender equality initiatives</li>
                            <li>Child protection and welfare services</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="content-card">
                        <h4>NGO Requirements</h4>
                        <ul>
                            <li>Valid registration and legal compliance documentation</li>
                            <li>Transparent financial reporting and audit mechanisms</li>
                            <li>Clear mission statement and organizational objectives</li>
                            <li>Qualified staff and volunteer management systems</li>
                            <li>Impact measurement and evaluation frameworks</li>
                            <li>Community engagement and stakeholder involvement</li>
                            <li>Sustainable funding strategies and resource mobilization</li>
                        </ul>
                    </div>
                    <div class="content-card">
                        <h4>Collaboration Standards</h4>
                        <ul>
                            <li>Regular progress reporting and communication protocols</li>
                            <li>Ethical practices and code of conduct adherence</li>
                            <li>Data privacy and beneficiary protection measures</li>
                            <li>Partnership agreements and memorandums of understanding</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Two Column Section -->
    <section class="two-col-section">
        <div class="container">
            <div class="section-title">
                <h2>Scaling NGO Secrets</h2>
            </div>
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="text-content">
                        <h3>Strategic Growth Planning</h3>
                        <p>Successful NGO scaling requires a well-defined strategy that balances impact with sustainability. Organizations must carefully assess their capacity, resources, and market needs to create sustainable growth models that can be replicated across different regions and communities.</p>
                        
                        <ul>
                            <li>Develop clear mission and vision statements</li>
                            <li>Establish measurable impact indicators</li>
                            <li>Build strong partnerships and networks</li>
                            <li>Create sustainable funding strategies</li>
                            <li>Invest in capacity building and training</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=800&h=600&fit=crop" alt="NGO Growth" class="side-image" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22800%22 height=%22600%22%3E%3Crect fill=%22%2373c48f%22 width=%22800%22 height=%22600%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 font-family=%22sans-serif%22 font-size=%2248%22 fill=%22white%22%3ENGO Growth%3C/text%3E%3C/svg%3E'">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer CTA Section -->
    <section class="footer-cta">
        <div class="container">
            <h2>Ready to Make a Difference?</h2>
            <p>Join our community of changemakers and help us create lasting impact in communities worldwide.</p>
            <a href="#" class="btn-custom btn-yellow">Get Started Today</a>
        </div>
    </section>
@endsection