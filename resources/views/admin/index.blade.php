@extends('master.layout')
@section('content')



        <!-- Search Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-transparent">
                    <form>
                        <div class="card mb-1">
                            <div class="px-3 py-2 d-flex flex-row align-items-center" id="top-search">
                                <i class="ti ti-search fs-22"></i>
                                <input type="search" class="form-control border-0" id="search-modal-input" placeholder="Search for actions, people,">
                                <button type="submit" class="btn p-0" data-bs-dismiss="modal" aria-label="Close">[esc]</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="page-content">
            <div class="page-container">

                
                <div class="page-title-head d-flex align-items-center gap-2">
                    <div class="flex-grow-1">
                        <h4 class="fs-16 text-uppercase fw-bold mb-0">Dashboard</h4>
                    </div>

                    <div class="text-end">
                        <ol class="breadcrumb m-0 py-0 fs-13">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Greeva</a></li>
                            
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                

                

                <div class="row row-cols-xxl-4 row-cols-md-2 row-cols-1">
                    <div class="col">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">Total Orders</h5>
                                <div class="d-flex align-items-center gap-2 my-2 py-1">
                                    <div class="user-img fs-42 flex-shrink-0">
                                        <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                            <iconify-icon
                                                icon="solar:case-round-minimalistic-bold-duotone"></iconify-icon>
                                        </span>
                                    </div>
                                    <h3 class="mb-0 fw-bold">687.3k</h3>
                                    <iconify-icon icon="solar:cart-2-line-duotone"
                                        class="ms-auto display-1 position-absolute opacity-25 text-muted widget-icon"></iconify-icon>
                                </div>
                                <p class="mb-0 text-muted">
                                    <span class="text-danger me-2"><i class="ti ti-caret-down-filled"></i> 9.19%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">Total Returns</h5>
                                <div class="d-flex align-items-center gap-2 my-2 py-1">
                                    <div class="user-img fs-42 flex-shrink-0">
                                        <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                            <iconify-icon icon="solar:bill-list-bold-duotone"></iconify-icon>
                                        </span>
                                    </div>
                                    <h3 class="mb-0 fw-bold">9.62k</h3>
                                    <iconify-icon icon="solar:banknote-2-line-duotone"
                                        class="ms-auto display-1 position-absolute opacity-25 text-muted widget-icon"></iconify-icon>
                                </div>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><i class="ti ti-caret-up-filled"></i> 26.87%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">Avg. Sales Earnings
                                </h5>
                                <div class="d-flex align-items-center gap-2 my-2 py-1">
                                    <div class="user-img fs-42 flex-shrink-0">
                                        <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                            <iconify-icon icon="solar:wallet-money-bold-duotone"></iconify-icon>
                                        </span>
                                    </div>
                                    <h3 class="mb-0 fw-bold">$98.24 <small class="text-muted">USD</small></h3>
                                    <iconify-icon icon="solar:cardholder-line-duotone"
                                        class="ms-auto display-1 position-absolute opacity-25 text-muted widget-icon"></iconify-icon>
                                </div>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><i class="ti ti-caret-up-filled"></i> 3.51%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">Number of Visits
                                </h5>
                                <div class="d-flex align-items-center gap-2 my-2 py-1">
                                    <div class="user-img fs-42 flex-shrink-0">
                                        <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                            <iconify-icon icon="solar:eye-bold-duotone"></iconify-icon>
                                        </span>
                                    </div>
                                    <h3 class="mb-0 fw-bold">87.94M</h3>
                                    <iconify-icon icon="solar:eye-scan-bold-duotone"
                                        class="ms-auto display-1 position-absolute opacity-25 text-muted widget-icon"></iconify-icon>
                                </div>
                                <p class="mb-0 text-muted">
                                    <span class="text-danger me-2"><i class="ti ti-caret-down-filled"></i> 1.05%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4 class="header-title mb-1">Daily Sales</h4>
                                        <p class="text-muted">March 26 - April 01</p>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle drop-arrow-none card-drop"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="my-2 d-flex align-items-center justify-content-between">
                                    <h2 class="fw-normal">$8,459.56</h2>
                                    <div class="">
                                        <img src="assets/images/cards/american-express.svg" alt="user-card"
                                            height="36" />
                                        <img src="assets/images/cards/discover-card.svg" alt="user-card" height="36" />
                                        <img src="assets/images/cards/mastercard.svg" alt="user-card" height="36" />
                                    </div>
                                </div>

                                <div dir="ltr">
                                    <div id="daily-sales" class="apex-charts" data-colors="#6ac75a,#188ae2"></div>
                                </div>

                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4 class="header-title mb-1">Statistics</h4>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle drop-arrow-none card-drop"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row text-center">
                                    <div class="col-sm-4 mt-3">
                                        <h3 class="fw-normal">4,335</h3>
                                        <p class="text-muted text-overflow">Total Sales</p>
                                    </div>
                                    <div class="col-sm-4 mt-3">
                                        <h3 class="fw-normal">874</h3>
                                        <p class="text-muted text-overflow">Open Compaign</p>
                                    </div>
                                    <div class="col-sm-4 mt-3">
                                        <h3 class="fw-normal">2,548</h3>
                                        <p class="text-muted text-overflow">Total Sales</p>
                                    </div>
                                </div>

                                <div dir="ltr">
                                    <div id="statistics-chart" class="apex-charts" data-colors="#6b5eae,#fbcc5c"></div>
                                </div>

                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4 class="header-title mb-1">Total Revenue</h4>
                                        <p class="text-muted">March 26 - April 01</p>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle drop-arrow-none card-drop"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="my-2 d-flex align-items-center justify-content-between">
                                    <h2 class="fw-normal">$96.56k</h2>
                                    <div class="">
                                        <img src="assets/images/cards/american-express.svg" alt="user-card"
                                            height="36" />
                                        <img src="assets/images/cards/discover-card.svg" alt="user-card" height="36" />
                                        <img src="assets/images/cards/mastercard.svg" alt="user-card" height="36" />
                                    </div>
                                </div>

                                <div dir="ltr">
                                    <div id="revenue-chart" class="apex-charts" data-colors="#31ce77,#188ae2"></div>
                                </div>

                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row-->


                <div class="row">
                    <div class="col-xxl-6">
                        <div class="card">
                            <div class="d-flex card-header justify-content-between align-items-center">
                                <h4 class="header-title">Brands Listing</h4>
                                <a href="javascript:void(0);" class="btn btn-sm btn-light">Add Brand <i
                                        class="ti ti-plus ms-1"></i></a>
                            </div>
                            <div class="card-body p-0">
                                <div class="bg-light bg-opacity-50 py-1 text-center">
                                    <p class="m-0"><b>69</b> Active brands out of <span class="fw-medium">102</span></p>
                                </div>
                                <div class="table-responsive">
                                    <table
                                        class="table table-custom table-centered table-sm table-nowrap table-hover mb-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-md flex-shrink-0 me-2">
                                                            <span class="avatar-title bg-primary-subtle rounded-circle">
                                                                <img src="assets/images/products/logo/logo-1.svg" alt=""
                                                                    height="22">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="text-muted fs-12">Electronics</span> <br />
                                                            <h5 class="fs-14 mt-1">ElectroMart - USA</h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Established</span>
                                                    <h5 class="fs-14 mt-1 fw-normal">Since 2015</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Stores</span> <br />
                                                    <h5 class="fs-14 mt-1 fw-normal">300</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Products</span>
                                                    <h5 class="fs-14 mt-1 fw-normal">5,200</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Status</span>
                                                    <h5 class="fs-14 mt-1 fw-normal"><i
                                                            class="ti ti-circle-filled fs-12 text-success"></i> Active
                                                    </h5>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-md flex-shrink-0 me-2">
                                                            <span class="avatar-title bg-info-subtle rounded-circle">
                                                                <img src="assets/images/products/logo/logo-2.svg" alt=""
                                                                    height="22">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="text-muted fs-12">Furniture</span> <br />
                                                            <h5 class="fs-14 mt-1">FurniStyle - UK</h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Established</span>
                                                    <h5 class="fs-14 mt-1 fw-normal">Since 2010</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Stores</span> <br />
                                                    <h5 class="fs-14 mt-1 fw-normal">120</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Products</span>
                                                    <h5 class="fs-14 mt-1 fw-normal">1,100</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Status</span>
                                                    <h5 class="fs-14 mt-1 fw-normal"><i
                                                            class="ti ti-circle-filled fs-12 text-success"></i> Active
                                                    </h5>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-md flex-shrink-0 me-2">
                                                            <span
                                                                class="avatar-title bg-secondary-subtle rounded-circle">
                                                                <img src="assets/images/products/logo/logo-3.svg" alt=""
                                                                    height="22">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="text-muted fs-12">Automotive</span> <br />
                                                            <h5 class="fs-14 mt-1">AutoGear - Germany</h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Established</span>
                                                    <h5 class="fs-14 mt-1 fw-normal">Since 2005</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Stores</span> <br />
                                                    <h5 class="fs-14 mt-1 fw-normal">50</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Products</span>
                                                    <h5 class="fs-14 mt-1 fw-normal">850</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Status</span>
                                                    <h5 class="fs-14 mt-1 fw-normal"><i
                                                            class="ti ti-circle-filled fs-12 text-warning"></i> Pending
                                                    </h5>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-md flex-shrink-0 me-2">
                                                            <span class="avatar-title bg-danger-subtle rounded-circle">
                                                                <img src="assets/images/products/logo/logo-4.svg" alt=""
                                                                    height="22">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="text-muted fs-12">Fashion</span> <br />
                                                            <h5 class="fs-14 mt-1">StyleCore - Italy</h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Established</span>
                                                    <h5 class="fs-14 mt-1 fw-normal">Since 1998</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Stores</span> <br />
                                                    <h5 class="fs-14 mt-1 fw-normal">200</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Products</span>
                                                    <h5 class="fs-14 mt-1 fw-normal">2,300</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Status</span>
                                                    <h5 class="fs-14 mt-1 fw-normal"><i
                                                            class="ti ti-circle-filled fs-12 text-danger"></i> Inactive
                                                    </h5>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-md flex-shrink-0 me-2">
                                                            <span class="avatar-title bg-success-subtle rounded-circle">
                                                                <img src="assets/images/products/logo/logo-5.svg" alt=""
                                                                    height="22">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="text-muted fs-12">Tech</span> <br />
                                                            <h5 class="fs-14 mt-1">TechVerse - India</h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Established</span>
                                                    <h5 class="fs-14 mt-1 fw-normal">Since 2020</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Stores</span> <br />
                                                    <h5 class="fs-14 mt-1 fw-normal">400</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Products</span>
                                                    <h5 class="fs-14 mt-1 fw-normal">7,500</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Status</span>
                                                    <h5 class="fs-14 mt-1 fw-normal"><i
                                                            class="ti ti-circle-filled fs-12 text-success"></i> Active
                                                    </h5>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div> <!-- end table-responsive-->
                            </div> <!-- end card-body-->

                            <div class="card-footer">
                                <div class="align-items-center justify-content-between row text-center text-sm-start">
                                    <div class="col-sm">
                                        <div class="text-muted">
                                            Showing <span class="fw-semibold">5</span> of <span
                                                class="fw-semibold">15</span> Results
                                        </div>
                                    </div>
                                    <div class="col-sm-auto mt-3 mt-sm-0">
                                        <ul
                                            class="pagination pagination-boxed pagination-sm mb-0 justify-content-center">
                                            <li class="page-item disabled">
                                                <a href="#" class="page-link"><i class="ti ti-chevron-left"></i></a>
                                            </li>
                                            <li class="page-item active">
                                                <a href="#" class="page-link">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link"><i class="ti ti-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> <!-- -->
                            </div>

                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xxl-6">
                        <div class="card card-h-100">
                            <div class="card-header d-flex flex-wrap align-items-center gap-2">
                                <h4 class="header-title me-auto">Recent New Signup</h4>

                                <div class="d-flex gap-2 justify-content-end text-end">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-light">Import <i
                                            class="ti ti-download ms-1"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary">Export <i
                                            class="ti ti-file-export ms-1"></i></a>
                                </div>
                            </div>

                            <div class="card-body p-0">
                                <div class="bg-light bg-opacity-50 py-1 text-center">
                                    <p class="m-0"><b>895k</b> Active users out of <span class="fw-medium">965k</span>
                                    </p>
                                </div>

                                <div class="table-responsive">
                                    <table
                                        class="table table-custom table-centered table-sm table-nowrap table-hover mb-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-md flex-shrink-0 me-2">
                                                            <span class="avatar-title bg-primary-subtle rounded-circle">
                                                                <img src="assets/images/users/avatar-1.jpg" alt=""
                                                                    height="22" class="rounded-circle">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="text-muted fs-12">Name</span> <br />
                                                            <h5 class="fs-14 mt-1">John Doe</h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Email</span>
                                                    <h5 class="fs-14 mt-1 fw-normal">john.doe@example.com</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Role</span> <br />
                                                    <h5 class="fs-14 mt-1 fw-normal">Administrator</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Status</span>
                                                    <h5 class="fs-14 mt-1 fw-normal"><i
                                                            class="ti ti-circle-filled fs-12 text-success"></i> Active
                                                    </h5>
                                                </td>
                                                <td style="width: 30px;">
                                                    <div class="dropdown">
                                                        <a href="#"
                                                            class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="javascript:void(0);" class="dropdown-item">View
                                                                Profile</a>
                                                            <a href="javascript:void(0);"
                                                                class="dropdown-item">Deactivate</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-md flex-shrink-0 me-2">
                                                            <span class="avatar-title bg-info-subtle rounded-circle">
                                                                <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                    height="22" class="rounded-circle">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="text-muted fs-12">Name</span> <br />
                                                            <h5 class="fs-14 mt-1">Jane Smith</h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Email</span>
                                                    <h5 class="fs-14 mt-1 fw-normal">jane.smith@example.com</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Role</span> <br />
                                                    <h5 class="fs-14 mt-1 fw-normal">Editor</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Status</span>
                                                    <h5 class="fs-14 mt-1 fw-normal"><i
                                                            class="ti ti-circle-filled fs-12 text-warning"></i> Pending
                                                    </h5>
                                                </td>
                                                <td style="width: 30px;">
                                                    <div class="dropdown">
                                                        <a href="#"
                                                            class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="javascript:void(0);" class="dropdown-item">View
                                                                Profile</a>
                                                            <a href="javascript:void(0);"
                                                                class="dropdown-item">Activate</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-md flex-shrink-0 me-2">
                                                            <span
                                                                class="avatar-title bg-secondary-subtle rounded-circle">
                                                                <img src="assets/images/users/avatar-3.jpg" alt=""
                                                                    height="22" class="rounded-circle">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="text-muted fs-12">Name</span> <br />
                                                            <h5 class="fs-14 mt-1">Michael Brown</h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Email</span>
                                                    <h5 class="fs-14 mt-1 fw-normal">michael.brown@example.com</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Role</span> <br />
                                                    <h5 class="fs-14 mt-1 fw-normal">Viewer</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Status</span>
                                                    <h5 class="fs-14 mt-1 fw-normal"><i
                                                            class="ti ti-circle-filled fs-12 text-danger"></i> Inactive
                                                    </h5>
                                                </td>
                                                <td style="width: 30px;">
                                                    <div class="dropdown">
                                                        <a href="#"
                                                            class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="javascript:void(0);"
                                                                class="dropdown-item">Activate</a>
                                                            <a href="javascript:void(0);"
                                                                class="dropdown-item">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-md flex-shrink-0 me-2">
                                                            <span class="avatar-title bg-warning-subtle rounded-circle">
                                                                <img src="assets/images/users/avatar-4.jpg" alt=""
                                                                    height="22" class="rounded-circle">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="text-muted fs-12">Name</span> <br />
                                                            <h5 class="fs-14 mt-1">Emily Davis</h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Email</span>
                                                    <h5 class="fs-14 mt-1 fw-normal">emily.davis@example.com</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Role</span> <br />
                                                    <h5 class="fs-14 mt-1 fw-normal">Manager</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Status</span>
                                                    <h5 class="fs-14 mt-1 fw-normal"><i
                                                            class="ti ti-circle-filled fs-12 text-success"></i> Active
                                                    </h5>
                                                </td>
                                                <td style="width: 30px;">
                                                    <div class="dropdown">
                                                        <a href="#"
                                                            class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="javascript:void(0);" class="dropdown-item">View
                                                                Profile</a>
                                                            <a href="javascript:void(0);"
                                                                class="dropdown-item">Deactivate</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-md flex-shrink-0 me-2">
                                                            <span class="avatar-title bg-danger-subtle rounded-circle">
                                                                <img src="assets/images/users/avatar-5.jpg" alt=""
                                                                    height="22" class="rounded-circle">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="text-muted fs-12">Name</span> <br />
                                                            <h5 class="fs-14 mt-1">Robert Taylor</h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Email</span>
                                                    <h5 class="fs-14 mt-1 fw-normal">robert.taylor@example.com</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Role</span> <br />
                                                    <h5 class="fs-14 mt-1 fw-normal">Support</h5>
                                                </td>
                                                <td>
                                                    <span class="text-muted fs-12">Status</span>
                                                    <h5 class="fs-14 mt-1 fw-normal"><i
                                                            class="ti ti-circle-filled fs-12 text-warning"></i> Pending
                                                    </h5>
                                                </td>
                                                <td style="width: 30px;">
                                                    <div class="dropdown">
                                                        <a href="#"
                                                            class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="javascript:void(0);" class="dropdown-item">View
                                                                Profile</a>
                                                            <a href="javascript:void(0);"
                                                                class="dropdown-item">Activate</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div> <!-- end table-responsive-->
                            </div> <!-- end card-body-->

                            <div class="card-footer">
                                <div class="align-items-center justify-content-between row text-center text-sm-start">
                                    <div class="col-sm">
                                        <div class="text-muted">
                                            Showing <span class="fw-semibold">5</span> of <span
                                                class="fw-semibold">10</span> Results
                                        </div>
                                    </div>
                                    <div class="col-sm-auto mt-3 mt-sm-0">
                                        <ul
                                            class="pagination pagination-boxed pagination-sm mb-0 justify-content-center">
                                            <li class="page-item disabled">
                                                <a href="#" class="page-link"><i class="ti ti-chevron-left"></i></a>
                                            </li>
                                            <li class="page-item active">
                                                <a href="#" class="page-link">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link"><i class="ti ti-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> <!-- -->
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row-->

                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div
                                class="card-header d-flex flex-wrap align-items-center gap-2 border-bottom border-dashed">
                                <h4 class="header-title me-auto">Visitor Traffics</h4>

                                <div>
                                    <button type="button" class="btn btn-light btn-sm">
                                        All
                                    </button>
                                    <button type="button" class="btn btn-light active btn-sm">
                                        1M
                                    </button>
                                    <button type="button" class="btn btn-light btn-sm">
                                        6M
                                    </button>
                                    <button type="button" class="btn btn-light btn-sm">
                                        1Y
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-7">
                                        <div id="world-map-markers-line" style="height: 300px"></div>
                                    </div>
                                    <div class="col-xl-5" dir="ltr">
                                        <div class="p-3">
                                            <!-- Country Data -->
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-1"><img src="assets/images/flags/us.svg" alt="user-image"
                                                        class="me-1 rounded-circle" height="20"> <span
                                                        class="align-middle">United States</span> </p>
                                                <div>
                                                    <h5 class="fw-semibold mb-0">67.5k
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3">
                                                <div class="col">
                                                    <div class="progress progress-soft progress-sm">
                                                        <div class="progress-bar bg-secondary" role="progressbar"
                                                            style="width: 72.15%" aria-valuenow="72.15"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <p class="mb-0 text-muted fs-13">72.15%</p>
                                                </div>
                                            </div>

                                            <!-- Country Data -->
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-1"><img src="assets/images/flags/in.svg" alt="user-image"
                                                        class="me-1 rounded-circle" height="20"> <span
                                                        class="align-middle">India</span> </p>
                                                <div>
                                                    <h5 class="fw-semibold mb-0">7.92k
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3">
                                                <div class="col">
                                                    <div class="progress progress-soft progress-sm">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 28.65%" aria-valuenow="28.65"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <p class="mb-0 text-muted fs-13">28.65%</p>
                                                </div>
                                            </div>

                                            <!-- Country Data -->
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-1"><img src="assets/images/flags/br.svg" alt="user-image"
                                                        class="me-1 rounded-circle" height="20"> <span
                                                        class="align-middle">Brazil</span> </p>
                                                <div>
                                                    <h5 class="fw-semibold mb-0">89.05k
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3">
                                                <div class="col">
                                                    <div class="progress progress-soft progress-sm">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 62.5%" aria-valuenow="62.5" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <p class="mb-0 text-muted fs-13">62.5%</p>
                                                </div>
                                            </div>

                                            <!-- Country Data -->
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-1"><img src="assets/images/flags/ca.svg" alt="user-image"
                                                        class="me-1 rounded-circle" height="20"> <span
                                                        class="align-middle">Canada</span> </p>
                                                <div>
                                                    <h5 class="fw-semibold mb-0">5.3k
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="progress progress-soft progress-sm">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 42.2%" aria-valuenow="42.2" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <p class="mb-0 text-muted fs-13">42.2%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-4">
                        <div class="card">
                            <div
                                class="card-header d-flex flex-wrap align-items-center gap-2 border-bottom border-dashed">
                                <h4 class="header-title me-auto">Data Uses</h4>

                                <div class="d-flex gap-2 justify-content-end text-end">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary">Refresh <i
                                            class="ti ti-file-export ms-1"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="data-visits-chart" class="apex-charts"
                                        data-colors="#188ae2,#6b5eae,#31ce77,#f34943,#fbcc5c,#35b8e0"></div>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row-->

            </div> <!-- container -->

            @endsection    