@extends('frontend.main.layout')
@section('content')
    <section id="inn-banner-slider" class="banner-slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active"
                    style="background-image: url('{{ asset('frontend/images/inn-banner.jpg') }}');">
                    <canvas id="canvas"></canvas>
                    <div class="carousel-caption inn-cus-cap">
                        <h1>Testimonials</h1>
                        <ul class="breadcrumb">
                            <li><a href="{{ route('home') }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Home</a>
                            </li>
                            <li>Testimonials</li>
                        </ul>
                    </div>
                </div>


            </div>

        </div>
    </section>
    <!-- Page Content -->


    <section id="welcome-section">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col-lg-12">
                    <h1 class="mb-0">Testimonial</h1>
                    <hr>
                    <p>Aenean est mi, scelerisque nec porttitor sit amet, sagittis sed tellus. Ut sem turpis, dignissim id
                        eros vel, rutrum rutrum libero. Donec non orci et ipsum porta cursus ornare sit amet libero. Donec
                        venenatis consectetur fringilla uisque ac dolor sapien.</p>
                    <hr>
                </div>
            </div>
            <div class="row">
                @foreach ($testimonials as $item)
                    <div class="col-lg-12 mb-2">
                        <div class="tstimonial-box">
                            <div class="media ts-ctn testimonials-thumb">
                                <div class="media-body">
                                    <img src="{{ asset('frontend/images/comma.png') }}" class="mb-2">
                                    <p>“{{ $item->text }}”</p>
                                    <div class="media">
                                        @if (isset($item) && !empty($item->image) && File::exists(public_path('storage/TestiImage/' . $item->image)))
                                            <img src="{{ asset('storage/TestiImage/' . $item->image) }}" class="mr-3" alt="" height="100px" width="100px">
                                        @else
                                            <img src="{{ asset('frontend/images/ts-pic2.jpg') }}" class="mr-3"
                                                alt="...">
                                        @endif

                                        <div class="media-body align-self-center">
                                            <h4 class="mt-0">{{ $item->title }}</h4>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <p>{{ $item->position }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg-12 mb-2">
                    <div class="tstimonial-box">
                        <div class="media ts-ctn testimonials-thumb">
                            <div class="media-body">
                                <img src="{{ asset('frontend/images/comma.png') }}" class="mb-2">
                                <p>“ FROLIC SERVICES did the Electrical and HVAC plans for my ALIPORE CENTRAL JAIL
                                    renovation project in Kolkata, West Bengal. I sought them out for their unique position
                                    to offer specialized design using unconventional, environmentally friendly MEP
                                    techniques . I am very grateful for their expertise in this area, allowing me to move
                                    forward with this project, which is a class 1 Heritage site. </p>
                                <p>They were very accommodating and patient communicating with me back and forth by phone
                                    and email. Wish a gook luck for their future assignments.”</p>
                                <div class="media">
                                    <img src="{{ asset('frontend/images/ts-pic1.jpg') }}" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <h4 class="mt-0">Partho Das and Associates</h4>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <p>Alipore Central Jail</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}


            </div>
        </div>
    </section>
@endsection
