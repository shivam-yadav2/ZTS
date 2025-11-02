@extends('master.frontmaster')

@section('content')
<!-- Hero Board Section -->
   @include('frontend.pages.component.banner', [
    'title' => 'Advisory Board',
    'description' => 'Meet our esteemed Standards Advisory Panel who review, inform and guide ZTS through the development of our standards',
    'background' => 'https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=1600&h=800&fit=crop'
])

<!-- Team Section -->
    <!-- === Advisory Board Start ===-->
    <div class="difference-two container mt-5">
        <section class="team ff-team pb-0">
            <div class="container">
                <div class="row gutter-40">
                    @foreach ($info as $value)
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000">
                            <div class="team__single van-tilt">
                                <div class="team__single-thumb">
                                    <a href="team-details.html">
                                        <img src="{{ asset('assets/uploads/teamcard/'.$value->img) }}" alt="{{ $value->name }}">
                                    </a>
                                </div>
                                <div class="team__single-content">
                                    <h6><a href="team-details.html">{{ $value->name}}</a></h6>
                                    <p>Advisory Board Member</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!--<div class="row">-->
                <!--    <div class="col-12">-->
                <!--        <div class="section__cta cta text-center">-->
                <!--            <a href="our-team.html" aria-label="our team" title="our team" class="btn--primary"> View-->
                <!--                All Team-->
                <!--            </a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
            <!--<div class="shp"></div>-->
        </section>
    </div>
    <!-- === Advisory Board End ===-->
@endsection
