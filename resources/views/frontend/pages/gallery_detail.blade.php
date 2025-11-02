@extends('master.frontmaster')
@section('css')
 <!-- Fancybox CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">
<style>
        /* body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        } */

        .detail-section {
            padding: 60px 0;
            background-color: #f8f9fa;
        }

        .back-link {
            color: rgb(2,114,94);
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            display: inline-flex;
            align-items: center;
            margin-bottom: 30px;
            transition: all 0.3s ease;
            padding: 10px 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.08);
        }

        .back-link:hover {
            color: white;
            background: rgb(2,114,94);
            transform: translateX(-5px);
        }

        .stats-bar {
            background: linear-gradient(135deg, rgb(2,114,94) 0%, rgb(115,196,143) 100%);
            border-radius: 15px;
            padding: 35px 25px;
            margin: 30px 0 40px;
            box-shadow: 0 8px 30px rgba(2,114,94,0.2);
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 30px;
        }

        .stat-item {
            text-align: center;
            color: white;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            color: white;
            text-shadow: 0 2px 10px rgba(0,0,0,0.2);
            line-height: 1;
            margin-bottom: 8px;
        }

        .stat-label {
            color: rgba(255,255,255,0.95);
            font-size: 1rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .photo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .photo-item {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            background-color: white;
        }

        .photo-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(2,114,94,0.3);
        }

        .photo-item a {
            display: block;
            position: relative;
        }

        .photo-item img {
            width: 100%;
            height: 320px;
            object-fit: cover;
            display: block;
            transition: transform 0.6s ease, filter 0.3s ease;
        }

        .photo-item:hover img {
            transform: scale(1.15);
            filter: brightness(0.85);
        }

        .photo-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255,193,7,0.9) 0%, rgba(2,114,94,0.9) 100%);
            opacity: 0;
            transition: opacity 0.4s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            pointer-events: none;
        }

        .photo-item:hover .photo-overlay {
            opacity: 1;
        }

        .view-icon {
            color: white;
            font-size: 4rem;
            font-weight: 300;
        }

        .overlay-content {
            text-align: center;
        }

        .pagination-custom {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-top: 40px;
        }

        .page-btn {
            width: 40px;
            height: 40px;
            border: none;
            border-radius: 5px;
            background-color: white;
            color: rgb(2,114,94);
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .page-btn:hover:not(:disabled) {
            background-color: rgb(132,204,157);
            color: white;
            transform: translateY(-2px);
        }

        .page-btn.active {
            background-color: rgb(2,114,94);
            color: white;
        }

        .page-btn:disabled {
            background-color: #e9ecef;
            color: #adb5bd;
            cursor: not-allowed;
        }

        /* Fancybox Custom Styling */
        .fancybox__backdrop {
            background: rgba(2,114,94,0.95);
        }

        .fancybox__nav .carousel__button.is-close {
            background: rgb(255,193,7);
            color: rgb(2,114,94);
        }

        .fancybox__nav .carousel__button.is-close:hover {
            background: rgb(132,204,157);
        }

        @media (max-width: 768px) {
            .event-title {
                font-size: 2rem;
            }

            .photo-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 15px;
            }

            .photo-item img {
                height: 250px;
            }

            .stats-bar {
                padding: 20px;
            }

            .stat-number {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 576px) {
            .event-title {
                font-size: 1.75rem;
            }

            .photo-grid {
                grid-template-columns: 1fr;
            }

            .photo-item img {
                height: 220px;
            }
        }
    </style>
@endsection
@section('content')

<!-- === Banner Section start === -->
@include('frontend.pages.component.banner', [
    'title' => $event->event_name,
    'description' => Str::limit($event->event_description, 150) ?? 'Event Gallery',
    'background' => asset('assets/uploads/events/'.$event->event_img)
])
<!-- ===  Banner Section End === -->

<!-- === Gallery Detail Page === -->
<section class="detail-section">
        <div class="container">
            <a href="{{ url('/gallery') }}" class="back-link">← Back to Gallery</a>

            

            @if($images->count() > 0)
            <div class="photo-grid">
                @foreach ($images as $value)
                <div class="photo-item">
                    <a href="{{ asset('assets/uploads/galleryimg/'.$value->img) }}" data-fancybox="gallery" data-caption="{{ $event->event_name }}">
                        <img src="{{ asset('assets/uploads/galleryimg/'.$value->img) }}" alt="{{ $event->event_name }}">
                        <div class="photo-overlay">
                            <div class="overlay-content">
                                <div class="view-icon">+</div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            @else
            <div class="text-center py-12">
                <div class="inline-block p-4 bg-gray-100 rounded-full mb-4">
                    <i class="fa-solid fa-images text-4xl text-gray-400"></i>
                </div>
                <h6 class="text-lg font-semibold mb-2">No images yet</h6>
                <p class="text-gray-600">Images for this event will be added soon</p>
            </div>
            @endif
        </div>
    </section>
@endsection

@section('script')
<!-- Fancybox JS -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
        // Initialize Fancybox
        Fancybox.bind("[data-fancybox='gallery']", {
            Toolbar: {
                display: {
                    left: [],
                    middle: [],
                    right: ["close"],
                },
            },
            Images: {
                zoom: true,
            },
            Thumbs: {
                autoStart: true,
            },
            animated: true,
            hideScrollbar: true,
        });

        // Pagination functionality
        const pageButtons = document.querySelectorAll('.page-btn');
        pageButtons.forEach(button => {
            button.addEventListener('click', function() {
                if (!this.disabled && !this.textContent.includes('‹') && !this.textContent.includes('›')) {
                    pageButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                }
            });
        });
    </script>
@endsection