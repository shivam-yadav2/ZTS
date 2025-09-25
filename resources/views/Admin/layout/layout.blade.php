<!DOCTYPE html>
<html lang="en" data-theme="light">
    @include('Admin.partials.head')

<body class="dark:bg-neutral-800 bg-neutral-100 dark:text-white">

    <!-- ..::  header area start ::.. -->
    @include('Admin.partials.sidebar')
    <!-- ..::  header area end ::.. -->

    <main class="dashboard-main">

        <!-- ..::  navbar start ::.. -->
        @include('Admin.partials.navbar')
        <!-- ..::  navbar end ::.. -->

        <div class="dashboard-main-body">
            <!-- ..::  breadcrumb  start ::.. -->
            @include('Admin.partials.breadcrumb')
            <!-- ..::  breadcrumb end ::.. -->

            {{-- This is where page content will be injected --}}
            @yield('content')
        </div>

        <!-- ..::  footer  start ::.. -->
        @include('Admin.partials.footer')
        <!-- ..::  footer end ::.. -->

    </main>

    <!-- ..::  scripts  start ::.. -->
    @include('Admin.partials.script')
    <!-- ..::  scripts  end ::.. -->

    @yield('script')
</body>
</html>
