<section class="banner-section" 
    style="background-image: url('{{ $background ?? "https://images.unsplash.com/photo-1477239439998-839196943351?auto=format&fit=crop&w=1920&q=80" }}');">

    <!-- Overlay -->
    <div class="overlay"></div>

    <div class="container position-relative text-center text-white py-5">
        <h1 class="display-4 fw-bold mb-4 text-white">{{ $title ?? 'Page Title' }}</h1>

        @if(!empty($description))
            <p class="fs-5 mx-auto opacity-75 mb-4" style="max-width: 700px; color:white;">{{ $description }}</p>
        @endif

        <!-- Breadcrumb -->
        <nav class="d-flex justify-content-center align-items-center gap-2 small">
            <a href="/" class="text-white fw-bold text-decoration-none">Home</a>
            <span class="text-white fw-bold">›</span>
            <span class="text-white fw-bold">{{ $title ?? 'Current Page' }}</span>
        </nav>
    </div>
</section>
