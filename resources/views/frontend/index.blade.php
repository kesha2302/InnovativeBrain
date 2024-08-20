@extends('frontend.layout.main')

@section('main-container')

<div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
        @foreach ($banner as $banner)
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{asset('BannerImage/'.$banner->image)}}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h2 class="text-primary text-uppercase mb-3 animated slideInDown">
                               {{$banner->title}}</h2
                                >
                            <h2 class="display-8 text-white animated slideInDown">{{$banner->description}}</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
<!-- Carousel End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-rocket  mb-4"></i>
                        <h5 class="mb-3">IT Solutions</h5>
                        <p>We build Web, Mobile & all types of custom IT solutions.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">

                        <i class="fa fa-3x fa-graduation-cap  mb-4"></i>
                        <h5 class="mb-3">Internship</h5>
                        <p>We provide internship opportunities on different IT domains.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-globe mb-4"></i>
                        <h5 class="mb-3">IT Training</h5>
                        <p>We also offer various types of basic to advanced IT trainings.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-laptop text-blue mb-4"></i>
                        <h5 class="mb-3">Live Projects</h5>
                        <p>We are currently involved in ongoing live projects.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
<div class="p-03p3563 pagelayer-col pagelayer-col-6">
        <div class="pagelayer-col-holder">
            <img src="" alt="">
            <div class="p-bwf1504 pagelayer-heading">
                <div class="pagelayer-heading-holder">
                    <h3>InnoBrain Technologies</h3>
                </div>
            </div>
            <div class="p-zdd5470 pagelayer-divider">
                <div class="pagelayer-divider-holder">
                    <span class="pagelayer-divider-seperator"></span>
                </div>
            </div>
            <div class="p-k0w3472 pagelayer-heading">
                <a href="32" class="pagelayer-link-sel">
                    <div class="pagelayer-heading-holder">
                        <p> </p>
                    </div>
                </a>
            </div>
            <div class="p-7qm3437 pagelayer-progress">
                <div class="pagelayer-progress-title">IT Solutions</div>
                <div class="pagelayer-progress-container">
                    <div class="pagelayer-progress-bar" data-progress="40">
                        <span class="pagelayer-progress-percent">70%</span>
                    </div>
                </div>
            </div>
            <div class="p-qza8928 pagelayer-progress">
                <div class="pagelayer-progress-title">Internship</div>
                <div class="pagelayer-progress-container">
                    <div class="pagelayer-progress-bar" data-progress="50">
                        <span class="pagelayer-progress-percent">75%</span>
                    </div>
                </div>
            </div>
            <div class="p-boa719 pagelayer-progress">
                <div class="pagelayer-progress-title">IT Training</div>
                <div class="pagelayer-progress-container">
                    <div class="pagelayer-progress-bar" data-progress="60">
                        <span class="pagelayer-progress-percent">85%</span>
                    </div>
                </div>
            </div>
            <div class="p-boa719 pagelayer-progress">
                <div class="pagelayer-progress-title">Project Development</div>
                <div class="pagelayer-progress-container">
                    <div class="pagelayer-progress-bar"data-progress="70">
                        <span class="pagelayer-progress-percent">95%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-70 h-100" src="frontend/img/ss.png" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s" >
                <h1 class="mb-4" >Welcome to InnoBrain Technologies</h1>
                <p class="mb-4" style="text-align: justify;">InnoBrain Technologies is an MSME registered IT organization based out in V.V. Nagar, Anand, Gujarat.
                <p class="mb-4" style="text-align: justify;"> We, at InnoBrain Technologies, primarily focus on providing requirement based IT Solutions.</p>
                <p class="mb-4" style="text-align: justify;"> We provide IT Training on various Programming Languages, Software Tools & Technologies in Offline/Online Mode to aspirants willing to make/switch career in IT Industry along with Job Placement Assistance.</p>
                <p class="mb-4"style="text-align: justify;"> We also provide Internship Opportunities with the aim to bridge the gap between Industry and Academia.</p>


            </div>
        </div>
    </div>
</div>
<!-- About End -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const progressBars = document.querySelectorAll('.pagelayer-progress-bar');

    progressBars.forEach(bar => {
        const width = bar.getAttribute('data-progress') + '%';
        bar.style.width = 0; // Start at 0%
        setTimeout(() => {
            bar.style.transition = 'width 2s ease';
            bar.style.width = width;
        }, 100); // Delay slightly to ensure smooth animation
    });
});

</script>
@endsection
