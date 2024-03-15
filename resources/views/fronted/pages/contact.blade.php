@extends('fronted.layout.master')

@section('content')


    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');"
        id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-white font-weight-bold">Contact Us</h1>
                    <div class="custom-breadcrumbs">
                        <a href="#">Home</a> <span class="mx-2 slash">/</span>
                        <span class="text-white"><strong>Contact Us</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="site-section" id="next-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <form action="{{ route('contact.store') }}" method="post" class>
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-black" for="fname">First Name</label>
                                <input type="text" id="fname" name="fname" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="text-black" for="lname">Last Name</label>
                                <input type="text" id="lname" name="lname" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="subject">Subject</label>
                                <input type="subject" id="subject" name="subject" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="message">Message</label>
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control"
                                    placeholder="Write your notes or questions here..."></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 ml-auto">
                    <div class="p-4 mb-3 bg-white">
                        <p class="mb-0 font-weight-bold">Address</p>
                        <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>
                        <p class="mb-0 font-weight-bold">Phone</p>
                        <p class="mb-4"><a href="#">+1 232 3235 324</a></p>
                        <p class="mb-0 font-weight-bold">Email Address</p>
                        <p class="mb-0"><a href="#"><span class="__cf_email__"
                                    data-cfemail="40392f3532252d21292c00242f2d21292e6e232f2d">[email&#160;protected]</span></a>
                        </p>
                    </div>
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
