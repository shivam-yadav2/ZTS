@extends('master.frontmaster')
@section('css')
<style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

        .gallery-section {
            padding: 60px 0;
        }

        .gallery-title {
            font-size: 2.5rem;
            font-weight: 600;
            color: rgb(2,114,94);
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .gallery-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: rgb(255,193,7);
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .gallery-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 20px rgba(2,114,94,0.3);
        }

        .gallery-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover .gallery-img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(2,114,94,0.85);
            opacity: 0;
            transition: opacity 0.4s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-caption {
            color: white;
            font-size: 1rem;
            font-weight: 500;
            text-align: center;
            transform: translateY(20px);
            transition: transform 0.4s ease;
        }

        .gallery-item:hover .gallery-caption {
            transform: translateY(0);
        }

        .gallery-location {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(255,193,7,0.95);
            color: rgb(2,114,94);
            padding: 10px 15px;
            font-size: 0.85rem;
            font-weight: 600;
            text-align: center;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .gallery-item:hover .gallery-location {
            transform: translateY(0);
        }

        @media (max-width: 768px) {
            .gallery-title {
                font-size: 2rem;
            }

            .gallery-img {
                height: 200px;
            }
        }

        @media (max-width: 576px) {
            .gallery-title {
                font-size: 1.75rem;
            }

            .gallery-img {
                height: 180px;
            }

            .gallery-caption {
                font-size: 0.9rem;
            }
        }
    </style>
@endsection

@section('content')

<!-- === Banner Section start === -->
   @include('frontend.pages.component.banner', [
      'title' => 'Gallery',
      'description' => 'Explore our journey through moments that capture the impact of our educational initiatives, community events, and transformative programs across India.',
      'background' => asset('https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=1600&h=800&fit=crop')
   ])
      <!-- ===  Banner Section End === -->

                        <!-- === Gallery Section Start===-->
                          <section class="gallery-section">
        <div class="container">
            <h2 class="gallery-title">Gallery</h2>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                         <a href="#">
                            <img src="https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=400&h=300&fit=crop" alt="Independence Day" class="gallery-img">
                            <div class="gallery-overlay">
                                <p class="gallery-caption">Celebrate our Independence Day</p>
                            </div>
                        </a>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                         <a href="#">
                            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&h=300&fit=crop" alt="Children Day" class="gallery-img">
                            <div class="gallery-overlay">
                                <p class="gallery-caption">Children Day Celebration</p>
                            </div>
                        </a>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                         <a href="#">
                            <img src="https://images.unsplash.com/photo-1497486751825-1233686d5d80?w=400&h=300&fit=crop" alt="Children Day Celebration" class="gallery-img">
                            <div class="gallery-overlay">
                                <p class="gallery-caption">Children Day celebration With Mc D</p>
                            </div>
                         </a>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                         <a href="#">
                            <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=400&h=300&fit=crop" alt="Dancing Workshop" class="gallery-img">
                            <div class="gallery-overlay">
                                <p class="gallery-caption">Dancing workshop for chetna sansthan</p>
                            </div>
                        </a>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <a href="#">
                            <img src="https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?w=400&h=300&fit=crop" alt="Medical Camp Day 1" class="gallery-img">
                            <div class="gallery-overlay">
                                <p class="gallery-caption">Day 1, Medical camp in chetna by ZTS</p>
                            </div>
                        </a>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <a href="#">
                            <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?w=400&h=300&fit=crop" alt="Medical Camp Day 2" class="gallery-img">
                            <div class="gallery-overlay">
                                <p class="gallery-caption">Day 2, Dental health-Medical Camp in chetna by ZTS</p>
                            </div>
                        </a>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=400&h=300&fit=crop" alt="Medical Health Counseling" class="gallery-img">
                        <div class="gallery-overlay">
                            <p class="gallery-caption">Day 3, Free Medical Health Counseling Camp(Girl)</p>
                        </div>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>

                

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1606092195730-5d7b9af1efc5?w=400&h=300&fit=crop" alt="Chetna ke Sang Holi" class="gallery-img">
                        <div class="gallery-overlay">
                            <p class="gallery-caption">Day 5, Chetna ke Sang Holi ke Rang</p>
                        </div>
                        <div class="gallery-location">UP</div>
                    </div>
                </div>

                
            </div>
        </div>
    </section>
                        <!-- === Gallery Section End ===-->
@endsection