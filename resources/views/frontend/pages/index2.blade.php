@extends('master.frontmaster')
@section('css')
    <style>
        /* body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background: linear-gradient(135deg, #f5f7fa 0%, #ffffff 100%);
            } */

        /* Main Section Styles */
        .vision-section {
            padding: 80px 0;
            background: linear-gradient(135deg, rgba(255, 193, 7, 0.05) 0%, rgba(115, 196, 143, 0.05) 100%);
            position: relative;
            overflow: hidden;
        }

        .vision-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(255, 193, 7, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            z-index: 1;
        }

        .vision-section::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -5%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(115, 196, 143, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            z-index: 1;
        }

        .vision-content {
            position: relative;
            z-index: 2;
        }

        /* Header Styles */
        .vision-header {
            text-align: center;
            margin-bottom: 70px;
        }

        .vision-header h1 {
            font-size: 3.5rem;
            font-weight: 800;
            color: rgb(0, 113, 93);
            margin-bottom: 20px;
            letter-spacing: -1px;
            line-height: 1.2;
        }

        .vision-header .subtitle {
            font-size: 1.25rem;
            color: #666;
            font-weight: 500;
            max-width: 600px;
            margin: 0 auto;
        }

        .accent-line {
            width: 80px;
            height: 5px;
            background: linear-gradient(90deg, rgb(255, 193, 7) 0%, rgb(115, 196, 143) 100%);
            margin: 30px auto;
            border-radius: 10px;
        }

        /* Roadmap Timeline */
        .roadmap-container {
            position: relative;
            padding: 40px 0;
        }

        .roadmap-item {
            position: relative;
            margin-bottom: 60px;
        }

        .roadmap-item.alt {
            margin-top: 100px;
        }

        /* Timeline line */
        .roadmap-container::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(180deg, rgb(255, 193, 7) 0%, rgb(115, 196, 143) 50%, rgb(0, 113, 93) 100%);
            transform: translateX(-50%);
        }

        /* Roadmap content alternating layout */
        .roadmap-item:nth-child(odd) .roadmap-content {
            margin-left: 0;
            margin-right: auto;
            padding-right: 50px;
            text-align: right;
        }

        .roadmap-item:nth-child(even) .roadmap-content {
            margin-left: auto;
            margin-right: 0;
            padding-left: 50px;
        }

        /* Roadmap dots */
        .roadmap-dot {
            position: absolute;
            left: 50%;
            top: 50px;
            width: 40px;
            height: 40px;
            background: white;
            /* border: 4px solid rgb(0, 113, 93); */
            /* border: 4px solid rgb(0, 113, 93); */
            border-radius: 50%;
            transform: translateX(-50%);
            z-index: 10;
            box-shadow: 0 0 0 4px rgb(255, 193, 7);
            transition: all 0.3s ease;
        }

        .roadmap-item:hover .roadmap-dot {
            width: 50px;
            height: 50px;
            top: 45px;
            box-shadow: 0 0 0 6px rgb(255, 193, 7), 0 10px 30px rgba(0, 113, 93, 0.3);
        }

        /* Card Styles */
        .roadmap-card {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 1px solid rgba(115, 196, 143, 0.2);
            max-width: 450px;
        }

        .roadmap-item:nth-child(odd) .roadmap-card {
            margin-left: 0;
            margin-right: auto;
        }

        .roadmap-item:nth-child(even) .roadmap-card {
            margin-left: auto;
            margin-right: 0;
        }

        .roadmap-card:hover {
            box-shadow: 0 15px 40px rgba(0, 113, 93, 0.15);
            transform: translateY(-8px);
            border-color: rgb(115, 196, 143);
        }

        /* Icon Styles */
        .roadmap-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, rgb(255, 193, 7) 0%, rgb(115, 196, 143) 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            font-size: 2rem;
            color: white;
            box-shadow: 0 8px 20px rgba(255, 193, 7, 0.3);
            transition: all 0.3s ease;
        }

        .roadmap-card:hover .roadmap-icon {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 12px 30px rgba(255, 193, 7, 0.4);
        }

        /* Text Styles */
        .roadmap-card h3 {
            font-size: 1.5rem;
            color: rgb(0, 113, 93);
            margin-bottom: 15px;
            font-weight: 700;
            line-height: 1.3;
        }

        .roadmap-card p {
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
            margin-bottom: 0;
        }

        /* CTA Button */
        .vision-cta {
            text-align: center;
            margin-top: 80px;
        }

        .btn-vision {
            background: linear-gradient(135deg, rgb(0, 113, 93) 0%, rgb(115, 196, 143) 100%);
            color: white;
            padding: 16px 50px;
            font-size: 1.1rem;
            font-weight: 600;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(0, 113, 93, 0.3);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-vision:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 45px rgba(0, 113, 93, 0.4);
            background: linear-gradient(135deg, rgb(115, 196, 143) 0%, rgb(0, 113, 93) 100%);
            text-decoration: none;
            color: white;
        }

        .btn-vision:active {
            transform: translateY(-1px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .vision-header h1 {
                font-size: 2.5rem;
            }

            .roadmap-container::before {
                left: 20px;
            }

            .roadmap-item:nth-child(odd) .roadmap-content,
            .roadmap-item:nth-child(even) .roadmap-content {
                text-align: left;
                padding-left: 120px;
                padding-right: 0;
                margin: 0;
            }

            .roadmap-dot {
                left: 20px;
            }

            .roadmap-card {
                max-width: 100%;
                margin: 0 !important;
            }

            .roadmap-card h3 {
                font-size: 1.25rem;
            }

            .roadmap-card p {
                font-size: 0.95rem;
            }

            .btn-vision {
                padding: 14px 40px;
                font-size: 1rem;
            }
        }

        @media (max-width: 576px) {
            .vision-section {
                padding: 50px 0;
            }

            .vision-header h1 {
                font-size: 2rem;
                margin-bottom: 15px;
            }

            .vision-header .subtitle {
                font-size: 1rem;
            }

            .roadmap-item {
                margin-bottom: 50px;
            }

            .roadmap-item.alt {
                margin-top: 50px;
            }

            .roadmap-card {
                padding: 25px;
            }

            .roadmap-icon {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
                margin-bottom: 20px;
            }

            .roadmap-card h3 {
                font-size: 1.15rem;
                margin-bottom: 12px;
            }

            .roadmap-card p {
                font-size: 0.9rem;
            }
        }

        /* Main Section */
        .programs-section {
            padding: 70px 0;
            background-color: #ffffff;
            position: relative;
        }

        /* Header */
        .programs-header {
            text-align: center;
            margin-bottom: 80px;
        }

        .programs-header h2 {
            font-size: 3.5rem;
            font-weight: 800;
            color: rgb(0, 113, 93);
            margin-bottom: 20px;
            letter-spacing: -1px;
            line-height: 1.2;
        }

        .programs-header p {
            font-size: 1.2rem;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
            font-weight: 500;
            line-height: 1.6;
        }

        .header-accent {
            width: 70px;
            height: 4px;
            background-color: rgb(255, 193, 7);
            margin: 25px auto 30px;
            border-radius: 10px;
        }

        /* Programs Grid */
        .programs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
        }

        /* Program Card */
        .program-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
            border-top: 4px solid rgb(115, 196, 143);
        }

        .program-card:nth-child(3n+1) {
            border-top-color: rgb(255, 193, 7);
        }

        .program-card:nth-child(3n+2) {
            border-top-color: rgb(115, 196, 143);
        }

        .program-card:nth-child(3n) {
            border-top-color: rgb(0, 113, 93);
        }

        .program-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 50px rgba(0, 113, 93, 0.2);
        }

        /* Program Image/Background */
        .program-image-wrapper {
            position: relative;
            width: 100%;
            height: 220px;
            overflow: hidden;
            background: linear-gradient(135deg, #f0f0f0 0%, #e8e8e8 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .program-card:nth-child(1) .program-image-wrapper {
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300"><rect fill="rgb(255,193,7)" width="400" height="300"/><circle cx="200" cy="150" r="80" fill="rgba(255,255,255,0.2)"/><path d="M200 100 L240 160 L200 140 L160 160 Z" fill="white" opacity="0.8"/></svg>');
            background-size: cover;
            background-position: center;
        }

        .program-card:nth-child(2) .program-image-wrapper {
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300"><rect fill="rgb(115,196,143)" width="400" height="300"/><circle cx="100" cy="100" r="40" fill="white" opacity="0.3"/><circle cx="300" cy="200" r="50" fill="white" opacity="0.2"/><path d="M200 150 Q250 100 300 150 Q280 200 200 220 Q120 200 100 150 Q150 100 200 150" fill="white" opacity="0.8"/></svg>');
            background-size: cover;
            background-position: center;
        }

        .program-card:nth-child(3) .program-image-wrapper {
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300"><rect fill="rgb(0,113,93)" width="400" height="300"/><rect x="150" y="80" width="100" height="140" fill="white" opacity="0.3"/><circle cx="200" cy="150" r="35" fill="white" opacity="0.8"/></svg>');
            background-size: cover;
            background-position: center;
        }

        .program-card:nth-child(4) .program-image-wrapper {
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300"><rect fill="rgb(255,193,7)" width="400" height="300"/><circle cx="100" cy="100" r="30" fill="white" opacity="0.4"/><circle cx="300" cy="100" r="30" fill="white" opacity="0.4"/><circle cx="200" cy="220" r="30" fill="white" opacity="0.4"/><line x1="100" y1="130" x2="200" y2="190" stroke="white" stroke-width="4" opacity="0.6"/><line x1="300" y1="130" x2="200" y2="190" stroke="white" stroke-width="4" opacity="0.6"/></svg>');
            background-size: cover;
            background-position: center;
        }

        .program-card:nth-child(5) .program-image-wrapper {
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300"><rect fill="rgb(115,196,143)" width="400" height="300"/><rect x="100" y="100" width="60" height="100" fill="white" opacity="0.5" rx="5"/><rect x="170" y="80" width="60" height="120" fill="white" opacity="0.7" rx="5"/><rect x="240" y="110" width="60" height="90" fill="white" opacity="0.4" rx="5"/></svg>');
            background-size: cover;
            background-position: center;
        }

        .program-card:nth-child(6) .program-image-wrapper {
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300"><rect fill="rgb(0,113,93)" width="400" height="300"/><path d="M200 80 L240 140 L200 160 L160 140 Z" fill="white" opacity="0.4"/><circle cx="150" cy="200" r="25" fill="white" opacity="0.6"/><circle cx="250" cy="200" r="25" fill="white" opacity="0.6"/><path d="M150 230 L200 250 L250 230" stroke="white" stroke-width="3" fill="none" opacity="0.6"/></svg>');
            background-size: cover;
            background-position: center;
        }

        /* Overlay Effect */
        .program-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0);
            transition: all 0.4s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2;
        }

        .program-card:hover .program-overlay {
            background: rgba(0, 0, 0, 0.3);
        }

        .program-icon-main {
            font-size: 4rem;
            color: white;
            opacity: 0;
            transition: all 0.4s ease;
            transform: scale(0.5);
        }

        .program-card:hover .program-icon-main {
            opacity: 1;
            transform: scale(1);
        }

        /* Program Icon in Image */
        .program-icon {
            font-size: 5rem;
            transition: all 0.4s ease;
            opacity: 0.9;
        }

        .program-card:nth-child(1) .program-icon {
            color: rgba(255, 255, 255, 0.7);
        }

        .program-card:nth-child(2) .program-icon {
            color: rgba(255, 255, 255, 0.7);
        }

        .program-card:nth-child(3) .program-icon {
            color: rgba(255, 255, 255, 0.7);
        }

        .program-card:nth-child(4) .program-icon {
            color: rgba(255, 255, 255, 0.7);
        }

        .program-card:nth-child(5) .program-icon {
            color: rgba(255, 255, 255, 0.7);
        }

        .program-card:nth-child(6) .program-icon {
            color: rgba(255, 255, 255, 0.7);
        }

        .program-card:hover .program-icon {
            opacity: 0;
            transform: scale(0.7);
        }

        /* Program Content */
        .program-content {
            padding: 35px 30px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .program-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: rgb(0, 113, 93);
            margin-bottom: 15px;
            line-height: 1.4;
        }

        .program-description {
            font-size: 1rem;
            color: #666;
            line-height: 1.7;
            flex: 1;
            margin-bottom: 20px;
        }

        /* Learn More Link */
        .program-link {
            display: inline-flex;
            align-items: center;
            color: rgb(115, 196, 143);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            width: fit-content;
        }

        .program-link:hover {
            color: rgb(0, 113, 93);
            transform: translateX(5px);
        }

        .program-link i {
            margin-left: 8px;
            transition: all 0.3s ease;
        }

        .program-link:hover i {
            transform: translateX(3px);
        }

        /* CTA Section */
        .programs-cta {
            text-align: center;
            padding-top: 40px;
            border-top: 2px solid #e0e0e0;
        }

        .btn-explore {
            background-color: rgb(0, 113, 93);
            color: white;
            padding: 18px 60px;
            font-size: 1.1rem;
            font-weight: 600;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(0, 113, 93, 0.25);
            text-transform: uppercase;
            letter-spacing: 1px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-explore:hover {
            background-color: rgb(115, 196, 143);
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(115, 196, 143, 0.35);
            text-decoration: none;
            color: white;
        }

        .btn-explore:active {
            transform: translateY(-1px);
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .programs-grid {
                grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
                gap: 30px;
            }
        }

        @media (max-width: 768px) {
            .programs-section {
                padding: 70px 0;
            }

            .programs-header h2 {
                font-size: 2.5rem;
                margin-bottom: 15px;
            }

            .programs-header p {
                font-size: 1.05rem;
            }

            .programs-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .program-image-wrapper {
                height: 200px;
            }

            .program-content {
                padding: 30px 25px;
            }

            .program-title {
                font-size: 1.35rem;
                margin-bottom: 12px;
            }

            .program-description {
                font-size: 0.95rem;
                margin-bottom: 15px;
            }

            .btn-explore {
                padding: 15px 50px;
                font-size: 1rem;
            }
        }

        @media (max-width: 576px) {
            .programs-section {
                padding: 50px 0;
            }

            .programs-header h2 {
                font-size: 2rem;
            }

            .programs-header p {
                font-size: 1rem;
            }

            .program-image-wrapper {
                height: 180px;
            }

            .program-icon {
                font-size: 3.5rem;
            }

            .program-content {
                padding: 25px 20px;
            }

            .program-title {
                font-size: 1.2rem;
            }

            .program-description {
                font-size: 0.9rem;
            }

            .btn-explore {
                padding: 12px 40px;
                font-size: 0.95rem;
            }
        }

        /* Animation */
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

        .program-card {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .program-card:nth-child(1) {
            animation-delay: 0.1s;
        }

        .program-card:nth-child(2) {
            animation-delay: 0.2s;
        }

        .program-card:nth-child(3) {
            animation-delay: 0.3s;
        }

        .program-card:nth-child(4) {
            animation-delay: 0.4s;
        }

        .program-card:nth-child(5) {
            animation-delay: 0.5s;
        }

        .program-card:nth-child(6) {
            animation-delay: 0.6s;
        }


        /* Main Section */
        .impact-section {
            padding: 100px 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            position: relative;
            overflow: hidden;
        }

        /* Decorative Elements */
        .impact-section::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 400px;
            height: 400px;
            background-color: rgba(255, 193, 7, 0.05);
            border-radius: 50%;
            z-index: 1;
        }

        .impact-section::after {
            content: '';
            position: absolute;
            bottom: -50px;
            left: -50px;
            width: 350px;
            height: 350px;
            background-color: rgba(115, 196, 143, 0.05);
            border-radius: 50%;
            z-index: 1;
        }

        .impact-content {
            position: relative;
            z-index: 2;
        }

        /* Header */
        .impact-header {
            text-align: center;
            margin-bottom: 80px;
        }

        .impact-header h2 {
            font-size: 3.5rem;
            font-weight: 800;
            color: rgb(0, 113, 93);
            margin-bottom: 20px;
            letter-spacing: -1px;
            line-height: 1.2;
        }

        .impact-header p {
            font-size: 1.2rem;
            color: #666;
            max-width: 700px;
            margin: 0 auto;
            font-weight: 500;
            line-height: 1.6;
        }

        .header-accent {
            width: 70px;
            height: 4px;
            background-color: rgb(255, 193, 7);
            margin: 25px auto 30px;
            border-radius: 10px;
        }

        /* Main Container */
        .impact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            margin-bottom: 60px;
        }

        /* Stats Section */
        .impact-stats {
            padding: 20px 0;
        }

        .stat-item {
            margin-bottom: 40px;
            padding: 30px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            border-left: 5px solid rgb(255, 193, 7);
            position: relative;
            overflow: hidden;
        }

        .stat-item:nth-child(2) {
            border-left-color: rgb(115, 196, 143);
        }

        .stat-item:nth-child(3) {
            border-left-color: rgb(0, 113, 93);
        }

        .stat-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(255, 193, 7, 0.05) 0%, transparent 100%);
            opacity: 0;
            transition: all 0.4s ease;
            z-index: 0;
        }

        .stat-item:nth-child(2)::before {
            background: linear-gradient(135deg, rgba(115, 196, 143, 0.05) 0%, transparent 100%);
        }

        .stat-item:nth-child(3)::before {
            background: linear-gradient(135deg, rgba(0, 113, 93, 0.05) 0%, transparent 100%);
        }

        .stat-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(0, 113, 93, 0.15);
        }

        .stat-item:hover::before {
            opacity: 1;
        }

        .stat-item-content {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: flex-start;
            gap: 20px;
        }

        .stat-icon {
            width: 70px;
            height: 70px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.2rem;
            flex-shrink: 0;
            transition: all 0.4s ease;
        }

        .stat-item:nth-child(1) .stat-icon {
            background-color: rgb(255, 193, 7);
            color: white;
        }

        .stat-item:nth-child(2) .stat-icon {
            background-color: rgb(115, 196, 143);
            color: white;
        }

        .stat-item:nth-child(3) .stat-icon {
            background-color: rgb(0, 113, 93);
            color: white;
        }

        .stat-item:hover .stat-icon {
            transform: scale(1.1) rotate(10deg);
        }

        .stat-text h3 {
            font-size: 2.5rem;
            font-weight: 700;
            color: rgb(0, 113, 93);
            line-height: 1.2;
            margin-bottom: 8px;
        }

        .stat-item:nth-child(1) .stat-text h3 {
            color: rgb(255, 193, 7);
        }

        .stat-item:nth-child(2) .stat-text h3 {
            color: rgb(115, 196, 143);
        }

        .stat-text p {
            font-size: 1.05rem;
            color: #666;
            line-height: 1.6;
            font-weight: 500;
        }

        /* Gallery Section */
        .impact-gallery {
            position: relative;
        }

        .gallery-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: rgb(0, 113, 93);
            margin-bottom: 30px;
            text-align: center;
        }

        .photo-collage {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            perspective: 1000px;
        }

        .photo-item {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: all 0.4s ease;
            aspect-ratio: 1;
            cursor: pointer;
            transform-style: preserve-3d;
        }

        .photo-item:nth-child(1) {
            grid-column: 1;
            grid-row: 1 / 3;
            aspect-ratio: auto;
        }

        .photo-item:nth-child(4) {
            grid-column: 2;
            grid-row: 2 / 4;
            aspect-ratio: auto;
        }

        .photo-item:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.3);
        }

        .photo-background {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            align-items: flex-end;
        }

        /* Photo 1 - Community Events */
        .photo-item:nth-child(1) .photo-background {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            background-image:
                radial-gradient(circle at 30% 30%, rgba(255, 193, 7, 0.3) 0%, transparent 50%),
                linear-gradient(135deg, rgb(255, 193, 7) 0%, rgba(255, 193, 7, 0.8) 100%);
        }

        /* Photo 2 - Workshops */
        .photo-item:nth-child(2) .photo-background {
            background: linear-gradient(135deg, rgb(115, 196, 143) 0%, rgba(115, 196, 143, 0.9) 100%);
            background-image:
                radial-gradient(circle at 70% 30%, rgba(255, 193, 7, 0.2) 0%, transparent 40%),
                linear-gradient(135deg, rgb(115, 196, 143) 0%, rgba(115, 196, 143, 0.85) 100%);
        }

        /* Photo 3 - Counseling */
        .photo-item:nth-child(3) .photo-background {
            background: linear-gradient(135deg, rgb(0, 113, 93) 0%, rgba(0, 113, 93, 0.95) 100%);
            background-image:
                radial-gradient(circle at 50% 50%, rgba(255, 193, 7, 0.1) 0%, transparent 60%),
                linear-gradient(135deg, rgb(0, 113, 93) 0%, rgba(0, 113, 93, 0.9) 100%);
        }

        /* Photo 4 - Support Groups */
        .photo-item:nth-child(4) .photo-background {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            background-image:
                radial-gradient(circle at 20% 80%, rgba(115, 196, 143, 0.25) 0%, transparent 50%),
                linear-gradient(135deg, rgb(255, 193, 7) 0%, rgba(255, 193, 7, 0.85) 100%);
        }

        /* Overlay */
        .photo-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.4s ease;
            opacity: 0;
            z-index: 2;
        }

        .photo-item:hover .photo-overlay {
            opacity: 1;
            background: rgba(0, 0, 0, 0.5);
        }

        .photo-overlay-icon {
            font-size: 3rem;
            color: white;
            transition: all 0.4s ease;
            transform: scale(0.5);
            opacity: 0;
        }

        .photo-item:hover .photo-overlay-icon {
            transform: scale(1);
            opacity: 1;
        }

        /* Photo Label */
        .photo-label {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
            padding: 30px 20px 20px;
            color: white;
            z-index: 3;
            transition: all 0.4s ease;
            transform: translateY(10px);
            opacity: 0.8;
        }

        .photo-item:hover .photo-label {
            transform: translateY(0);
            opacity: 1;
        }

        .photo-label h4 {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .photo-label p {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        /* CTA Section */
        .impact-cta {
            text-align: center;
            padding-top: 60px;
            margin-top: 60px;
            border-top: 2px solid #e0e0e0;
        }

        .cta-title {
            font-size: 1.5rem;
            color: rgb(0, 113, 93);
            margin-bottom: 25px;
            font-weight: 700;
        }

        .btn-join {
            background-color: rgb(0, 113, 93);
            color: white;
            padding: 18px 60px;
            font-size: 1.1rem;
            font-weight: 600;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(0, 113, 93, 0.25);
            text-transform: uppercase;
            letter-spacing: 1px;
            display: inline-flex;
            align-items: center;
            gap: 12px;
        }

        .btn-join:hover {
            background-color: rgb(115, 196, 143);
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(115, 196, 143, 0.35);
            text-decoration: none;
            color: white;
        }

        .btn-join:active {
            transform: translateY(-1px);
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .impact-container {
                grid-template-columns: 1fr;
                gap: 50px;
            }

            .photo-collage {
                grid-template-columns: repeat(2, 1fr);
            }

            .photo-item:nth-child(1) {
                grid-column: 1;
                grid-row: 1;
                aspect-ratio: 1;
            }

            .photo-item:nth-child(4) {
                grid-column: 2;
                grid-row: 2;
                aspect-ratio: 1;
            }
        }

        @media (max-width: 768px) {
            .impact-section {
                padding: 70px 0;
            }

            .impact-header h2 {
                font-size: 2.5rem;
                margin-bottom: 15px;
            }

            .impact-header p {
                font-size: 1.05rem;
            }

            .impact-container {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .stat-item {
                margin-bottom: 25px;
                padding: 25px;
            }

            .stat-text h3 {
                font-size: 2rem;
            }

            .stat-text p {
                font-size: 1rem;
            }

            .photo-collage {
                grid-template-columns: 1fr;
            }

            .photo-item:nth-child(1),
            .photo-item:nth-child(4) {
                grid-column: 1;
                grid-row: auto;
                aspect-ratio: 1;
            }

            .photo-item {
                aspect-ratio: 1;
            }

            .cta-title {
                font-size: 1.3rem;
            }

            .btn-join {
                padding: 15px 50px;
                font-size: 1rem;
            }
        }

        @media (max-width: 576px) {
            .impact-section {
                padding: 50px 0;
            }

            .impact-header h2 {
                font-size: 2rem;
            }

            .impact-header p {
                font-size: 1rem;
            }

            .stat-item {
                margin-bottom: 20px;
                padding: 20px;
            }

            .stat-icon {
                width: 60px;
                height: 60px;
                font-size: 1.8rem;
            }

            .stat-text h3 {
                font-size: 1.8rem;
                margin-bottom: 5px;
            }

            .stat-text p {
                font-size: 0.95rem;
            }

            .gallery-title {
                font-size: 1.3rem;
                margin-bottom: 20px;
            }

            .photo-label h4 {
                font-size: 1rem;
            }

            .photo-label p {
                font-size: 0.8rem;
            }

            .cta-title {
                font-size: 1.15rem;
            }

            .btn-join {
                padding: 12px 40px;
                font-size: 0.95rem;
            }
        }

        /* Animation */
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
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

        .impact-stats {
            animation: slideInLeft 0.6s ease-out;
        }

        .impact-gallery {
            animation: slideInRight 0.6s ease-out;
        }

        .stat-item {
            animation: fadeInUp 0.5s ease-out forwards;
        }

        .stat-item:nth-child(1) {
            animation-delay: 0.1s;
        }

        .stat-item:nth-child(2) {
            animation-delay: 0.2s;
        }

        .stat-item:nth-child(3) {
            animation-delay: 0.3s;
        }

        .photo-item {
            animation: fadeInUp 0.5s ease-out forwards;
        }

        .photo-item:nth-child(1) {
            animation-delay: 0.2s;
        }

        .photo-item:nth-child(2) {
            animation-delay: 0.3s;
        }

        .photo-item:nth-child(3) {
            animation-delay: 0.4s;
        }

        .photo-item:nth-child(4) {
            animation-delay: 0.5s;
        }

        .get-involved-section {
            background: linear-gradient(#091f1b, rgba(0, 113, 93, 0.95)),
                url('https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=1600&h=900&fit=crop') center/cover;
            padding: 50px 0;
            position: relative;
            overflow: hidden;
            margin-top: 40px;
        }

        .section-title {
            color: white;
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .section-subtitle {
            color: var(--color-yellow);
            font-size: 1.3rem;
            margin-bottom: 4rem;
            font-weight: 500;
        }

        .action-card {
            background: white;
            border-radius: 15px;
            padding: 2.5rem;
            margin-bottom: 2rem;
            transition: all 0.4s ease;
            border: none;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            height: 100%;
        }

        .action-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .card-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2.5rem;
            transition: all 0.3s ease;
        }

        .action-card:hover .card-icon {
            transform: rotate(360deg);
        }

        .card-volunteer .card-icon {
            background-color: var(--color-yellow);
            color: white;
        }

        .card-partner .card-icon {
            background-color: var(--color-green-light);
            color: white;
        }

        .card-contribute .card-icon {
            background-color: var(--color-green-dark);
            color: white;
        }

        .card-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--color-green-dark);
        }

        .card-text {
            color: #555;
            font-size: 1.05rem;
            line-height: 1.7;
            margin-bottom: 1.5rem;
        }

        .action-btn {
            padding: 12px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            border: none;
            border-radius: 50px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-volunteer {
            background-color: #ffc107;
            color: #091f1b;
        }

        .btn-volunteer:hover {
            background-color: #e6b800;
            color: white;
            transform: scale(1.05);
            box-shadow: 0 5px 20px rgba(255, 193, 7, 0.4);
        }

        .btn-partner {
            background-color: #091f1b;
            color: white;
        }

        .btn-partner:hover {
            background-color: #5fb87f;
            color: white;
            transform: scale(1.05);
            box-shadow: 0 5px 20px rgba(115, 196, 143, 0.4);
        }

        .btn-contribute {
            background-color: #00715d;
            color: white;
        }

        .btn-contribute:hover {
            background-color: #006652;
            color: white;
            transform: scale(1.05);
            box-shadow: 0 5px 20px rgba(0, 113, 93, 0.4);
        }

        .visual-banner {
            background: white;
            border-radius: 15px;
            padding: 3rem;
            margin-top: 4rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        .visual-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--color-yellow), var(--color-green-light), var(--color-green-dark));
        }

        .banner-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }

        .banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(0, 113, 93, 0.8), rgba(115, 196, 143, 0.6));
            opacity: 0;
            transition: opacity 0.4s ease;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .banner-image-container:hover .banner-overlay {
            opacity: 1;
        }

        .overlay-text {
            color: white;
            font-size: 2rem;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .banner-image-container {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: 2.2rem;
            }

            .section-subtitle {
                font-size: 1.1rem;
            }

            .action-card {
                padding: 2rem;
            }
        }


        :root {
            --color-yellow: rgb(255, 193, 7);
            --color-green-light: #091f1b;
            --color-green-dark: rgb(0, 113, 93);
        }

        .journey-section {
            padding-bottom: 50px;
            position: relative;
        }

        .hero-banner {
            background: linear-gradient(135deg, #091f1b 0%, rgba(0, 113, 93, 0.9) 100%),
                url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=1600&h=500&fit=crop');
            background-size: cover;
            background-position: center;
            padding: 30px 0;
            margin-bottom: 80px;
            border-radius: 0 0 50px 50px;
            box-shadow: 0 20px 60px rgba(0, 113, 93, 0.3);
            position: relative;
            overflow: hidden;
        }

        .hero-banner::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 100px;
            background: var(--color-yellow);
            clip-path: polygon(0 50%, 100% 0, 100% 100%, 0 100%);
            opacity: 0.2;
        }

        .section-title {
            font-size: 3.5rem;
            font-weight: 800;
            color: white;
            margin-bottom: 1rem;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.3);
        }

        .section-subtitle {
            font-size: 1.4rem;
            color: var(--color-yellow);
            font-weight: 500;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .achievements-grid {
            margin-top: -50px;
            position: relative;
            z-index: 10;
        }

        .achievement-item {
            background: white;
            border-radius: 20px;
            padding: 40px 30px;
            margin-bottom: 30px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border-left: 6px solid transparent;
            position: relative;
            overflow: hidden;
        }

        .achievement-item::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 150px;
            height: 150px;
            background: var(--color-green-light);
            opacity: 0.05;
            border-radius: 50%;
            transform: translate(50%, -50%);
            transition: all 0.4s ease;
        }

        .achievement-item:hover::before {
            transform: translate(30%, -30%) scale(1.5);
            opacity: 0.1;
        }

        .achievement-item:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        .achievement-item:nth-child(1) {
            border-left-color: var(--color-yellow);
        }

        .achievement-item:nth-child(2) {
            border-left-color: var(--color-green-light);
        }

        .achievement-item:nth-child(3) {
            border-left-color: var(--color-green-dark);
        }

        .achievement-item:nth-child(4) {
            border-left-color: var(--color-yellow);
        }

        .achievement-item:nth-child(5) {
            border-left-color: var(--color-green-light);
        }

        .achievement-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .achievement-icon-wrapper {
            width: 70px;
            height: 70px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin-right: 20px;
            transition: all 0.4s ease;
            flex-shrink: 0;
        }

        .achievement-item:hover .achievement-icon-wrapper {
            transform: scale(1.1);
        }

        .achievement-item:nth-child(1) .achievement-icon-wrapper {
            background: #00715d;
            color: white;
        }

        .achievement-item:nth-child(2) .achievement-icon-wrapper {
            background: var(--color-green-light);
            color: white;
        }

        .achievement-item:nth-child(3) .achievement-icon-wrapper {
            background: var(--color-green-dark);
            color: white;
        }

        .achievement-item:nth-child(4) .achievement-icon-wrapper {
            background: var(--color-yellow);
            color: white;
        }

        .achievement-item:nth-child(5) .achievement-icon-wrapper {
            background: var(--color-green-light);
            color: white;
        }

        .achievement-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--color-green-dark);
            margin: 0;
            flex: 1;
        }

        .achievement-text {
            color: #666;
            font-size: 1rem;
            line-height: 1.8;
            margin: 0;
        }

        .stats-section {
            background: #00715d;
            border-radius: 25px;
            border: 8px solid #ffc107;
            padding: 60px 40px;
            margin: 80px 0;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.08);
            position: relative;
        }

        /*.stats-section::before {*/
        /*    content: '';*/
        /*    position: absolute;*/
        /*    top: 0;*/
        /*    left: 0;*/
        /*    width: 100%;*/
        /*    height: 8px;*/
        /*    background: #ffc107;*/
        /*    border-radius: 25px 25px 0 0;*/
        /*}*/

        .stat-box {
            text-align: center;
            padding: 30px 20px;
            border-radius: 15px;
            transition: all 0.3s ease;
            position: relative;
        }

        .stat-box:hover {
            transform: translateY(-10px);
        }

        .stat-box:nth-child(1) {
            background: #fff;
        }

        .stat-box:nth-child(2) {
            background: rgba(115, 196, 143, 0.1);
        }

        .stat-box:nth-child(3) {
            background: rgba(0, 113, 93, 0.1);
        }

        .stat-box:nth-child(4) {
            background: rgba(255, 193, 7, 0.1);
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: 800;
            background: #091f1b;
            -webkit-background-clip: text;
            -webkit-text-fill-color: #091f1b;
            background-clip: text;
            display: block;
            margin-bottom: 10px;
            padding: 10px 0px;
            padding: 10px 0px;
        }

        .stat-label {
            font-size: 1.1rem;
            color: #091f1b;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .visual-section {
            position: relative;
            margin: 60px 0;
        }

        .image-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .image-box {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            transition: all 0.4s ease;
            height: 300px;
        }

        .image-box:hover {
            transform: scale(1.05);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
        }

        .image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .image-box:hover img {
            transform: scale(1.1);
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 113, 93, 0.9);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .image-box:hover .image-overlay {
            opacity: 1;
        }

        .overlay-icon {
            font-size: 3rem;
            color: var(--color-yellow);
            margin-bottom: 15px;
        }

        .overlay-text {
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
            text-align: center;
            padding: 0 20px;
        }

        .cta-container {
            text-align: center;
            margin-top: 80px;
        }

        .cta-btn {
            display: inline-flex;
            align-items: center;
            background: var(--color-green-dark);
            color: white;
            padding: 20px 60px;
            font-size: 1.3rem;
            font-weight: 700;
            border: none;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 2px;
            box-shadow: 0 10px 40px rgba(0, 113, 93, 0.4);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .cta-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--color-yellow);
            transition: left 0.4s ease;
            z-index: 0;
        }

        .cta-btn:hover::before {
            left: 0;
        }

        .cta-btn span {
            position: relative;
            z-index: 1;
        }

        .cta-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(255, 193, 7, 0.5);
            color: white;
        }

        .cta-btn i {
            margin-right: 15px;
            font-size: 1.5rem;
            position: relative;
            z-index: 1;
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: 2.5rem;
            }

            .achievement-header {
                flex-direction: column;
                text-align: center;
            }

            .achievement-icon-wrapper {
                margin-right: 0;
                margin-bottom: 15px;
            }

            .image-grid {
                grid-template-columns: 1fr;
            }

            .stat-number {
                font-size: 2.5rem;
            }

            .cta-btn {
                padding: 18px 40px;
                font-size: 1.1rem;
            }
        }
    </style>
