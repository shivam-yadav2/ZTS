<!DOCTYPE html>
<html lang="en" data-theme="light">
@vite('resources/css/app.css')
    @include('admin.partials.head')
    @yield('css')


<body class="dark:bg-neutral-800 bg-neutral-100 dark:text-white">

    <!-- ..::  header area start ::.. -->
    @include('admin.partials.sidebar')
    <!-- ..::  header area end ::.. -->

    <main class="dashboard-main">

        <!-- ..::  navbar start ::.. -->
        @include('admin.partials.navbar')
        <!-- ..::  navbar end ::.. -->

        <div class="dashboard-main-body">
            <!-- ..::  breadcrumb  start ::.. -->
            @include('admin.partials.breadcrumb')
            <!-- ..::  breadcrumb end ::.. -->

            {{-- This is where page content will be injected --}}
            @yield('content')
        </div>

        <!-- ..::  footer  start ::.. -->
        @include('admin.partials.footer')
        <!-- ..::  footer end ::.. -->

    </main>

    <!-- ..::  scripts  start ::.. -->
    @include('admin.partials.script')
    <!-- ..::  scripts  end ::.. -->

    @yield('script')

        <!-- SweetAlert CSS & JS -->
<!-- Blade Template -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))
<script>
Swal.fire({
  icon: 'success',
  title: 'Success!',
  text: '{{ session('success') }}',
});
</script>
@endif

</body>
</html>
