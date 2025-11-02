<div class="navbar-header border-b border-neutral-200 dark:border-neutral-600">
    <div class="flex items-center justify-between">
        <div class="col-auto">
         <h5>Admin</h5>
        </div>



        <div class="col-auto">
            <div class="flex flex-wrap items-center gap-3">
                <div>
                    <button type="button"
                        class="btn border border-success-600 text-success-600 hover:bg-success-600 hover:text-white rounded-full px-5 py-[11px] flex items-center gap-2">
                        <a href="{{ url('admin/logout') }}"> Logout</a>
                        <iconify-icon icon="mingcute:square-arrow-right-line" class="text-xl"></iconify-icon>
                    </button>
                </div>

                {{-- <button type="button" id="theme-toggle"
                    class="w-10 h-10 bg-neutral-200 dark:bg-neutral-700 dark:text-white rounded-full flex justify-center items-center">
                    <span id="theme-toggle-dark-icon" class="hidden">
                        <i class="ri-sun-line"></i>
                    </span>
                    <span id="theme-toggle-light-icon" class="">
                        <i class="ri-moon-line"></i>
                    </span>
                </button> --}}
            </div>
        </div>
    </div>
</div>
