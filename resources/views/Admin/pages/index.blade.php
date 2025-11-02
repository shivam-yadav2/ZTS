@extends('admin.layout.layout')

@section('css')
<style>
    /* Dashboard Custom Styles */
    .dashboard-container {
        background: linear-gradient(135deg, #f5f7fa 0%, #e9ecef 100%);
        min-height: 100vh;
    }

    /* Stat Cards Animation */
    .stat-card {
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        backdrop-filter: blur(10px);
    }

    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(255,255,255,0.5) 0%, rgba(255,255,255,0.1) 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
        z-index: 1;
    }

    .stat-card:hover::before {
        opacity: 1;
    }

    .stat-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .stat-card:hover .stat-icon {
        transform: scale(1.15) rotate(10deg);
    }

    .stat-icon {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        z-index: 2;
    }

    /* Number Counter Animation */
    .stat-number {
        background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: 700;
        position: relative;
        z-index: 2;
    }

    /* Event Cards */
    .event-card {
        position: relative;
        transition: all 0.3s ease;
        background: linear-gradient(135deg, rgba(255,255,255,0.95) 0%, rgba(249,250,251,0.95) 100%);
    }

    .event-card::after {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 4px;
        background: linear-gradient(180deg, #6366f1 0%, #8b5cf6 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .event-card:hover::after {
        opacity: 1;
    }

    .event-card:hover {
        transform: translateX(6px);
        box-shadow: 0 8px 24px rgba(99, 102, 241, 0.15);
    }

    .event-card img {
        transition: transform 0.3s ease;
    }

    .event-card:hover img {
        transform: scale(1.1);
    }

    /* Enquiry Cards */
    .enquiry-card {
        position: relative;
        background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
        transition: all 0.3s ease;
        border-left: 3px solid transparent;
    }

    .enquiry-card:hover {
        transform: translateY(-2px);
        border-left-color: #6366f1;
        box-shadow: 0 4px 12px rgba(99, 102, 241, 0.1);
    }

    /* Quick Stats Cards */
    .quick-stat-card {
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .quick-stat-card::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 0;
        background: linear-gradient(90deg, #6366f1 0%, #8b5cf6 100%);
        transition: width 0.3s ease;
    }

    .quick-stat-card:hover::before {
        width: 4px;
    }

    .quick-stat-card:hover {
        background: linear-gradient(135deg, #fafbfc 0%, #f1f5f9 100%);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    /* Action Buttons */
    .dashboard-action-btn {
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .dashboard-action-btn::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        transform: translate(-50%, -50%);
        transition: width 0.5s, height 0.5s;
    }

    .dashboard-action-btn:hover::before {
        width: 300px;
        height: 300px;
    }

    .dashboard-action-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    /* Section Headers */
    .section-header {
        position: relative;
        padding-bottom: 0.5rem;
    }

    .section-header::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 40px;
        height: 3px;
        background: linear-gradient(90deg, #6366f1 0%, #8b5cf6 100%);
        border-radius: 2px;
    }

    /* Empty State */
    .empty-state {
        animation: fadeIn 0.5s ease-in;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Gradient Overlays */
    .gradient-indigo {
        background: linear-gradient(135deg, #eef2ff 0%, #e0e7ff 50%, #ffffff 100%);
    }

    .gradient-emerald {
        background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 50%, #ffffff 100%);
    }

    .gradient-sky {
        background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 50%, #ffffff 100%);
    }

    .gradient-rose {
        background: linear-gradient(135deg, #fff1f2 0%, #ffe4e6 50%, #ffffff 100%);
    }

    /* Pulse Animation for New Items */
    @keyframes pulse {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.7;
        }
    }

    .badge-new {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    /* Card Shadows */
    .card-elevated {
        box-shadow: 
            0 1px 3px rgba(0, 0, 0, 0.05),
            0 10px 30px rgba(0, 0, 0, 0.05);
    }

    /* Quick Access Cards */
    .quick-access-card {
        position: relative;
        display: block;
        padding: 1.5rem;
        background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
        border: 2px solid #e2e8f0;
        border-radius: 1rem;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        overflow: hidden;
    }

    .quick-access-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(99, 102, 241, 0.03) 0%, rgba(139, 92, 246, 0.03) 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .quick-access-card:hover {
        transform: translateY(-4px);
        border-color: #c7d2fe;
        box-shadow: 0 12px 24px rgba(99, 102, 241, 0.12);
    }

    .quick-access-card:hover::before {
        opacity: 1;
    }

    /* Recent Activity Timeline */
    .activity-timeline {
        position: relative;
    }

    .activity-item {
        position: relative;
        padding-left: 2rem;
        padding-bottom: 1.5rem;
    }

    .activity-item::before {
        content: '';
        position: absolute;
        left: 0.4rem;
        top: 2rem;
        bottom: 0;
        width: 2px;
        background: linear-gradient(180deg, #e2e8f0 0%, transparent 100%);
    }

    .activity-item:last-child::before {
        display: none;
    }

    .activity-dot {
        position: absolute;
        left: 0;
        top: 0.3rem;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        border: 2px solid white;
        box-shadow: 0 0 0 2px #e2e8f0;
    }

    /* Responsive adjustments */
    @media (max-width: 640px) {
        .stat-card:hover {
            transform: translateY(-4px) scale(1.01);
        }
        
        .quick-access-card:hover {
            transform: translateY(-2px);
        }
    }
</style>
@endsection

@section('content')
<div class="px-4 py-6 space-y-6 dashboard-container">
    <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between mb-2">
        <div>
            <h1 class="text-4xl font-bold text-slate-800 mb-2" style="letter-spacing: -0.02em;">Dashboard</h1>
            <p class="text-sm text-slate-600 flex items-center gap-2">
                <i class="fa-solid fa-chart-line text-indigo-500"></i>
                Snapshot of your website activity across sliders, gallery, team and enquiries.
            </p>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ route('events.create') }}" class="btn-action btn-action--indigo dashboard-action-btn">
                <i class="fa-solid fa-plus mr-1"></i>
                New Gallery Event
            </a>
            <a href="{{ url('admin/slider/showForm') }}" class="btn-action btn-action--success dashboard-action-btn">
                <i class="fa-solid fa-panorama mr-1"></i>
                Add Slider
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 mb-5">
        <div class="stat-card card border border-indigo-200 dark:border-slate-700 rounded-2xl gradient-indigo card-elevated">
            <div class="card-body p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-semibold text-slate-600 uppercase tracking-wide mb-2">Home Sliders</p>
                        <h3 class="mt-1 text-4xl stat-number">{{ $stats['slider_total'] }}</h3>
                        <p class="mt-3 text-xs text-slate-600 flex items-center gap-1">
                            <span class="inline-block w-2 h-2 rounded-full bg-indigo-500 animate-pulse"></span>
                            Active: <span class="font-bold text-indigo-600">{{ $stats['slider_active'] }}</span>
                        </p>
                    </div>
                    <span class="stat-icon w-14 h-14 rounded-2xl bg-gradient-to-br from-indigo-600 to-indigo-700 text-white flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-clapperboard text-xl"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="stat-card card border border-emerald-200 dark:border-slate-700 rounded-2xl gradient-emerald card-elevated">
            <div class="card-body p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-semibold text-slate-600 uppercase tracking-wide mb-2">Gallery Events</p>
                        <h3 class="mt-1 text-4xl stat-number">{{ $stats['gallery_events'] }}</h3>
                        <p class="mt-3 text-xs text-slate-600 flex items-center gap-1">
                            <span class="inline-block w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                            Images: <span class="font-bold text-emerald-600">{{ $stats['gallery_images'] }}</span>
                        </p>
                    </div>
                    <span class="stat-icon w-14 h-14 rounded-2xl bg-gradient-to-br from-emerald-500 to-emerald-600 text-white flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-photo-film text-xl"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="stat-card card border border-sky-200 dark:border-slate-700 rounded-2xl gradient-sky card-elevated">
            <div class="card-body p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-semibold text-slate-600 uppercase tracking-wide mb-2">Our People</p>
                        <h3 class="mt-1 text-4xl stat-number">{{ $stats['core_members'] }}</h3>
                        <p class="mt-3 text-xs text-slate-600 flex items-center gap-1">
                            <span class="inline-block w-2 h-2 rounded-full bg-sky-500 animate-pulse"></span>
                            Team: <span class="font-bold text-sky-600">{{ $stats['team_members'] }}</span>
                        </p>
                    </div>
                    <span class="stat-icon w-14 h-14 rounded-2xl bg-gradient-to-br from-sky-500 to-sky-600 text-white flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-user-group text-xl"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="stat-card card border border-rose-200 dark:border-slate-700 rounded-2xl gradient-rose card-elevated">
            <div class="card-body p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-semibold text-slate-600 uppercase tracking-wide mb-2">Enquiries</p>
                        <h3 class="mt-1 text-4xl stat-number">{{ $stats['enquiries_total'] }}</h3>
                        <p class="mt-3 text-xs text-slate-600 flex items-center gap-1">
                            <span class="inline-block w-2 h-2 rounded-full bg-rose-500 animate-pulse"></span>
                            Contacts: <span class="font-bold text-rose-600">{{ $stats['contact_messages'] }}</span>
                        </p>
                    </div>
                    <span class="stat-icon w-14 h-14 rounded-2xl bg-gradient-to-br from-rose-500 to-rose-600 text-white flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-envelope-open-text text-xl"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Access Grid -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-slate-800 mb-1 section-header">Quick Access</h2>
        <p class="text-sm text-slate-500 mb-5 mt-2">Manage all sections of your website</p>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
            <!-- Gallery Events -->
            <a href="{{ route('events.index') }}" class="quick-access-card group">
                <div class="flex items-start gap-4">
                    <div class="w-14 h-14 flex-shrink-0 rounded-2xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-calendar-days text-xl"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-slate-800 text-base mb-1 group-hover:text-indigo-600 transition-colors">Gallery Events</h3>
                        <p class="text-xs text-slate-500 leading-relaxed">Manage gallery events and albums</p>
                        <span class="inline-flex items-center gap-1 mt-2 text-xs font-semibold text-indigo-600">
                            View All <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </span>
                    </div>
                </div>
            </a>

            <!-- Gallery Images -->
            <a href="{{ url('admin/showevents') }}" class="quick-access-card group">
                <div class="flex items-start gap-4">
                    <div class="w-14 h-14 flex-shrink-0 rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center text-white shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-images text-xl"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-slate-800 text-base mb-1 group-hover:text-emerald-600 transition-colors">Gallery Images</h3>
                        <p class="text-xs text-slate-500 leading-relaxed">Upload and manage event images</p>
                        <span class="inline-flex items-center gap-1 mt-2 text-xs font-semibold text-emerald-600">
                            Manage <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </span>
                    </div>
                </div>
            </a>

            <!-- Home Sliders -->
            <a href="{{ url('admin/slider/index') }}" class="quick-access-card group">
                <div class="flex items-start gap-4">
                    <div class="w-14 h-14 flex-shrink-0 rounded-2xl bg-gradient-to-br from-blue-500 to-cyan-600 flex items-center justify-center text-white shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-sliders text-xl"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-slate-800 text-base mb-1 group-hover:text-blue-600 transition-colors">Home Sliders</h3>
                        <p class="text-xs text-slate-500 leading-relaxed">Manage homepage banner sliders</p>
                        <span class="inline-flex items-center gap-1 mt-2 text-xs font-semibold text-blue-600">
                            Manage <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </span>
                    </div>
                </div>
            </a>

            <!-- Core Members -->
            <a href="{{ url('admin/coremember/index') }}" class="quick-access-card group">
                <div class="flex items-start gap-4">
                    <div class="w-14 h-14 flex-shrink-0 rounded-2xl bg-gradient-to-br from-rose-500 to-pink-600 flex items-center justify-center text-white shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-user-tie text-xl"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-slate-800 text-base mb-1 group-hover:text-rose-600 transition-colors">Core Members</h3>
                        <p class="text-xs text-slate-500 leading-relaxed">Manage core team members</p>
                        <span class="inline-flex items-center gap-1 mt-2 text-xs font-semibold text-rose-600">
                            View All <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </span>
                    </div>
                </div>
            </a>

            <!-- Team Members -->
            <a href="{{ url('admin/teamcard/index') }}" class="quick-access-card group">
                <div class="flex items-start gap-4">
                    <div class="w-14 h-14 flex-shrink-0 rounded-2xl bg-gradient-to-br from-amber-500 to-orange-600 flex items-center justify-center text-white shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-users text-xl"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-slate-800 text-base mb-1 group-hover:text-amber-600 transition-colors">Team Members</h3>
                        <p class="text-xs text-slate-500 leading-relaxed">Manage team member cards</p>
                        <span class="inline-flex items-center gap-1 mt-2 text-xs font-semibold text-amber-600">
                            Manage <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </span>
                    </div>
                </div>
            </a>

            <!-- Advisory Team -->
            <a href="{{ url('admin/advisory/index') }}" class="quick-access-card group">
                <div class="flex items-start gap-4">
                    <div class="w-14 h-14 flex-shrink-0 rounded-2xl bg-gradient-to-br from-violet-500 to-purple-600 flex items-center justify-center text-white shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-user-graduate text-xl"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-slate-800 text-base mb-1 group-hover:text-violet-600 transition-colors">Advisory Team</h3>
                        <p class="text-xs text-slate-500 leading-relaxed">Manage advisory board members</p>
                        <span class="inline-flex items-center gap-1 mt-2 text-xs font-semibold text-violet-600">
                            Manage <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </span>
                    </div>
                </div>
            </a>

            <!-- Leadership Team -->
            {{-- <a href="{{ url('admin/leadership/index') }}" class="quick-access-card group">
                <div class="flex items-start gap-4">
                    <div class="w-14 h-14 flex-shrink-0 rounded-2xl bg-gradient-to-br from-fuchsia-500 to-pink-600 flex items-center justify-center text-white shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-crown text-xl"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-slate-800 text-base mb-1 group-hover:text-fuchsia-600 transition-colors">Leadership Team</h3>
                        <p class="text-xs text-slate-500 leading-relaxed">Manage leadership members</p>
                        <span class="inline-flex items-center gap-1 mt-2 text-xs font-semibold text-fuchsia-600">
                            Manage <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </span>
                    </div>
                </div>
            </a> --}}

            <!-- Enquiries -->
            <a href="{{ url('admin/enquiry/index') }}" class="quick-access-card group">
                <div class="flex items-start gap-4">
                    <div class="w-14 h-14 flex-shrink-0 rounded-2xl bg-gradient-to-br from-sky-500 to-blue-600 flex items-center justify-center text-white shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-envelope-open-text text-xl"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-slate-800 text-base mb-1 group-hover:text-sky-600 transition-colors">Enquiries</h3>
                        <p class="text-xs text-slate-500 leading-relaxed">View and manage enquiries</p>
                        <span class="inline-flex items-center gap-1 mt-2 text-xs font-semibold text-sky-600">
                            View All <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </span>
                    </div>
                </div>
            </a>

            <!-- Contact Info -->
            <a href="{{ url('admin/index') }}" class="quick-access-card group">
                <div class="flex items-start gap-4">
                    <div class="w-14 h-14 flex-shrink-0 rounded-2xl bg-gradient-to-br from-lime-500 to-green-600 flex items-center justify-center text-white shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-address-card text-xl"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-slate-800 text-base mb-1 group-hover:text-lime-600 transition-colors">Contact Info</h3>
                        <p class="text-xs text-slate-500 leading-relaxed">Manage contact information</p>
                        <span class="inline-flex items-center gap-1 mt-2 text-xs font-semibold text-lime-600">
                            Manage <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </span>
                    </div>
                </div>
            </a>

            <!-- Guiding Principles -->
            {{-- <a href="{{ url('admin/guidingprinciple/index') }}" class="quick-access-card group">
                <div class="flex items-start gap-4">
                    <div class="w-14 h-14 flex-shrink-0 rounded-2xl bg-gradient-to-br from-teal-500 to-cyan-600 flex items-center justify-center text-white shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-lightbulb text-xl"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-slate-800 text-base mb-1 group-hover:text-teal-600 transition-colors">Guiding Principles</h3>
                        <p class="text-xs text-slate-500 leading-relaxed">Manage guiding principles</p>
                        <span class="inline-flex items-center gap-1 mt-2 text-xs font-semibold text-teal-600">
                            Manage <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </span>
                    </div>
                </div>
            </a> --}}

            <!-- Our Journey - Human First -->
            {{-- <a href="{{ url('admin/ourjourney/humanfirst/index') }}" class="quick-access-card group">
                <div class="flex items-start gap-4">
                    <div class="w-14 h-14 flex-shrink-0 rounded-2xl bg-gradient-to-br from-red-500 to-rose-600 flex items-center justify-center text-white shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-heart text-xl"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-slate-800 text-base mb-1 group-hover:text-red-600 transition-colors">Human First</h3>
                        <p class="text-xs text-slate-500 leading-relaxed">Manage Human First section</p>
                        <span class="inline-flex items-center gap-1 mt-2 text-xs font-semibold text-red-600">
                            Manage <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </span>
                    </div>
                </div>
            </a> --}}

            <!-- Our Journey - MUHIM -->
            {{-- <a href="{{ url('admin/ourjourney/muhim/index') }}" class="quick-access-card group">
                <div class="flex items-start gap-4">
                    <div class="w-14 h-14 flex-shrink-0 rounded-2xl bg-gradient-to-br from-orange-500 to-amber-600 flex items-center justify-center text-white shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-handshake text-xl"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-slate-800 text-base mb-1 group-hover:text-orange-600 transition-colors">MUHIM</h3>
                        <p class="text-xs text-slate-500 leading-relaxed">Manage MUHIM section</p>
                        <span class="inline-flex items-center gap-1 mt-2 text-xs font-semibold text-orange-600">
                            Manage <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </span>
                    </div>
                </div>
            </a> --}}
        </div>
    </div>

    <!-- Latest Enquiries Section -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="card lg:col-span-2 border border-slate-200 dark:border-slate-700 rounded-2xl card-elevated bg-white">
            <div class="card-body p-7 space-y-6">
                <div>
                    <h2 class="text-xl font-bold text-slate-800 dark:text-slate-100 mb-1 section-header">Latest Enquiries</h2>
                    <p class="text-sm text-slate-500 mb-4 mt-2">Most recent enquiries from website forms</p>
                    <div class="space-y-3">
                        @forelse($recentEnquiries as $enquiry)
                            <div class="enquiry-card rounded-xl border border-slate-200 dark:border-slate-800 px-4 py-3.5">
                                <div class="flex items-start justify-between mb-2">
                                    <div class="flex items-center gap-2">
                                        <div class="w-8 h-8 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white font-bold text-xs">
                                            {{ strtoupper(substr($enquiry->name, 0, 1)) }}
                                        </div>
                                        <span class="font-bold text-sm text-slate-800 dark:text-slate-200">{{ $enquiry->name }}</span>
                                    </div>
                                    <span class="text-xs text-slate-500 flex items-center gap-1">
                                        <i class="fa-regular fa-clock"></i>
                                        {{ $enquiry->created_at?->diffForHumans() }}
                                    </span>
                                </div>
                                <div class="ml-10 space-y-1">
                                    <p class="text-xs text-slate-600 flex items-center gap-1.5">
                                        <i class="fa-solid fa-envelope text-indigo-500"></i>
                                        {{ $enquiry->email }}
                                    </p>
                                    @if($enquiry->mobile)
                                        <p class="text-xs text-slate-600 flex items-center gap-1.5">
                                            <i class="fa-solid fa-phone text-emerald-500"></i>
                                            {{ $enquiry->mobile }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        @empty
                            <p class="text-sm text-slate-500 text-center py-6">No enquiries yet.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Stats Sidebar -->
        <div class="card border border-slate-200 dark:border-slate-700 rounded-2xl card-elevated bg-white">
            <div class="card-body p-7">
                <h2 class="text-xl font-bold text-slate-800 dark:text-slate-100 mb-1 section-header">Quick Stats</h2>
                <p class="text-sm text-slate-500 mb-5 mt-2">Content overview</p>
                
                <div class="space-y-4">
                    <!-- Total Enquiries -->
                    <div class="quick-stat-card rounded-xl border border-slate-200 dark:border-slate-800 px-4 py-4 bg-white">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-purple-500 to-indigo-600 flex items-center justify-center text-white">
                                    <i class="fa-solid fa-inbox text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-slate-500 mb-0.5">Total Enquiries</p>
                                    <span class="text-xl font-bold text-slate-900">{{ $stats['enquiries_total'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Images -->
                    <div class="quick-stat-card rounded-xl border border-slate-200 dark:border-slate-800 px-4 py-4 bg-white">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center text-white">
                                    <i class="fa-solid fa-images text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-slate-500 mb-0.5">Gallery Images</p>
                                    <span class="text-xl font-bold text-slate-900">{{ $stats['gallery_images'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Active Sliders -->
                    <div class="quick-stat-card rounded-xl border border-slate-200 dark:border-slate-800 px-4 py-4 bg-white">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-indigo-500 to-blue-600 flex items-center justify-center text-white">
                                    <i class="fa-solid fa-sliders text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-slate-500 mb-0.5">Active Sliders</p>
                                    <span class="text-xl font-bold text-slate-900">{{ $stats['slider_active'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Core Members -->
                    <div class="quick-stat-card rounded-xl border border-slate-200 dark:border-slate-800 px-4 py-4 bg-white">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-rose-500 to-pink-600 flex items-center justify-center text-white">
                                    <i class="fa-solid fa-user-tie text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-slate-500 mb-0.5">Core Members</p>
                                    <span class="text-xl font-bold text-slate-900">{{ $stats['core_members'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Members -->
                    <div class="quick-stat-card rounded-xl border border-slate-200 dark:border-slate-800 px-4 py-4 bg-white">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-amber-500 to-orange-600 flex items-center justify-center text-white">
                                    <i class="fa-solid fa-users text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-slate-500 mb-0.5">Team Members</p>
                                    <span class="text-xl font-bold text-slate-900">{{ $stats['team_members'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        // Dashboard currently uses static cards. Add custom JS widgets here if needed in future.
    </script>
@endsection
