<aside class="sidebar">
    <button type="button" class="sidebar-close-btn !mt-4">
        <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>
    <div>
        <a href="index.html" class="sidebar-logo">
            <img src="{{ asset('assets/images/logo.png') }}" alt="site logo" class="light-logo">
            <img src="{{ asset('assets/images/logo-light.png') }}" alt="site logo" class="dark-logo">
            <img src="{{ asset('assets/images/logo-icon.png') }}" alt="site logo" class="logo-icon">
        </a>
    </div>
    <div class="sidebar-menu-area">
        <ul class="sidebar-menu" id="sidebar-menu">
            <li class="dropdown show open">
                <a href="javascript:void(0)">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
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
                        <a href="{{ url('admin/events/create') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Add Event</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/events') }}"><i class="ri-circle-fill circle-icon text-warning-600 w-auto"></i>View Events</a>
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
                        <a href="{{ url('admin/enquiry/enquiryForm') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Add enquiry</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/enquiry/index') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> View enquiry</a>
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
                        <a href="{{ url('admin/coremember/CoreMemberForm') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Add member</a>
                    </li>
                    <li>
                        <a href=" {{ url('admin/coremember/index') }}"><i class="ri-circle-fill circle-icon text-warning-600 w-auto"></i>View Member</a>
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
                        <a href="{{ url('admin/guidingprinciple/GuidingPrincipleForm') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>Add</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/guidingprinciple/index') }}"><i class="ri-circle-fill circle-icon text-warning-600 w-auto"></i>View</a>
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
                        <a href="{{ url('admin/ourjourney/OurJourneyForm') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>Add</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/ourjourney/index') }}"><i class="ri-circle-fill circle-icon text-warning-600 w-auto"></i>View</a>
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
                        <a href="{{ url('admin/contact/showForm') }}"><i class="ri-circle-fill circle-icon text-danger-600 w-auto"></i>Add contact</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/index') }}"><i class="ri-circle-fill circle-icon text-warning-600 w-auto"></i>View Contact</a>
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
                        <a href="{{ url('admin/teamcard/teamcardForm') }}"><i class="ri-circle-fill circle-icon text-danger-600 w-auto"></i>Add card</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/teamcard/index') }}"><i class="ri-circle-fill circle-icon text-warning-600 w-auto"></i>View card</a>
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
                        <a href="{{ url('admin/advisory/teamcardForm') }}"><i class="ri-circle-fill circle-icon text-danger-600 w-auto"></i>Add card</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/advisory/index') }}"><i class="ri-circle-fill circle-icon text-warning-600 w-auto"></i>View card</a>
                    </li>
                
                </ul>
            </li>
         

            </li>
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="flowbite:users-group-outline" class="menu-icon"></iconify-icon>
                    <span>Leadership</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ url('admin/leadership/showForm') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>Add Leadership cards</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/leadership/index') }}"><i class="ri-circle-fill circle-icon text-warning-600 w-auto"></i>View cards</a>
                    </li>
                  
                </ul>
            </li>

            <li class="sidebar-menu-group-title">Application</li>

            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="simple-line-icons:vector" class="menu-icon"></iconify-icon>
                    <span>Authentication</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ url('signin') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Sign In</a>
                    </li>
                    <li>
                        <a href="{{ url('signup') }}"><i class="ri-circle-fill circle-icon text-warning-600 w-auto"></i> Sign Up</a>
                    </li>
                    <li>
                        <a href="{{ url('forgotPassword') }}"><i class="ri-circle-fill circle-icon text-info-600 w-auto"></i> Forgot Password</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ url('gallery') }}">
                    <iconify-icon icon="solar:gallery-wide-linear" class="menu-icon"></iconify-icon>
                    <span>Gallery</span>
                </a>
            </li>
            <li>
                <a href="{{ url('pricing') }}">
                    <iconify-icon icon="hugeicons:money-send-square" class="menu-icon"></iconify-icon>
                    <span>Pricing</span>
                </a>
            </li>
            <li>
                <a href="{{ url('faq') }}">
                    <iconify-icon icon="mage:message-question-mark-round" class="menu-icon"></iconify-icon>
                    <span>FAQs.</span>
                </a>
            </li>
            <li>
                <a href="{{ url('pageError') }}">
                    <iconify-icon icon="streamline:straight-face" class="menu-icon"></iconify-icon>
                    <span>404</span>
                </a>
            </li>
            <li>
                <a href="{{ url('termsCondition') }}">
                    <iconify-icon icon="octicon:info-24" class="menu-icon"></iconify-icon>
                    <span>Terms & Conditions</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="icon-park-outline:setting-two" class="menu-icon"></iconify-icon>
                    <span>Settings</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ url('company') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Company</a>
                    </li>
                    <li>
                        <a href="{{ url('notification') }}"><i class="ri-circle-fill circle-icon text-warning-600 w-auto"></i> Notification</a>
                    </li>
                    <li>
                        <a href="{{ url('notificationAlert') }}"><i class="ri-circle-fill circle-icon text-info-600 w-auto"></i> Notification Alert</a>
                    </li>
                    <li>
                        <a href="{{ url('theme') }}"><i class="ri-circle-fill circle-icon text-danger-600 w-auto"></i> Theme</a>
                    </li>
                    <li>
                        <a href="{{ url('currencies') }}"><i class="ri-circle-fill circle-icon text-danger-600 w-auto"></i> Currencies</a>
                    </li>
                    <li>
                        <a href="{{ url('language') }}"><i class="ri-circle-fill circle-icon text-danger-600 w-auto"></i> Languages</a>
                    </li>
                    <li>
                        <a href="{{ url('paymentGateway') }}"><i class="ri-circle-fill circle-icon text-danger-600 w-auto"></i> Payment Gateway</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>