@extends('fronted.layout.master')
@section('content')

    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');"
        id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-white font-weight-bold">About Us</h1>
                    <div class="custom-breadcrumbs">
                        <a href="#">Home</a> <span class="mx-2 slash">/</span>
                        <span class="text-white"><strong>About Us</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="py-5 bg-image overlay-primary fixed overlay" id="next-section"
        style="background-image: url('images/hero_1.jpg');">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="section-title mb-2 text-white">JobBoard Site Stats</h2>
                    <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita unde
                        officiis recusandae sequi excepturi corrupti.</p>
                </div>
            </div>
            <div class="row pb-0 block__19738 section-counter">
                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="1930">0</strong>
                    </div>
                    <span class="caption">Candidates</span>
                </div>
                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="54">0</strong>
                    </div>
                    <span class="caption">Jobs Posted</span>
                </div>
                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="120">0</strong>
                    </div>
                    <span class="caption">Jobs Filled</span>
                </div>
                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="550">0</strong>
                    </div>
                    <span class="caption">Companies</span>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="site-section pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    {{-- <a data-fancybox data-ratio="2" href="https://vimeo.com/317571768" class="block__96788"> --}}
                        <span class="play-icon"><span class="icon-play"></span></span>
                        <img src="{{ asset($about->image) }}" alt="Image" class="img-fluid img-shadow">
                    {{-- </a> --}}
                </div>
                <div class="col-lg-5 ml-auto">
                    <h5>Company History</h5>
                    <h2 class="section-title mb-3">{{ $about->title }}</h2>
                    <p class="lead">{!! $about->history !!}</p>

                </div>
            </div>
        </div>
    </section>
    <section class="site-section pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0 order-md-2">

                        <span class="play-icon"><span class="icon-play"></span></span>
                        <img src="{{ asset($about->image) }}" alt="Image" class="img-fluid img-shadow">

                </div>
                <div class="col-lg-5 mr-auto order-md-1  mb-5 mb-lg-0">
                    <h5>Our Vision</h5>
                    <h2 class="section-title mb-3">{{ $about->title }}</h2>
                    <p class="lead">{!! $about->vision !!}</p>

                </div>
            </div>
        </div>
    </section>
    <section class="site-section py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center mt-4 mb-5">
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <h2 class="section-title mb-2"> Company Believe in us</h2>
                            <p class="lead">Porro error reiciendis commodi beatae omnis similique voluptate rerum
                                ipsam fugit mollitia ipsum facilis expedita tempora suscipit iste</p>
                        </div>
                    </div>
                </div>
                @forelse ($top_companys as $top_company)
                    <div class="col-6 col-lg-3 col-md-6 text-center">
                        <a href="{{ $top_company->link }}">
                        <img src="{{ asset($top_company->image) }}" alt="Image" class="img-fluid logo-1"></a>
                    </div>
                @empty
                    <h1>No Company Found</h1>
                @endforelse


            </div>
        </div>
    </section>

    </div>

    @endsection
