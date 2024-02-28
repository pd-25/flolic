@extends('frontend.main.layout')
@section('content')
    <section id="banner-slider" class="banner-slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active"
                    style="background-image: url('{{ asset('frontend/images/banner.jpg') }}');">
                    <canvas id="canvas"></canvas>
                    <div class="carousel-caption">
                        <p class="bannerhead">Welcome to</p>
                        <h1>Frolic Services</h1>
                        <p class="bannercap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quis, ipsam.
                            there a maiores soluta facere, accusantium modi.</p>
                        <a href="{{ route('contact-us') }}" class="banner-btn">Contact Us</a>
                    </div>
                </div>

                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('{{ asset('frontend/images/banner2.jpg') }}')">
                    <div class="carousel-caption">
                        <p class="bannerhead">Welcome to</p>
                        <h1>Frolic Services</h1>
                        <p class="bannercap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quis, ipsam.
                            there a maiores soluta facere, accusantium modi.</p>
                        <a href="#" class="banner-btn">Contact Us</a>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"><img
                        src="{{ asset('frontend/images/ban-left-btn.png') }}" class="img-fluid"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"><img
                        src="{{ asset('frontend/images/ban-right-btn.png') }}" class="img-fluid"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- Page Content -->


    <section id="welcome-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('frontend/images/wel-pic.png') }}" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <p class="sec-head-caption">Frolic Services</p>
                    <h1>About <span>Us</span></h1>
                    <p class="section-caption">We Are Commited To Provide Quality Service...</p>
                    <p>We, Frolic Services, situated at Purba Sinthee, Kolkata, West Bengal, are accredited electrical
                        contractors, working towards the goal of helping our customers with a smooth experience and ensure
                        that all electrical works are undertaken at highest standards. We provide electrical services at an
                        affordable rate and also give tips to our customers on how to maintain the longevity of electrical
                        devices through our highly skilled staff.</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="media">
                                <img src="{{ asset('frontend/images/wel-icon1.png') }}" class="mr-3" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0">Suspendise Potenti</h5>
                                    <p>Aenean volutpat meteidus et maximus pharetra. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="media">
                                <img src="{{ asset('frontend/images/wel-icon2.png') }}" class="mr-3" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0">Suspendise Potenti</h5>
                                    <p>Aenean volutpat meteidus et maximus pharetra. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="wel-list">
                        <li>Pellentesque nec finibus risus quis dui rhoncus pellentesque.</li>
                        <li>Mauris porta lacinia eros ac suscipit curabitur finibus lectus justo.</li>
                        <li>Nullam consectetur porttitor leo, a luctus sapien porttitor vitae.</li>
                    </ul>

                    <p><a href="ceo-desk" class="hm-btn">Read More</a></p>
                </div>
            </div>
        </div>
    </section>



    <section id="service-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <p class="sec-head-caption">Explore</p>
                    <h2>Our <span>Services</span></h2>
                    <p class="sechead">Maecenas convallis augue eu tortor commodo imperdiet. Donec fermentum maximus velit
                        laoreet rhoncus. Aenean volutpat metus et maximus pharetra.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div id="demo-pranab">
                        <div id="owl-service" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="media">
                                    <img src="{{ asset('frontend/images/serv-icon.png') }}" class="img-fluid"
                                        alt="...">
                                    <div class="media-body align-self-center">
                                        <h5 class="mt-0">Electrical Design</h5>
                                    </div>
                                </div>
                                <div class="pro-box">
                                    <p>Electrical designing is a significant aspect of creating safe, efficient, and
                                        functional electrical systems...</p>
                                    <a href="electrical-design" class="hm-btn">Read More</a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="media">
                                    <img src="{{ asset('frontend/images/serv-icon.png') }}" class="img-fluid"
                                        alt="...">
                                    <div class="media-body align-self-center">
                                        <h5 class="mt-0">HVAC Design</h5>
                                    </div>
                                </div>
                                <div class="pro-box">
                                    <p>HVAC (Heating, Ventilation, and Air Conditioning) design is an important aspect of
                                        creating indoor environments...</p>
                                    <a href="hvac-design" class="hm-btn">Read More</a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="media">
                                    <img src="{{ asset('frontend/images/serv-icon.png') }}" class="img-fluid"
                                        alt="...">
                                    <div class="media-body align-self-center">
                                        <h5 class="mt-0">PHE Design</h5>
                                    </div>
                                </div>
                                <div class="pro-box">
                                    <p>PHE (Public Health Engineering) design is a specialized field focused on planning and
                                        implementing water supply...</p>
                                    <a href="phe-design" class="hm-btn">Read More</a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="media">
                                    <img src="{{ asset('frontend/images/serv-icon.png') }}" class="img-fluid"
                                        alt="...">
                                    <div class="media-body align-self-center">
                                        <h5 class="mt-0">Fire System Design</h5>
                                    </div>
                                </div>
                                <div class="pro-box">
                                    <p>Fire system designing is a critical aspect of ensuring the safety of buildings and
                                        occupants by implementing...</p>
                                    <a href="fire-system-design" class="hm-btn">Read More</a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="media">
                                    <img src="{{ asset('frontend/images/serv-icon.png') }}" class="img-fluid"
                                        alt="...">
                                    <div class="media-body align-self-center">
                                        <h5 class="mt-0">ELV Network Design</h5>
                                    </div>
                                </div>
                                <div class="pro-box">
                                    <p>ELV (Extra Low Voltage) network design is a specialized field in the realm of
                                        electrical engineering that focuses...</p>
                                    <a href="elv-network-design" class="hm-btn">Read More</a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="media">
                                    <img src="{{ asset('frontend/images/serv-icon.png') }}" class="img-fluid"
                                        alt="...">
                                    <div class="media-body align-self-center">
                                        <h5 class="mt-0">CCTV & Secuirity System Design</h5>
                                    </div>
                                </div>
                                <div class="pro-box">
                                    <p>CCTV (Closed-Circuit Television) and security system designing is a specialized field
                                        focused on creating comprehensive...</p>
                                    <a href="cctv-and-secuirity-system-design" class="hm-btn">Read More</a>
                                </div>
                            </div>

                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="why-us-section">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-6 pr-0">
                    <div class="why-us-pic-box">
                        <img src="{{ asset('frontend/images/why-pic.jpg') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="why-us-ctn-box-right">
                        <p class="sec-head-caption">Why Choose</p>
                        <h2>frolic <span>services</span></h2>
                        <p class="sechead">Why face the electrical hazards, when we offer a variety of electrical
                            installation and repair solutions. Be it a switch board repair, a wiring problem, light
                            fittings, installation and repair of electrical devices, our professionals are equipped to deal
                            with it. Our professionals are skillfully trained to handle the most complex electrical
                            problems.</p>
                        <div class="media why-us-ctn mb-4">
                            <img src="{{ asset('frontend/images/why-icon.png') }}" class="align-self-center mr-3"
                                alt="...">
                            <div class="media-body">
                                <h5 class="mt-0">We provide <span>High Quality Equipment</span></h5>
                                <p>Phasellus egestas, massa id efficitur tristique, nibh orci viverra quam, quis consequat
                                    lectus orci quis mi.</p>
                            </div>
                        </div>
                        <div class="media why-us-ctn mb-4">
                            <img src="{{ asset('frontend/images/why-icon.png') }}" class="align-self-center mr-3"
                                alt="...">
                            <div class="media-body">
                                <h5 class="mt-0">Assured Post <span>Service Guarantee</span></h5>
                                <p>Phasellus egestas, massa id efficitur tristique, nibh orci viverra quam, quis consequat
                                    lectus orci quis mi.</p>
                            </div>
                        </div>
                        <div class="media why-us-ctn mb-4">
                            <img src="{{ asset('frontend/images/why-icon.png') }}" class="align-self-center mr-3"
                                alt="...">
                            <div class="media-body">
                                <h5 class="mt-0">Reliable and Dedicated <span>Customer Support</span></h5>
                                <p>Phasellus egestas, massa id efficitur tristique, nibh orci viverra quam, quis consequat
                                    lectus orci quis mi.</p>
                            </div>
                        </div>
                        <div class="media why-us-ctn">
                            <img src="{{ asset('frontend/images/why-icon.png') }}" class="align-self-center mr-3"
                                alt="...">
                            <div class="media-body">
                                <h5 class="mt-0">Trained Team of <span>Electricians</span></h5>
                                <p>Phasellus egestas, massa id efficitur tristique, nibh orci viverra quam, quis consequat
                                    lectus orci quis mi.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>






    <section id="hm-contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="media">
                        <img src="{{ asset('frontend/images/phone-icon.png') }}" class="align-self-center mr-3"
                            alt="...">
                        <div class="media-body">
                            <h2 class="mt-0">Lorem ipsum dolor sit ametetur adipisicing elit.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sunt.</p>
                            <a href="contact-us" class="banner-btn">Contact Us Now!</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <section id="gallery-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="gal-ctn-box mb-3">
                        <p class="sec-head-caption">frolic services</p>
                        <h2>Our <span>Project</span></h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div id="demo-pranab">
                        <div id="owl-gallery" class="owl-carousel owl-theme">
                            @foreach ($projects as $project)
                                <div class="item">
                                    <div class="gallery-img-box">
                                        @if (isset($project->project_images) &&
                                                !empty($project->project_images) &&
                                                File::exists(public_path('storage/ProjectImages/' . $project->project_images->first()->image)))
                                            <img src="{{ asset('storage/ProjectImages/' . $project->project_images->first()->image) }}"
                                                alt="" class="img-fluid">
                                        @else
                                            <img src="{{ asset('frontend/images/gal-pic333.jpg') }}" class="img-fluid">
                                        @endif
                                        <h3>{{ $project->name }}</h3>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="item">
                                <div class="gallery-img-box">
                                    <img src="{{ asset('frontend/images/gal-pic2.jpg') }}" class="img-fluid">
                                    <h3>Aircraft Musium</h3>
                                </div>
                            </div>
                            <div class="item">
                                <div class="gallery-img-box">
                                    <img src="{{ asset('frontend/images/gal-pic3.jpg') }}" class="img-fluid">
                                    <h3>Project Name</h3>
                                </div>
                            </div>
                            <div class="item">
                                <div class="gallery-img-box">
                                    <img src="{{ asset('frontend/images/gal-pic3.jpg') }}" class="img-fluid">
                                    <h3>Project Name</h3>
                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <a href="{{ route('our-project') }}" class="hm-btn">View Full Project</a>
                </div>
            </div>
        </div>
    </section>





    <section id="video-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="sec-head-caption">frolic services</p>
                    <h2>Our <span>Video</span></h2>
                </div>
                <div class="col-lg-6 fst-video-box">
                    <div class="video-box">
                        <a class="youtube-link" youtubeid="UdtzEh3AlLM"> <span class="playbtn-img"><img
                                    src="{{ asset('frontend/images/play-btn.png') }}"></span></a>
                    </div>
                </div>
                <div class="col-lg-6 snd-video-box">
                    <div class="video-box">
                        <a class="youtube-link" youtubeid="gTJaRXAEK70"><span class="playbtn-img"><img
                                    src="{{ asset('frontend/images/play-btn.png') }}"></span></a>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section id="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="gal-ctn-box mb-3">
                        <p class="sec-head-caption">Testimonial</p>
                        <h2>What Our <span>Clients Says</span></h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div id="demo-pranab">
                        <div id="owl-testimonial" class="owl-carousel owl-theme">
                            @foreach ($testimonials as $item)
                                <div class="item">
                                    <div class="testimonials-thumb">
                                        <img src="{{ asset('frontend/images/comma.png') }}" class="comma img-fluid"
                                            alt="">
                                        <p>“ {{ $item->text }}”</p>
                                        <div class="media">
                                            @if (isset($item) && !empty($item->image) && File::exists(public_path('storage/TestiImage/' . $item->image)))
                                                <img src="{{ asset('storage/TestiImage/' . $item->image) }}"
                                                    class="mr-3" alt="" height="100px" width="100px">
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
                                                <p>{{ $item->position }} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="item">
                                <div class="testimonials-thumb">
                                    <img src="{{ asset('frontend/images/comma.png') }}" class="comma img-fluid"
                                        alt="">
                                    <p>“We’ve enjoyed working with FROLIC SERVICES, Inc. over the past few years on a
                                        handful of jobs. We’re particularly happy with your abilities to work with us
                                        creatively, and come back with multiple options when the initial Aircraft Musium
                                        design we send needs to be altered. Based on our experiences so far, we will be
                                        starting to send a larger volume of work your way.”</p>
                                    <div class="media">
                                        <img src="{{ asset('frontend/images/ts-pic2.jpg') }}" class="mr-3"
                                            alt="...">
                                        <div class="media-body align-self-center">
                                            <h4 class="mt-0">Debamalya Guha</h4>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <p>PACE CONSULTANT</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonials-thumb">
                                    <img src="{{ asset('frontend/images/comma.png') }}" class="comma img-fluid"
                                        alt="">
                                    <p>Curabitur velit arcu, pellenteue is varius at, porta eget ex. Nulla phtra semper tor,
                                        ornare tincidunt est fcibus at. Pellentsque arcu justo, finibus non volutpat a,
                                        maximus ut tellus. Duisis nec libero ultricies tincidunt ut a risus fusce ut
                                        convallis purus dui, dict lectus. </p>
                                    <div class="media">
                                        <img src="{{ asset('frontend/images/profile.png') }}" class="mr-3"
                                            alt="...">
                                        <div class="media-body align-self-center">
                                            <h4 class="mt-0">Ankita Gupta</h4>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <p>Designation</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonials-thumb">
                                    <img src="{{ asset('frontend/images/comma.png') }}" class="comma img-fluid"
                                        alt="">
                                    <p>Curabitur velit arcu, pellenteue is varius at, porta eget ex. Nulla phtra semper tor,
                                        ornare tincidunt est fcibus at. Pellentsque arcu justo, finibus non volutpat a,
                                        maximus ut tellus. Duisis nec libero ultricies tincidunt ut a risus fusce ut
                                        convallis purus dui, dict lectus. </p>
                                    <div class="media">
                                        <img src="{{ asset('frontend/images/profile.png') }}" class="mr-3"
                                            alt="...">
                                        <div class="media-body align-self-center">
                                            <h4 class="mt-0">Ankita Gupta</h4>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <p>Designation</p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-section">
        <div class="container">
            <div class="row box-shadow">
                <div class="col-lg-5 px-0 contact-form-bg">
                    <h3>Contact Us</h3>
                    @if (Session::has('msg'))
                    <p class="alert alert-info">{{ Session::get('msg') }}</p>
                @endif
                    <form role="form" action="{{ route('contactPost') }}" method="post" id="hm-contact-form">
                        <div class="controls">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" required="required" placeholder="Full name"
                                            class="form-control" name="form_name" id="form_name">
                                            @if ($errors->has('form_name'))
                                            <span class="text-danger">{{ $errors->first('form_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="email" required="required" placeholder="Email"
                                            class="form-control" name="form_email" id="form_email">
                                            @if ($errors->has('form_email'))
                                            <span class="text-danger">{{ $errors->first('form_email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="tel" required="required" placeholder="Phone no"
                                            class="form-control" name="form_phone" id="form_phone">
                                            @if ($errors->has('form_phone'))
                                            <span class="text-danger">{{ $errors->first('form_phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea data-error="Please,leave us a message." required="required" rows="4" placeholder="Message for me"
                                            class="form-control" name="form_message" id="form_message"></textarea>
                                            @if ($errors->has('form_message'))
                                            <span class="text-danger">{{ $errors->first('form_message') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="hm-btn">Submit Now</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-7 px-0">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14735.649654198663!2d88.43920648097992!3d22.58237893499913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0275da9505920d%3A0xfb86b399730eafd5!2sDongfang%20Electric%20(I)%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1708522721906!5m2!1sen!2sin"
                        width="100%" height="510" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
