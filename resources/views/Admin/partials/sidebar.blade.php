<aside class="sidebar">
    <button type="button" class="sidebar-close-btn !mt-4">
        <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>
    <div>
        <a href="index.html" class="sidebar-logo">
            <img src="{{ asset('/frontend_assets/images/logo.png') }}" alt="site logo" class="light-logo">
            <img src="{{ asset('/frontend_assets/images/logo.png') }}" alt="site logo" class="dark-logo">
            <img src="{{ asset('/frontend_assets/images/logo.png') }}" alt="site logo" class="logo-icon">
        </a>
    </div>
    <div class="sidebar-menu-area">
        <ul class="sidebar-menu" id="sidebar-menu">
            <li class=" show open">
                <a href="/admin/dashboard">
                    <span>Dashboard</span>
                </a>

            </li>

            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
                    <span>Gallery Event</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ url('admin/events/create') }}"><i
                                class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Add Event</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/events') }}"><i
                                class="ri-circle-fill circle-icon text-warning-600 w-auto"></i>View Events</a>
                    </li>

                </ul>
            </li>


            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="hugeicons:bitcoin-circle" class="menu-icon"></iconify-icon>
                    <span>Enquiry</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ url('admin/enquiry/enquiryForm') }}"><i
                                class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Add enquiry</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/enquiry/index') }}"><i
                                class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> View enquiry</a>
                    </li>
                </ul>
            </li>



            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="solar:document-text-outline" class="menu-icon"></iconify-icon>
                    <span>Core Member</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ url('admin/coremember/CoreMemberForm') }}"><i
                                class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Add member</a>
                    </li>
                    <li>
                        <a href=" {{ url('admin/coremember/index') }}"><i
                                class="ri-circle-fill circle-icon text-warning-600 w-auto"></i>View Member</a>
                    </li>

                </ul>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="heroicons:document" class="menu-icon"></iconify-icon>
                    <span>Guiding Principle</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ url('admin/guidingprinciple/GuidingPrincipleForm') }}"><i
                                class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>Add</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/guidingprinciple/index') }}"><i
                                class="ri-circle-fill circle-icon text-warning-600 w-auto"></i>View</a>
                    </li>

                </ul>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="mingcute:storage-line" class="menu-icon"></iconify-icon>
                    <span>Our Journey</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ url('admin/ourjourney/OurJourneyForm') }}"><i
                                class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>Add</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/ourjourney/index') }}"><i
                                class="ri-circle-fill circle-icon text-warning-600 w-auto"></i>View</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="solar:pie-chart-outline" class="menu-icon"></iconify-icon>
                    <span>Contact</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ url('admin/contact/showForm') }}"><i
                                class="ri-circle-fill circle-icon text-danger-600 w-auto"></i>Add contact</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/index') }}"><i
                                class="ri-circle-fill circle-icon text-warning-600 w-auto"></i>View Contact</a>
                    </li>

                </ul>
            </li>

            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="solar:pie-chart-outline" class="menu-icon"></iconify-icon>
                    <span>Member Team Card</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ url('admin/teamcard/teamcardForm') }}"><i
                                class="ri-circle-fill circle-icon text-danger-600 w-auto"></i>Add card</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/teamcard/index') }}"><i
                                class="ri-circle-fill circle-icon text-warning-600 w-auto"></i>View card</a>
                    </li>

                </ul>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="solar:pie-chart-outline" class="menu-icon"></iconify-icon>
                    <span>Advisory Team Card</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ url('admin/advisory/teamcardForm') }}"><i
                                class="ri-circle-fill circle-icon text-danger-600 w-auto"></i>Add card</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/advisory/index') }}"><i
                                class="ri-circle-fill circle-icon text-warning-600 w-auto"></i>View card</a>
                    </li>

                </ul>
            </li>





        </ul>
        </li>
        </ul>
    </div>
</aside>
