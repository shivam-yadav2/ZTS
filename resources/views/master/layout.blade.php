<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/greeva/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Sep 2025 19:21:14 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Greeva - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- Vector Maps css -->
    <link href="/assets/vendor/jsvectormap/jsvectormap.min.css" rel="stylesheet" type="text/css">

    <!-- Theme Config Js -->
    <script src="/assets/js/config.js"></script>

    <!-- Vendor css -->
    <link href="/assets/css/vendor.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- font awesome cdn -->
    <script src="https://kit.fontawesome.com/d1f12562cc.js" crossorigin="anonymous"></script>

    @yield('style')
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- Sidenav Menu Start -->
        <div class="sidenav-menu">

            <!-- Brand Logo -->
            <a href="/admin/dashboard" class="logo">
                <span class="logo-light">
                    <span class="logo-lg"><img src="/assets/images/logo.png" alt="logo"></span>
                    <span class="logo-sm"><img src="/assets/images/logo.png" alt="small logo"></span>
                </span>

                <span class="logo-dark">
                    <span class="logo-lg"><img src="/assets/images/logo-light.png" alt="dark logo"></span>
                    <span class="logo-sm"><img src="/assets/images/logo.png" alt="small logo"></span>
                </span>
            </a>

            <!-- Sidebar Hover Menu Toggle Button -->
            <button class="button-sm-hover">
                <i class="ti ti-circle align-middle"></i>
            </button>

            <!-- Full Sidebar Menu Close Button -->
            <button class="button-close-fullsidebar">
                <i class="ti ti-x align-middle"></i>
            </button>

            <div data-simplebar>

                <!--- Sidenav Menu -->
                <ul class="side-nav">
                    <li class="side-nav-title">Navigation</li>

                    <li class="side-nav-item">
                        <a href="/admin/dashboard" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                            <span class="menu-text"> Dashboard </span>
                            <span class="badge bg-success rounded-pill">5</span>
                        </a>
                    </li>

                    

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarInvoice" aria-expanded="false"
                            aria-controls="sidebarInvoice" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-file-invoice"></i></span>
                            <span class="menu-text">Gallery Event</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarInvoice">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="{{ url('admin/events/create') }}" class="side-nav-link">
                                        <span class="menu-text">Create Events</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ url('admin/events') }}" class="side-nav-link">
                                        <span class="menu-text">View Event</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false"
                            aria-controls="sidebarPages" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-files"></i></span>
                            <span class="menu-text">Gallery Image</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarPages">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="{{ url('admin/showForm') }}" class="side-nav-link">
                                        <span class="menu-text">Add Images</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ url('admin/events') }}" class="side-nav-link">
                                        <span class="menu-text">View Images</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false"
                            aria-controls="sidebarPagesAuth" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-lock"></i></span>
                            <span class="menu-text">Contact Us </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarPagesAuth">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="{{ url('admin/contact/showForm') }}" class="side-nav-link">
                                        <span class="menu-text">Add Contact</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{ url('admin/index') }}" class="side-nav-link">
                                        <span class="menu-text">View Contact</span>
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </li>

                   

                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Sidenav Menu End -->


        <!-- Topbar Start -->
        <header class="app-topbar">
            <div class="page-container topbar-menu">
                <div class="d-flex align-items-center gap-2">

                    <!-- Brand Logo -->
                    <a href="/admin/dashboard" class="logo">
                        <span class="logo-light">
                            <span class="logo-lg"><img src="/assets/images/logo.png" alt="logo"></span>
                            <span class="logo-sm"><img src="/assets/images/logo.png" alt="small logo"></span>
                        </span>
        
                        <span class="logo-dark">
                            <span class="logo-lg"><img src="/assets/images/logo-light.png" alt="dark logo"></span>
                            <span class="logo-sm"><img src="/assets/images/logo.png" alt="small logo"></span>
                        </span>
                    </a>

                    <!-- Sidebar Menu Toggle Button -->
                    <button class="sidenav-toggle-button px-2">
                        <i class="ti ti-menu-deep fs-24"></i>
                    </button>

                    <!-- Horizontal Menu Toggle Button -->
                    <button class="topnav-toggle-button px-2" data-bs-toggle="collapse"
                        data-bs-target="#topnav-menu-content">
                        <i class="ti ti-menu-deep fs-22"></i>
                    </button>

                    <!-- Button Trigger Search Modal -->
                    {{-- <div class="topbar-search text-muted d-none d-xl-flex gap-2 align-items-center"
                        data-bs-toggle="modal" data-bs-target="#searchModal" type="button">
                        <i class="ti ti-search fs-18"></i>
                        <span class="me-2">Search something..</span>
                        <span class="ms-auto fw-medium">⌘K</span>
                    </div> --}}

                    
                </div>

                <div class="d-flex align-items-center gap-2">

                    

                    <!-- Light/Dark Mode Button -->
                    <div class="topbar-item d-none d-sm-flex">
                        <button class="topbar-link" id="light-dark-mode" type="button">
                            <i class="ti ti-moon fs-22"></i>
                        </button>
                    </div>

                    <!-- User Dropdown -->
                    <div class="topbar-item nav-user">
                        <button class="btn btn-warning text-white"><a
                            href="{{ url('admin/logout') }}">Logout</a></button>
                    </div>
                </div>
            </div>
        </header>
        <!-- Topbar End -->

        <!-- Start Content-->

        <div class="page-content">
            @yield('content')
            <!-- Footer Start -->
            <footer class="footer">
                <div class="page-container">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © ZTS Admin - By <span
                                class="fw-bold text-decoration-underline text-uppercase text-reset fs-12">Shivam</span>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
        </div>







    </div>

 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: "{{ session('success') }}",
                timer: 2000,
                showConfirmButton: false
            });
        @endif

        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "{{ session('error') }}"
            });
        @endif
    </script>

    <!-- Vendor js -->
    <script src="/assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="/assets/js/app.js"></script>

    <!-- Apex Chart js -->
    <script src="/assets/vendor/apexcharts/apexcharts.min.js"></script>

    <!-- Vector Map Js -->
    <script src="/assets/vendor/jsvectormap/jsvectormap.min.js"></script>
    <script src="/assets/vendor/jsvectormap/maps/world-merc.js"></script>
    <script src="/assets/vendor/jsvectormap/maps/world.js"></script>

    <!-- Projects Analytics Dashboard App js -->
    <script src="/assets/js/pages/dashboard.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>


<!-- Mirrored from coderthemes.com/greeva/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Sep 2025 19:22:48 GMT -->

</html>
