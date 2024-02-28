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
                        <h1>Contact Us</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Home</a>
                            </li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>


            </div>

        </div>
    </section>
    <!-- Page Content -->

    <section id="contact-section">
        <div class="container">
            <div class="row box-shadow">
                <div class="col-lg-5 px-0 contact-form-bg">
                    @if (Session::has('msg'))
                        <p class="alert alert-info">{{ Session::get('msg') }}</p>
                    @endif
                    <h3>Get A Quote Now</h3>
                    <form role="form" action="{{ route('contactPost') }}" method="post" id="hm-contact-form">
                        @csrf
                        <div class="controls">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" required="required" placeholder="Full name"
                                            class="form-control" name="form_name" id="form_name" required>
                                        @if ($errors->has('form_name'))
                                            <span class="text-danger">{{ $errors->first('form_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="email" required="required" placeholder="Email" class="form-control"
                                            name="form_email" id="form_email" required>
                                        @if ($errors->has('form_email'))
                                            <span class="text-danger">{{ $errors->first('form_email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="tel" required="required" placeholder="Phone no"
                                            class="form-control" name="form_phone" id="form_phone" required>
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
                                            class="form-control" name="form_message" id="form_message" required></textarea>
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
    <section id="address-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="address-box box-shadow">
                        <h3>Contact Information</h3>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> Dong Fang building, 5th Floor, Suit no - 602,
                            Newtown, Kolkata- 700156</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> +91-8981228599 / +91 9831821332</p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> frolic.services@gmail.com</p>
                        <h3 class="mt-3 mb-0">Follow us</h3>
                        <ul class="footer-social">
                            <li><a href=""><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </section>
@endsection