@endsection
@section('content')
    <!-- === Banner Section start === -->
    <section class="banner-two">
        <div class="banner-two__slider swiper">
            <div class="swiper-wrapper">
                @foreach ($data as $value)
                    <div class="swiper-slide">
                        <div class="banner-two__slider-single">
                            <div class="banner-two__slider-bg"
                                data-background="{{asset('assets/uploads/homeslider/'.$value->img)}}">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-9 col-lg-7 col-xxl-6">
                                        <div class="banner-two__slider-content">
                                            <span class="sub-title"><i class="icon-donation"></i>{{$value->sub_text }}</span>
                                            <!-- <h1>Giving help <br>
                                            To Those <span class="bottom-line">peoples</span>
                                            Who Need It.
                                         </h1> -->

                                            @php
                                                $words = explode(' ', $value->text);
                                            @endphp

                                            <h1>
                                                {{ $words[0] ?? '' }}
                                                {{ $words[1] ?? '' }} <br>
                                                {{ $words[2] ?? '' }} <span class="bottom-line">{{ $words[3] ?? '' }}</span>
                                                {{ $words[4] ?? '' }}
                                            </h1>

                                           

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
        <!--<div class="slider-navigation d-none d-md-flex">-->
        <!--   <button type="button" aria-label="prev slide" title="prev slide" class="prev-banner slider-btn">-->
        <!--      <i class="fa-solid fa-arrow-left"></i>-->
        <!--   </button>-->
        <!--   <button type="button" aria-label="next slide" title="next slide"-->
        <!--      class="next-banner slider-btn slider-btn-next">-->
        <!--      <i class="fa-solid fa-arrow-right"></i>-->
        <!--   </button>-->
        <!--</div>-->
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

    <!-- ==== Earlier help now About section start ==== -->
    <section class="help-two">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5 col-xxl-6 ">
                    <div class="help-two__thumb d-none d-lg-block">
                        <div class="help-two__thumb-inner">
                            <div class="thumb-lg" data-aos="fade-up" data-aos-duration="1000">
                                <img src="{{ asset('/frontend_assets/images/about2.jpg') }}" alt="Image">
                                <!--<img src="{{ asset('/frontend_assets/images/about2.jpg') }}" alt="Image">-->
                            </div>
                            <div class="thumb-sm" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                                <img class="" style="width:250px"
                                    src="{{ asset('/frontend_assets/images/help/image.png') }}" alt="Image">
                                <!--<img class="" style="width:250px" src="{{ asset('/frontend_assets/images/help/image.png') }}" alt="Image">-->
                            </div>
                            <div class="thumb-md" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                                <img src="{{ asset('/frontend_assets/images/about1.jpeg') }}" alt="Image">
                                <!--<img src="{{ asset('/frontend_assets/images/about1.jpeg') }}" alt="Image">-->
                            </div>
                            <div class="help-two__thumb-content">
                                <div class="thumb">
                                    <i class="icon-donation"></i>
                                </div>
                                <div class="content">
                                    <h2><span class="odometer" data-odometer-final="250"></span><span>+</span>
                                    </h2>
                                    <p>Services we Provide</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7 col-xxl-6">
                    <div class="help-two__content">
                        <div class="section__content">
                            <span class="sub-title"><i class="icon-donation"></i>Make a Difference with Your
                                Contribution</span>
                            <h2 class="title-animation">Welcome to
                                Zindagi Tujhe <span> Salaam</span>
                            </h2>
                            <p>
                                Zindagi Tujhe Salaam (ZTS) is a mission-driven social organization dedicated to promoting
                                mental health and emotional well-being. We support individuals, families, and communities
                                through counseling, workshops, outreach, and digital tools. Our goal is to create a
                                stigma-free environment where everyone feels empowered to seek help and lead a balanced,
                                healthy life.
                            </p>
                        </div>
                        <div class="help-two__inner cta">
                            <div class="help-two__inner-content">
                                <div class="help__content-icon-group">
                                    <div class="help__content-icon">
                                        <div class="thumb">
                                            <i class="icon-make-donation"></i>
                                        </div>
                                        <div class="content">
                                            <h6>Start helping them</h6>
                                            <p>Raising awareness about the Contribution's mission and cause.</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="help__content-icon">
                                        <div class="thumb">
                                            <i class="icon-support-heart"></i>
                                        </div>
                                        <div class="content">
                                            <h6>Make Contributions</h6>
                                            <p>Raising awareness about the Contribution's mission and cause.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="help__content-list">
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i> Helped fund 3,265 Project
                                            powerfull
                                        </li>
                                        <li><i class="fa-solid fa-circle-check"></i> We give child a gift of a
                                            education
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="help-two-card-wrapper">
                                <div class="help-two__card van-tilt">
                                    <div class="help-card-thumb">
                                        <img src="{{ asset('/frontend_assets/images/about3.jpg') }}" alt="Image">
                                        <!--<img src="{{ asset('/frontend_assets/images/about3.jpg') }}" alt="Image">-->
                                        <i class="icon-star"></i>
                                    </div>
                                    <div class="help-card-content">
                                        <h4>35,734</h4>
                                        <h6>Helped Fund</h6>
                                        <p>Quisque dignissim enim diam</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== About  section end ==== -->

    <!-- ==== Our Journey  section start ==== -->
    <section class="journey-section">
        <div class="hero-banner">
            <div class="container text-center">
                <h1 class="section-title">What We Have Achieved</h1>
                <p class="section-subtitle">Transforming Lives Through Compassionate Mental Health Care</p>
            </div>
        </div>

        <div class="container">
            <div class="achievements-grid">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="achievement-item">
                            <div class="achievement-header">
                                <div class="achievement-icon-wrapper">
                                    <i class="fas fa-phone-volume"></i>
                                </div>
                                <h3 class="achievement-title">24/7 Helpline Support</h3>
                            </div>
                            <p class="achievement-text">
                                Thousands of individuals supported through our round-the-clock helpline service. We provide
                                immediate assistance, crisis intervention, and compassionate care whenever someone needs us
                                most, ensuring no one faces their struggles alone.
                            </p>
                        </div>
                    </div>

                    <div class=" col-md-6 col-12">
                        <div class="achievement-item">
                            <div class="achievement-header">
                                <div class="achievement-icon-wrapper">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                </div>
                                <h3 class="achievement-title">Workshops & Training Programs</h3>
                            </div>
                            <p class="achievement-text">
                                Over 200 comprehensive sessions conducted across schools, colleges, and communities. Our
                                interactive workshops empower individuals with knowledge, practical skills, and tools to
                                maintain better mental health and support others in their journey.
                            </p>
                        </div>
                    </div>



                    <div class="col-md-6 col-12">
                        <div class="achievement-item">
                            <div class="achievement-header">
                                <div class="achievement-icon-wrapper">
                                    <i class="fas fa-laptop-medical"></i>
                                </div>
                                <h3 class="achievement-title">Digital Initiatives</h3>
                            </div>
                            <p class="achievement-text">
                                Innovative self-help tools, guided meditations, and online counseling making mental health
                                support accessible anytime, anywhere through our digital platforms.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="achievement-item">
                            <div class="achievement-header">
                                <div class="achievement-icon-wrapper">
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                                <h3 class="achievement-title">Capacity Building</h3>
                            </div>
                            <p class="achievement-text">
                                Teachers, healthcare providers, and community leaders trained as mental health champions,
                                creating a sustainable network of support and positive change across communities.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="stats-section">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6">
                        <div class="stat-box">
                            <span class="stat-number">15K+</span>
                            <span class="stat-label">Lives Impacted</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="stat-box">
                            <span class="stat-number">200+</span>
                            <span class="stat-label">Workshops</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="stat-box">
                            <span class="stat-number">50+</span>
                            <span class="stat-label">Rural Camps</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="stat-box">
                            <span class="stat-number">600+</span>
                            <span class="stat-label">Champions</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="visual-section">
                <div class="image-grid">
                    <div class="image-box">
                        <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=800&h=600&fit=crop"
                            alt="Community Workshop">
                        <div class="image-overlay">
                            <i class="fas fa-users overlay-icon"></i>
                            <p class="overlay-text">Community Workshops</p>
                        </div>
                    </div>
                    <div class="image-box">
                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=800&h=600&fit=crop"
                            alt="Counseling Session">
                        <div class="image-overlay">
                            <i class="fas fa-comments overlay-icon"></i>
                            <p class="overlay-text">One-on-One Support</p>
                        </div>
                    </div>
                    <div class="image-box">
                        <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=800&h=600&fit=crop"
                            alt="Training Programs">
                        <div class="image-overlay">
                            <i class="fas fa-graduation-cap overlay-icon"></i>
                            <p class="overlay-text">Training Programs</p>
                        </div>
                    </div>
                    <div class="image-box">
                        <img src="https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=800&h=600&fit=crop"
                            alt="Rural Outreach">
                        <div class="image-overlay">
                            <i class="fas fa-heart overlay-icon"></i>
                            <p class="overlay-text">Rural Outreach</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cta-container">
                <a href="{{ url('/gallery') }}" class="btn cta-btn">
                    <i class="fas fa-book-reader"></i>
                    <span>Read Our Success Stories</span>
                </a>
            </div>
        </div>
    </section>
    <!-- ==== Our Journey  section end ==== -->

    <!-- ==== Core Member start ==== -->
    {{-- <div class="difference"></div> --}}
    <section class="team ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-6">
                    <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title"><i class="icon-donation"></i>Start Contributing poor
                            people</span>
                        <h2 class="title-animation">Meet Our
                            <span>Core Team</span> members
                        </h2>
                    </div>
                </div>
            </div>
            @if($coreMembers->count() > 0)
            <div class="row gutter-40">
                @foreach ($coreMembers as $index => $member)
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="{{ $index * 100 }}">
                        <div class="team__single van-tilt">
                            <div class="team__single-thumb">
                                <a href="#">
                                    <img src="{{ asset('assets/uploads/CoreMember/'.$member->img) }}" alt="{{ $member->name }}">
                                </a>
                            </div>
                            <div class="team__single-content">
                                <h6>{{ $member->name }}</h6>
                                @if($member->designation)
                                <p>{{ $member->designation }}</p>
                                @else
                                <p>Core Member</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <div class="row">
                <div class="col-12 text-center py-5">
                    <p class="text-muted">No core members to display</p>
                </div>
            </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="section__cta cta text-center">
                        <a href="{{ url('/about/team/core_member') }}" aria-label="our team" title="our team" class="btn--primary">View All
                            <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="spade">
            <img src="{{ asset('frontend_assets/images/sprade-green.png') }}" alt="Image">
        </div>
    </section>
    <!-- ==== / team section end ==== -->




    <!-- ==== / team section end ==== -->
    <!--<section class="testimonial-seven-area project-panel-area position-relative z-1 d-none d-lg-block">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-xl-5 col-lg-4">-->
    <!--                <div class="testimonial-seven-thumb position-relative z-1">-->
    <!--                    <img src="https://imgs.search.brave.com/-SzudOilDhbmuKs6aatJIOgIcgyinLbAMRvZgTFlnBI/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pLnBp/bmltZy5jb20vb3Jp/Z2luYWxzL2Y3L2I5/L2UyL2Y3YjllMmQ1/NmFkOWJiNTA1MjFl/Yzk3NzIxZjNhMWQ1/LmpwZw"-->
    <!--                        alt="thumb">-->
    <!--                    <div class="testimonial-seven-thumb-quate">-->
    <!--                        <a href="#"><span><img src="frontend_assets/images/icon/testimonial-seven-quate.svg"-->
    <!--                                    alt="quate"></span></a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="testimonial-seven-thumb position-relative z-1">-->
    <!--                    <img src="https://imgs.search.brave.com/96a9n9i9rR1k6k6vY0NZKfNjsNr6BnRRqco6H-eC0Y8/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/c2lraGl3aWtpLm9y/Zy9pbWFnZXMvYi9i/OC9CaGFnYXQtUHVy/YW4tU2luZ2gtYXcu/anBn"-->
    <!--                        alt="thumb">-->
    <!--                    <div class="testimonial-seven-thumb-quate">-->
    <!--                        <a href="#"><span><img src="frontend_assets/images/icon/testimonial-seven-quate.svg"-->
    <!--                                    alt="quate"></span></a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="testimonial-seven-thumb position-relative z-1">-->
    <!--                    <img src="https://imgs.search.brave.com/JeW05RO0LKydV7bTvEJLr6RhRg1yOW8qa3Rs_2yiEXU/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9yZW5k/ZXIuZmluZWFydGFt/ZXJpY2EuY29tL2lt/YWdlcy9pbWFnZXMt/cHJvZmlsZS1mbG93/LzQwMC9pbWFnZXMv/YXJ0d29ya2ltYWdl/cy9tZWRpdW1sYXJn/ZS8xL2dhbmRoaS1p/bmRpYW4tc2Nob29s/LmpwZw"-->
    <!--                        alt="thumb">-->
    <!--                    <div class="testimonial-seven-thumb-quate">-->
    <!--                        <a href="#"><span><img src="frontend_assets/images/icon/testimonial-seven-quate.svg"-->
    <!--                                    alt="quate"></span></a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-xl-7 col-lg-8">-->
    <!--                <div class="row">-->
    <!--                    <div class="col-xl-12 project-panel">-->
    <!--                        <div class="testimonial-seven-wrapper">-->
    <!--                            <h4 class="testimonial-seven-title">“Great Services”</h4>-->
    <!--                            <p class="testimonial-seven-paragraph">Sadhguru is a Yogi, Mystic and Visionary. Named one-->
    <!--                                of India’s 50 most influential people, Sadhguru’s work has touched the lives of millions-->
    <!--                                worldwide through his transformational programs... </p>-->
    <!--                            <div class="testimonial-seven-wrap">-->
    <!--                                <div class="testimonial-seven-left">-->
    <!--                                    <div class="testimonial-seven-icon">-->
    <!--                                        <span><img src="frontend_assets/images/icon/testimonial-seven-quate-yellow.svg"-->
    <!--                                                alt="quate"></span>-->
    <!--                                    </div>-->
    <!--                                    <h6 class="testimonial-seven-name">Sadhguru-->
    <!--                                    </h6>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="row">-->
    <!--                    <div class="col-xl-12 project-panel">-->
    <!--                        <div class="testimonial-seven-wrapper">-->
    <!--                            <h4 class="testimonial-seven-title">“Great Services”</h4>-->
    <!--                            <p class="testimonial-seven-paragraph">Bhagat Puran Singh was no ordinary human but-->
    <!--                                definitely one of the most loved and admired men in the world. Many people describe him-->
    <!--                                as the bearded Mother Teresa of Punjab. </p>-->
    <!--                            <div class="testimonial-seven-wrap">-->
    <!--                                <div class="testimonial-seven-left">-->
    <!--                                    <div class="testimonial-seven-icon">-->
    <!--                                        <span><img src="frontend_assets/images/icon/testimonial-seven-quate-yellow.svg"-->
    <!--                                                alt="quate"></span>-->
    <!--                                    </div>-->
    <!--                                    <h6 class="testimonial-seven-name">Bhagat Puran Singh </h6>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="row">-->
    <!--                    <div class="col-xl-12 project-panel">-->
    <!--                        <div class="testimonial-seven-wrapper">-->
    <!--                            <h4 class="testimonial-seven-title">“Great Services”</h4>-->
    <!--                            <p class="testimonial-seven-paragraph">hthere is not a single country in the whole world-->
    <!--                                where the name of Mahatma Gandhi is not known. Do you know why Gandhi became so famous?-->
    <!--                            </p>-->
    <!--                            <div class="testimonial-seven-wrap">-->
    <!--                                <div class="testimonial-seven-left">-->
    <!--                                    <div class="testimonial-seven-icon">-->
    <!--                                        <span><img src="frontend_assets/images/icon/testimonial-seven-quate-yellow.svg"-->
    <!--                                                alt="quate"></span>-->
    <!--                                    </div>-->
    <!--                                    <h6 class="testimonial-seven-name">Mahatma Gandhi </h6>-->

    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="testimonial-seven-shape">-->
    <!--        <img src="frontend_assets/images/testimonial/testimonail-seven-shape.png" alt="shape">-->
    <!--    </div>-->
    <!--</section>-->

    <!-- ==== Our Vision section start ==== -->
    <!--  <section class="vision-section">-->
    <!--    <div class="container vision-content">-->
    <!-- Header -->
    <!--        <div class="vision-header">-->
    <!--            <h1>What We Are Planning</h1>-->
    <!--            <div class="accent-line"></div>-->
    <!--            <p class="subtitle">Join us on our journey to transform mental health support and create lasting positive change in our communities</p>-->
    <!--        </div>-->

    <!-- Roadmap Timeline -->
    <!--        <div class="roadmap-container">-->
    <!-- Item 1 -->
    <!--            <div class="roadmap-item">-->
    <!--                <div class="roadmap-dot"></div>-->
    <!--                <div class="roadmap-content">-->
    <!--                    <div class="roadmap-card">-->
    <!--                        <div class="roadmap-icon">-->
    <!--                            <i class="fas fa-mobile-alt"></i>-->
    <!--                        </div>-->
    <!--                        <h3>Upgraded Helpline & App</h3>-->
    <!--                        <p>Access counseling, self-assessment, and guided meditation anywhere, anytime. Professional support at your fingertips.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

    <!-- Item 2 -->
    <!--            <div class="roadmap-item">-->
    <!--                <div class="roadmap-dot"></div>-->
    <!--                <div class="roadmap-content">-->
    <!--                    <div class="roadmap-card">-->
    <!--                        <div class="roadmap-icon">-->
    <!--                            <i class="fas fa-graduation-cap"></i>-->
    <!--                        </div>-->
    <!--                        <h3>Mental Health in Schools</h3>-->
    <!--                        <p>Expand programs for students nationwide, creating safe spaces and fostering emotional well-being in educational institutions.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

    <!-- Item 3 -->
    <!--            <div class="roadmap-item">-->
    <!--                <div class="roadmap-dot"></div>-->
    <!--                <div class="roadmap-content">-->
    <!--                    <div class="roadmap-card">-->
    <!--                        <div class="roadmap-icon">-->
    <!--                            <i class="fas fa-users"></i>-->
    <!--                        </div>-->
    <!--                        <h3>Community Hubs</h3>-->
    <!--                        <p>Local centers for ongoing counseling and workshops, bringing mental health support directly to your neighborhood.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

    <!-- Item 4 -->
    <!--            <div class="roadmap-item">-->
    <!--                <div class="roadmap-dot"></div>-->
    <!--                <div class="roadmap-content">-->
    <!--                    <div class="roadmap-card">-->
    <!--                        <div class="roadmap-icon">-->
    <!--                            <i class="fas fa-megaphone"></i>-->
    <!--                        </div>-->
    <!--                        <h3>Awareness Campaigns</h3>-->
    <!--                        <p>Large-scale public campaigns to reduce stigma and normalize conversations around mental health and well-being.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

    <!-- Item 5 -->
    <!--            <div class="roadmap-item">-->
    <!--                <div class="roadmap-dot"></div>-->
    <!--                <div class="roadmap-content">-->
    <!--                    <div class="roadmap-card">-->
    <!--                        <div class="roadmap-icon">-->
    <!--                            <i class="fas fa-handshake"></i>-->
    <!--                        </div>-->
    <!--                        <h3>Strategic Partnerships</h3>-->
    <!--                        <p>Collaborations with hospitals, NGOs, and government bodies to create a comprehensive support ecosystem.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->

    <!-- CTA Section -->
    <!--        <div class="vision-cta">-->
    <!--            <button class="btn-vision">-->
    <!--                <i class="fas fa-heart me-2"></i>Support Our Vision-->
    <!--            </button>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- ==== Our Vision section end ==== -->



    <section class="get-involved-section">
        <div class="container">
            <div class="text-center">
                <h1 class="section-title">Take Action with ZTS</h1>
                <p class="section-subtitle">Join us in making a difference in mental health care</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card action-card card-volunteer">
                        <div class="card-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h3 class="card-title text-center">Volunteer</h3>
                        <p class="card-text text-center">
                            Help run workshops, support groups, and outreach programs. Your time and expertise can transform
                            lives in your community.
                        </p>
                        <div class="text-center">
                            <a href="{{ url('/contact') }}" class="btn action-btn btn-volunteer">Volunteer</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card action-card card-partner">
                        <div class="card-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3 class="card-title text-center">Partner With Us</h3>
                        <p class="card-text text-center">
                            Collaborate to expand mental health programs and reach more communities. Together, we can create
                            lasting impact.
                        </p>
                        <div class="text-center">
                            <a href="{{ url('/contact') }}" class="btn action-btn btn-partner">Partner</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card action-card card-contribute">
                        <div class="card-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3 class="card-title text-center">Contribute</h3>
                        <p class="card-text text-center">
                            Support initiatives that provide counseling and resources where needed most. Every contribution
                            makes a difference.
                        </p>
                        <div class="text-center">
                            <a href="{{ url('/contact') }}" class="btn action-btn btn-contribute">Contribute</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="visual-banner">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="banner-image-container">
                            <img src="https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=800&h=600&fit=crop"
                                alt="Volunteers interacting with communities" class="banner-image">
                            <div class="banner-overlay">
                                <span class="overlay-text">Join Our Mission</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="mb-4" style="color: var(--color-green-dark); font-weight: 700; font-size: 2rem;">
                            Making a Real Impact Together
                        </h2>
                        <p class="mb-3" style="font-size: 1.1rem; color: #555; line-height: 1.8;">
                            <i class="fas fa-check-circle me-2" style="color: var(--color-green-light);"></i>
                            <strong>Direct Community Engagement:</strong> Work face-to-face with those who need support
                        </p>
                        <p class="mb-3" style="font-size: 1.1rem; color: #555; line-height: 1.8;">
                            <i class="fas fa-check-circle me-2" style="color: var(--color-green-light);"></i>
                            <strong>Professional Development:</strong> Gain valuable experience in mental health advocacy
                        </p>
                        <p class="mb-4" style="font-size: 1.1rem; color: #555; line-height: 1.8;">
                            <i class="fas fa-check-circle me-2" style="color: var(--color-green-light);"></i>
                            <strong>Lasting Change:</strong> Be part of sustainable mental health solutions
                        </p>
                        <div class="d-flex gap-3 flex-wrap">
                            <span class="badge px-4 py-2" style="background-color: var(--color-yellow); font-size: 1rem;">
                                <i class="fas fa-users me-2"></i>500+ Volunteers
                            </span>
                            <span class="badge px-4 py-2"
                                style="background-color: var(--color-green-light); font-size: 1rem;">
                                <i class="fas fa-building me-2"></i>50+ Partners
                            </span>
                            <span class="badge px-4 py-2"
                                style="background-color: var(--color-green-dark); font-size: 1rem;">
                                <i class="fas fa-map-marker-alt me-2"></i>20+ Cities
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==== Core Programs section start ==== -->
    <section class="programs-section">
        <div class="container">
            <!-- Header -->
            <div class="programs-header">
                <h2>Our Programs</h2>
                <div class="header-accent"></div>
                <p>Comprehensive mental health solutions designed to support individuals and communities at every stage of
                    their wellness journey</p>
            </div>

            <!-- Programs Grid -->
            <div class="programs-grid">
                <!-- Program 1 -->
                <div class="program-card">
                    <div class="program-image-wrapper">
                        <div class="program-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="program-overlay">
                            <div class="program-icon-main">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                    </div>
                    <div class="program-content">
                        <h3 class="program-title">Phone-a-Friend Helpline</h3>
                        <p class="program-description">24/7 confidential emotional support from trained counselors who care.
                            Reach out anytime, anywhere.</p>
                        <a href="{{ url('/campaign/phone-a-friend') }}" class="program-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Program 2 -->
                <div class="program-card">
                    <div class="program-image-wrapper">
                        <div class="program-icon">
                            <i class="fas fa-comments"></i>
                        </div>
                        <div class="program-overlay">
                            <div class="program-icon-main">
                                <i class="fas fa-smile"></i>
                            </div>
                        </div>
                    </div>
                    <div class="program-content">
                        <h3 class="program-title">Counseling Services</h3>
                        <p class="program-description">Individual, family, and group sessions with licensed professionals to
                            address your unique needs.</p>
                        <a href="{{ url('/contact') }}" class="program-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Program 3 -->
                <div class="program-card">
                    <div class="program-image-wrapper">
                        <div class="program-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <div class="program-overlay">
                            <div class="program-icon-main">
                                <i class="fas fa-brain"></i>
                            </div>
                        </div>
                    </div>
                    <div class="program-content">
                        <h3 class="program-title">Workshops & Awareness</h3>
                        <p class="program-description">Life skills, stress management, and mindfulness programs to build
                            resilience and well-being.</p>
                        <a href="{{ url('/gallery') }}" class="program-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Program 4 -->
                <div class="program-card">
                    <div class="program-image-wrapper">
                        <div class="program-icon">
                            <i class="fas fa-people-group"></i>
                        </div>
                        <div class="program-overlay">
                            <div class="program-icon-main">
                                <i class="fas fa-handshake"></i>
                            </div>
                        </div>
                    </div>
                    <div class="program-content">
                        <h3 class="program-title">Peer Support Groups</h3>
                        <p class="program-description">Safe spaces to share experiences and build resilience with others on
                            similar journeys.</p>
                        <a href="{{ url('/contact') }}" class="program-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Program 5 -->
                <div class="program-card">
                    <div class="program-image-wrapper">
                        <div class="program-icon">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <div class="program-overlay">
                            <div class="program-icon-main">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="program-content">
                        <h3 class="program-title">Digital Wellness Tools</h3>
                        <p class="program-description">Online counseling and self-assessment tools for accessible,
                            convenient mental health support.</p>
                        <a href="{{ url('/campaign/phone-a-friend') }}" class="program-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Program 6 -->
                <div class="program-card">
                    <div class="program-image-wrapper">
                        <div class="program-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="program-overlay">
                            <div class="program-icon-main">
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="program-content">
                        <h3 class="program-title">Training & Capacity Building</h3>
                        <p class="program-description">Equip teachers, parents, and leaders as mental health advocates in
                            their communities.</p>
                        <a href="{{ url('/contact') }}" class="program-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="programs-cta">
                <a href="{{ url('/contact') }}" class="btn-explore">
                    <i class="fas fa-compass"></i>Explore All Programs
                </a>
            </div>
        </div>
    </section>
    <!-- ==== Core Programs section end ==== -->

    <!-- ==== Impact / Why It Matters section start ==== -->
    {{-- <section class="impact-section">
        {{-- <section class="impact-section">
            <div class="container impact-content">
                <!-- Header -->
                <div class="impact-header">
                    <h2>Why ZTS Matters</h2>
                    <div class="header-accent"></div>
                    <p>Understanding the critical need for mental health support in our communities</p>
                </div>

                <!-- Main Content -->
                <div class="impact-container">
                    <!-- Stats Section -->
                    <div class="impact-stats">
                        <!-- Stat 1 -->
                        <div class="stat-item">
                            <div class="stat-item-content">
                                <div class="stat-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="stat-text">
                                    <h3>1 in 7</h3>
                                    <p>Indians faces a mental health challenge in their lifetime</p>
                                </div>
                            </div>
                        </div>

                        <!-- Stat 2 -->
                        <div class="stat-item">
                            <div class="stat-item-content">
                                <div class="stat-icon">
                                    <i class="fas fa-exclamation-circle"></i>
                                </div>
                                <div class="stat-text">
                                    <h3>70%</h3>
                                    <p>Never seek help due to stigma or lack of access</p>
                                </div>
                            </div>
                        </div>

                        <!-- Stat 3 -->
                        <div class="stat-item">
                            <div class="stat-item-content">
                                <div class="stat-icon">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="stat-text">
                                    <h3>Life-Saving</h3>
                                    <p>Mental health awareness saves lives and strengthens communities</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Section -->
                    <div class="impact-gallery">
                        <h3 class="gallery-title">Our Community Impact</h3>
                        <div class="photo-collage">
                            <!-- Photo 1 -->
                            <div class="photo-item">
                                <div class="photo-background">
                                    <i class="fas fa-users"
                                        style="position: absolute; font-size: 4rem; color: rgba(255,255,255,0.2); top: 50%; left: 50%; transform: translate(-50%, -50%);"></i>
                                </div>
                                <div class="photo-overlay">
                                    <div class="photo-overlay-icon">
                                        <i class="fas fa-eye"></i>
                                    </div>
                                </div>
                                <div class="photo-label">
                                    <h4>Community Events</h4>
                                    <p>Bringing people together</p>
                                </div>
                            </div>

                            <!-- Photo 2 -->
                            <div class="photo-item">
                                <div class="photo-background">
                                    <i class="fas fa-presentation"
                                        style="position: absolute; font-size: 4rem; color: rgba(255,255,255,0.2); top: 50%; left: 50%; transform: translate(-50%, -50%);"></i>
                                </div>
                                <div class="photo-overlay">
                                    <div class="photo-overlay-icon">
                                        <i class="fas fa-eye"></i>
                                    </div>
                                </div>
                                <div class="photo-label">
                                    <h4>Workshops</h4>
                                    <p>Educational sessions for wellness</p>
                                </div>
                            </div>

                            <!-- Photo 3 -->
                            <div class="photo-item">
                                <div class="photo-background">
                                    <i class="fas fa-comments"
                                        style="position: absolute; font-size: 4rem; color: rgba(255,255,255,0.2); top: 50%; left: 50%; transform: translate(-50%, -50%);"></i>
                                </div>
                                <div class="photo-overlay">
                                    <div class="photo-overlay-icon">
                                        <i class="fas fa-eye"></i>
                                    </div>
                                </div>
                                <div class="photo-label">
                                    <h4>Counseling Sessions</h4>
                                    <p>Professional support & care</p>
                                </div>
                            </div>

                            <!-- Photo 4 -->
                            <div class="photo-item">
                                <div class="photo-background">
                                    <i class="fas fa-people-group"
                                        style="position: absolute; font-size: 4rem; color: rgba(255,255,255,0.2); top: 50%; left: 50%; transform: translate(-50%, -50%);"></i>
                                </div>
                                <div class="photo-overlay">
                                    <div class="photo-overlay-icon">
                                        <i class="fas fa-eye"></i>
                                    </div>
                                </div>
                                <div class="photo-label">
                                    <h4>Support Groups</h4>
                                    <p>Building resilience together</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA Section -->
                <div class="impact-cta">
                    <h3 class="cta-title">Make a Difference Today</h3>
                    <button class="btn-join">
                        <i class="fas fa-heart"></i>Join Our Movement
                    </button>
                </div>
            </div>
        </section> --}}


    </section> --}}


    <!-- ==== Impact / Why It Matters section end ==== -->

    <!-- ==== Get Involved section start ==== -->


    <!-- ==== cause slider two section start ==== -->
    <!--<section class="cause-two">-->
    <!--    <div class="container-fluid">-->
    <!-- 🔹 Add the heading row here -->
    <!--        {{-- <div class="row justify-content-center">-->
    <!--            <div class="col-12 col-md-8">-->
    <!--                <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">-->
    <!--                    <span class="sub-title">Our Mission</span>-->
    <!--                    <h2 class="title-animation mt-0 fw-7">-->
    <!--                        Empowering lives with <span>hope</span>-->
    <!--                    </h2>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div> --}}-->
    <!-- 🔹 Heading row ends -->
    <!--        <div class="row">-->
    <!--            <div class="col-12">-->
    <!--                <div class="cause-two__inner">-->
    <!--                    <div class="slider-navigation">-->
    <!--                        <button type="button" aria-label="prev slide" title="prev slide"-->
    <!--                            class="prev-cause-two slider-btn">-->
    <!--                            <i class="fa-solid fa-arrow-left"></i>-->
    <!--                        </button>-->
    <!--                        <button type="button" aria-label="next slide" title="next slide"-->
    <!--                            class="next-cause-two slider-btn slider-btn-next">-->
    <!--                            <i class="fa-solid fa-arrow-right"></i>-->
    <!--                        </button>-->
    <!--                    </div>-->

    <!--                    <div class="cause-two__slider swiper">-->
    <!--                        <div class="swiper-wrapper">-->
    <!--                            <div class="swiper-slide">-->
    <!--                                <div class="cause-two__slider-single">-->
    <!--                                    <div class="cause-thumb">-->
    <!--                                        <img src="{{ asset('frontend_assets/images/mission/mission1.jpg') }}"-->
    <!--                                            alt="Image">-->
    <!--                                        <a href="cause-details.html">-->
    <!--                                            <i class="fa-solid fa-arrow-right"></i>-->
    <!--                                        </a>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="swiper-slide">-->
    <!--                                <div class="cause-two__slider-single">-->
    <!--                                    <div class="cause-thumb">-->
    <!--                                        <img src="{{ asset('frontend_assets/images/mission/mission2.jpg') }}"-->
    <!--                                            alt="Image">-->
    <!--                                        <a href="cause-details.html">-->
    <!--                                            <i class="fa-solid fa-arrow-right"></i>-->
    <!--                                        </a>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="swiper-slide">-->
    <!--                                <div class="cause-two__slider-single">-->
    <!--                                    <div class="cause-thumb">-->
    <!--                                        <img src="{{ asset('frontend_assets/images/mission/mission3.jpg') }}"-->
    <!--                                            alt="Image">-->
    <!--                                        <a href="cause-details.html">-->
    <!--                                            <i class="fa-solid fa-arrow-right"></i>-->
    <!--                                        </a>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="swiper-slide">-->
    <!--                                <div class="cause-two__slider-single">-->
    <!--                                    <div class="cause-thumb">-->
    <!--                                        <img src="{{ asset('frontend_assets/images/mission/mission4.jpg') }}"-->
    <!--                                            alt="Image">-->
    <!--                                        <a href="cause-details.html">-->
    <!--                                            <i class="fa-solid fa-arrow-right"></i>-->
    <!--                                        </a>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="swiper-slide">-->
    <!--                                <div class="cause-two__slider-single">-->
    <!--                                    <div class="cause-thumb">-->
    <!--                                        <img src="{{ asset('frontend_assets/images/mission/mission1.jpg') }}"-->
    <!--                                            alt="Image">-->
    <!--                                        <a href="cause-details.html">-->
    <!--                                            <i class="fa-solid fa-arrow-right"></i>-->
    <!--                                        </a>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="swiper-slide">-->
    <!--                                <div class="cause-two__slider-single">-->
    <!--                                    <div class="cause-thumb">-->
    <!--                                        <img src="{{ asset('frontend_assets/images/mission/mission2.jpg') }}"-->
    <!--                                            alt="Image">-->
    <!--                                        <a href="cause-details.html">-->
    <!--                                            <i class="fa-solid fa-arrow-right"></i>-->
    <!--                                        </a>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->

    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="cause-two__content-slider swiper">-->
    <!--                    <div class="swiper-wrapper">-->
    <!--                        <div class="swiper-slide">-->
    <!--                            <div class="cause-content">-->
    <!--                                <h4>Swasthya</h4>-->
    <!-- <p>Child & old care</p> -->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="swiper-slide">-->
    <!--                            <div class="cause-content">-->
    <!--                                <h4>Shisksha</h4>-->
    <!-- <p>Child & old care</p> -->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="swiper-slide">-->
    <!--                            <div class="cause-content">-->
    <!--                                <h4>Swarozgar</h4>-->
    <!-- <p>Child & old care</p> -->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="swiper-slide">-->
    <!--                            <div class="cause-content">-->
    <!--                                <h4>Soch</h4>-->
    <!-- <p>Child & old care</p> -->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- ==== / cause slider two section end ==== -->

    <!-- ==== Get Involved section end ==== -->

@endsection