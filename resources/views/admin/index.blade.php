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

             

            </div> <!-- container -->
</div>
            @endsection    